@extends('layouts.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{url('css/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">
@endsection

@section('content')
    <div class="super_container">

        <!-- Header -->
    @include('partials.header')
    <!-- Menu -->
    @include('partials.menu')


    <!-- Home -->

        <div class="home">
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

        <!-- Domain Pricing -->

        <div class="domain_pricing">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="domain_search">
                            <div class="domain_search_background"></div>
                            <form action="#" class="domain_search_form" id="domain_search_form">
                                <input type="text" class="domain_search_input" placeholder="Track at a Turtle"
                                       required="required">
                                <div
                                    class="domain_search_dropdown d-flex flex-row align-items-center justify-content-center">
                                    <div class="domain_search_selected">turtle</div>
                                    <ul>
                                        <li>turtle</li>
                                        <li>user</li>
                                        <li>city</li>
                                    </ul>
                                </div>
                                <button class="domain_search_button">search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->

        <div class="why">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_title"><h2>Alagadi Turtle Real Time Water Quality</h2></div>
                            <div class="section_subtitle">Ipsum dolor sit amet, consectetur adipiscing elit. Mauris
                                velit
                                arcu, scelerisque
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row why_row">

                    <!-- Why Item -->
                    <div class="col-lg-4">
                        <div class="icon_box_1 text-center">
                            <div class="icon_box_1_image ml-auto mr-auto"><img src="{{url('images/icon_2.svg')}}"
                                                                               alt="https://www.flaticon.com/authors/srip">
                            </div>
                            <div class="icon_box_1_title">Server Protection</div>
                            <div class="icon_box_1_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu,
                                    scelerisque
                                    dignissim massa quis, mattis facilisis erat.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why Item -->
                    <div class="col-lg-4">
                        <div class="icon_box_1 text-center">
                            <div class="icon_box_1_image ml-auto mr-auto"><img src="{{url('images/icon_3.svg')}}"
                                                                               alt="https://www.flaticon.com/authors/srip">
                            </div>
                            <div class="icon_box_1_title">CloudFlare Integration</div>
                            <div class="icon_box_1_text">
                                <p>Ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque
                                    dignissim massa quis, mattis facilisis erat. Aliquam erat.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why Item -->
                    <div class="col-lg-4">
                        <div class="icon_box_1 text-center">
                            <div class="icon_box_1_image ml-auto mr-auto"><img src="{{url('images/icon_4.svg')}}"
                                                                               alt="https://www.flaticon.com/authors/srip">
                            </div>
                            <div class="icon_box_1_title">30 Day Money-back</div>
                            <div class="icon_box_1_text">
                                <p>Lorem ipsum dolor sit amet, adipiscing elit. Mauris velit arcu, scelerisque dignissim
                                    massa quis, mattis facilisis erat. Aliquam erat.</p>
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
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOVJdHyqZg25XTg7PvZAkYl2qhY9XSrJ4&libraries=places">
    </script>

    <script type="text/javascript" src="{{url('js/script-map.js')}}"></script>
    <script src="{{url('js/custom.js')}}"></script>
@endsection
