@extends('layouts.app')

@section('content')
	  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid" data-center="background-size: 100%;"
         data-top-bottom="background-size: 110%;">
         <div class="container" >
            <!-- jumbo-heading -->
            <div class="jumbo-heading" data-aos="fade-up">
               <h1>Contact</h1>
               <!-- Breadcrumbs -->
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
      <div class="page">
         <div class="container">
            <div class="row">
               <!-- contact box -->  
               <div class="col-lg-4 contact-form3 bg-light h-100">
                  <div class="contact-image bg-light">
                     <!-- envelope icon-->
                     <i class="fas fa-envelope bg-light"></i>
                  </div>
                  <h5 class="text-center mt-3">Send us a message</h5>
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
                              <textarea name="message" id="message" class="textarea-field form-control" rows="3"  required=""></textarea>
                           </div>
                        </div>
                        <!-- button -->
                        <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary btn-block mt-3">Send message</button>
                     </div>
                     <!-- /form-group-->
                     <!-- Contact results -->
                     <div id="contact_results"></div>
                  </div>
                  <!-- /contact-form-->
               </div>
               <!-- /col-lg-->
               <div class="col-lg-7 offset-lg-1 res-margin">
                  <h4>Contact Information</h4>
                  <p>In aliquet magna nec lobortis maximus. Etiam rhoncus leo a dolor placerat, nec elementum ipsum convall.</p>
                  <p>
                     <!-- contact icons-->
                  <ul class="list-inline mt-3 list-contact colored-icons">
                     <li class="list-inline-item"><i class="fa fa-envelope margin-icon"></i><a href="mailto:info@tripod-cats.com<">info@tripod-cats.com</a></li>
                     <li class="list-inline-item"><i class="fa fa-phone margin-icon"></i>(852) 9351-7034</li>
                     <li class="list-inline-item" ><i class="fa fa-map-marker margin-icon"></i>Wong Chuk Hang - Hong Kong</li>
                  </ul>
                  <!-- /list-->
                  <!-- map-->
                  <div id="map-canvas" class="mt-5"></div>
                  <!-- /map-->
               </div>
               <!-- /col-lg- -->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </div>
      <!-- /page -->
      <!-- ==== Newsletter - call to action ==== -->
      <div class="container-fluid footer-bg block-padding overlay">
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
      <!--/container-fluid-->	  
@endsection