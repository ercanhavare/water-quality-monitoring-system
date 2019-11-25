@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/contact_responsive.css')}}">
@endsection

@section('content')
    <div class="super_container">

        <!-- Header -->
    @include('partials.header')
    <!-- Menu -->
    @include('partials.menu')



    <!-- Home -->

        <div class="home">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_image"><img src="images/services.png" alt=""></div>
                            <div class="home_title">Contact</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">
            <div class="container">
                <div class="row">

                    <!-- Contact Info -->
                    <div class="col-lg-4">
                        <div class="contact_info_container">
                            <div class="contact_title">Contact Info</div>
                            <div class="contact_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
                                    scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat.</p>
                            </div>
                            <div class="logo contact_logo"><a href="#"><span>Alagadi</span> Turtle</a></div>
                            <div class="contact_info">
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
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-8 contact_form_col">
                        <div class="contact_form_container">
                            <div class="contact_title">Get in touch</div>
                            <form action="#" class="contact_form" id="contact_form">
                                <div class="row contact_row">
                                    <div class="col-lg-6"><input type="text" class="contact_input" placeholder="Name"
                                                                 required="required"></div>
                                    <div class="col-lg-6"><input type="email" class="contact_input" placeholder="E-mail"
                                                                 required="required"></div>
                                    <div class="col-12"><input type="text" class="contact_input" placeholder="Subject"
                                                               required="required"></div>
                                    <div class="col-12"><textarea class="contact_input contact_textarea"
                                                                  placeholder="Message" required="required"></textarea>
                                    </div>
                                </div>
                                <button class="contact_button trans_200">send</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row google_map_row">
                    <div class="col">

                        <!-- Contact Map -->

                        <div class="contact_map">

                            <!-- Google Map -->

                            <div class="map">
                                <div id="google_map" class="google_map">
                                    <div class="map_container">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>

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
                            <div class="contact_info">
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
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{url('js/contact.js')}}"></script>
@endsection

