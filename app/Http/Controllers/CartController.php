<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddCartRequest;
use App\Models\CartItem;
use App\Models\ProductSku;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();
        return view('cart.list', ['cartItems' => $cartItems]);
    }

    public function added(Request $request, CartItem $cartItem){
        return view('cart.added', [
            'cartItem' => $cartItem,
            'products'=>Product::all()->random(4)
        ]);
    }

    public function add(AddCartRequest $request)
    {
        $user   = $request->user();
        $skuId  = $request->input('sku_id');
        $qty = $request->input('qty');

        // 从数据库中查询该商品是否已经在购物车中
        if ($cart = $user->cartItems()->where('product_sku_id', $skuId)->first()) {

            // 如果存在则直接叠加商品数量
            $cart->update([
                'qty' => $cart->qty + $qty,
            ]);
        } else {

            // 否则创建一个新的购物车记录
            $cart = new CartItem(['qty' => $qty]);
            $cart->user()->associate($user);
            $cart->productSku()->associate($skuId);
            $cart->save();
        }

        return redirect()->route('cart.added',['cartItem'=>$cart]);
    }

    public function remove(ProductSku $sku, Request $request)
    {
        $request->user()->cartItems()->where('product_sku_id', $sku->id)->delete();
        return redirect()->back()->withErrors(['message'=>'Deleted successfully']);
    }
}
