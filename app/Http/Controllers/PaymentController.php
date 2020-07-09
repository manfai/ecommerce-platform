<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderPayment;
use App\Exceptions\InvalidRequestException;
use App\Models\Payment;
use DB;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function payByPaypal(Order $order, Request $request)
    {
        // 判断订单是否属于当前用户
        $this->authorize('own', $order);

        // 订单已支付或者已关闭
        if ($order->paid_at || $order->closed) {
            throw new InvalidRequestException('訂單已支付或者已關閉');
        }

        $purchase = [
            'amount'        => $order->total_amount,
            'currency'      => 'HKD',
            'transactionId' => $order->no,
            'description'   => '支付 Laravel Shop 的訂單：'.$order->no,
            'returnUrl'     => 'http://localhost:86/payment/'.$order->id.'/paypal/return',
            'cancelUrl'     => 'http://localhost:86/payment/'.$order->id.'/paypal/cancel'
        ];

        $user  = $request->user();
        try {
            //add data to payment_history type of order and id of order;
            $transaction = app('paypal')->purchase($purchase)->send();
            dd($response);
            if ($transaction->isSuccessful()) {
                $transaction->redirect();
                $transaction->getTransactionReference();
                \Log::info($transaction->getTransactionReference());
            } else {
                return redirect()->back()->withErrors($transaction->getMessage());
            }
            return redirect()->back();
        } catch (\Exception $e) {
            exit('Sorry, there was an error processing your payment. Please try again later.');
        }
    
        
    }

    public function paypalReturn(Request $request, Order $order){
        if ($order->paid_at) {
            return redirect()->route('order.show',['orderId'=>$order->id])->withErrors(['message'=>'訂單已支付']);
        } elseif($order->closed) {
            return redirect()->route('order.show',['orderId'=>$order->id])->withErrors(['message'=>'已過了支付時間']);
        }

        $response =  app('paypal')->completePurchase([
            'transactionReference' => $request->paymentId,
            'payerId'   => $request->PayerID
        ])->send();

         //建立Payment Log
         $orderData = orderSessionData($order->user->id);
         $payment = Payment::find($orderData->payment);
         $orderPayment = new OrderPayment([
             'failed'     => $response->getCode()==200?0:1,
             'ip_address' => $request->ip(),
             'data'       => $response,
             'message'    => $response->getMessage(),
             'session'    => $orderData,
             'total'      => $order->total_amount,
         ]);
         $orderPayment->order()->associate($order);        // 订单关联到当前用户
         $orderPayment->user()->associate($order->user);          // 订单关联到当前用户
         $orderPayment->payment()->associate($payment);    // 订单关联到当前用户
         $orderPayment->save(); // 写入数据库

        if($response->getCode() != 200){
            $order->update([
                'payment_status' => \App\Models\Order::PAYMENT_STATUS_FAILED,
            ]);
            $msg = '支付失敗';
        } else {
            $order->update([
                'payment_status' => \App\Models\Order::PAYMENT_STATUS_PROCESSING,
            ]);
            //上線後放到Notify中
            $order->update([
                'payment_status'  => \App\Models\Order::PAYMENT_STATUS_SUCCESS, // 支付方式
                'payment_method'  => 'paypal', // 支付方式
                'paid_at'         => Carbon::now(), // 支付时间
                'paid_no'         => $orderPayment->id, // 支付宝订单号
            ]);
            $msg = '支付成功';
        }

        return redirect()->route('orders.show',['orderId'=>$order->id])->withErrors(['message'=>$msg]);
    }

    
    public function paypalNotify(Request $request, Order $order){
        if ($order->paid_at) {
            return redirect()->route('order.show',['orderId'=>$order->id])->withErrors(['message'=>'訂單已支付或者已關閉']);
        }
        //update the payment_history type of order and id of order;
        \Log::info($request->input());
        // $order->update([
        //     'payment_status'  => \App\Models\Order::PAYMENT_STATUS_SUCCESS, // 支付方式
        //     'payment_method'  => 'paypal', // 支付方式
        //     'paid_at'         => Carbon::now(), // 支付时间
        //     // 'paid_no'         => $request->trade_no, // 支付宝订单号
        // ]);
    }

}
