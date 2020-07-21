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
                @include('components.sidebar')
            </div>
            <!--/sidebar -->
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
                            <div class="col-md-5">
                                <img src="{{$product->image_url}}" class="rounded featurette-image img-fluid mx-auto"
                                    style="object-fit:cover;object-position:top;max-height:70vh;width:100%">
                            </div>
                            <div class="col-md-7">
                                <h4 class="featurette-heading text-uppercase">{{ $product->title }}</h4>
                                <p class="featurette-price lead display-5 text-primary">
                                    <strong>${{ $product->price }}</strong></p>
                                <p class="text-muted text-sm" id="sku-stock">商品庫存<span>0</span>件</p>
                                <p>
                                    <div class="skus mb-2">
                                        <label>型號/款式</label>
                                        <select id="skus" name="skus" class="form-control custom-select">
                                            @foreach($product->skus as $sku)
                                            <option value="{{ $sku->id }}" data-description="{{ $sku->description }}" data-stock="{{ $sku->stock }}">{{ $sku->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="cart_amount mb-4">
                                        <label>Qty</label>
                                        <input id="qty" type="number" step="1" min="1" class="form-control" value="1">
                                    </div>



                                </p>
                            </div>
                      

                            <div class="col-12 mt-4 text-center">
                                <span id="inStock">
                                    <form class="d-inline" action="{{route('cart.add')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="sku_id">
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="btn btn-primary btn-add-to-cart mr-2">Add To Cart</button>
                                    </form>

                                    @if(!$favored)
                                    <button class="d-inline btn btn-warning btn-favor">Add To Fave</button>
                                    @else
                                    <button class="d-inline btn btn-warning btn-disfavor">Remove From my Fave</button>
                                    @endif

                                </span>

                                <form id="notifyMe" class="d-inline" action="{{route('product.favor',['productId'=>$product->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="sku_id">
                                    <input type="hidden" name="qty" value="1">
                                    <button type="submit" class="d-none ml-3 btn btn-secondary">Notify Me</button>
                                </form>

                            </div>
                        </div>

                        <section>
                            <p>{{$product->content}}</p>
                            <p id="sku-description"></p>
                        </section>

                        <!-- accordions -->
                        <h3 class="elements-subheader mt-5">Product Detail</h3>
                        <div class="accordion">
                            <!-- collapsible accordion 1 -->
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                        Information
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
                                        Organization
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
                                        Comments
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

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {

        checkStock();

        $('#skus').on('change', function () {
            var title = $(this).find(':selected').text();
            var description = $(this).find(':selected').data('description');
            $('#sku-title').text(title);
            $('#sku-description').text(description);
            checkStock();
        });

        $('#qty').on('change', function () {
            checkStock();
        });

        // 監聽收藏按鈕的點擊事件
        $('.btn-favor').click(function () {
            Swal.fire({
                title: 'Please Wait..!',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                onOpen: () => {
                    swal.showLoading()
                }
            })
            // 發起一個 post ajax 請求，請求 url 通過後端的 route() 函數生成。
            axios.post("{{ route('product.favor', ['productId' => $product->id]) }}")
                .then(function () { // 請求成功會執行這個回調
                    Swal.fire({
                        title: '操作成功',
                        type: 'success',
                        showConfirmButton: false,
                    });
                }, function (error) { // 請求失敗會執行這個回調
                    // 如果返回碼是 401 代表沒登錄
                    if (error.response && error.response.status === 401) {
                        Swal.fire({
                            title: '請先登錄',
                            type: 'error',
                            showConfirmButton: false,
                        });
                    } else if (error.response && (error.response.data.msg || error.response.data
                            .message)) {
                        // 其他有 msg 或者 message 字段的情況，將 msg 提示給用户
                        Swal.fire({
                            title: error.response.data.msg ? error.response.data.msg : error
                                .response.data.message,
                            type: 'error',
                        });
                    } else {
                        // 其他情況應該是系統掛了
                        Swal.fire({
                            title: '系統錯誤',
                            type: 'error',
                            showConfirmButton: false,
                        });
                    }
                });
        });

        $('.btn-disfavor').click(function () {
            Swal.fire({
                title: 'Please Wait..!',
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                onOpen: () => {
                    swal.showLoading()
                }
            })
            axios.delete("{{ route('product.disfavor', ['productId' => $product->id]) }}")
                .then(function () {
                    Swal.fire({
                        title: '操作成功',
                        type: 'success',
                        showConfirmButton: false,
                    }).then(function () {
                        location.reload();
                    });
                });
        });
    });

    function checkStock() {
        var stock = $('#skus').find(':selected').data('stock');
        var id = $('#skus').find(':selected').val();
        var qty = $('#qty').val();
        $('input[name=sku_id]').val(id);
        $('input[name=qty]').val(qty);
        $('#sku-stock span').text(stock);
        if (stock <= 0) {
            $('.btn-add-to-cart').attr('disabled', 'disabled');
        } else {
            $('.btn-add-to-cart').removeAttr('disabled');
        }
    }

</script>

@endpush
