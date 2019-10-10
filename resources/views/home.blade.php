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

</style>
@endpush
@section('content')
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h5 class="title">History Orders</h5>
                <h6 class="subtitle mb-3 text-muted">Shopping Now!?</h6>
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
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header text-light text-uppercase pt-5">
                        <svg class="bd-placeholder-img" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 50x50">
                            <title>A generic square placeholder image with a white border around it, making it resemble
                                a photograph taken with an old instant camera</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">50x50</text>
                        </svg>
                        &nbsp;&nbsp;Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <p class="card-text">
                            Welcome, {{ Auth::user()->name }}.
                            <br>
                            You have 13 Coins
                        </p>
                        <p><small class="text-muted">Updated 12 Mar, 2019</small></p>
                        <a href="#" class="btn btn-outline-primary">Shipping Address</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="fav-product mb-5">
    <div class="container">
        <h5 class="title">Favorite Product</h5>
        <h6 class="subtitle mb-3 text-muted">Choose your favorite toys Now!?</h6>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">

                <div class="product mb-4">
                    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
                        <svg class="bd-placeholder-img rounded shadow-sm" width="100%" height="280"
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
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add Cart</button>
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
<section class="random-product mb-5">
    <div class="container">
        <h5 class="title">Hit Product</h5>
        <h6 class="subtitle mb-3 text-muted">Choose your favorite toys Now!?</h6>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3">

                <div class="product mb-4">
                    <a href="{{ route('product.show',['productId'=>$product->id,'productTitle'=>$product->title]) }}">
                        <!-- <svg class="bd-placeholder-img rounded shadow-sm" width="100%" height="500"
                xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg> -->
                        <img src="{{$product->image_url}}" class="rounded shadow-sm w-100">
                    </a>
                    <div class="product-body pt-3">
                        <h5 class="product-title text-uppercase">{{ $product->title }}</h5>
                        <p class="product-text"><strong>${{ $product->price }}</strong></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add Cart</button>
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
