@extends('layouts.default')
@section('title', '訂單列表')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">主頁</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">我的帳號</a></li>
            <li class="breadcrumb-item"><a href="{{ route('orders') }}">訂單列表</a></li>
            <li class="breadcrumb-item active">訂單詳情 </li>
        </ol>
        <div class="text-block">
            <p class="subtitle">訂單號碼</p>
            <h1 class="hero-heading mb-3">{{ $order->no }}</h1>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="col-lg-7 col-xl-5 pb-4">
                <div class="text-block">
                    <h6 class="mb-4">收貨地址</h6>
                    <p class="text-muted">{{ $order->full_address }}</p>
                </div>
                <div class="text-block">
                    <div class="row">
                        <div class="col-sm">
                            <h6>聯絡人</h6>
                            <p class="text-muted">{{ $order->contact_name }}</p>
                        </div>
                        <div class="col-sm">
                            <h6>聯絡電話</h6>
                            <p class="text-muted">{{ $order->contact_phone }}</p>
                        </div>
                    </div>
                </div>
                <div class="text-block">
                    <h6 class="mb-4">訂單備註</h6>
                    <p class="text-muted">{{ $order->remark ?: '---' }}</p>
                </div>

                <div class="text-block">
                    <div class="row">
                        <div class="col">
                            <h6>訂單總價</h6>
                            <p class="text-primary"><small>$</small><span class="h4">{{ $order->total_amount }}</span></p>
                        </div>
                        <div class="col align-self-center">
                            <p class="text-right d-print-none"><a href="#" class="btn btn-link text-muted"><i
                                        class="far fa-file mr-2"></i>訂單收據</a></p>
                        </div>
                    </div>
                </div>

                <div class="text-block">
                    
                    <div class="row">
                        <div class="col-sm">
                        <h6 class="mb-4">訂單狀態</h6>
                        <p class="text-muted">
                            <button class="btn btn-info btn-sm">
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
                            </button>
                        </p>
                        </div>
                    </div>
                </div>

                <div class="d-none text-block">
                    <h6 class="mb-4">訂單狀態</h6>
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
                    <!-- <div id="moreRules" class="d-none collapse">
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <div class="media align-items-center mb-3">
                                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i
                                            class="fa fas fa-child text-secondary fa-fw text-center"></i></div>
                                    <div class="media-body"><span class="text-sm">Not suitable for children and infants
                                            -
                                            The entrance staircase doesn't have handrails</span></div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="media align-items-center mb-3">
                                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i
                                            class="fa fas fa-glass-cheers text-secondary fa-fw text-center"></i></div>
                                    <div class="media-body"><span class="text-sm">No parties or events</span></div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="media align-items-center mb-3">
                                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i
                                            class="fa fa-smoking-ban text-secondary fa-fw text-center"></i></div>
                                    <div class="media-body"><span class="text-sm">No smoking</span></div>
                                </div>
                            </li>
                            <li class="mb-2">
                                <div class="media align-items-center mb-3">
                                    <div class="icon-rounded icon-rounded-sm bg-secondary-light mr-4"><i
                                            class="fa fa-cat text-secondary fa-fw text-center"></i></div>
                                    <div class="media-body"><span class="text-sm">No pets</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button type="button" data-toggle="collapse" data-target="#moreRules" aria-expanded="false"
                        aria-controls="moreRules" data-expanded-text="Show less" data-collapsed-text="Show more"
                        class="btn btn-link btn-collapse pl-0 text-muted d-none">Show more</button> -->
                </div>
                <div class="text-block d-print-none">
                    <button onclick="window.print()" class="btn btn-link pl-0"><i class="fa fa-print mr-2"></i>列印收據</button>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-link pl-0"><i class="fa fa-history mr-2"></i>支付記錄</button>
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
            <div class="col-lg-5 col-xl-7 px-lg-0 pl-3">
                <div class="text-block">
                    <h6 class="mb-4">訂單項目</h6>
                    <div id="cart-items" class="list-group shadow mb-4">
                        @foreach($order->items as $index => $item)
                        <a target="_blank" href="{{ route('product.show', ['productId'=>$item->product_id,'productTitle'=>$item->productSku->title]) }}" class="cart-item list-group-item list-group-item-action px-4 py-2 position-relative overflow-hidden">
                            <div class="row">
                                <div class="col-lg-2 align-self-center text-center mb-4 mb-lg-0">
                                        <img src="{{ $item->product->image_url }}" style="height:60px">
                                </div>
                                <div class="col-lg-10">
                                    <div class="row product-detail">
                                        <div class="col-6 col-lg-3 pt-3 mb-3 mb-lg-0">
                                            <h6 class="label-heading mb-3">編號</h6>
                                            <p class="text-sm font-weight-bold">{{ $item->product->title }}</p>
                                        </div>
                                        <div class="col-6 col-lg-3 pt-3">
                                            <h6 class="label-heading mb-3">價錢</h6>
                                            <p class="text-sm font-weight-bold">${{ $item->price }}</p>
                                        </div>
                                        <div class="col-6 col-lg-3 pt-3">
                                            <h6 class="label-heading mb-3">數量</h6>
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
                        <div class="text-center">
                            <a href="{{route('pay.paypal',['order'=>$order->id])}}" class="btn btn-lg btn-outline-primary">立即支付</a>
                        </div>
                    @endif
               
                    <div class="d-none text-right">
                        <h6>訂單總價</h6>
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