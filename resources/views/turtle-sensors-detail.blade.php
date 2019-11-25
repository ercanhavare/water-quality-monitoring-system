<!DOCTYPE html>
<html lang="en">
<head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="BHost template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{url('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/services.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/services_responsive.css')}}">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header trans_400">
        <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
            <div class="logo"><a href="#"><span>ALAGADI</span><img src="{{url('images/logo.png')}}" width="50"
                                                                   height="30"></a>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-2">
                        <nav class="main_nav">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li class="active"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('about-us')}}">About us</a></li>
                                <li><a href="{{url('/services')}}">Services</a></li>
                                <li><a href="{{url('#')}}">News</a></li>
                                <li><a href="{{url('contact')}}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header_right d-flex flex-row align-items-center justify-content-start">

                <!-- Header Links -->
                <div class="header_links">
                    <ul class="d-flex flex-row align-items-center justify-content-start">
                        {{--  <li><a href="#">Webmail</a></li>--}}
                        <li><a href="#">Sign Up!</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>

                <!-- Phone -->
                <div class="phone d-flex flex-row align-items-center justify-content-start">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <div>+90-000 0000 00</div>
                </div>

                <!-- Hamburger -->
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            </div>
        </div>
    </header>


    <!-- Menu -->

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center">
            <div class="menu_nav trans_500">
                <ul class="text-center">
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('about-us')}}">About us</a></li>
                    <li><a href="{{url('/services')}}">Services</a></li>
                    <li><a href="{{url('#')}}">News</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="phone menu_phone d-flex flex-row align-items-center justify-content-start">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div>652-345 3222 11</div>
            </div>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content">
                        <div class="home_image"><img src="images/services.png" alt=""></div>
                        <div class="home_title">Services</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center"><h2>Real Time Water Quality</h2></div>
                </div>
            </div>
            <div class="row icon_boxes_row">

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="waterTempStreamId"></canvas>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="WaterORPStreamId"></canvas>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="phStreamId"></canvas>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="airTempStreamId"></canvas>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="airHumadityStreamId"></canvas>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-xl-4 col-md-6">
                    <div class="icon_box">
                        <canvas id="ntuStreamId"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
            <div>Need Help? Call Us 24/7</div>
            <div class="d-flex flex-row align-items-center justify-content-start">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <div>+90-000 0000 00</div>
            </div>
        </div>
        <div class="footer_content">
            <div class="container">
                <div class="row footer_row">

                    <!-- Footer Column -->
                    <div class="col-xl-3 col-md-6">
                        <div class="footer_title">Alagadi Team's</div>
                        <div class="footer_list">
                            <ul>
                                <li><a href="#">Alagadi Team's goal is to develop a system that allows for a unified
                                        user experience across all their products on any platform.</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-xl-3 col-md-6">
                        <div class="footer_title">Services</div>
                        <div class="footer_list">
                            <ul>
                                <li><a href="#">Service One</a></li>
                                <li><a href="#">Service Two</a></li>
                                <li><a href="#">Service Three</a></li>
                                <li><a href="#">Service Four</a></li>
                                <li><a href="#">Service Five</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-xl-3 col-md-6">
                        <div class="footer_title">Navigation</div>
                        <div class="footer_list">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-xl-3 col-md-6">
                        <div class="logo footer_logo"><a href="#"><span>ALAGADI</span> Turtle</a></div>
                        <div class="footer_info">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Address</div>
                                    </div>
                                    <div>XXXX</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>Phone</div>
                                    </div>
                                    <div>+90-000 0000 00</div>
                                </li>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>E-mail</div>
                                    </div>
                                    <div>support@alagadi.site</div>
                                </li>
                            </ul>
                        </div>
                        <div class="cards">
                            <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <li><a href="#"><img src="{{url('images/card_1.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/card_2.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/card_3.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/card_4.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{url('images/card_5.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="social footer_social">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_bar text-center">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            All rights reserved | <a href="https://alagadi.site" target="_blank">Alagadi Turtle</a></div>
    </footer>

</div>

<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('css/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{url('css/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{url('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{url('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{url('plugins/easing/easing.js')}}"></script>
<script src="{{url('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{url('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{url('js/services.js')}}"></script>

{{--stream chart--}}

<script type="text/javascript" src="{{url('js/moment.js')}}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script type="text/javascript" src="{{url('js/chartjs-plugin-streaming.js')}}"></script>
<script type="text/javascript" src="{{url('js/stream-chart.js')}}"></script>


</body>
</html>
