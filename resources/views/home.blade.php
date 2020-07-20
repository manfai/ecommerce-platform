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
<div id="product-home" class="page">
    <div class="container mb-5">
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
                    <div class="d-none col-12">
                        <!-- contact info boxes start-->
                        <div class="contact-info res-margin">
                            <div class="row res-margin mt-5 res-margin">
                                <div class="col-lg-4 mt-5">
                                    <div class="contact-icon bg-light">
                                        <!---icon-->
                                        <i class="fa fa-envelope top-icon"></i>
                                        <!-- contact-icon info-->
                                        <div class="contact-icon-info">
                                            <h5>Coins</h5>
                                            <p>0</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /contact-icon-->
                                <div class="col-lg-4 mt-5 res-margin">
                                    <div class="contact-icon bg-light">
                                        <!---icon-->
                                        <i class="fa fa-map-marker top-icon"></i>
                                        <!-- contact-icon info-->
                                        <div class="contact-icon-info">
                                            <h5>Order</h5>
                                            <p>0</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /contact-icon-->
                                <div class="col-lg-4 mt-5 res-margin">
                                    <div class="contact-icon bg-light">
                                        <!---icon-->
                                        <i class="fa fa-phone top-icon"></i>
                                        <!-- contact-icon info-->
                                        <div class="contact-icon-info">
                                            <h5>News</h5>
                                            <p>0</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /contact-icon-->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /contact-info-->
                    </div>
                    <div class="col-12">
                        <!-- navigation -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1"
                                    role="tab" aria-selected="true">Orders</a>
                                <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"
                                    aria-selected="false">News</a>
                            </div>
                        </nav>
                        <!-- tab-content -->
                        <div class="tab-content block-padding bg-light" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                                aria-labelledby="tab1-tab">
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
                                                <a href="" class="m-0 text-primary">View</a> / 
                                                <a href="" class="m-0 text-primary">Pay</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- ./Tab-pane -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                <!-- row -->
                                <div class="row">
                                    <!--divider -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- row -->
                            </div>
                            <!-- ./Tab-pane -->
                        </div>
                        <!-- ./Tab-content -->

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
       <div class="row">
           <div class="col-12 p-0">
                <div class="card bg-primary text-light">
                    <h2>Hello, {{Auth::user()->name}}</h2>
                        <p>Mei te apeirian omittantur reformidans, duo in appetere interesset concludaturque. Est eruditi erroribus liberavisse in.</p>
                        <p>
                            <div class="input-group" style="max-width:500px;width:100%;">
                                <input type="text" class="form-control" placeholder="Invite Your Friends...">
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Copy</button>
                                </span>
                            </div>
                        </p>
                </div>
            </h2>

           </div>
       </div>
        
    </div>

    <section id="random-product" class="mt-0 container-fluid">
        <div class="text-center">
            <!-- section heading -->
            <h2>Favourite Product</h2>
            <!-- /section-heading -->
        </div>
        <!-- owl carousel gallery  -->
        <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
            @foreach($products as $product)
            <div class="col-md-12 gallery-img hover-opacity">
                <!-- image -->
                <a href="{{ $product->image_url }}" title="{{ $product->name }}">
                    <img src="{{ $product->image_url }}" class="img-fluid rounded" alt="">
                    <h5>{{$product->name}}</h5>
                </a>
            </div>
            @endforeach
        </div>
        <!-- /owl-carousel -->
    </section>

</div>

@endsection
