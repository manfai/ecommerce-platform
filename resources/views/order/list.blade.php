@extends('layouts.default')
@section('title', '訂單列表')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
            <li class="breadcrumb-item"><a href="">主頁</a></li>
            <li class="breadcrumb-item"><a href="">我的帳號</a></li>
            <li class="breadcrumb-item active">訂單列表 </li>
        </ol>
        <div class="d-flex justify-content-between align-items-end mb-5">
            <h1 class="hero-heading mb-0">你的訂單列表</h1><a href="#" class="btn btn-link text-muted">Past bookings</a>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row mb-5">
            <div class="mr-3">
                <p class="mb-3 mb-lg-0">你現有<strong>{{$orders->total()}}</strong>張訂單</p>
            </div>
            <div class="text-center">
                <label for="form_sort" class="form-label mr-2">排序</label>
                <select name="sort" id="form_sort" data-style="btn-selectpicker" title=""
                    class="selectpicker mr-3 mb-3 mb-lg-0">
                    <option value="sortBy_0">新支付</option>
                    <option value="sortBy_1">未支付</option>
                    <option value="sortBy_2">已支付</option>
                </select><a href="#" class="btn btn-outline-secondary"><i class="fa fa-download mr-2"></i>下載訂單記錄</a>
            </div>
        </div>
        <div class="list-group shadow mb-5">
            @foreach($orders as $order)
            <span href="" class="list-group-item list-group-item-action p-4">
            <div class="row">
                <div class="col-lg-4 align-self-center mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <h2 class="h5 mb-0">訂單號：<br>{{ $order->no }}</h2>
                    </div>
                    <!-- <p class="text-sm text-muted">{{ $order->created_at->format('Y-m-d H:i:s') }}</p> -->
                    @if($order->paid_at)
                    <span class="badge badge-pill p-2 badge-primary-light">
                        @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                        已支付
                        @else
                        {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                        @endif
                    </span>
                    @elseif($order->closed)
                    <span class="badge badge-pill p-2 badge-secondary-light">
                        已關閉
                    </span>
                    @else
                    <span class="badge badge-pill p-2 badge-secondary-light">
                        <!-- 未支付<br> -->
                        請於 {{ $order->created_at->addSeconds(config('app.order_ttl'))->format('H:i:s') }} 前完成支付<br>
                        <!-- 否則訂單將自動關閉 -->
                    </span>
                    @endif
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 py-3">
                            <img src="{{ $order->items->first()->product->image_url }}" style="height:100px">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 py-3 mb-3 mb-lg-0">
                            <h6 class="label-heading">訂單金額</h6>
                            <p class="text-sm font-weight-bold">${{$order->total_amount}}</p>
                            <h6 class="label-heading">支付方法</h6>
                            <p class="text-sm font-weight-bold mb-0">{{$order->payment_method}}</p>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 py-3">
                            <h6 class="label-heading">訂單時間</h6>
                            <p class="text-sm font-weight-bold">{{ $order->created_at->format('Y-m-d') }}</p>
                            <h6 class="label-heading">商品數目</h6>
                            <p class="text-sm font-weight-bold mb-0">{{count($order->items)}}</p>
                        </div>
                        <div class="col-12 col-lg-3 align-self-center">
                            <a href="{{route('orders.show',['orderId'=>$order->id])}}">
                                <span class="text-primary text-sm text-uppercase mr-4 mr-lg-0"><i
                                        class="fas fa-info fa-fw mr-2"> </i>訂單詳情</span>
                            </a>
                            @if(!$order->closed && !$order->paid_at)
                            <br class="d-none d-lg-block">
                            <span class="text-danger text-sm text-uppercase"><i class="fa fa-times fa-fw mr-2">
                                </i>取消訂單</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </span>
            @endforeach
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-template d-flex justify-content-start">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
            </ul>
        </nav>
    </div>
</section>
@endsection
