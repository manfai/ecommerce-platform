@extends('layouts.app')
@push('styles')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
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

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        bottom: 4rem;
        z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 80vh;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }

    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

    }




    /*
 * Dummy devices (replace them with your own or something else entirely!)
 */

    .product-device {
        position: absolute;
        right: 10%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        -webkit-transform: rotate(30deg);
        transform: rotate(30deg);
    }

    .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
        background-color: rgba(255, 255, 255, .1);
        border-radius: 5px;
    }

    .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
    }


    /*
 * Extra utilities
 */

    .flex-equal>* {
        -ms-flex: 1;
        flex: 1;
    }

    @media (min-width: 768px) {
        .flex-md-equal>* {
            -ms-flex: 1;
            flex: 1;
        }
    }

    .overflow-hidden {
        overflow: hidden;
    }

    #category a{
        text-decoration: none;
    }
    .category-card {
        height:500px;
    }
    /* .category-card .hover{
        display: none;
    } */
    .category-card .hover{
        display: block!important;
        background:#596275;
    }

</style>
@endpush
@section('content')
<section id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#596275"></rect>
            </svg>

            <div class="container">
                <div class="carousel-caption text-left">
                    <h1 class="text-uppercase">Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#596275"></rect>
            </svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1 class="text-uppercase">Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                <rect width="100%" height="100%" fill="#596275"></rect>
            </svg>
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1 class="text-uppercase">One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-outline-light" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<section id="category" class="w-100">
    
    <div class="d-md-flex flex-md-equal w-100">
        <a href="{{ route('product') }}">
            <div class="category-card bg-dark py-3 px-3 py-md-5 px-md-5 text-center text-white overflow-hidden" style="min-height:40vw;background:url(http://vorm.io/wp-content/uploads/2016/05/LOVELY-bed-03-App-screen_AdobeRGB.jpg) center;background-size:cover">
                <!-- <div class="jumbotron jumbotron-fluid h-100 mb-0">
                    <div class="container align-self-center">
                        <h1 class="display-4">Fluid jumbotron</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                </div> -->
            </div>
        </a>
        <a href="{{ route('product') }}">
            <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="min-height:40vw;background:url(https://static.dezeen.com/uploads/2018/08/fin-dame-design-sex-toy-usa_dezeen_2364_col_7.jpg) bottom;background-size:cover">
                <div class="my-3 p-3">
                    <!-- <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p> -->
                </div>
            </div>
        </a>
    </div>
    <div class="d-md-flex flex-md-equal w-100">
        <a href="{{ route('product') }}">
            <div class="bg-light pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="min-height:40vw;background:url(https://static.dezeen.com/uploads/2019/01/lora-dicarlo-sex-toy-design-hero-1.jpg) bottom;background-size:cover">
                <div class="my-3 p-3">
                    <!-- <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p> -->
                </div>
            </div>
        </a>
        <a href="{{ route('product') }}">
            <div class="bg-dark pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="min-height:40vw;background:url(http://vorm.io/wp-content/uploads/2016/10/LOVELY-07Sep2016-17_sRGB.jpg) bottom;background-size:cover">
                <div class="my-3 py-3">
                    <!-- <h2 class="display-5">Another headline</h2>
                    <p class="lead">And an even wittier subheading.</p> -->
                </div>
            </div>
        </a>
    </div>
</section>
@endsection
