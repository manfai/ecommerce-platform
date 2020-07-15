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
                <li class="breadcrumb-item"><a href="adoption.html">Adoption</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adoption single page</li>
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
       <!-- page with sidebar starts -->
       <div class="col-lg-9 page-with-sidebar">
          <div class="row">
             <div class="adopt-card col-lg-12">
                <!-- Image -->
                <div class="col-md-4 float-left">
                   <img src="{{$adoption->image}}" class="img-fluid rounded" alt="">
                </div>
                <!-- Name -->
                <div class="caption-adoption col-md-8 float-right res-margin">
                   <h2>{{$adoption->name}}</h2>
                   <!-- List -->
                   <ul class="list-unstyled mt-3">
                      <li><strong>Gender:</strong> {{$adoption->gender}}</li>
                      <li><strong>Age:</strong> {{$adoption->age}}</li>
                      <li><strong>Breed:</strong> {{$adoption->breed}}</li>
                   </ul>
                   <!-- Adopt info -->
                   <ul class="adopt-card-info list-unstyled">
                      <li><i class="flaticon-veterinarian-hospital"></i>Special Needs pet</li>
                      <li><i class="flaticon-dog-4"></i>Friendly to other animals</li>
                   </ul>
                </div>
                <!-- /caption-adoption -->
             </div>
             <!-- /adopt-card -->
          </div>
          <!-- /row -->
          <div class="col-lg-12">
             <h3>About me</h3>
             <p>
                {{$adoption->description}}
             </p>
             <p class="font-weight-bold">If you have any doubts or need more information, please <a href="/contact.html">contact us</a>
             </p>
             <a href="#" class="btn btn btn-secondary mt-2">Adopt me</a>
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12">
             <h4 class="mt-5">My photo gallery</h4>
             <!-- divider -->
             <hr class="small-divider left">
             <div class="carousel-3items owl-carousel col-lg-12 magnific-popup">

               @foreach ($adoption->images as $image)
                  <!-- photo1 -->
                  <a href="{{$image->filename}}" title="your caption here">
                  <img alt="" src="{{$image->filename}}" class="hover-opacity rounded img-fluid">
                  </a> 
               @endforeach
              
               
             </div>
             <!-- /adoption-gallery -->
          </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12">
             <h4 class="mt-5">Frequently Asked questions</h4>
             <!-- divider -->
             <hr class="small-divider left">
             <div class="accordion mt-4">
                <!-- collapsible accordion 1 -->
                <div class="card">
                   <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapseOne">
                      What documents do I need to adopt a pet?
                      </a>
                   </div>
                   <!-- /card-header -->
                   <div id="collapseOne" class="collapse show" data-parent=".accordion">
                      <div class="card-body">
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                         <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                      </div>
                   </div>
                </div>
                <!-- /card -->
                <!-- collapsible accordion 2 -->
                <div class="card">
                   <div class="card-header">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                      Are the animals vaccinated?
                      </a>
                   </div>
                   <div id="collapseTwo" class="collapse" data-parent=".accordion">
                      <div class="card-body">
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                         <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                      </div>
                   </div>
                </div>
                <!-- /card -->
                <!-- collapsible accordion 3 -->
                <div class="card">
                   <div class="card-header">
                      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                      How much is the adoption fee?
                      </a>
                   </div>
                   <div id="collapseThree" class="collapse" data-parent=".accordion">
                      <div class="card-body">
                         <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                         <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
                      </div>
                   </div>
                </div>
                <!-- /card -->
             </div>
             <!-- /accordion -->
             <div class="alert alert-danger col-lg-12 mt-5" role="alert">
                <h6>Important Information for future pet owners</h6>
                <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id.</p>
             </div>
             <!-- /alert -->
             <!-- Button -->	
             <div class="text-center">
                <a href="#" class="btn btn btn-secondary mt-4">Adopt me</a>
                <a href="{{route('adoption')}}" class="btn btn btn-primary mt-4 ml-2">Go back to adoption gallery</a>
             </div>
             <!-- /text-center -->
          </div>
          <!-- /col-lg-12 -->
       </div>
       <!-- /page-with-sidebar -->
       <!-- ==== Sidebar ==== -->
       <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3 ">
          <div class="widget-area">
             <h5 class="sidebar-header">Adoption events</h5>
             <!-- event 1 -->		 
             <div class="widget2">
                <div class="card" >
                   <div class="card-img">
                      <!-- image event -->	
                      <a href="event-single.html">
                      <img class="card-img-top" src="img/adoption/adoptionsidebar1.jpg" alt="">
                      </a>
                   </div>
                   <!-- /card-img -->
                   <div class="card-body">
                      <!-- event info -->	
                      <a href="event-single.html">
                         <h6 class="card-title">NYC Adoption Fair</h6>
                      </a>
                      <!-- list -->
                      <ul class="list-inline colored-icons">
                         <li class="list-inline-item"> <span><i class="fas fa-calendar-alt mr-2"></i>2th February at 4pm</span></li>
                         <li class="list-inline-item">	<span><i class="fas fa-map-marker-alt mr-2"></i>Washington Square Park</span></li>
                      </ul>
                      <!-- button -->	
                      <div class="text-center">
                         <a href="event-single.html" class="btn btn-primary  btn-sm mt-0">More info</a>
                      </div>
                   </div>
                   <!--/card-body -->	
                </div>
                <!-- /card -->	
             </div>
             <!--/widget2 -->
          </div>
          <!--/widget-area -->
          <div class="widget-area">
             <h5 class="sidebar-header">Information</h5>
             <p>In id fermentum augue, ut pellen tesque Maecenas at arcu risus. Donec com modo sodales ex.</p>
             <h5 class="sidebar-header">Adopt a pet</h5>
             <div class="widget1">
                <!-- widget info 1 -->
                <div class="col-lg-12">
                   <a href="#">
                      <div class="widget-1-info">
                         <!-- image -->
                         <img src="img/adoption/adoption2.jpg"  alt="" class="img-fluid rounded">
                         <span>Leelo</span>           
                      </div>
                   </a>
                </div>
                <!-- widget info 1 -->
                <div class="col-lg-12">
                   <a href="#">
                      <div class="widget-1-info">
                         <!-- image -->
                         <img src="img/adoption/adoption3.jpg"  alt="" class="img-fluid rounded">
                         <span>Jonsi</span>           
                      </div>
                   </a>
                </div>
                <!-- widget info 1 -->
                <div class="col-lg-12">
                   <a href="#">
                      <div class="widget-1-info">
                         <!-- image -->
                         <img src="img/adoption/adoption5.jpg" alt="" class="img-fluid rounded">
                         <span>Milena</span>           
                      </div>
                   </a>
                </div>
                <!-- /col-lg-12 -->
                <div class="text-center">
                   <a href="adoption.html" class="btn btn-primary btn-sm">See all</a>
                </div>
             </div>
             <!-- /widget1 -->
          </div>
          <!-- /widget-area -->
       </div>
       <!-- /sidebar -->   
    </div>
    <!-- /row -->
 </div>
 <!-- /page -->
@endsection