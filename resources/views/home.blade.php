@extends('layouts.app')

@push('styles')
<style>
    .card-header {
        background: #55595c;
    }

    .bd-placeholder-img {
        font-size: 0.624rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

</style>
@endpush
@section('content')

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;background:url('/img/banner.jpg') center;"
    data-top-bottom="background-size: 110%;">
    <div class="container">
        <div class="jumbo-heading" data-aos="fade-up">
            <!-- jumbo-heading -->
            <h1>Account</h1>
            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Account</li>
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
<div id="product-home" class="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 page-with-sidebar mb-5">
                <h3 class="elements-subheader mt-0">Orders History</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="elements-subheader">Nav tabs</h3>
                <!-- navigation -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">tab1</a>
                    <a class="nav-item nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab"  aria-selected="false">tab2</a>
                    </div>
                </nav>
                <!-- tab-content -->
                <div class="tab-content block-padding" id="nav-tabContent">
                    <div class="tab-pane  fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <!-- row -->
                    <div class="row">
                        <h3>tab1 header</h3>
                        <!--divider -->
                        <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                    </div>
                    <!-- row -->
                    </div>
                    <!-- ./Tab-pane -->
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <!-- row -->
                    <div class="row">
                        <h3>tab2 header</h3>
                        <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                    </div>
                    <!-- /row -->
                    </div>
                    <!-- ./Tab-pane -->
                </div>
                <!-- ./Tab-content -->
            </div>
             <!-- /page-with-sidebar -->
            <!-- ==== Sidebar ==== -->
            <div id="sidebar" class="bg-light h-100 col-lg-3 card pattern3">
                <!--widget-area -->
                <div class="widget-area">
                   <h5 class="sidebar-header">Profile</h5>
                   <!-- event 1 -->		 
                   <div class="widget2">
                      <div class="card" >
                         <div class="card-img">
                            <!-- image  -->	
                            <a href="team.html">
                                <div class="card-img-top text-center pt-4">
                                    <img class=" rounded-circle" src="img/avatar.png" style="height:100px">
                                </div>
                            </a>
                         </div>
                         <div class="card-body text-center">
                            <!--  info -->	
                            <a href="team.html">
                               <h6 class="card-title">{{Auth::user()->name}}</h6>
                            </a>
                            <!-- button -->	
                            <a href="team.html" class="btn btn-secondary btn-block btn-sm">LogOut</a>
                         </div>
                         <!--/card-body -->	
                      </div>
                      <!-- /card -->	
                   </div>
                   <!--/widget2 -->
                   <!--/widget-area -->
               <div class="widget-area">
                <h5 class="sidebar-header">Your Pet</h5>
                <div class="widget1">
                   <!-- widget info 1 -->
                   <div class="col-lg-12">
                      <a href="#">
                         <div class="widget-1-info">
                            <!-- image -->
                            <img src="img/adoption/adoption2.jpg"  alt="" class="img-fluid rounded">
                            <span>Barcode</span>           
                         </div>
                      </a>
                   </div>
                   <!-- /col-lg-12 -->
                   <div class="text-center">
                      <a href="adoption.html" class="btn btn-primary btn-sm">Add Your Pet</a>
                   </div>
                </div>
                <!-- /widget1 -->
             </div>
             <!-- /widget-area -->
                </div>
  
             </div>
             <!--/sidebar -->   
            <div class="d-none col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header text-light text-uppercase pt-5">
                        <svg class="bd-placeholder-img" width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 50x50">
                            <title>A generic square placeholder image with a white border around it, making it resemble
                                a photograph taken with an old instant camera</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                dy=".3em">50x50</text>
                        </svg>
                        &nbsp;&nbsp;Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
                        <p class="card-text">
                            Welcome, {{ Auth::user()->name }}.
                            <br>
                            You have 13 Coins
                        </p>
                        <p><small class="text-muted">Updated 12 Mar, 2019</small></p>
                        <a href="#" class="btn btn-outline-primary">Shipping Address</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="random-product" class="container-fluid pl-0 pr-0">
        <div class="container text-center">
            <!-- section heading -->
                <h2>Fave Product</h2>
            <!-- /section-heading -->
        </div>
        <!-- owl carousel gallery  -->
        <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
            @foreach($products as $product)
            <div class="col-md-12 gallery-img hover-opacity">
            <!-- image -->
            <a href="{{ $product->image_url }}" title="{{ $product->name }}">
                <img src="{{ $product->image_url }}" class="img-fluid rounded" alt="">
                <h5>{{$product->name}}</h5>
            </a>
            </div>
            @endforeach
        </div>
        <!-- /owl-carousel -->
    </section>

</div>

@endsection
