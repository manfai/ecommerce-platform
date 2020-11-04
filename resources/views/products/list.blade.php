@extends('layouts.app')

@push('styles')
<style>
   .page-with-sidebar {
    padding-left: 30px;
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
            <h1>{{__('product.title')}}</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">{{__('menu.home')}}</a></li>
                    <li class="breadcrumb-item" aria-current="page">{{__('menu.shop')}}</li>
                    @isset($_GET['type'])
                    <li class="breadcrumb-item active" aria-current="page">{{ucfirst($_GET['type'])}}</li>
                    @endisset
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
    <div class="container">
        <div class="row">

            <!-- /page-with-sdiebar -->
            <!-- Sidebar -->
            <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
                @include('components.sidebar')
            </div>
            <!--/sidebar -->
            <!-- Blog Entries Column -->
            <div class="col-lg-9 page-with-sidebar mb-5">
                <h2>@isset($_GET['type']){{ucfirst($_GET['type'])}} @else {{__('product.subtitle')}}@endisset</h2>
                <span class="h7 mt-0">{{__('product.introduction')}}
                </span>
                <hr class="small-divider left">
                <div class="row mt-5">
                    @foreach($products as $product)
                    <div class="col-lg-4 widget2">
                        <div class="card bg-light mb-4">
                            <div class="card-img">
                                <a
                                    href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
                                    <!-- <img class="card-img-top" src="img/adoption/adoptionsidebar1.jpg" alt=""> -->
                                    <img class="card-img-top" src="{{ $product->image_url }}" alt="">
                                </a>
                            </div>
                            <div class="card-body text-center">
                                <a href="event-single.html">
                                    <h5 class="card-title">{{ strtoupper($product->title) }}</h5>
                                </a>
                                <ul class="list-unstyled colored-icons">
                                    <li><span><i class="fas fa-dollar-sign mr-2"></i>{{ $product->price }}</span></li>
                                    <li><small><span><i class="fas fa-tag mr-2"></i>{{ $product->review_count }} {{__('product.customer_reviews')}}</span></small></li>
                                </ul>
                                <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}"
                                    class="btn btn-primary btn-sm btn-block mt-0">
                                    {{__('product.view_detail')}}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--/row ends -->

                <div class="col-md-12 mb-5 ml-0 pl-0">
                    <!-- pagination -->
                    {{$products->links()}}
                    <!-- /nav -->
                </div>
                <!-- /col-md -->

            </div>
            <!-- /col-lg-12 -->

        </div>
        <!-- /row -->
    </div>
</div>
    <!-- /page -->
    @endsection
