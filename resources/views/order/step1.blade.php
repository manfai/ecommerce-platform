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

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <p class="subtitle text-primary">Checkout</p>
                <h1 class="h2 mb-5">Cart <strong>{{count($cartItems)}}</strong>Items <span class="text-muted float-right">Shipping Address</span> </h1>
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
                        <label for="form_guests" class="h5">Choose shipping address</label>
                        <p class="text-sm text-muted">You can fill in the Hong Kong/Overseas residential/company address, or Hongkong Post/Overseas other self-pickup addresses.</p>
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <select name="address_id" id="address" data-style="btn-selectpicker" title=" "
                                    class="selectpicker form-control">
                                    @foreach($addresses as $address)
                                    <option value="{{ $address->id }}" data-contact="{{ $address->contact_name }}" data-phone="{{ $address->contact_phone }}">{{ $address->full_address }}</option>
                                    @endforeach
                                    <option value="new_address" data-contact="" data-phone="">Add New Address</option>
                                </select>
                            </div>
                            <div class="col-lg-12" id="new-address">
                                <div id="credit-card" class="row">
                                    <div class="form-group col-md-3">
                                      <label for="card-name" class="form-label">國家</label>
                                      <input type="text" name="address[country]" placeholder="Name on card" id="card-name" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="card-number" class="form-label">城市</label>
                                      <input type="text" name="address[city]" placeholder="Card number" id="card-number" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="expiry-date" class="form-label">省</label>
                                      <input type="text" name="address[province]" placeholder="MM/YY" id="expiry-date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                      <label for="expiry-date" class="form-label">地區</label>
                                      <input type="text" name="address[district]" placeholder="MM/YY" id="expiry-date" class="form-control">
                                    </div>
                                    <div class="form-group col-md-8">
                                      <label for="cvv" class="form-label">詳細地址</label>
                                      <input type="text" name="address[address]" placeholder="123" id="cvv" class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                      <label for="zip" class="form-label">Zip Code（Optional）</label>
                                      <input type="text" name="address[zip]" placeholder="123" id="zip" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="zip" class="form-label">收件人</label>
                                      <input type="text" name="address[contact_name]" placeholder="123" id="zip" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label for="zip" class="form-label">電話</label>
                                      <input type="text" name="address[contact_phone]" placeholder="123" id="zip" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-block mt-4">
                        <div class="media">
                            <div class="media-body">
                                <h5>Remark</h5>
                                <p class="text-sm text-muted">Leave a message to the store, or remarks to remind supplementary personnel.</p>
                            </div>
                            {{-- <img src="/img/avatar/avatar-10.jpg" alt="Jack London" class="avatar ml-4"> --}}
                        </div>
                        <textarea name="remark" id="remark" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="row form-block flex-column flex-sm-row">
                        <div class="col text-center text-sm-left">
                            <a href="{{route('cart')}}" class="btn btn-warning text-muted">Previous</a>
                        </div>
                        <div class="col text-center text-sm-right"><button type="submit" class="btn btn-primary px-3">
                            Next Step for Payment
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
    $('#addr_text').text($("option:selected", this).text());
    newAddress($("option:selected", this).val());
   
    $('[name=address_id]').change(function () {
        var optionSelected = $("option:selected", this);
        if(optionSelected.text()!=='new_address'){
            console.log(optionSelected.text());
            $('#addr_text').text(optionSelected.text());
        }
        newAddress(optionSelected.val());
    });
    function newAddress(seletedText){
        if(seletedText!=='new_address'){
        $('#new-address').hide();
    } else {
        $('#new-address').show();
    }
    }

});
</script>
@endpush
