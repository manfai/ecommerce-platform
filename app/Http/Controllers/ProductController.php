<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Exceptions\InvalidRequestException;

class ProductController extends Controller
{
    public function category(Request $request)
    {
        return view('products.category');
    }

    public function index(Request $request)
    {
        // $products = Product::query()->where('on_sale', true)->paginate();
        // dd($products);
        // 创建一个查询构造器
        $builder = Product::query()->where('on_sale', true);
        // 判断是否有提交 search 参数，如果有就赋值给 $search 变量
        // search 参数用来模糊搜索商品
        if ($search = $request->input('search', '')) {
            $like = '%'.$search.'%';
            // 模糊搜索商品标题、商品详情、SKU 标题、SKU描述
            $builder->where(function ($query) use ($like) {
                $query->where('title', 'like', $like)
                    ->orWhere('description', 'like', $like)
                    ->orWhereHas('skus', function ($query) use ($like) {
                        $query->where('title', 'like', $like)
                            ->orWhere('description', 'like', $like);
                    });
            });
        }
        
        // pricefrom 参数用来模糊搜索商品
        if ($pricefrom = $request->input('pricefrom', '')) {
            $builder->where('price','>=',$pricefrom);
        }
        if ($priceto = $request->input('priceto', '')) {
            $builder->where('price','<=',$priceto);
        }

        // 是否有提交 order 参数，如果有就赋值给 $order 变量
        // order 参数用来控制商品的排序规则
        if ($order = $request->input('order', '')) {
            // 是否是以 _asc 或者 _desc 结尾
            if (preg_match('/^(.+)_(asc|desc)$/', $order, $m)) {
                // 如果字符串的开头是这 3 个字符串之一，说明是一个合法的排序值
                if (in_array($m[1], ['price', 'sold_count', 'rating'])) {
                    // 根据传入的排序值来构造排序参数
                    $builder->orderBy($m[1], $m[2]);
                }
            }
        }
        $products = $builder->paginate(9);
        $filters = [
            // 'search' => $search,
            'order'  => $order,
        ];
        return view('products.list', ['products' => $products, 'filters'  => $filters]);
    }


    public function show(Product $productId, Request $request) {
        // 判断商品是否已经上架，如果没有上架则抛出异常。
        if (!$productId->on_sale) {
            throw new InvalidRequestException('商品未上架');
        }

        $tags = $productId->tags()->get();

        $favored = false;
        // 用户未登录时返回的是 null，已登录时返回的是对应的用户对象
        if($user = $request->user()) {
            // 从当前用户已收藏的商品中搜索 id 为当前商品 id 的商品
            // boolval() 函数用于把值转为布尔值
            $favored = boolval($user->favoriteProducts()->find($productId->id));
        }
        return view('products.detail',['product'=>$productId, 'favored' => $favored, 'tags' => $tags]);
    }

    public function favorites(Request $request)
    {
        $products = $request->user()->favoriteProducts()->paginate(16);

        return view('products.favorites', ['products' => $products]);
    }

    //for JS
    public function favor(Product $productId, Request $request)
    {
        $user = $request->user();
        if ($user->favoriteProducts()->find($productId->id)) {
            return [];
        }
        $user->favoriteProducts()->attach($productId);
        return [];
    }
    public function disfavor(Product $productId, Request $request)
    {
        $user = $request->user();
        $user->favoriteProducts()->detach($productId);
        return [];
    }
}
