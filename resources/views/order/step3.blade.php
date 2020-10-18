@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;" data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <h1>Checkout</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Cart</li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="page container py-0">
    <section class="">
            <div class="row">
                <div class="col-lg-7">
                    <p class="text-primary">One step away from success.</p>
                    <h1 class="h2 mb-5"> Now redirect to the payment system <span class="text-muted">Jumping</span>      </h1>
                    <div class="text-block">
                        <p class="text-muted">Your order has been received</p>
                        <p class="text-muted mb-5">After the order is successfully placed, you will receive an order confirmation letter, which will contain your order details and order number.</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-danger mb-2">No automatic jump?</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p class="mb-5 text-center"><img src="/img/carts.png" alt="" style="width: 400px;" class="img-fluid"></p>
                </div>
            </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function () {
    @if($payment==4)
        window.location.href = "{{route('pay.paypal',['order'=>$order->id])}}";
    @endif
});
</script>
@endpush
