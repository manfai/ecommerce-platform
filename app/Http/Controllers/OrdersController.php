<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Exceptions\InvalidRequestException;
use Carbon\Carbon;
use App\Models\UserAddress;
use App\Models\Order;
use App\Models\ProductSku;
use App\Models\Payment;
use DB;
use App\Jobs\CloseOrder;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(Request $request)
    {
        //REMARK: 由用戶按下一步開始，交易會用seesion暫時儲起。
        $orders = Order::query()
            // 使用 with 方法预加载，避免N + 1问题
            ->with(['items.product', 'items.productSku']) 
            ->where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        return view('order.list', ['orders' => $orders]);
    }
    public function show(Order $orderId, Request $request)
    {
        $this->authorize('own', $orderId);
        // 校驗權限
        //这里的 load() 方法与上一章节介绍的 with() 预加载方法有些类似，称为 延迟预加载，不同点在于 load() 是在已经查询出来的模型上调用，而 with() 则是在 ORM 查询构造器上调用。
        return view('order.detail', ['order' => $orderId->load(['items.productSku', 'items.product'])]);
    }
    
    public function step_1(OrderRequest $request)
    {
        //REMARK: 由用戶按下一步開始，交易會用seesion暫時儲起。
        orderSessionCreate($request->user()->id, $request->input());
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();
        $addresses = $request->user()->addresses()->orderBy('last_used_at', 'desc')->get();
        return view('order.step1', ['cartItems' => $cartItems, 'addresses' => $addresses]);
    }

    public function step_2(OrderRequest $request)
    {
        orderSessionMerge($request->user()->id, $request->input()); //更新暫存交易資料。
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();
        $address = $request->user()->addresses()->find($request->address_id);
        $payment = Payment::where('enable',true)->get();
        return view('order.step2', ['cartItems' => $cartItems, 'address' => $address, 'payment'=>$payment]);
    }

    public function store(OrderRequest $request)
    {
        $user  = $request->user();
        orderSessionMerge($request->user()->id, $request->input()); //更新暫存交易資料。
        $order = DB::transaction(function () use ($user, $request) {
            // 用session中提取訂單資料
            $orderData = orderSessionData($user->id);
            $walletValue = 0; //有冇用到wallet

            $address = UserAddress::find($orderData->address_id);
            $address->update(['last_used_at' => Carbon::now()]);    // 更新此地址的最后使用时间
            //创建一个订单
            $order   = new Order([
                'address'      => [ // 将地址信息放入订单中
                    'address'       => $address->full_address,
                    'zip'           => $address->zip,
                    'contact_name'  => $address->contact_name,
                    'contact_phone' => $address->contact_phone,
                ],
                'remark'       => $orderData->remark,
                'total_amount' => 0,
                'real_amount'  => 0,
            ]);
            $order->user()->associate($user);             //订单关联到当前用户
            $order->save(); // 写入数据库

            //Product
            $totalAmount = 0;
            $items       = $orderData->items;
            // 遍历用户提交的 SKU
            foreach ($items as $data) {
                $sku  = ProductSku::find($data['sku_id']);
                // 创建一个 OrderItem 并直接与当前订单关联
                $item = $order->items()->make([
                    'qty' => $data['qty'],
                    'price'  => $sku->price,
                ]);
                $item->product()->associate($sku->product_id);
                $item->productSku()->associate($sku);
                $item->save();
                $totalAmount += $sku->price * $data['qty'];
                if ($sku->decreaseStock($data['qty']) <= 0) {
                    throw new InvalidRequestException('该商品库存不足'); //比錢太慢比人搶左貨就會跳出至錯誤頁
                }
            }

            // 更新订单总金额
            // REMARK: real_amount:實收用戶幾錢。
            $order->update([
                'total_amount' => $totalAmount,
                'real_amount'  => $totalAmount - $walletValue 
            ]);

            // 将下单的商品从购物车中移除
            $skuIds = collect($items)->pluck('sku_id');
            $user->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
            $this->dispatch(new CloseOrder($order, 900)); //REMARK: seconds, 900s = 15mins
            return $order;
        });
        return view('order.step3', ['order' => $order, 'payment' => $request->payment]);
    }

}
