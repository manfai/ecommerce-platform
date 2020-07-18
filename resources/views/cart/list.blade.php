@extends('layouts.app')

@push('styles')
<style>
    .no-stock .col-lg-2,
    .no-stock .col-6 {
        opacity: 0.5;
    }

    .btn-remove {
        cursor: pointer;
    }

</style>
@endpush

@section('content')

<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;" data-top-bottom="background-size: 110%;">
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

<section class="pt-0 container pb-5">
    <div class="py-5 text-left">
        <p class="lead">
            We actively search for and develop high-quality products to enjoy original authentic and high-quality pet food products for all breeders in Hong Kong!
        </p>
    </div>

    <div class="row">

        <div class="col-md-4 order-md-2 mb-4">
            <!-- <div class="list-group">
                <div class="list-group-item">
                    <h6 class="my-0">Order total</h6>
                    <small class="text-muted">Brief description</small>
                    @php $amount = 0 @endphp
                    @foreach($cartItems as $item)
                    @php $amount += ($item->productSku->price * $item->qty) @endphp
                    @endforeach
                    <span class="text-muted">${{$amount = number_format((float)$amount, 2, '.', '')}}</span>
                </div>
                <div class="list-group-item">
                    <h6 class="my-0">Shipping</h6>
                    <small class="text-muted">Brief description</small>
                    <span class="text-muted">$5.00</span>
                </div>
                <div class="list-group-item">
                    <div class="text-success">
                        <h6 class="my-0">Coupon code</h6>
                        <small>EXAMPLECODE</small><small class="ml-3">Cancel</small>
                    </div>
                    <span class="text-success">-$5.00</span>
                </div>
                <div class="list-group-item">
                    <span>Purchase Amount</span>
                    <strong>${{ number_format((float)$amount - 5,2,'.','')}}</strong>
                </div>
            </div> -->
            <h5 class="elements-subheader mb-2 mt-0">SUMMARY</h5>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Order total</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    @php $amount = 0 @endphp
                    @foreach($cartItems as $item)
                        @php $amount += ($item->productSku->price * $item->qty) @endphp
                    @endforeach
                    <span class="text-muted">${{$amount = number_format((float)$amount, 2, '.', '')}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Shipping</h6>
                        <small class="text-muted">Brief description</small>
                    </div>
                    <span class="text-muted">$0.00</span>
                </li>

                <li id="coupon" class="list-group-item d-flex justify-content-between">
                    <div class="text-success">
                        <h6 class="my-0">Coupon code</h6>
                        <small>EXAMPLECODE</small><small class="ml-3">Cancel</small>
                    </div>
                    <span class="text-success">-$5.00</span>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Purchase Amount</span>
                    <strong>${{ number_format((float)$amount - 5,2,'.','')}}</strong>
                </li>
            </ul>
            <div class="input-group">
                <input type="text" name="coupon_code" class="form-control" placeholder="Promo Code">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" style="height: 45px;" type="button">Redeem</button>
                </span>
            </div>

        </div>

        <div class="col-md-8 order-md-1">
            <form id="create-order" action="{{route('orders.step.1')}}" method="POST">
                @csrf
                <input type="hidden" name="step" value="products">

                <h4 class="d-flex justify-content-between align-items-center mb-3">Shopping Cart
                    <span class="badge badge-secondary badge-pill px-4">{{count($cartItems)}} Item{{count($cartItems)>1?'s':''}}</span>
                </h4>

                @if($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                    {{$error}}
                    @endforeach
                </div>
                @endif

                @if(count($cartItems))
                    @foreach($cartItems as $key => $item)
                    <div class="media text-muted pt-3">
                        <img src="{{$item->productSku->product->image_url}}" class="mr-3 rounded" style="width:80px">
                        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <input type="hidden" name="items[{{$key}}][sku_id]" value="{{ $item->productSku->id }}">
                                <input type="hidden" name="items[{{$key}}][qty]" value="{{ $item->qty }}">
                                <strong class="h4 text-gray-dark">{{$item->productSku->product->title}}</strong>
                               

                                <!-- <form action="{{route('cart.remove',['sku'=>$item->productSku->id ])}}" method="post"> -->
                                    <!-- @csrf
                                    @method('delete') -->
                                    <a href="{{route('cart.remove',['sku'=>$item->productSku->id ])}}" class="p-0 text-danger"><u>X Remove</u></a>
                                <!-- </form> -->
                            </div>
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <p class="d-block mb-2 text-uppercase">
                                    @if($item->productSku->stock>0)
                                    Attribute: {{$item->productSku->title}} / Qty: {{$item->qty}}
                                    @else
                                    <del>Attribute: {{$item->productSku->title}} / Qty: {{$item->qty}}</del>已下架
                                    @endif
                                </p>
                                @php $totalAmount = $item->qty * $item->productSku->price; @endphp
                                <p class="d-block text-muted">${{ number_format((float)$totalAmount, 2, '.', '') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="row form-block flex-column flex-sm-row">
                        <div class="col text-center text-sm-left">
                        </div>
                        <div class="col text-center text-sm-right">
                            <button class="btn btn-primary my-5 px-5" type="submit">Continue to checkout</button>
                        </div>
                    </div>
                @else
                    <p class="mb-5 text-center"><img src="/img/carts.png" alt="" style="width: 400px;" class="mt-5 img-fluid"></p>
         
                @endif

                
            </form>
        </div>

    </div>

   

</section>
  <!-- contact call to action -->
  <div id="contact-calltoaction" class="h-100 row no-gutters" >
    <div class="bg-collumn col-lg-6" style="background: url('https://reviewed-com-res.cloudinary.com/image/fetch/s--GHdy-BCV--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_792/https://reviewed-production.s3.amazonaws.com/attachment/14a5441cf65b4801/aspen-self-warming-bed.jpg') center center">
       <!-- Background image : img/call-to-action/contact.jpg -->	
    </div>
    <!-- /col-lg -->
    <div class="col-lg-6 bg-primary  text-center text-light block-padding pb-block">
       <div class="col-lg-10 offset-lg-1">
          <h4>Get in touch with us</h4>
          <p>Scelerisque laoreet nibh hendrerit id. lorem ipsuet In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall lorem ipsuet In aliquet ma.</p>
          <!-- Button -->	
          <a href="contact.html" class="btn btn-secondary mt-2">Contact us</a>
       </div>
       <!-- /col-lg -->
    </div>
    <!-- /col-lg -->
 </div>
 <!-- /contact-calltoaction -->

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // 监听 移除 按钮的点击事件
        $('.btn-remove').click(function () {
            // $(this) 可以获取到当前点击的 移除 按钮的 jQuery 对象
            // closest() 方法可以获取到匹配选择器的第一个祖先元素，在这里就是当前点击的 移除 按钮之上的 <tr> 标签
            // data('id') 方法可以获取到我们之前设置的 data-id 属性的值，也就是对应的 SKU id
            var id = $(this).parent().parent().data('id');
            Swal.fire({
                    title: "确认要将该商品移除？",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: '确定',
                    cancelButtonText: '取消',
                })
                .then(function (result) {
                    if (result.value) {
                        axios.delete("/cart/" + id)
                            .then(function (data) {
                                console.log(id);
                                console.log(data);
                                Swal.fire({
                                    title: '刪除成功',
                                    type: 'success',
                                    showConfirmButton: false
                                });
                                location.reload();
                            })
                    } else if (result.dismiss) {
                        return;
                        // console.log(result.dismiss);
                    }

                });
        });

        // 检查按钮点击事件
        $('#btn-check-coupon').click(function () {
            // 获取用户输入的优惠码
            var code = $('input[name=coupon_code]').val();
            // 如果没有输入则弹框提示
            if (!code) {
                Swal.fire({
                    title: '請輸入優惠碼',
                    type: 'warning',
                    showConfirmButton: false
                });
                return;
            }
            // 调用检查接口
            axios.get('/coupon_codes/' + encodeURIComponent(code))
                .then(function (response) { // then 方法的第一个参数是回调，请求成功时会被调用
                    $('#coupon_desc').text(response.data.description); // 输出优惠信息
                    $('input[name=coupon_code]').prop('readonly', true); // 禁用输入框
                    $('#btn-cancel-coupon').show(); // 显示 取消 按钮
                    $('#btn-check-coupon').hide(); // 隐藏 检查 按钮
                }, function (error) {
                    // 如果返回码是 404，说明优惠券不存在
                    if (error.response.status === 404) {
                        Swal.fire({
                            title: '优惠码不存在',
                            type: 'error',
                            showConfirmButton: false
                        });
                    } else if (error.response.status === 403) {
                        // 如果返回码是 403，说明有其他条件不满足
                        Swal.fire({
                            title: error.response.data.msg,
                            type: 'error',
                            showConfirmButton: false
                        });
                    } else {
                        // 其他错误
                        Swal.fire({
                            title: '系统内部错误',
                            type: 'error',
                            showConfirmButton: false
                        });
                    }
                })
        });

        // 隐藏 按钮点击事件
        $('#btn-cancel-coupon').click(function () {
            $('#coupon_desc').text(''); // 隐藏优惠信息
            $('input[name=coupon_code]').prop('readonly', false); // 启用输入框
            $('#btn-cancel-coupon').hide(); // 隐藏 取消 按钮
            $('#btn-check-coupon').show(); // 显示 检查 按钮
        });

    });

</script>
@endpush
