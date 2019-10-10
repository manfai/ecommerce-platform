@extends('layouts.app')

@push('styles')
@endpush

@section('content')
<section class="container py-5">
    <div class="jumbotron">
        <h1 class="display-5">Successfully added to your shopping cart</h1>
        <p class="lead">There are {{count(Request::user()->cartItems)}} items in your cart.</p>
        <hr class="my-4">
        
        <div class="row">
           <div class="col-12 col-lg-8">
                <div class="media mb-3 mb-lg-1">
                    <img src="{{$cartItem->productSku->product->image_url}}" class="mr-3" style="width:80px">
                    <div class="media-body">
                        <h5 class="mt-0">Attribute: {{$cartItem->productSku->title}} / Qty: {{$cartItem->qty}}</h5>
                        {{$cartItem->productSku->description}}
                    </div>
                </div>
           </div>
           <div class="col-12 col-lg-4 text-right">
            @php $totalAmount = $cartItem->qty * $cartItem->productSku->price; @endphp
            <p class="h4">${{ number_format((float)$totalAmount, 2, '.', '') }}</p>
            <div class="mt-2 btn-group w-100">
                <a class="btn btn-outline-primary" href="{{route('product.show',['productId'=>$cartItem->product_skus_id,'productTitle'=>$cartItem->productSku->title])}}" role="button">Product Detail</a>
                <a class="btn btn-outline-primary" href="{{route('cart')}}" role="button">Checkout Now</a>
            </div>
           </div>
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
