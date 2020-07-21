@extends('layouts.app')

@push('styles')
<style>
    .card-header {
        background: #55595c;
    }

    .bd-placeholder-img {
        font-size: 0.624rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }


.tab-content{
    border-top-right-radius: 10px!important;
    border-bottom-left-radius: 10px!important;
    border-bottom-right-radius: 10px!important;
    box-shadow: none;
}

section{
    padding-top: 0px;
}

#nav-tabContent{
    padding:25px;
    min-height:410px;
    max-height:410px;
}
</style>
@endpush
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
<div id="product-home" class="page pb-0">
    <section class="container mb-0">
        <div class="row">

            <!-- /page-with-sidebar -->
            <!-- ==== Sidebar ==== -->
            <div id="sidebar" class="bg-light h-100 col-lg-3 order-2 order-lg-1 card pattern3">
                <!--widget-area -->
                <div class="widget-area">
                    <h5 class="sidebar-header">Profile</h5>
                    <!-- event 1 -->
                    <div class="widget2">
                        <div class="card">
                            <div class="card-img">
                                <!-- image  -->
                                <a href="team.html">
                                    <div class="card-img-top text-center pt-4">
                                        <img class=" rounded-circle" src="/img/avatar.png" style="height:100px">
                                    </div>
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <!--  info -->
                                <a href="">
                                    <h6 class="card-title">{{Auth::user()->name}}</h6>
                                </a>
                                <h3>0<p><small>COINS</small></p></h3>
                                
                                <!-- button -->
                                <a href="team.html" class="btn btn-secondary btn-block btn-sm">{{__('menu.logout')}}</a>
                            </div>
                            <!--/card-body -->
                        </div>
                        <!-- /card -->
                    </div>
                    <!--/widget2 -->
                    <!--/widget-area -->
                    <div class="d-none widget-area">
                        <h5 class="sidebar-header">Your Pet</h5>
                        <div class="widget1">
                            <!-- widget info 1 -->
                            <div class="col-lg-12">
                                <a href="#">
                                    <div class="widget-1-info">
                                        <!-- image -->
                                        <img src="img/adoption/adoption2.jpg" alt="" class="img-fluid rounded">
                                        <span>Barcode</span>
                                    </div>
                                </a>
                            </div>
                            <!-- /col-lg-12 -->
                            <div class="text-center">
                                <a href="adoption.html" class="btn btn-primary btn-sm">Add Your Pet</a>
                            </div>
                        </div>
                        <!-- /widget1 -->
                    </div>
                    <!-- /widget-area -->
                </div>

            </div>
            <!--/sidebar -->

            <div class="col-lg-9 order-1 order-lg-2 page-with-sidebar">
                
                <div class="row">
                   
                    <div class="col-12">
                        <!-- navigation -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"
                                    role="tab" aria-selected="true">Orders</a>
                                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                                    aria-selected="false">News</a>
                                <a class="nav-item nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab"
                                    aria-selected="false">Address</a>
                            </div>
                        </nav>
                        <!-- tab-content -->
                        <div class="tab-content block-padding bg-light" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                <!--divider -->
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order No.</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <th scope="row">{{$order->no}}</th>
                                            <td>{{$order->payment_status}}</td>
                                            <td>{{$order->real_amount}}</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>
                                                <a href="{{route('orders.show',['orderId'=>$order->id])}}" class="m-0 text-primary">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-sm btn-primary my-3 d-inline mr-3" href="{{route('orders')}}">View All</a>
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane fade text-center" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <img src="/img/carts.png" alt="" style="width: 200px;" class="mt-3 mb-5 img-fluid">
                                <p>{{__('profile.no_message')}}</p>
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($addresses as $address)
                                        <tr>
                                            <td>{{ $address->contact_name }}</td>
                                            <td>{{ $address->full_address }}</td>
                                            <td>{{ $address->contact_phone }}</td>
                                            <td>
                                            <a href="{{ route('address.edit', ['addressId' => $address->id]) }}" class="m-0 text-primary btn-edit">Edit</a>
                                            <a class="m-0 text-primary btn-destroy" data-id="{{ $address->id }}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <a class="btn btn-sm btn-primary mt-4 d-inline mr-3" href="{{route('address.create')}}">View All</a>
                                <a class="btn btn-sm btn-primary mt-4 d-inline mr-3" href="{{route('address')}}">Add New</a>
                            </div>
                            <!-- ./Tab-pane -->
                        </div>
                        <!-- ./Tab-content -->

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container mb-0">
       <div class="row">
           <div class="col-12 p-0">
                <div class="card bg-primary text-light p-5">
                    <h4>Share your referral link</h4>
                    <p>You can get up to 10 coupons every month via inviting friends. After earning 10 coupons, you won't get more of them but you can still invite friends.</p>
                    <div class="input-group" style="max-width:500px;width:100%;">
                        <input type="text" class="form-control" placeholder="Invite Your Friends...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Copy</button>
                        </span>
                    </div>
                    <div id="show-social-media" class="mt-5">
                        <h4 class="mb-0">Share on social media</h4>
                        <div class="button-group">
                            <button type="button" class="btn btn-primary d-inline mr-3">Facebook</button>
                            <button type="button" class="btn btn-info d-inline mr-3">Twitter</button>
                            <button type="button" class="btn btn-danger d-inline mr-3">Google</button>
                        </div>
                    </div>
                </div>
            </h2>

           </div>
       </div>
        
    </section>

    @if(count($products)>0)
    <section id="random-product" class="text-light block-padding overlay-dark bg-fixed" style="background:url('https://img.made.com/image/upload/c_pad,d_made.svg,f_auto,w_1320,dpr_1.0,q_auto:best/v4/catalog/product/catalog/2/c/6/5/2c6514e4983b6e67d1261535558857fb73b7f5cd_PETTER001GRE_UK_Terri_Teepee_Pet_house_Grey_and_Mustard_LB02.jpg')">
        <!-- owl carousel gallery  -->
        <div class="text-center">
            <!-- section heading -->
            <h3 class="text-uppercase">Favourite Product</h3>
            <!-- /section-heading -->
        </div>
        <div class="container">
            <div class="carousel-3items owl-carousel owl-theme mt-5 pb-5">
                @foreach($products as $product)
                 <!-- Team member 1 -->
                 <div class="team-style2 col-lg-12">
                    <!-- image and social icons -->
                    <div class="img-box">
                       <div class="text-center">
                          <img src="{{ $product->image_url }}" class="img-fluid" alt="">
                          <ul class="social-icons text-center">
                             <li> <a href="{{route('product.show',['productId'=>$product->id,'productTitle'=>$product->title])}}"><i class="fab fa-eyes"></i></a></li>
                          </ul>
                       </div>
                    </div>
                    <!-- Team header -->
                    <a href="{{route('product.show',['productId'=>$product->id,'productTitle'=>$product->title])}}">
                       <h5 class="team-header">{{$product->name}}</h5>
                    </a>
                    <span>Description</span>
                    <hr class="small-divider left"/>
                    <p>{{$product->description}}</p>
                 </div>
                 <!--/ Team member 1 -->
    
                @endforeach
            </div>
        </div>
       
        <!-- /owl-carousel -->

    </section>
    @endif
</div>

@endsection


@push('scripts')
<script>
    $(document).ready(function () {
        // 删除按钮点击事件
        $('#tab3 .btn-destroy').click(function () {
            // 获取按钮上 data-id 属性的值，也就是地址 ID
            var id = $(this).data('id');
            // 调用 sweetalert
            Swal.fire({
                title: '确认要删除该地址？',
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: '确定',
                cancelButtonText: '取消',
            }).then(function (result) { // 用户点击按钮后会触发这个回调函数
                // 调用删除接口，用 id 来拼接出请求的 url
                if (result.value) {
                    Swal.fire({
                        title: 'Please Wait..!',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        allowEnterKey: false,
                        onOpen: () => {
                            swal.showLoading()
                        }
                    })
                    axios.delete("/address/" + id)
                        .then(function (data) {
                            Swal.fire({
                                title: '刪除成功',
                                type: 'success',
                                showConfirmButton: false
                            });
                            location.reload();
                        })
                } else if (result.dismiss) {
                    return;
                    // console.log(result.dismiss);
                }
            });
        });
    });

</script>
@endpush
