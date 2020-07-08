@extends('layouts.app')

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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <p class="subtitle text-primary">結帳中</p>
                <h1 class="h2 mb-5">購物車 <strong>{{count($cartItems)}}</strong>件商品 <span class="text-muted float-right">收貨地址</span> </h1>
                <form id="create-order" action="{{route('orders.step.2')}}" method="POST"> @csrf
                    <input type="hidden" name="step" value="addresses">
                    @if ($errors->any())
                        <div class="text-block">
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-warning text-sm mb-3">
                                <div class="media align-items-center">
                                    <svg class="svg-icon svg-icon svg-icon-light w-2rem h-2rem mr-3 text-reset">
                                        <use xlink:href="#plug-1"> </use>
                                    </svg>
                                    <div class="media-body"><strong>{{$error}}</strong></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
                    <div class="text-block">
                        <label for="form_guests" class="h5">選擇收貨地址</label>
                        <p class="text-sm text-muted">可填香港/海外的住宅/公司地址，或香港郵政/海外其他自取點地址。</p>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <select name="address_id" id="address" data-style="btn-selectpicker" title=" "
                                    class="selectpicker form-control">
                                    @foreach($addresses as $address)
                                    <option value="{{ $address->id }}" data-contact="{{ $address->contact_name }}" data-phone="{{ $address->contact_phone }}">{{ $address->full_address }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-block">
                        <div class="media">
                            <div class="media-body">
                                <h5>訂單備註</h5>
                                <p class="text-sm text-muted">給商店留言，或是備註出貨注意事項提醒出貨人員。</p>
                            </div><img src="/img/avatar/avatar-10.jpg" alt="Jack London" class="avatar ml-4">
                        </div>
                        <textarea name="remark" id="remark" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="row form-block flex-column flex-sm-row">
                        <div class="col text-center text-sm-left">
                            <a href="{{route('cart')}}" class="btn btn-link text-muted"> <i class="fa-chevron-left fa mr-2"></i>上一步</a>
                        </div>
                        <div class="col text-center text-sm-right"><button type="submit"
                                class="btn btn-primary px-3">
                            Next Step for Payment
                            <i class="fa-chevron-right fa ml-2"></i>
                        </button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5 pl-xl-5">
                @include('components.cart')
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function () {
    $('#addr_text').text('---');
    $('[name=address_id]').change(function () {
        var optionSelected = $("option:selected", this);
        console.log(optionSelected.text());
        $('#addr_text').text(optionSelected.text());
    });
});
</script>
@endpush
