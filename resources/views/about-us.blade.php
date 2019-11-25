@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/about_responsive.css')}}">
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
                            <div class="home_title">About us</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->

        <div class="about">
            <div class="container">
                <div class="row row-lg-eq-height">

                    <!-- About Image -->
                    <div class="col-lg-6 order-lg-1 order-2">
                        <div class="about_image d-flex flex-column align-items-center justify-content-center">
                            <img src="images/servers.png" alt="">
                        </div>
                    </div>

                    <!-- About Content -->
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="about_content">
                            <div class="section_title"><h2>Real Time Water Quality</h2></div>
                            <div class="about_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
                                    scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed
                                    efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras
                                    accumsan faucibus magna a imperdiet. Donec mi neque, pretium eu quam at, facilisis
                                    venenatis tortor. Suspendisse potenti.</p>
                            </div>
                            <div class="button about_button"><a href="#">read more</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Team -->

        <div class="team">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_title"><h2>The Team</h2></div>
                            <div class="team_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
                                    scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed
                                    efficitur diam ut interdum ultricies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row team_row">

                    <!-- Team Item -->
                    <div class="col-xl-4 col-md-8">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="{{url('images/team_1.jpg')}}" alt="#">
                                <div class="team_overlay trans_400"></div>
                                <div class="team_social">
                                    <ul class="d-flex flex-row align-items-center justify-content-between">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_content text-center">
                                <div class="team_name">Emre Tüfekçi</div>
                                <div class="team_title">Team Manager</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Item -->
                    <div class="col-xl-4 col-md-8">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="{{url('images/team_1.jpg')}}" alt="#">
                                <div class="team_overlay trans_400"></div>
                                <div class="team_social">
                                    <ul class="d-flex flex-row align-items-center justify-content-between">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_content text-center">
                                <div class="team_name">Ercan Havare</div>
                                <div class="team_title">Project Manager</div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Item -->
                    <div class="col-xl-4 col-md-8">
                        <div class="team_item">
                            <div class="team_image">
                                <img src="{{url('images/team_1.jpg')}}" alt="#">
                                <div class="team_overlay trans_400"></div>
                                <div class="team_social">
                                    <ul class="d-flex flex-row align-items-center justify-content-between">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team_content text-center">
                                <div class="team_name">Koray Koygun</div>
                                <div class="team_title">Manager</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('partials.footer')
    </div>
@endsection

@section('js')
    <script src="{{url('js/about.js')}}"></script>
@endsection
