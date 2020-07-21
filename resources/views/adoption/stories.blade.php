@extends('layouts.app')
@push('styles')
<style>
.rounded-circle {
    width:300px;
    height:300px;
    object-fit: cover;
}
</style>    
@endpush
@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;" data-top-bottom="background-size: 110%;">
 <div class="container" >
    <!-- jumbo-heading -->
    <div class="jumbo-heading" data-aos="fade-up">
       <h1>Adoption</h1>
       <!-- Breadcrumbs -->
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
             <li class="breadcrumb-item"><a href="adoption.html">Adoption</a></li>
             <li class="breadcrumb-item active" aria-current="page">Adoption Stories</li>
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
<div class="page container">
 <div class="row">
    <!-- page with sidebar starts -->
    <div class="col-lg-12 page-with-sidebar">
       <h2>Adoption Stories</h2>
       <span class="h7 mt-0">Adoption is an act of love, join one of our events and find your new best friend </span>
       <hr class="small-divider left">
       <!-- story 1 -->		           
       <div class="row mt-5">
          <div class="col-md-4 d-flex flex-wrap align-items-center pattern1">
             <!-- image -->
             <img alt="" src="/img/108183627_10158905813180087_6754780021544042397_n.jpg" class="rounded-circle  img-fluid ">
          </div>
          <!-- /col-md -->	
          <div class="col-md-8">
             <h4>Mary and Lukas</h4>
             <p class="res-margin">Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
             <!-- quote -->
             <blockquote class="blockquote">
                <p>Adopting Lukas was the best thing I have done this year! He helped me to overcome loneliness and isolation</p>
                <footer class="blockquote-footer">Mary Smith</footer>
             </blockquote>
             <!-- /quote -->
          </div>
          <!-- /col-md -->	
       </div>
       <!-- /row -->	
       <hr/>
       <!-- /divider -->
       <!-- story 2 -->		           
       <div class="row mt-5">
          <div class="col-md-8">
             <h4>Luma & Mike Johansen and Pluto</h4>
             <p class="res-margin">Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
             <!-- quote -->
             <blockquote class="blockquote">
                <p>Giving Pluto a home is incredibly rewarding, he thanks us everyday with unlimited love and affection. Having a pet to care gave us a sense of purpose, as well as a companion.</p>
                <footer class="blockquote-footer">Luma & Mike Johansen</footer>
             </blockquote>
             <!-- /quote -->
          </div>
          <!-- /col-md -->
          <div class="col-md-4 d-flex flex-wrap align-items-center pattern1">
             <!-- image -->
             <img alt="" src="/img/107823677_10158905813170087_4950578079928079927_n.jpg" class="rounded-circle  img-fluid ">
          </div>
          <!-- /col-md -->	
       </div>
       <!-- /row -->
       <hr/>
       <!-- /divider -->
       <!-- story 3 -->		           
       <div class="row mt-5">
          <div class="col-md-4 d-flex flex-wrap align-items-center pattern1">
             <!-- image -->
             <img alt="" src="/img/107860063_10158905813305087_9196538992304363046_n.jpg" class="rounded-circle img-fluid ">
          </div>
          <!-- /col-md -->	
          <div class="col-md-8">
             <h4>Kristin and Tammy</h4>
             <p class="res-margin">Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
             <!-- quote -->
             <blockquote class="blockquote">
                <p>Tammy is super low-maintencance and a simple petting session is usually enough to make both of us happy.</p>
                <footer class="blockquote-footer">Kristin Doe</footer>
             </blockquote>
             <!-- /quote -->
          </div>
          <!-- /col-md -->	
       </div>
       <!-- /row -->
       <div class="mt-5">
          <!-- call to action -->	
          <div class="adopt-calltoaction col-md-12 card bg-light no-bg-small">
             <div class="text-center p-3">
                <div class="col-lg-8">
                   <h5>Adopting is an act of love</h5>
                   <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id lorem ipsuet.</p>
                   <!-- Button -->	
                   <div class="text-center">
                      <a href="adoption.html" class="btn btn-primary mt-2">Adopt a pet</a>
                   </div>
                   <!-- /text-center -->	
                </div>
                <!-- /col-md-8 -->	
             </div>
             <!-- /text-center -->	
          </div>
          <!-- /adopt-calltoaction -->         
       </div>
       <!-- /mt-5 -->
    </div>
    <!-- /page-with-sidebar -->
 </div>
 <!-- /row -->
</div>
<!-- /page -->
@endsection