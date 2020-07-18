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
            <h1>Products</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Products</li>
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
                <!--widget-area -->
                <div class="widget-area">
                    <h5 class="sidebar-header">Search</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary btn-sm" type="button">Go!</button>
                        </span>
                    </div>
                </div>
                <!--/widget-area -->
                <div class="widget-area">
                    <h5 class="sidebar-header">Categories</h5>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            Food
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Toys</a>
                        <a href="#" class="list-group-item list-group-item-action">Accessories</a>
                        <a href="#" class="list-group-item list-group-item-action">Health</a>
                        <a href="#" class="list-group-item list-group-item-action">Others</a>
                    </div>
                </div>
                
                <!--/widget-area -->
                <div class="widget-area">
                    <h5 class="sidebar-header">Tags</h5>
                    <div class="tags-widget">
                        <a href="#" class="badge badge-pill badge-default">Dogs</a>
                        <a href="#" class="badge badge-pill badge-default">Cats</a>
                        <a href="#" class="badge badge-pill badge-default">Nutrition</a>
                        <a href="#" class="badge badge-pill badge-default">Events</a>
                        <a href="#" class="badge badge-pill badge-default">Exotic pets</a>
                        <a href="#" class="badge badge-pill badge-default">Adoption</a>
                        <a href="#" class="badge badge-pill badge-default">Pet Insurance</a>
                    </div>
                </div>
                <!--/widget-area -->
                <div class="widget-area">
                    <h5 class="sidebar-header">Follow us</h5>
                    <div class="contact-icon-info">
                        <ul class="social-media text-center">
                            <!--social icons -->
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <!--/contact-icon-info -->
                </div>
                <!--/widget-area -->
            </div>
            <!--/sidebar -->
            <!-- Blog Entries Column -->
            <div class="col-lg-9 page-with-sidebar mb-5">
                <h2>Pet {{ucfirst($_GET['type'])}}</h2>
                <span class="h7 mt-0">Adoption is an act of love, join one of our events and find your new best friend
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
                                    <li><span><i class="fas fa-tag mr-2"></i>{{ $product->review_count }} Customer
                                            Reviews</span></li>
                                </ul>
                                <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}"
                                    class="btn btn-primary btn-sm mt-0">
                                    View Detail
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!--/row ends -->

                <div class="col-md-12 mb-5 ml-0 pl-0">
                    <!-- pagination -->
                    <nav aria-label="pagination">
                        <ul class="pagination float-left">
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /col-md -->

            </div>
            <!-- /col-lg-12 -->

        </div>
        <!-- /row -->
    </div>
    <!-- /page -->
    @endsection
