@extends('layouts.app')
@section('content')
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;" data-top-bottom="background-size: 110%;">
  <div class="container" >
     <!-- jumbo-heading -->
     <div class="jumbo-heading" data-aos="fade-up">
        <h1>Careers</h1>
        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Careers</li>
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
     <div class="col-lg-9 page-with-sidebar">
        <div class="col-lg-12">
           <h2>Work With us</h2>
           <span class="subtitle2 text-tertiary mt-2">We offer quick & easy services for cats and dogs</span>
           <hr class="small-divider left">
           <p class="mt-4">
              Quisque at odio nunc. Etiam ac nibh egestas, accumsan felis id, fermentum purus. Quisque vitae hendrerit elit. Maecenas ipsum mi, iaculis quis mattis cursus, auctor ac magna. Integer felis metus, aliquet in dignissim ut, varius et odio. Donec malesuada diam quis dignissim suscipit. Praesent purus turpis, tristique hendrerit
           </p>
           <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
           <p>Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall Maecenas at arcu risus scelerisque laoree.</p>
           <h3 class="mt-5">Open Positions</h3>
        </div>
        <!-- /col-lg-12 -->
        <!-- card -->
        <div class="card bg-light col-lg-12 mt-3" >
           <h5>Animal Nutritionist</h5>
           <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id.</p>
           <h6>Requirements:</h6>
           <ul class="custom pl-0">
              <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
              <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
              <li>Aliquam erat volut pat phas ellu</li>
              <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
              <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
           </ul>
           <!-- /ul -->			        
           <!-- Button -->	
           <a href="#" class="btn btn-sm btn-secondary mt-4">Apply for position</a>
        </div>
        <!-- /card -->
        <!-- card -->
        <div class="card bg-light col-lg-12 mt-3" >
           <h5>Pet Adoption Counselor</h5>
           <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex </p>
           <p>
              Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.                        
           </p>
           <h6>Requirements:</h6>
           <ul class="custom pl-0">
              <li>Orci eget, viverra elit liquam erat volut pat phas ellus ac</li>
              <li>Ipuset phas ellus ac sodales Lorem ipsum dolor Phas ell</li>
           </ul>
           <!-- /ul -->		
           <!-- Button -->	
           <a href="#" class="btn btn-sm btn-secondary mt-4">Apply for position</a>
        </div>
        <!-- /card -->
     </div>
     <!-- /page-with-sidebar -->
     <!-- ==== Sidebar ==== -->
     <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
        <!--widget-area -->
        <div class="widget-area">
           <h5 class="sidebar-header">Meet our Team</h5>
           <!-- event 1 -->		 
           <div class="widget2">
              <div class="card" >
                 <div class="card-img">
                    <!-- image  -->	
                    <a href="team.html">
                    <img class="card-img-top" src="img/about/aboutsidebar.jpg" alt="">
                    </a>
                 </div>
                 <div class="card-body">
                    <!--  info -->	
                    <a href="team.html">
                       <h6 class="card-title">20 Qualified Pet care Professionals</h6>
                    </a>
                    <!-- button -->	
                    <a href="team.html" class="btn btn-secondary btn-block btn-sm">See More</a>
                 </div>
                 <!--/card-body -->	
              </div>
              <!-- /card -->	
           </div>
           <!--/widget2 -->
        </div>
        <!--/widget-area -->
        <div class="widget-area">
           <h5 class="sidebar-header">Follow us</h5>
           <div class="contact-icon-info">
              <ul class="social-media text-center">
                 <!--social icons -->
                 <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                 <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
              </ul>
           </div>
           <!--/contact-icon-info -->
        </div>
        <!--/widget-area -->
        <div class="widget-area">
           <h5 class="sidebar-header">Our video</h5>
           <!-- video -->
           <div class="embed-responsive embed-responsive-4by3">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Xpnvug7Uwg8"></iframe>
           </div>
        </div>
        <!--/widget-area -->
        <div class="widget-area">
           <h5 class="sidebar-header">Our Mission</h5>
           <p class="text-center">Aliquam erat volutpat In id fermentum augue Maecenas at arcu risus. Donec com modo sodales ex.</p>
        </div>
        <!--/widget-area -->
     </div>
     <!--/sidebar -->   
  </div>
  <!-- /row -->
</div>
<!-- /page -->
@endsection