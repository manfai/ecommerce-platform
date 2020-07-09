@extends('layouts.app')

@push('styles2')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
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

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 3rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 540px;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

    }

</style>
@endpush

@section('content2')
<section id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1>Example headline.</h1>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#55595c"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1>One more for good measure.</h1>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4">

                <div class="product mb-4">
                    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
                        <svg class="bd-placeholder-img rounded shadow-sm" width="100%" height="350"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                            role="img" aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <!-- <img src="{{$product->image_url}}" class="rounded shadow-sm w-100"> -->
                    </a>
                    <div class="product-body pt-3">
                        <h5 class="product-title text-uppercase">{{ $product->title }}</h5>
                        <p class="product-text"><strong>${{ $product->price }}</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}"
                                    class="btn btn-sm btn-outline-secondary">
                                    View Detail</a>
                            </div>
                            <small class="text-muted">{{ $product->review_count }} Customer Reviews</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection


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
        </div>
        <!-- /row -->
    </div>
    <!-- /page -->
    @endsection
