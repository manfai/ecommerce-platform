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
            // 使用 with 方法預加載，避免N + 1問題
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
        //這裏的 load() 方法與上一章節介紹的 with() 預加載方法有些類似，稱爲 延遲預加載，不同點在於 load() 是在已經查詢出來的模型上調用，而 with() 則是在 ORM 查詢構造器上調用。
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
        $requestData = $request->input();
        $address_id = $request->address_id;
        if($address_id == 'new_address'){
            $addresData = $request->address;
            $newAddress = $request->user()->addresses()->create($addresData);
            $address_id = $newAddress->id;
            $requestData['address_id'] = $address_id;
        }
        orderSessionMerge($request->user()->id, $requestData); //更新暫存交易資料。
        $cartItems = $request->user()->cartItems()->with(['productSku.product'])->get();
        $address = $request->user()->addresses()->find($address_id);
        $payment = Payment::where('enable',true)->get();
        return view('order.step2', ['cartItems' => $cartItems, 'address' => $address, 'payment'=>$payment]);
    }

    public function step_3(){

    }
    
    public function store(OrderRequest $request)
    {
        // dd($request->all());
        $user  = $request->user();
        $orderData = orderSessionData($user->id);
        // dd($orderData);
        if(!isset($orderData->step)){
            return redirect()->route('home');
        }

        orderSessionMerge($request->user()->id, $request->input()); //更新暫存交易資料。

        $order = DB::transaction(function () use ($user, $request) {

            // 用session中提取訂單資料
            $orderData = orderSessionData($user->id);
            $walletValue = 0; //有冇用到wallet
            // dd($orderData);
            $address = UserAddress::find($orderData->address_id);
            $address->update(['last_used_at' => Carbon::now()]);    // 更新此地址的最後使用時間
            //創建一個訂單
            $order   = new Order([
                'address'      => [ // 將地址信息放入訂單中
                    'address'       => $address->full_address,
                    'zip'           => $address->zip,
                    'contact_name'  => $address->contact_name,
                    'contact_phone' => $address->contact_phone,
                ],
                'remark'       => $orderData->remark,
                'total_amount' => 0,
                'real_amount'  => 0,
                'payment_method' => $request->payment,
            ]);
            $order->user()->associate($user);             //訂單關聯到當前用戶
            $order->save(); // 寫入數據庫

            //Product
            $totalAmount = 0;
            $items       = $orderData->items;
            // 遍歷用戶提交的 SKU
            foreach ($items as $data) {
                $sku  = ProductSku::find($data['sku_id']);
                // 創建一個 OrderItem 並直接與當前訂單關聯
                $item = $order->items()->make([
                    'qty' => $data['qty'],
                    'price'  => $sku->price,
                ]);
                $item->product()->associate($sku->product_id);
                $item->productSku()->associate($sku);
                $item->save();
                $totalAmount += $sku->price * $data['qty'];
                if ($sku->decreaseStock($data['qty']) <= 0) {
                    throw new InvalidRequestException('該商品庫存不足'); //比錢太慢比人搶左貨就會跳出至錯誤頁
                }
            }

            // 更新訂單總金額
            // REMARK: real_amount:實收用戶幾錢。
            $order->update([
                'total_amount' => $totalAmount,
                'real_amount'  => $totalAmount - $walletValue 
            ]);

            // 將下單的商品從購物車中移除
            $skuIds = collect($items)->pluck('sku_id');
            $user->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
            // $this->dispatch(new CloseOrder($order, 900)); //REMARK: seconds, 900s = 15mins
            return $order;
        });
        if($order){
            orderSessionClear($user->id);
        }
        return view('order.step3', ['order' => $order, 'payment' => $request->payment]);
    }

}
