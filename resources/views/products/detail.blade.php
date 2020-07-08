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


    /* Featurettes
------------------------- */

    .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
    }
    .featurette-price {
        font-weight: 900;
    }

    @media (min-width: 40em) {
        .featurette-heading {
            font-size: 30px;
        }
        .featurette-price {
            font-size: 30px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 5rem;
        }
        
    }



    /*
 * Extra utilities
 */

    .flex-equal>* {
        -ms-flex: 1;
        flex: 1;
    }

    @media (min-width: 768px) {
        .flex-md-equal>* {
            -ms-flex: 1;
            flex: 1;
        }
    }

    .overflow-hidden {
        overflow: hidden;
    }

</style>
@endpush
@section('content')

<div class="container d-none">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                <div class="card-body product-info">
                    <div class="row">
                        <div class="col-5">
                            <img class="cover" src="{{ $product->image_url }}" alt="">
                        </div>
                        <div class="col-7">
                            <div class="title">{{ $product->title }}</div>
                            <div class="price"><label>价格</label><em>￥</em><span>{{ $product->price }}</span></div>
                            <div class="sales_and_reviews">
                                <div class="sold_count">累计销量 <span class="count">{{ $product->sold_count }}</span></div>
                                <div class="review_count">累计评价 <span class="count">{{ $product->review_count }}</span>
                                </div>
                                <div class="rating" title="评分 {{ $product->rating }}">评分 <span
                                        class="count">{{ str_repeat('★', floor($product->rating)) }}{{ str_repeat('☆', 5 - floor($product->rating)) }}</span>
                                </div>
                            </div>
                            <div class="skus">
                                <label>选择</label>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    @foreach($product->skus as $sku)
                                    <label class="btn sku-btn" title="{{ $sku->description }}">
                                        <input type="radio" name="skus" autocomplete="off" value="{{ $sku->id }}">
                                        {{ $sku->title }}
                                    </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="cart_amount"><label>数量</label><input type="text"
                                    class="form-control form-control-sm" value="1"><span>件</span><span
                                    class="stock"></span></div>
                            <div class="buttons">
                                <button class="btn btn-success btn-favor">❤ 收藏</button>
                                <button class="btn btn-primary btn-add-to-cart">加入购物车</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-detail">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#product-detail-tab" aria-controls="product-detail-tab"
                                    role="tab" data-toggle="tab" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#product-reviews-tab" aria-controls="product-reviews-tab"
                                    role="tab" data-toggle="tab" aria-selected="false">用户评价</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="product-detail-tab">
                                {!! $product->description !!}
                            </div>
                            <div role="tabpanel" class="tab-pane" id="product-reviews-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="pb-5">
    <div class="container-fluid marketing">
        <div class="row featurette">
            <div class="col-md-6 p-0">
                <img src="{{$product->image_url}}" class="featurette-image img-fluid mx-auto" style="object-fit:cover;object-position:top;max-height:70vh;width:100%">
            </div>
            <div class="col-md-5 pl-md-5 pl-3">
                <h3 class="featurette-heading text-uppercase">{{ $product->title }}</h3>
                <p class="featurette-price lead display-5 text-primary"><strong>${{ $product->price }}</strong></p>
                <p class="lead">And an even wittier subheading to boot. Jumpstart your marketing
                    efforts with this example based on Apple’s marketing pages.</p>
                <p>
                <div class="skus mb-2">
                    <label>Type</label>
                    <select id="sku_id" class="form-control custom-select">
                        @foreach($product->skus as $sku)
                            <option value="{{ $sku->id }}" title="{{ $sku->description }}">{{ $sku->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="cart_amount mb-4">
                    <label>Qty</label>
                    <input id="qty" type="number" step="1" min="1" class="form-control" value="1">
                </div>

                <form class="d-inline" action="{{route('cart.add')}}" method="post">@csrf
                    <input type="hidden" name="sku_id">
                    <input type="hidden" name="qty" value="1">
                    <button type="submit" class="btn btn-primary mr-2">Add To Cart</button>
                </form>

                <form class="d-inline" action="{{route('product.favor',['productId'=>$product->id])}}" method="post">@csrf
                    <input type="hidden" name="sku_id">
                    <input type="hidden" name="qty" value="1">
                    <button type="submit" class="btn btn-warning">Add To Favorites</button>
                </form>

                </p>
            </div>
        </div>

        <div class="position-relative overflow-hidden pt-5 mt-5 text-center bg-white">
            <div class="col-md-5 mx-auto">
                <h1 class="display-4 font-weight-normal">Punny headline</h1>
                <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your marketing
                    efforts with this example based on Apple’s marketing pages.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
            </div>
        </div>
        <div class="container pb-5">
        <hr class="featurette-divider">

            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="100%"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
            <hr class="featurette-divider">

            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="100%"
                height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img" aria-label="Placeholder: 500x500">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text>
            </svg>
            
        </div>


    </div>
</section>
@endsection

@push('scripts')
<script>

    changeVal('sku_id',$('#sku_id').val());

    $('#sku_id').change(function(){
        changeVal('sku_id',$(this).val());
    });

    $('#qty').change(function(){
        changeVal('qty',$(this).val());
    });

    function changeVal(name, value){
        $('[name="'+name+'"]').val(value);
        console.log(value);
    }
</script>
@endpush