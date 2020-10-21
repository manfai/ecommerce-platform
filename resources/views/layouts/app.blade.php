<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- page title -->
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!--[if lt IE 9]>
      <script src="/js/respond.js"></script>
      <![endif]-->
      <!-- Font files -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700%7CMontserrat:400,500,600,700" rel="stylesheet">
      <link href="/fonts/flaticon/flaticon.css" rel="stylesheet" type="text/css">
      <link href="/fonts/fontawesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
      <!-- Fav icons -->
      <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
      <!-- Bootstrap core CSS -->
      <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- style CSS -->
      <link href="/css/style.css" rel="stylesheet">
      <!-- plugins CSS -->
      <link href="/css/plugins.css" rel="stylesheet">
      <!-- Colors CSS -->
      <link href="/styles/maincolors.css" rel="stylesheet">
	  <!-- LayerSlider CSS -->
      <link rel="stylesheet" href="/vendor/layerslider/css/layerslider.css">
      @stack('styles')

    </head>
    <!-- ==== body starts ==== -->
    <body id="top">
        <!-- Preloader  -->
        <div id="preloader">
         <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
               <div class="preloader-logo">
                  <!--logo -->
                  <img src="/img/logo.png" alt="" class="img-fluid">
                  <!--preloader circle -->
                  <div class="lds-ring">
                     <div></div>
                     <div></div>
                     <div></div>
                     <div></div>
                  </div>
               </div>
               <!--/preloader logo -->
            </div>
            <!--/row -->
         </div>
         <!--/container -->
        </div>
        <!--/Preloader ends -->
        @php 
         $open_hour = nova_get_setting('open_hour');
         $description = nova_get_setting('description');
         $address = nova_get_setting('address');
         $contact = nova_get_setting('contact');
        @endphp
        <nav id="main-nav" class="navbar-expand-xl fixed-top">
            <!-- Start Top Bar -->
            <div class="container-fluid top-bar" >
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <!-- Start Contact Info -->
                        <ul class="contact-details float-left">
                           <li><i class="fa fa-map-marker"></i>{{ $address?$address[LaravelLocalization::getCurrentLocale()]:'' }}</li>
                           <li><i class="fa fa-envelope"></i><a href="mailto:{{ $contact?$contact['email']:'' }}">{{ $contact?$contact['email']:'' }}</a></li>
                           <li><i class="fa fa-phone"></i>{{ $contact?$contact['phone_no']:'' }}</li>
                        </ul>
                        <!-- End Contact Info -->
                        <!-- Start Social Links -->
                        <ul class="social-list float-right list-inline">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                           @if($localeCode!==LaravelLocalization::getCurrentLocale())
                           <li class="list-inline-item">
                                 <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i style="font-size:16px;font-style: normal;">{{ $properties['native'] }}</i>
                                 </a>
                           </li>
                           @endif
                        @endforeach
                        </ul>
                        <!-- /End Social Links -->

                     </div>
                     <!-- col-md-12 -->
                  </div>
                  <!-- /row -->
               </div>
               <!-- /container -->
            </div>
            <!-- End Top bar -->
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
               <div class="container ">
                  <!-- logo -->
                  <a class="nav-brand" href="/">
                  <img src="/img/logo.png" alt="" class="img-fluid">
                  </a>
                  <!-- Navbartoggler -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                     <ul class="navbar-nav ml-auto">
                        <!-- menu item -->
                        <li class="nav-item active">
                           <a class="nav-link" href="{{route('welcome')}}">{{__('menu.home')}}
                           </a>
                        </li>
                        @if(nova_get_setting('allow_adoption'))
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="adopt-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{__('menu.adopt')}}
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="adopt-dropdown">
                              <a class="dropdown-item" href="/adoption">{{__('menu.list')}}</a>
                              <a class="dropdown-item" href="/adoption/stories">{{__('menu.stories')}}</a>
                           </div>
                        </li>
                        @endif
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="gallery-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{__('menu.shop')}}
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="gallery-dropdown">
                              <a class="dropdown-item" href="{{route('product',['type'=>'food'])}}">{{__('menu.food')}}</a>
                              <a class="dropdown-item" href="{{route('product',['type'=>'toys'])}}">{{__('menu.toys')}}</a>
                              <a class="dropdown-item" href="{{route('product',['type'=>'accessories'])}}">{{__('menu.accessories')}}</a>
                              <a class="dropdown-item" href="{{route('product',['type'=>'health'])}}">{{__('menu.health')}}</a>
                              <a class="dropdown-item" href="{{route('product',['type'=>'others'])}}">{{__('menu.others')}}</a>
                           </div>
                        </li>
                        <!-- menu item -->
                        <li class="nav-item">
                           <a class="nav-link" href="/contact">{{__('menu.contact')}}</a>
                        </li>
                        @guest
                        <!-- menu item -->
                        <li class="nav-item">
                           <a class="nav-link" href="/login">{{__('menu.login')}}</a>
                        </li>
                        @else 
                        <!-- menu item -->
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" id="contact-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           {{Auth::user()->name}} ( @auth {{Auth::user()->cartItems->count()}} @else 0 @endauth )
                           </a>
                           <div class="dropdown-menu pattern2" aria-labelledby="contact-dropdown">
                              <a class="dropdown-item" href="/home">{{__('menu.profile')}}</a>
                              <a class="dropdown-item" href="/your-pet">{{__('menu.yourpet')}}</a>
                              <a class="dropdown-item" href="/cart">{{__('menu.cart')}} (
                                 @auth {{Auth::user()->cartItems->count()}} @else 0 @endauth 
                                 )</a>
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('menu.logout')}}</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                              </form>
                           </div>
                        </li>
                        <!-- menu item -->
                        {{-- <li class="nav-item">
                           <a class="nav-link" href="/cart">Cart </a>
                        </li> --}}
                        @endguest
                        
                     </ul>
                     <!--/ul -->
                  </div>
                  <!--collapse -->
               </div>
               <!-- /container -->
            </div>
            <!-- /navbar -->
        </nav>
        <!-- /nav -->
        <!-- ==== Page Content ==== -->
        @yield('content')
        
        <!--/container-fluid-->
        <!-- ==== footer ==== -->
        <footer class="bg-light pattern5">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 text-center ">
                  <img src="/img/logo.png"  class="logo-footer img-fluid" alt=""/>
                  <!-- Start Social Links -->
                  <ul class="social-list text-center list-inline">
                     <li class="list-inline-item mt-3">
                        <select class="custom-select" id="currencySwitcher">
                           <option selected>Choose Currency</option>
                           <option value="HKD" {{\Session::get('currency')=='HKD'?'selected':''}}>HKD</option>
                           <option value="USD" {{\Session::get('currency')=='USD'?'selected':''}}>USD</option>
                           <option value="CNY" {{\Session::get('currency')=='CNY'?'selected':''}}>CNY</option>
                         </select>
                     </li>
                     {{-- <li class="list-inline-item"><a title="Facebook" href="https://www.facebook.com/tripodcats"><i class="fab fa-facebook-f"></i></a></li>
                     <li class="list-inline-item"><a title="Twitter" href="https://www.facebook.com/tripodcats"><i class="fab fa-twitter"></i></a></li>
                     <li class="list-inline-item"><a  title="Instagram" href="https://www.facebook.com/tripodcats"><i class="fab fa-instagram"></i></a></li> --}}
                  </ul>
                  <!-- /End Social Links -->
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>About us</h5>
                  <!--divider -->
                  <hr class="small-divider left"/>
                  <p class="mt-3">{{ $description?$description['LaravelLocalization::getCurrentLocale()']:'' }}</p>
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>Contact Us</h5>
                  <!--divider -->
                  <hr class="small-divider left"/>
                  <ul class="list-unstyled mt-3">
                     <li class="mb-1"><i class="fas fa-phone margin-icon "></i>{{ $contact?$contact['phone_no']:'' }}</li>
                     <li class="mb-1"><i class="fas fa-envelope margin-icon"></i><a href="mailto:{{ $contact?$contact['email']:'' }}">{{ $contact?$contact['email']:'' }}</a></li>
                     <li><i class="fas fa-map-marker margin-icon"></i>{{ $address?$address['LaravelLocalization::getCurrentLocale()']:'' }}</li>
                  </ul>
                  <!--/ul -->
               </div>
               <!--/ col-lg -->
               <div class="col-lg-3">
                  <h5>Working Hours</h5>
                  <!--divider -->
                  <hr class="small-divider left"/>
                  <ul class="list-unstyled mt-3">
                     <li class="mb-1">Open from {{ $open_hour?$open_hour['weekday']:__('Closed') }}</li>
                     <li class="mb-1">Holidays - {{ $open_hour?$open_hour['holiday']:__('Closed') }}</li>
                     <li>Weekends - {{ $open_hour?$open_hour['weekend']:__('Closed') }}</li>
                  </ul>
                  <!--/ul -->
               </div>
               <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr/>
            <div class="row">
               <div class="credits col-sm-12">
                  {{ nova_get_setting('copyright') }}
                  <!-- <p>Copyright <a href="/careers">{{date('Y')}}</a> / Powered by <a href="https://manfai.me">ManFai</a> / Designed by <a href="http://www.ingridkuhn.com">Ingrid Kuhn</a></p> -->
               </div>
            </div>
            <!--/col-lg-12-->
         </div>
         <!--/ container -->
         <!-- Go To Top Link -->
         <div class="page-scroll hidden-sm hidden-xs hidden-md hidden-lg hidden-xl d-none">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>
         <!--/page-scroll-->
        </footer>
        <!--/ footer-->
        <!-- Bootstrap core & Jquery -->
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>   
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


        <!-- Prefix free -->
        <script src="/js/prefixfree.min.js"></script><!-- number counter script -->
        <script src="/js/counter.js"></script>
        <!-- maps -->
        <script src="/js/map.js"></script>
        <!-- GreenSock -->
        <script src="/vendor/layerslider/js/greensock.js"></script>
        <!-- LayerSlider script files -->
        <script src="/vendor/layerslider/js/layerslider.transitions.js"></script>
        <script src="/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="/vendor/layerslider/js/layerslider.load.js"></script>
        <!-- Channel Plugin Scripts -->

         <!-- Custom Js -->
         <script src="/js/custom.js"></script>
         <script src="/js/plugins.js"></script>
      
        <script>
        (function() {
            var w = window;
            if (w.ChannelIO) {
            return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
            }
            var d = window.document;
            var ch = function() {
            ch.c(arguments);
            };
            ch.q = [];
            ch.c = function(args) {
            ch.q.push(args);
            };
            w.ChannelIO = ch;
            function l() {
            if (w.ChannelIOInitialized) {
                return;
            }
            w.ChannelIOInitialized = true;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
            s.charset = 'UTF-8';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
            }
            if (document.readyState === 'complete') {
            l();
            } else if (window.attachEvent) {
            window.attachEvent('onload', l);
            } else {
            window.addEventListener('DOMContentLoaded', l, false);
            window.addEventListener('load', l, false);
            }
        })();
        ChannelIO('boot', {
            "pluginKey": "eec378b1-5f62-4b48-a987-b8257abd50a7"
        });
        </script>
        <!-- End Channel Plugin -->

        @stack('scripts')

   </body>
</html>