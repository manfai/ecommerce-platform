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
                                            <div class="price">
                                                <label>价格</label><em>￥</em><span>{{ $product->price }}</span></div>
                                            <div class="sales_and_reviews">
                                                <div class="sold_count">累计销量 <span
                                                        class="count">{{ $product->sold_count }}</span></div>
                                                <div class="review_count">累计评价 <span
                                                        class="count">{{ $product->review_count }}</span>
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
                                                        <input type="radio" name="skus" autocomplete="off"
                                                            value="{{ $sku->id }}">
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
                                                <a class="nav-link active" href="#product-detail-tab"
                                                    aria-controls="product-detail-tab" role="tab" data-toggle="tab"
                                                    aria-selected="true">商品详情</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#product-reviews-tab"
                                                    aria-controls="product-reviews-tab" role="tab" data-toggle="tab"
                                                    aria-selected="false">用户评价</a>
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

                <div class="pb-5">
                    <div class="container-fluid marketing">
                        <div class="row featurette">
                            <div class="col-md-6 p-0">
                                <img src="{{$product->image_url}}" class="rounded featurette-image img-fluid mx-auto"
                                    style="object-fit:cover;object-position:top;max-height:70vh;width:100%">
                            </div>
                            <div class="col-md-5 pl-md-5 pl-3">
                                <h4 class="featurette-heading text-uppercase">{{ $product->title }}</h4>
                                <p class="featurette-price lead display-5 text-primary">
                                    <strong>${{ $product->price }}</strong></p>
                                <!-- <p class="lead">And an even wittier subheading to boot. Jumpstart your marketing
                                    efforts with this example based on Apple’s marketing pages.</p> -->
                                <p>
                                    <div class="skus mb-2">
                                        <label>Type</label>
                                        <select id="sku_id" class="form-control custom-select">
                                            @foreach($product->skus as $sku)
                                            <option value="{{ $sku->id }}" title="{{ $sku->description }}">
                                                {{ $sku->title }}</option>
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
                                        <button type="submit" class="btn btn-sm btn-primary mr-2">Add To Cart</button>
                                    </form>

                                    <form class="d-inline"
                                        action="{{route('product.favor',['productId'=>$product->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="sku_id">
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="btn btn-sm btn-warning">Add To Favorites</button>
                                    </form>

                                </p>
                            </div>
                        </div>


                        <!-- accordions -->
                        <h3 class="elements-subheader mt-5">Product Detail</h3>
                        <div class="accordion">
                            <!-- collapsible accordion 1 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Our Philosophy
                                    </a>
                                </div>
                                <!-- /card-header -->
                                <div id="collapseOne" class="collapse show" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                            magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                            elementum ipsum convall.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <!-- collapsible accordion 2 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                        Our Organization
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                            magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                            elementum ipsum convall.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                            <!-- collapsible accordion 3 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                        Partnerships with our team
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent=".accordion">
                                    <div class="card-body">
                                        <p>Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                                            magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec
                                            elementum ipsum convall.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /accordion -->

                    </div>
                </div>
            </div>

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
    </div>
</div>
@endsection

@push('scripts')
<script>
    changeVal('sku_id', $('#sku_id').val());

    $('#sku_id').change(function () {
        changeVal('sku_id', $(this).val());
    });

    $('#qty').change(function () {
        changeVal('qty', $(this).val());
    });

    function changeVal(name, value) {
        $('[name="' + name + '"]').val(value);
        console.log(value);
    }

</script>
@endpush
