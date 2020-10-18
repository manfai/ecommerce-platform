@extends('layouts.app')
@section('title', '訂單列表')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;"
    data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <!-- jumbo-heading -->
            <h1>Account</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Account</li>
                </ol>
            </nav>
            <!-- /breadcrumb -->
        </div>
        <!-- /jumbo-heading -->
    </div>
    <!-- /container -->
</div>
<!-- /jumbotron -->
<!-- ==== Page Content ==== -->
<section id="order-detail" class="page">
    <div class="container">
      
        <div class="text-block">
            <h2 class="">Thank You for order</h2>
            <p class="mb-3">{{__('order.no')}}  {{ $order->no }}</p>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="col-lg-6 mb-5">


                <div class="text-block">
                    <h6 class="mb-4">{{__('order.address')}}</h6>
                    <p class="text-muted">{{ $order->full_address }}</p>
                </div>
                <div class="text-block">
                    <div class="row">
                        <div class="col-sm">
                            <h6>{{__('order.contact_name')}}</h6>
                            <p class="text-muted">{{ $order->contact_name }}</p>
                        </div>
                        <div class="col-sm">
                            <h6>{{__('order.contact_phone')}}</h6>
                            <p class="text-muted">{{ $order->contact_phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="text-block">
                    <h6 class="mb-4">{{__('order.remark')}}</h6>
                    <p class="text-muted">{{ $order->remark ?: '---' }}</p>
                </div>

              
            </div>
            <div class="col-lg-6 mb-5">
                <div class="text-block">
                    <div class="row">
                        <div class="col">
                            <h6>{{__('order.total_amount')}}</h6>
                            <p class="text-primary"><small>$</small><span class="h4">{{ $order->total_amount }}</span></p>
                        </div>
                        <div class="col align-self-center">
                            <p class="text-right d-print-none"><a href="#" class="btn btn-link text-muted"><i
                                        class="far fa-file mr-2"></i>{{__('order.invoice')}}</a></p>
                        </div>
                    </div>
                </div>

                <div class="text-block">
                    <h6 class="mb-4">{{__('order.status')}}</h6>
                    <ul class="list-unstyled">

                        <li class="mb-2">
                            <div class="media align-items-center mb-3">
                                <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i
                                        class="fa fas fa-child text-secondary fa-fw text-center"></i></div>
                                <div class="media-body">
                                    <span class="text-sm">
                                        @if($order->paid_at)
                                            @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
                                            已支付
                                            @else
                                            {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
                                            @endif
                                            @elseif($order->closed)
                                            已關閉
                                            @else
                                            未支付
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
          
                </div>
                <div class="text-block d-print-none">
                    <button onclick="window.print()" class="btn btn-info"><i class="fa fa-print mr-2"></i>Invoice</button>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-info"><i class="fa fa-history mr-2"></i>History</button>
                    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">支付記錄</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">方式</th>
                                <th scope="col">狀態</th>
                                <th scope="col">金額</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->paymentLog as $log)
                                <tr>
                                    <th scope="row">{{$log->id}}</th>
                                    <td>{{$log->payment->title}}</td>
                                    <td>{{$log->failed?$log->message:'成功'}}</td>
                                    <td>{{$log->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 mb-5">
                <div class="card bg-light text-block">
                    <h6 class="mb-4">{{__('order.items')}}</h6>
                    <div id="cart-items" class="list-group shadow mb-4">
                        @foreach($order->items as $index => $item)
                        <a target="_blank" href="{{ route('product.show', ['productId'=>$item->product_id,'productTitle'=>$item->productSku->title]) }}" class="cart-item list-group-item px-4 py-2 position-relative overflow-hidden">
                            <div class="row">
                                <div class="col-lg-2 align-self-center text-center mb-4 mb-lg-0">
                                        <img src="{{ $item->product->image_url }}" style="height:60px">
                                </div>
                                <div class="col-lg-10">
                                    <div class="row product-detail">
                                        <div class="col-6 col-lg-3 pt-3 mb-3 mb-lg-0">
                                            <small class="label-heading mb-3">{{__('order.product_title')}}</small>
                                            <p class="text-sm font-weight-bold">{{ $item->product->title }}</p>
                                        </div>
                                        <div class="col-6 col-lg-3 pt-3">
                                            <small class="label-heading mb-3">{{__('order.product_price')}}</small>
                                            <p class="text-sm font-weight-bold">${{ $item->price }}</p>
                                        </div>
                                        <div class="col-6 col-lg-3 pt-3">
                                            <small class="label-heading mb-3">{{__('order.product_qty')}}</small>
                                            <p class="text-sm font-weight-bold">{{ $item->qty }}</p>
                                        </div>
                                        <div class="col-12 col-lg-3 align-self-center text-eight">
                                            <span class="text-primary btn-remove text-sm text-uppercase mr-4 mr-lg-0">
                                                ${{ number_format($item->price * $item->qty, 2, '.', '') }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>

                    @if(!$order->closed && !$order->paid_at)
                        <div class="text-center mb-3">
                            <a href="{{route('pay.paypal',['order'=>$order->id])}}" class="btn btn-primary">Pay Now</a>
                        </div>
                    @endif
               
                    <div class="d-none text-right">
                        <h6>{{__('order.total_amount')}}</h6>
                        <p class="text-primary"><small>$</small><span class="h4">{{ $order->total_amount }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
    @error('message')
        <script>
            Swal.fire({
                type: "warning",
                title: "{{$message}}",
                showConfirmButton: false,
            });
        </script>
    @enderror
@endpush