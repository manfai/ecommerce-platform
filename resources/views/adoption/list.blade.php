@extends('layouts.app')

@section('content')
 <!-- Jumbotron -->
 <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;"
 data-top-bottom="background-size: 110%;">
 <div class="container" >
    <div class="jumbo-heading" data-aos="fade-up">
       <h1>Adoption</h1>
       <!-- Breadcrumbs -->
       <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
             <li class="breadcrumb-item active" aria-current="page">Adoption </li>
          </ol>
       </nav>
    </div>
 </div>
 <!-- /jumbo-heading -->
</div>
<!-- /jumbotron -->
 <!-- ==== Page Content ==== -->
 <div class="page container">
    <div class="row">
       <div class="col-lg-7">
          <h2>Adopt a Pet</h2>
          <p class="mt-4">Elit uasi quidem minus id omnis a nibh fusce mollis imperdie tlorem ipuset phas ellus ac sodales Lorem ipsum dolor Phas ellus  ac sodales felis tiam non metus. lorem ipsum dolor sit amet, consectetur adipisicing elit
          </p>
          <p class="font-weight-bold">If you have any doubts or need more information, please <a href="/contact.html">contact us</a>
          </p>
       </div>
       <!-- /col-lg -->
       <div class="col-lg-5 card bg-light">
          <h5>Ready for adoption</h5>
          <ul class="checkmark pl-0 font-weight-bold">
             <li>All pets are neutered and vaccinated</li>
             <li>All pets are examined by a vet and treated as required</li>
             <li>We help to match you with a pet that meet you needs</li>
          </ul>
       </div>
       <!-- /col-lg -->
    </div>
    <!-- centered Gallery navigation -->
    <ul class="nav nav-pills category-isotope center-nav mt-5">
       <li class="nav-item">
          <a class="nav-link active" href="#" data-toggle="tab" data-filter="*">All</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="tab" data-filter=".male">Male Only</a>
       </li>
       <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="tab" data-filter=".female">Female Only</a>
       </li>
    </ul>
    <!-- /ul -->
    <!-- Gallery -->
    <div id="gallery-isotope" class="row row-eq-height mt-lg-5">
       <!-- Adopt 1 -->
       @foreach ($adoptions as $adoption)
       <div class="{{$adoption->gender}} col-lg-6">
          <div class="isotope-item">
             <div class="adopt-card res-margin row bg-light pattern2">
                <div class="col-md-5">
                   <!-- Image -->
                   <div class="adopt-image d-flex flex-wrap align-items-center ">
                      <a href="{{ route('adoption.show',['adoptionNo'=>$adoption->no]) }}">
                      <img src="{{$adoption->image}}" class="img-fluid" alt="">
                      </a>
                   </div>
                </div>
                <div class="col-md-7 res-margin">
                   <!-- Name -->
                   <div class="caption-adoption">
                      <h5 class="adoption-header"><a href="{{ route('adoption.show',['adoptionNo'=>$adoption->no]) }}">{{$adoption->name}}</a></h5>
                      <!-- List -->
                      <ul class="list-unstyled">
                         <li><strong>Gender:</strong> {{$adoption->gender}}</li>
                         <li><strong>Age:</strong> {{$adoption->age}}</li>
                         <li><strong>Breed:</strong> {{$adoption->breed}}</li>
                      </ul>
                   </div>
                </div>
                <div class="col-md-12 mt-3">
                   <!-- Button -->	
                   <div class="text-center">
                      <!-- Adopt info -->
                      <ul class="adopt-card-info list-unstyled">
                         <li ><i class="flaticon-veterinarian-hospital"></i>special needs</li>
                         <li ><i class="flaticon-dog-4"></i>Friendly to other pets</li>
                      </ul>
                      <!-- button-->
                      <a href="{{ route('adoption.show',['adoptionNo'=>$adoption->no]) }}" class="btn btn-primary">More Info</a>
                   </div>
                   <!-- /text-center -->
                </div>
                <!-- /col-md -->
             </div>
             <!-- /adopt-card -->
          </div>
          <!-- /isotope-item--> 
       </div>
       <!-- /col-lg- --> 
       @endforeach

    </div>
    <!-- /gallery-isotope-->	
    <div class="col-md-12 mt-5">
       <!-- pagination -->
       {{$adoptions->links('components.pagination')}}
       <!-- /nav -->
    </div>
    <!-- /col-md -->  
 </div>
 <!-- /page -->
@endsection