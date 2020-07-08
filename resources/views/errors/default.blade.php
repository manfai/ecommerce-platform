@extends('layouts.app')
@section('title', '错误')

@section('content')
<section class="position-relative py-6"><img src="/img/photo/photo-1471189641895-16c58a695bcb.jpg" alt="" class="bg-image">
    <div class="container">
    <div class="row">
        <div class="col-lg-6">
        <div class="bg-white rounded-lg shadow p-5"><strong class="text-uppercase text-secondary d-inline-block mb-2 text-sm">Ooops...</strong>
            <h2 class="mb-3">錯誤</h2>
            <p class="text-muted">{{ $msg }}</p>
            <a href="" class="btn btn-link p-0">返回首頁 <i class="fa fa-long-arrow-alt-right"></i></a>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection