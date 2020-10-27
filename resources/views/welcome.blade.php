@extends('layouts.app')

@section('content')
 <!-- ==== Slider ==== -->
 <div class="container-fluid p-0">
    <div id="slider" class="overlay-parallax-slider" style="width:1200px;height:650px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1 -->
    <div class="ls-slide overlay2" data-ls="duration:4000; transition2d:7;">
        <!-- bg image  -->
        <img src="https://www.ikea.com/images/a-tabby-cat-peeks-out-a-gray-lurvig-cat-house-surrounded-by--069e85213bd9cbb8a4b9d437f611dc22.jpg?f=s" class="ls-bg" alt="" />
        <!-- ls-l  -->
        <!-- 1200x376 -->
        <img width="500" src="https://pluspng.com/img-png/cat-png-cat-png-hd-1500.png" class="ls-l" alt="" style="top:196px; right:0%;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:-4;">
        <!-- text  -->
        <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallax:true; parallaxlevel:2;">
            <div class="header-text full-width text-light">
                <h1>{!! __('welcome.title') !!}</h1>
                <!--the div below is hidden on small screens  -->
                <div class="hidden-small">
                <p class="header-p">{{ __('welcome.slogan')}}</p>
                <a class="btn btn-primary" href="{{route('category')}}">{{__('welcome.shop_now')}}</a>
                </div>
                <!--/d-none  -->
            </div>
            <!-- header-text  -->
        </div>
        <!-- ls-l  -->
    </div>
    <!-- ls-slide -->
    </div>
    <!-- /slider -->
</div>
<!-- /container-fluid -->
<!-- section -->
<section id="intro-home" class="container-fluid bg-light pattern4-right">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-9">
                <h3>{{ __('welcome.introduction.title') }}</h3>
                <p>{{ __('welcome.introduction.subtitle') }}</p>
            </div>
            <!-- /col-lg-->
            <div class="col-lg-3 justify-content-center align-self-center">
                <!-- button -->
                <a href="contact.html" class="btn btn-secondary" data-aos="zoom-out">{{__('welcome.introduction.shop_now')}}</a>
            </div>
            <!-- /col-lg-->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>
<!-- /section ends -->
<!-- section -->
<section id="call-widget" class="container-fluid pt-0 pb-0">
    <div class="row p-0">
        <!-- call 1 -->
        <div class="call-box col-lg-4 p-0">
            <a href="services.html">
                <!-- image -->
                <img src="https://www.ikea.com/us/en/images/products/lurvig-scratching-mat-natural__0912165_PE644310_S5.JPG?f=xxl" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">{{__('welcome.more_info')}}</p>
                        <h3 class="text-light">{{__('welcome.about_us')}}</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- /call-box -->
        <!-- call 2 -->
        <div class="call-box col-lg-4 p-0">
            <a href="about.html">
                <!-- image -->
                <img src="https://www.ikea.cn/images/yi1-zhi1-mao2-rong2-rong2-de-bai2-se4-xiao3-mao1-zheng4-zai4-db5348c807ba023101c69419bf5ac0e5.jpg?f=xxxl" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">{{__('welcome.more_info')}}</p>
                        <h3 class="text-light">{{__('welcome.latest_news')}}</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- /call-box -->
        <!-- call 3 -->
        <div class="call-box col-lg-4 p-0">
            <a href="team.html">
                <!-- image -->
                <img src="https://www.ikea.cn/images/yi1-zhi1-mao2-rong2-rong2-de-bai2-se4-xiao3-mao1-zai4-lurvig-4ff19d44419495a557d162a78bf4be6a.jpg?f=s" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">{{__('welcome.more_info')}}</p>
                        <h3 class="text-light">{{__('welcome.delivery')}}</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- /call-box -->
    </div>
    <!-- /row -->
</section>
<!-- /section-->
<!-- section -->
<section id="gallery-home" class="container-fluid pl-0 pr-0">
    
    <div class="container">
        <!-- section heading -->
        <div class="section-heading text-center">
            <p class="subtitle">{{__('welcome.products.subtitle')}}</p>
            <h2>{{__('welcome.products.title')}}</h2>
        </div>
        <!-- /section-heading -->
    </div>

     <!-- /gallery-isotope -->
    <!-- owl carousel gallery  -->
   <div class="container">
        <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
            @foreach(\App\Models\Product::all()->random(10) as $product)
            <div class="col-md-12 gallery-img hover-opacity">
            <!-- image -->
            <a href="{{ $product->image_url }}" title="{{ $product->name }}">
                <img src="{{ $product->image_url }}" class="img-fluid rounded" alt="">
                <h5>{{$product->name}}</h5>
            </a>
            </div>
            @endforeach
        </div>
   </div>
    <!-- /owl-carousel -->
</section>
<!-- /section ends -->
@if(config('global.adoption')=='true')
<!-- section -->
<section id="adoption-home" class="container-fluid pl-0 pr-0 overlay-dark bg-fixed" style="background:url('https://img.made.com/image/upload/c_pad,d_made.svg,f_auto,w_1320,dpr_1.0,q_auto:best/v4/catalog/product/catalog/2/c/6/5/2c6514e4983b6e67d1261535558857fb73b7f5cd_PETTER001GRE_UK_Terri_Teepee_Pet_house_Grey_and_Mustard_LB02.jpg')">
    <!-- section heading -->  
    <div class="section-heading text-center text-light mb-5">
       <p class="subtitle">Why buy when you can adopt</p>
       <h2>Adoption</h2>
    </div>
    <!-- /section-heading -->
    <div class="container mt-3">
       <div class="col-lg-10 offset-lg-1 text-center text-light">
          <h3>Adopting is an act of <span class="text-tertiary">love</span></h3>
          <p class="h7">Don't let "adoption instead of buying" just a slogan</p>
          <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id Maecenas at arcu ro In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
       </div>
       <!-- /col-lg -->
       <!-- Carousel  -->
       <div class="col-md-12 carousel-2items owl-carousel owl-theme">
          @foreach(\App\Models\Adoption::all()->random(5) as $adoption)
          <!-- Adopt 1 -->
          <div class="adopt-card res-margin row bg-light pattern2">
             <div class="col-md-5">
                <!-- Image -->
                <div class="adopt-image d-flex flex-wrap align-items-center ">
                   <a href="adoption-single.html">
                   <img src="{{$adoption->image}}" class="img-fluid" alt="">
                   </a>
                </div>
             </div>
             <div class="col-md-7 res-margin">
                <!-- Name -->
                <div class="caption-adoption">
                   <h5 class="adoption-header"><a href="adoption-single.html">{{$adoption->name}}</a></h5>
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
                   <a href="adoption-single.html" class="btn btn-primary">More Info</a>
                </div>
                <!-- /text-center -->
             </div>
             <!-- /col-md -->
          </div>
          <!-- /adopt-card -->
          @endforeach
       </div>
       <!-- /carousel --> 
       <div class="col-lg-12 text-center">
          <!-- button --> 
          <a href="/adoption" class="btn btn-secondary mt-3">See adoption gallery</a>
       </div>
       <!-- /col-lg -->
    </div>
    <!-- /container-->
</section>
<!-- /section ends -->
@endif

 <!-- section-->
<section id="contact-home" class="container-fluid">
    <!-- section heading -->
    <div class="section-heading text-center">
        <p class="subtitle">{{__('contact.subtitle')}}</p>
        <h2>{{__('contact.title')}}</h2>
    </div>
    <!-- /section-heading -->
    <div class="container">
        <div class="row">
            <!-- image -->
            <img src="https://www.ingridkuhn.com/themes/unitedpets/boxed/img/contactbg1.png" class="img-fluid contact-home-img hidden-medium-small" alt="">
            <!-- contact box -->
            <div class="col-lg-5 offset-lg-2 h-100">
                <div class="contact-form3 bg-secondary" data-aos="flip-right">
                    <div class="contact-image bg-secondary">
                        <!-- envelope icon-->
                        <i class="fas fa-envelope bg-secondary"></i>
                    </div>
                    <h4 class="text-center mt-3 text-light">{{__('contact.send_message')}}</h4>
                    <!-- Form Starts -->
                    <div id="contact_form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>{{__('contact.name')}}<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control input-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label>{{__('contact.email_address')}} <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control input-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label>{{__('contact.subject')}}</label>
                                    <input type="text" name="subject" class="form-control input-field">
                                </div>
                                <div class="col-md-12">
                                    <label>{{__('contact.message')}}<span class="required">*</span></label>
                                    <textarea name="message" id="message" class="textarea-field form-control" rows="3"
                                        required=""></textarea>
                                </div>
                            </div>
                            <!-- button -->
                            <button type="submit" id="submit_btn" value="Submit"
                                class="btn btn-quaternary btn-block mt-3">{{__('contact.send_button')}}</button>
                        </div>
                        <!-- /form-group-->
                        <!-- Contact results -->
                        <div id="contact_results"></div>
                    </div>
                    <!-- /contact-form-->
                </div>
            </div>
            <!-- /col-lg-->
            <div class="text-center col-lg-5 res-margin">
                <h3>Get in Touch</h3>
                <p>We actively search for and develop high-quality products to enjoy original authentic and high-quality pet food products for all breeders in Hong Kong!</p>
                <!-- contact icons-->
                <ul class="list-inline mt-3 list-contact colored-icons font-weight-bold">
                    <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a
                            href="mailto:{{ config('global.contact_email') }}">{{ config('global.contact_email') }}</a></li>
                    <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>{{ config('global.contact_number') }}</li>
                    <li class="list-inline-item"><i class="fa fa-map-marker margin-icon"></i>{{ config('global.contact_location').' - '.config('global.country') }}
                    </li>
                </ul>
                <!-- /list-->
                <!--divider-->
                <hr class="mt-2">
                <!-- map-->
                <div id="map-canvas" class="mt-5"></div>
            </div>
        </div>
        <!-- /row-->
    </div>
    <!-- /container-->
</section>
<!-- /section -->


<!-- ==== Newsletter - call to action ==== -->
<div class="container-fluid footer-bg block-padding overlay" style="background:url('https://www.spacesworks.com/wp-content/uploads/2017/08/Spaces-design-coloring-pencils-detail-nw-946x553.jpg') center; background-size:100%">
    <div class="container">
    <div class="col-lg-7 text-light text-left">
        <h4>{{__('welcome.subscribe.title')}} </h4>
        <p>{{__('welcome.subscribe.subtitle')}}</p>
        <!-- Form -->				
        <div id="mc_embed_signup" >
            <!-- your form address in the line bellow -->
            <form action="//yourlist.us12.list-manage.com/subscribe/post?u=04e646927a196552aaee78a7b&id=111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                <div class="mc-field-group">
                    <div class="input-group">
                        <input class="form-control border2 input-lg required email" type="email" value="" name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                        <span class="input-group-btn">
                        <button class="btn btn-primary btn-sm" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                        </span>
                    </div>
                    <!-- Subscription results -->
                    <div id="mce-responses" class="mailchimp">
                        <div class="alert alert-danger response" id="mce-error-response"></div>
                        <div class="alert alert-success response" id="mce-success-response"></div>
                    </div>
                </div>
                <!-- /mc-fiel-group -->									
                </div>
                <!-- /mc_embed_signup_scroll -->
            </form>
            <!-- /form ends -->								
        </div>
        <!-- /mc_embed_signup -->
    </div>
    <!--/ col-lg-->
    </div>
    <!--/ container-->
</div>
@endsection
