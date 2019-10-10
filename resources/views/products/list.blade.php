@extends('layouts.app')
@push('styles')
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

@section('content')
<section id="myCarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"></rect></svg>
    <div class="container">
        <div class="carousel-caption text-left">
        <h1>Example headline.</h1>
        <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Sign up today</a></p>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"></rect></svg>
    <div class="container">
        <div class="carousel-caption">
        <h1>Another example headline.</h1>
        <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Learn more</a></p>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"></rect></svg>
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
                    <a
                        href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
                        <svg class="bd-placeholder-img rounded shadow-sm" width="100%" height="350"
                            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                            focusable="false" role="img" aria-label="Placeholder: Thumbnail">
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
                                <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}"  class="btn btn-sm btn-outline-secondary">
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
