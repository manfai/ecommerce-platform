@extends('layouts.default')
@section('title', '我的收藏')

@section('content')
<section class="py-5">
    <div class="container">
        <!-- Breadcrumbs -->
        <ol class="breadcrumb pl-0  justify-content-start">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">主頁</a></li>
            <li class="breadcrumb-item"><a href="{{ route('home') }}">我的收藏</a></li>
            <li class="breadcrumb-item active">我的收藏列表</li>
        </ol>
        <div class="d-flex justify-content-between align-items-end mb-5">
            <h1 class="hero-heading mb-0">我的收藏列表</h1><a href="{{ route('address') }}"
                class="btn btn-link text-muted">收貨地址</a>
        </div>
        <div class="card border-0 mb-5">
            <div class="card-body p-0">
                <div class="row">
                    @foreach($products as $product)
                    <!-- place item-->
                    <div data-marker-id="59c0c8e33b1527bfe2abaf92" class="col-sm-6 col-xl-4 mb-5">
                        <div class="card h-100 border-0 shadow">
                            <div class="card-img-top overflow-hidden text-center">
                                <img src="{{ $product->image_url }}" alt="Modern, Well-Appointed Room" class="img-fluid" />
                                <a href="{{ route('product.show', ['productId'=>$product->id, 'productTitle'=>$product->title]) }}" class="tile-link"></a>

                                <div class="card-img-overlay-top text-right"><a href="javascript: void();"
                                        class="card-fav-icon position-relative z-index-40">
                                        <svg class="svg-icon text-white">
                                            <use xlink:href="#heart-1"> </use>
                                        </svg></a></div>
                            </div>
                            <div class="card-body bg-gray-100 d-flex align-items-center">
                                <div class="w-100">
                                    <h6 class="card-title"><a href="{{ route('product.show', ['productId'=>$product->id, 'productTitle'=>$product->title]) }}"
                                            class="text-decoration-none text-uppercase text-dark">{{ $product->title }}</a></h6>
                                    <div class="d-flex card-subtitle mb-3">
                                        <p class="flex-grow-1 mb-0 text-muted text-sm">銷售{{ $product->sold_count }}筆</p>
                                        <p class="flex-shrink-1 mb-0 card-stars text-xs text-right">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i<=$product->rating ? 'text-warning' : ''}}"></i>
                                            @endfor
                                        </p>
                                    </div>
                                    <p class="card-text text-muted">
                                        <span class="h4 text-primary">${{ $product->price }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="float-right">{{ $products->render() }}</div>                
            </div>
        </div>
    </div>
</section>
@endsection