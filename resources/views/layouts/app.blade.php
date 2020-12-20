<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!-- <style>
  

    body {
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        color: #9a9a9a;
    }

    body .testimonial {
        padding: 100px 0;
    }

    body .testimonial .row .tabs {
        all: unset;
        margin-right: 50px;
        display: flex;
        flex-direction: column;
    }

    body .testimonial .row .tabs li {
        all: unset;
        display: block;
        position: relative;
    }

    body .testimonial .row .tabs li:nth-child(1) {
        align-self: flex-end;
    }

    body .testimonial .row .tabs li:nth-child(1)::before {
        left: 64%;
        bottom: -50px;
    }

    body .testimonial .row .tabs li:nth-child(1)::after {
        right: 97%;
        bottom: -81px;
    }

    body .testimonial .row .tabs li:nth-child(1) figure img {
        margin-left: auto;
    }

    body .testimonial .row .tabs li:nth-child(2) {
        align-self: flex-start;
    }

    body .testimonial .row .tabs li:nth-child(2)::before {
        right: -65px;
        top: 50%;
    }

    body .testimonial .row .tabs li:nth-child(2)::after {
        bottom: 101px;
        border-radius: 50%;
        right: -120px;
    }

    body .testimonial .row .tabs li:nth-child(2) figure img {
        margin-right: auto;
        max-width: 300px;
        width: 100%;
        margin-top: -50px;
    }

    body .testimonial .row .tabs li:nth-child(3) {
        align-self: flex-end;
    }

    body .testimonial .row .tabs li:nth-child(3)::before {
        right: -10px;
        top: -66%;
    }

    body .testimonial .row .tabs li:nth-child(3)::after {
        top: -130px;
        border-radius: 50%;
        right: -46px;
    }

    body .testimonial .row .tabs li:nth-child(3) figure img {
        margin-left: auto;
        margin-top: -50px;
    }

    body .testimonial .row .tabs li:nth-child(3):focus {
        border: 10px solid red;
    }

    body .testimonial .row .tabs li figure {
        position: relative;
    }

    body .testimonial .row .tabs li figure img {
        display: block;
    }

    body .testimonial .row .carousel>h3 {
        font-size: 20px;
        line-height: 1.45;
        color: rgba(0, 0, 0, 0.5);
        font-weight: 600;
        margin-bottom: 0;
    }

    body .testimonial .row .carousel h1 {
        font-size: 40px;
        line-height: 1.225;
        margin-top: 23px;
        font-weight: 700;
        margin-bottom: 0;
    }

    body .testimonial .row .carousel .carousel-indicators {
        all: unset;
        padding-top: 43px;
        display: flex;
        list-style: none;
    }

    body .testimonial .row .carousel .carousel-indicators li {
        background: #000;
        background-clip: padding-box;
        height: 2px;
    }

    body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
        margin-top: 42px;
    }

    body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
        font-size: 18px;
        line-height: 1.72222;
        font-weight: 500;
        color: rgba(0, 0, 0, 0.7);
    }

    body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
        color: #000;
        font-weight: 700;
        margin-top: 37px;
        font-size: 20px;
        line-height: 1.45;
        text-transform: uppercase;
    }
</style> -->
<style>
    * {
        transition: all 0.2s ease-in-out;
    }

    html {
        scroll-behavior: smooth;
    }
.bg-success{
    background-color: #FFCCCB!important;

}

    .tbgrid {
        display: grid;
        grid-gap: 10px;
        margin-left: 8%;
        margin-right: 8%;
        /* justify-content: center; */
        width: auto;

    }
    .colorvalue{
        background-color:#EAECEE;
        color: black;
    }

    .auto-tbfill {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        
    }

    .h1gradient {
        color: #111;
        font-family: 'Helvetica Neue', sans-serif;
        /* font-size: 275px; */
        font-weight: bold;
        letter-spacing: -1px;
        line-height: 1;
        text-align: center;
        font-size: 160px;
        background: linear-gradient(to right, #30CFD0 0%, #330867 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .linecolorh2 {
        background-image: linear-gradient(to right, whitesmoke, #008000);
        width: 40%;
        text-align: left;
        margin-left: 0;
    }

    .linecolorh1 {
        background-image: linear-gradient(to right, red 80%, whitesmoke);
        width: 40%;
        text-align: left;
        margin-left: 0;
    }

    .linehr {
        border-width: 4px;

    }

    .cardleftdown {
        /* margin-top: 100px; */
    }

    .borderleft {
        border-left: 5px solid #30CFD0;
        height: 2px;

    }

    .borderright {
        border-left: 5px solid #330867;
        height: 2px;

    }

    .linehrcenter {
        border-width: 2px;
    }

    .linecolorhr_about {
        background-image: linear-gradient(to right, #273443 60%, whitesmoke);
        width: 10%;
        text-align: left;
        margin-left: 0;
    }

    .linehr_about {
        border-width: 2px;

    }

    .pointerscrollup {
        cursor: pointer;
    }

    .navbar-nav {
        font-size: 1rem;
        font-family: 'Source Sans Pro', sans-serif;
    }

    .borderradius1 {
        /* border-radius: 50%; */
        /* margin: -20px -20px 20px -20px; */
        border-radius: 160px 160px 0px 160px;

    }

    .borderradius2 {
        /* border-radius: 50%; */
        /* margin: -20px -20px 20px -20px; */
        border-radius: 0px 160px 160px 160px;

    }

    .btnsend,
    .btnsend:hover,
    .btnsend:active,
    .btnsend:visited {
        outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: #236E96;
        color: whitesmoke;
    }

    .btncontact,
    .btncontact:hover,
    .btncontact:active,
    .btncontact:visited {
        outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: #236E96;
        color: whitesmoke;
    }

    .btncontact:visited{
   outline: none !important;
        /* background-color: rgb(208, 192, 74); */
        background-color: red;
        color: whitesmoke;
    }
</style>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" style="font-size:xx-large;"><b>A</b>SO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{Request::is ('home') ? 'active' : ''}}">
                            <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/testiminial">Testimonials</a>
                        </li> -->
                        <li class="nav-item {{Request::is ('about') ? 'active' : ''}}">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item {{Request::is ('contact') ? 'active' : ''}}">
                            <a class="nav-link" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>

        <!-- <section class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ol class="carousel-indicators tabs">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-01-179x179.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-02-306x306.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">
                                <figure>
                                    <img src="https://livedemo00.template-help.com/wt_62267_v8/prod-20823-one-service/images/testimonials-03-179x179.png" class="img-fluid" alt="">
                                </figure>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                            <h3>WHAT OUR CLIENTS SAY</h3>
                            <h1>TESTIMONIALS</h1>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="quote-wrapper">
                                        <p>I have tried a lot of food delivery services but Plate is something out of this world! Their food is really healthy and it tastes great, which is why I recommend this company to all my friends!</p>
                                        <h3>peter lee</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol> -->
        <!-- </div>
    </div>
    </div>
    </div> -->
        <!-- </section> -->
        <br />


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-2">
                    <h5 class="text-uppercase"> <i class="fas fa-globe-africa col d-flex justify-content-center pb-3" style="font-size:38px;color:#236E96;"></i>
                    </h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                    <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/about" class="text-dark">About Us</a>
                        </li>
                        <li class="{{Request::is ('contact') ? 'active' : ''}}">
                            <a href="/contact" class="text-dark">Contact Us</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark">T&Cs</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us</h5>
                    <ul class="nav justify-content-center list-unstyled mb-0">
                        <li>
                            <a class="nav-link" href="#"> <i class="fa fa-facebook-f" style="font-size:20px;color:#236E96;"></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#"> <i class="fa fa-google" style="font-size:20px;color:#236E96;"></i>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
            <i class='fas fa-arrow-alt-circle-up float-right pointerscrollup' onclick="scrollToTop()" style='font-size:38px;color:#002760'></i>
        </div>
        <!-- <footer class="text-light text-center text-lg-start" style="background-color: #236E96;"> -->

        <!-- Copyright -->
        <div class="text-light text-center p-3 " style="background-color: #236E96;">
            © 2020 Copyright:
            <a class="text-light" href="#">aso.cg</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
        function scrollToTop() {
            $(window).scrollTop(0);
        }
    </script>
</body>

</html>