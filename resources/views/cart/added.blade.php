@extends('layouts.app')

@push('styles')
@endpush

@section('content')

<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;" data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <h1>Cart</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<section class="container py-5">
    <div class="card card-body">
        <h1 class="display-5">Successfully added to your shopping cart</h1>
        <p class="lead">There are {{count(Request::user()->cartItems)}} items in your cart.</p>
        <hr class="my-4">
        
        <div class="row">
           <div class="col-12 col-lg-6">
                <div class="media mb-3 mb-lg-1">
                    <img src="{{$cartItem->productSku->product->image_url}}" class="mr-3" style="width:80px">
                    <div class="media-body">
                        <h5 class="mt-0">Attribute: {{$cartItem->productSku->title}} / Qty: {{$cartItem->qty}}</h5>
                        {{$cartItem->productSku->description}}
                    </div>
                </div>
           </div>
           <div class="col-12 col-lg-6 text-right">
            @php $totalAmount = $cartItem->qty * $cartItem->productSku->price; @endphp
            <p class="h4">${{ number_format((float)$totalAmount, 2, '.', '') }}</p>
            
           </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="mt-4 btn-group text-right">
                <a class="btn btn-primary" href="{{route('product.show',['productId'=>$cartItem->product_sku_id,'productTitle'=>$cartItem->productSku->title])}}" role="button">Product Detail</a>
                <a class="btn btn-primary" href="{{route('cart')}}" role="button">Checkout Now</a>
            </div>
            </div>
        </div>
    </div>
</section>
<section class="random-product mb-5">
<div class="container">
            <div class="col-lg-6 text-center offset-lg-3">
               <h2>Hit Product</h2>
               <p>Choose your favorite toys Now!?</p>
            </div>
            <!-- /col-md-6 -->
         </div>
         <!-- /container -->
    <!-- owl carousel gallery  -->
    <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
    @foreach($products as $product)

            <div class="col-md-12 gallery-img hover-opacity">
               <!-- image -->
               <a href="{{ $product->image_url }}" title="your caption here">
                <img src="{{ $product->image_url }}" class="img-fluid rounded" alt="">
               </a>
            </div>
            @endforeach
           
         </div>
         <!-- /owl-carousel -->	

</section>
@endsection
