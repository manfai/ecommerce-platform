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
<section class="container pb-5">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://laravel.com/img/logomark.min.svg" alt="" width="72" height="72">
        <h2>Your Cart</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group
            has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Summary</span>
            </h4>
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
                    <span class="text-muted">$5.00</span>
                </li>

                <li id="coupon" class="list-group-item d-flex justify-content-between bg-light">
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
                <input type="text" class="form-control py-4" name="coupon_code" placeholder="Promo code">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary px-4" id="btn-check-coupon">兌換</button>
                </div>
            </div>
        </div>

        <div class="col-md-8 order-md-1">
            <h4 class="d-flex justify-content-between align-items-center mb-3">Shopping Cart
                <span class="badge badge-secondary badge-pill">{{count($cartItems)}}</span>
            </h4>

            @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif
            
            @foreach($cartItems as $item)
            <div class="media text-muted pt-3">
                <img src="{{$item->productSku->product->image_url}}" class="mr-3" style="width:80px">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="h4 text-gray-dark">{{$item->productSku->product->title}}</strong>
                        <form action="{{route('cart.remove',['sku'=>$item->productSku->id ])}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn p-0 btn-link" type="submit">Remove</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-between align-items-center w-100">
                    <p class="d-block mb-2 text-uppercase">Attribute: {{$item->productSku->title}} / Qty: {{$item->qty}}</p>
                    @php $totalAmount = $item->qty * $item->productSku->price; @endphp
                    <p class="d-block text-muted">${{ number_format((float)$totalAmount, 2, '.', '') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <button class="btn btn-primary btn-lg btn-block mt-5" type="submit">Continue to checkout</button>
        </div>
    </div>
</section>
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
            if(!code) {
                Swal.fire({
                    title: '請輸入優惠碼',
                    type: 'warning',
                    showConfirmButton: false
                });
                return;
            }
            // 调用检查接口
            axios.get('/coupon_codes/' + encodeURIComponent(code))
                .then(function (response) {  // then 方法的第一个参数是回调，请求成功时会被调用
                $('#coupon_desc').text(response.data.description); // 输出优惠信息
                $('input[name=coupon_code]').prop('readonly', true); // 禁用输入框
                $('#btn-cancel-coupon').show(); // 显示 取消 按钮
                $('#btn-check-coupon').hide(); // 隐藏 检查 按钮
                }, function (error) {
                // 如果返回码是 404，说明优惠券不存在
                if(error.response.status === 404) {
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
            $('input[name=coupon_code]').prop('readonly', false);  // 启用输入框
            $('#btn-cancel-coupon').hide(); // 隐藏 取消 按钮
            $('#btn-check-coupon').show(); // 显示 检查 按钮
        });
            
    });

 

</script>
@endpush
