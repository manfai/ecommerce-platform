@extends('layouts.app')

@section('content')
 <!-- ==== Slider ==== -->
 <div class="container-fluid p-0">
    <div id="slider" class="overlay-parallax-slider" style="width:1200px;height:650px;margin:0 auto;margin-bottom: 0px;">
    <!-- Slide 1 -->
    <div class="ls-slide overlay2" data-ls="duration:4000; transition2d:7;">
        <!-- bg image  -->
        <img src="https://i.pinimg.com/originals/4a/2e/ab/4a2eab7b0aca366b88a9afdb32108b90.jpg" class="ls-bg" alt="" />
        <!-- ls-l  -->
        <!-- 1200x376 -->
        <img width="500" src="https://pluspng.com/img-png/cat-png-cat-png-hd-1500.png" class="ls-l" alt="" style="top:196px; right:0
            %;" data-ls="offsetxin:10; offsetyin:120; durationin:1100; rotatein:5; transformoriginin:59.3% 80.3% 0; offsetxout:-80; durationout:400; parallax:true; parallaxlevel:-4;">
        <!-- text  -->
        <div class="ls-l header-wrapper" data-ls="offsetyin:150; durationin:700; delayin:200; easingin:easeOutQuint; rotatexin:20; scalexin:1.4; offsetyout:600; durationout:400; parallax:true; parallaxlevel:2;">
            <div class="header-text full-width text-light">
                <h1>Welcome to <span>{{ config('app.name', 'Laravel') }}</span></h1>
                <!--the div below is hidden on small screens  -->
                <div class="hidden-small">
                <p class="header-p">We offer the best services for your pets, contact us today and book a service</p>
                <a class="btn btn-primary " href="contact">Contact us</a>
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
                <h3>Quality & Experience </h3>
                <p>Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet
                    magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
            </div>
            <!-- /col-lg-->
            <div class="col-lg-3 justify-content-center align-self-center">
                <!-- button -->
                <a href="contact.html" class="btn btn-secondary" data-aos="zoom-out">Contact us</a>
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
                <img src="https://blog.mystart.com/wp-content/uploads/MyCats_56a911ad569e61c81ee96d52.jpeg" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">more info</p>
                        <h3 class="text-light">Our Services</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- /call-box -->
        <!-- call 2 -->
        <div class="call-box col-lg-4 p-0">
            <a href="about.html">
                <!-- image -->
                <img src="https://www.petfirst.com/wp-content/uploads/2019/06/shutterstock_230479120-1200x795.jpg" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">more info</p>
                        <h3 class="text-light">About us</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- /call-box -->
        <!-- call 3 -->
        <div class="call-box col-lg-4 p-0">
            <a href="team.html">
                <!-- image -->
                <img src="https://www.zooplus.co.uk/magazine/wp-content/uploads/2019/08/british-shorthair-green-eyes.jpg" alt="" class="center-block img-responsive">
                <div class="call-title">
                    <!-- call-info -->
                    <div class="call-info text-center">
                        <p class="subtitle text-light">more info</p>
                        <h3 class="text-light">Our Team</h3>
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
            <p class="subtitle">Hot Product</p>
            <h2>Top 10</h2>
        </div>
        <!-- /section-heading -->
    </div>
    <!-- owl carousel gallery  -->
    <div class="owl-stage owl-carousel owl-theme top-centered-nav magnific-popup mt-5">
        <div class="col-md-12 gallery-img hover-opacity">
            <!-- image -->
            <a href="img/gallery/gallery1.jpg" title="your caption here">
                <img src="img/gallery/gallery1.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
        <div class="col-md-12 gallery-img hover-opacity">
            <a href="img/gallery/gallery2.jpg" title="your caption here">
                <img src="img/gallery/gallery2.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
        <div class="col-md-12 gallery-img hover-opacity">
            <a href="img/gallery/gallery3.jpg" title="your caption here">
                <img src="img/gallery/gallery3.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
        <div class="col-md-12 gallery-img hover-opacity">
            <a href="img/gallery/gallery4.jpg" title="your caption here">
                <img src="img/gallery/gallery4.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
        <div class="col-md-12 gallery-img hover-opacity">
            <a href="img/gallery/gallery5.jpg" title="your caption here">
                <img src="img/gallery/gallery5.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
        <div class="col-md-12 gallery-img hover-opacity">
            <a href="img/gallery/gallery6.jpg" title="your caption here">
                <img src="img/gallery/gallery6.jpg" class="img-fluid rounded" alt="">
            </a>
        </div>
        <!-- /col-md-12 -->
    </div>
    <!-- /owl-carousel -->
</section>
<!-- /section ends -->
<!-- section -->
<section id="feature-section" class="bg-light pattern1">
    <div class="container">
        <!-- section heading -->
        <div class="section-heading text-center">
            <p class="subtitle">Benefits for you</p>
            <h2>Our Features</h2>
        </div>
        <!-- /section-heading -->
        <!-- features -->
        <div class="row text-lg-right">
            <div class="col-md-6 col-lg-3">
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-pet-lotion"></i>
                    </div>
                    <h5><strong>AI Suggestion</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-veterinarian-hospital"></i>
                    </div>
                    <h5><strong>Your Pet Info</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-dog-training-1"></i>
                    </div>
                    <h5><strong>Knowledge</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
            </div>
            <div class="col-md-6 col-lg-3 text-left pt-3 pt-sm-0 order-lg-12">
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-pet-shelter"></i>
                    </div>
                    <h5><strong>Housing</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-animal-1"></i>
                    </div>
                    <h5><strong>Adoption</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
                <!-- feature -->
                <div class="feature-with-icon">
                    <div class="icon-features">
                        <!-- icon -->
                        <i class="flaticon-pet"></i>
                    </div>
                    <h5><strong>Quality care</strong></h5>
                    <p>Etiam rhoncus leo a dolor placerat, nec elem entum ipsum convall.</p>
                </div>
                <!-- /feature-with-icon-->
            </div>
            <!-- /col-l -->
            <div class="text-center col-lg-5 mx-auto mt-3">
                <!--image  -->
                <img alt="" class="img-fluid rounded" src="https://s3.amazonaws.com/blog-123-bucket/wp-content/uploads/2020/01/13125525/123_design_blog_best_new_products_pet_teepee_6.jpg" data-aos="flip-right">
            </div>
            <!-- col-lg-  -->
        </div>
        <!-- /row-->
    </div>
    <!-- /container -->
</section>
<!-- /section ends -->
<!-- section -->
<section id="blogprev-home" class="overlay-dark bg-fixed">
    <div class="container">
        <!-- section heading -->
        <div class="section-heading text-center text-light">
            <p class="subtitle">keep updated</p>
            <h2>Latest Blog posts</h2>
        </div>
        <!-- /section-heading -->
        <!-- blog carousel -->
        <div class="carousel-3items owl-carousel owl-theme col-md-12">
            <!-- blog-box -->
            <div class="blog-box">
                <!-- image -->
                <a href="blog-single.html">
                    <div class="image"><img src="img/blog/blogstyle2-1.jpg" alt="" /></div>
                </a>
                <!-- blog-box-caption -->
                <div class="blog-box-caption">
                    <!-- date -->
                    <div class="date"><span class="day">12</span><span class="month">May</span></div>
                    <a href="blog-single.html">
                        <h4>What are the most nutritious cat foods?</h4>
                    </a>
                    <!-- /link -->
                    <p>
                        Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis...
                    </p>
                </div>
                <!-- blog-box-footer -->
                <div class="blog-box-footer">
                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Lauren Smith</a></div>
                    <div class="comments"><a href="blog-single.html"><i class="fas fa-comment"></i>23</a></div>
                    <!-- Button -->
                    <div class="text-center col-md-12">
                        <a href="blog-single.html" class="btn btn-primary ">Read more</a>
                    </div>
                </div>
                <!-- /blog-box-footer -->
            </div>
            <!-- /blog-box -->
            <!-- blog-box -->
            <div class="blog-box">
                <!-- image -->
                <a href="blog-single.html">
                    <div class="image"><img src="img/blog/blogstyle2-2.jpg" alt="" /></div>
                </a>
                <!-- blog-box-caption -->
                <div class="blog-box-caption">
                    <!-- date -->
                    <div class="date"><span class="day">28</span><span class="month">June</span></div>
                    <a href="blog-single.html">
                        <h4>How to train a dog not to jump on you</h4>
                    </a>
                    <!-- /link -->
                    <p>
                        Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis...
                    </p>
                </div>
                <!-- blog-box-footer -->
                <div class="blog-box-footer">
                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Jonas Doe</a></div>
                    <div class="comments"><a href="blog-single.html"><i class="fas fa-comment"></i>5</a></div>
                    <!-- Button -->
                    <div class="text-center col-md-12">
                        <a href="blog-single.html" class="btn btn-primary ">Read more</a>
                    </div>
                </div>
                <!-- /blog-box-footer -->
            </div>
            <!-- /blog-box -->
            <!-- blog-box -->
            <div class="blog-box">
                <!-- image -->
                <a href="blog-single.html">
                    <div class="image"><img src="img/blog/blogstyle2-3.jpg" alt="" /></div>
                </a>
                <!-- blog-box-caption -->
                <div class="blog-box-caption">
                    <!-- date -->
                    <div class="date"><span class="day">02</span><span class="month">July</span></div>
                    <a href="blog-single.html">
                        <h4>How do you get rid of cat allergies?</h4>
                    </a>
                    <!-- /link -->
                    <p>
                        Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis...
                    </p>
                </div>
                <!-- blog-box-footer -->
                <div class="blog-box-footer">
                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Lauren Smith</a></div>
                    <div class="comments"><a href="blog-single.html"><i class="fas fa-comment"></i>10</a></div>
                    <!-- Button -->
                    <div class="text-center col-md-12">
                        <a href="blog-single.html" class="btn btn-primary ">Read more</a>
                    </div>
                </div>
                <!-- /blog-box-footer -->
            </div>
            <!-- /blog-box -->
            <!-- blog-box -->
            <div class="blog-box">
                <!-- image -->
                <a href="blog-single.html">
                    <div class="image"><img src="img/blog/blogstyle2-4.jpg" alt="" /></div>
                </a>
                <!-- blog-box-caption -->
                <div class="blog-box-caption">
                    <!-- date -->
                    <div class="date"><span class="day">18</span><span class="month">June</span></div>
                    <a href="blog-single.html">
                        <h4>10 Reasons to adopt a senior dog</h4>
                    </a>
                    <!-- /link -->
                    <p>
                        Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis...
                    </p>
                </div>
                <!-- blog-box-footer -->
                <div class="blog-box-footer">
                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Jonas Doe</a></div>
                    <div class="comments"><a href="blog-single.html"><i class="fas fa-comment"></i>11</a></div>
                    <!-- Button -->
                    <div class="text-center col-md-12">
                        <a href="blog-single.html" class="btn btn-primary ">Read more</a>
                    </div>
                </div>
                <!-- /blog-box-footer -->
            </div>
            <!-- /blog-box -->
            <!-- blog-box -->
            <div class="blog-box">
                <!-- image -->
                <a href="blog-single.html">
                    <div class="image"><img src="img/blog/blogstyle2-5.jpg" alt="" /></div>
                </a>
                <!-- blog-box-caption -->
                <div class="blog-box-caption">
                    <!-- date -->
                    <div class="date"><span class="day">22</span><span class="month">May</span></div>
                    <a href="blog-single.html">
                        <h4>Will my pet adapt to a new home?</h4>
                    </a>
                    <!-- /link -->
                    <p>
                        Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec
                        commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna nec lobortis...
                    </p>
                </div>
                <!-- blog-box-footer -->
                <div class="blog-box-footer">
                    <div class="author">Posted by<a href="#"><i class="fas fa-user"></i>Lauren Smith</a></div>
                    <div class="comments"><a href="blog-single.html"><i class="fas fa-comment"></i>23</a></div>
                    <!-- Button -->
                    <div class="text-center col-md-12">
                        <a href="blog-single.html" class="btn btn-primary ">Read more</a>
                    </div>
                </div>
                <!-- /blog-box-footer -->
            </div>
            <!-- /blog-box -->
        </div>
        <!-- /owl-carousel -->
    </div>
    <!-- /container -->
</section>
<!-- /section ends-->
<!-- section-->
<section id="contact-home" class="container-fluid">
    <!-- section heading -->
    <div class="section-heading text-center">
        <p class="subtitle">Get in touch</p>
        <h2>Contact us</h2>
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
                    <h4 class="text-center mt-3 text-light">Send us a message</h4>
                    <!-- Form Starts -->
                    <div id="contact_form">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" name="name" class="form-control input-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label>Email address <span class="required">*</span></label>
                                    <input type="email" name="email" class="form-control input-field" required="">
                                </div>
                                <div class="col-md-12">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control input-field">
                                </div>
                                <div class="col-md-12">
                                    <label>Message<span class="required">*</span></label>
                                    <textarea name="message" id="message" class="textarea-field form-control" rows="3"
                                        required=""></textarea>
                                </div>
                            </div>
                            <!-- button -->
                            <button type="submit" id="submit_btn" value="Submit"
                                class="btn btn-quaternary btn-block mt-3">Send message</button>
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
                <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum
                    convall.</p>
                <!-- contact icons-->
                <ul class="list-inline mt-3 list-contact colored-icons font-weight-bold">
                    <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a
                            href="mailto:email@tripod-cat.com">email@tripod-cat.com</a></li>
                    <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(123) 456-789</li>
                    <li class="list-inline-item"><i class="fa fa-map-marker margin-icon"></i>Pet Street 123 - New York
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
    <div class="col-lg-5 text-light text-center">
        <h4>Subscribe to our newsletter</h4>
        <p>We send e-mails once a month, we never send Spam!</p>
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
