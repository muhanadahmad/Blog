

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}}</title>
    <link href="{{asset('css/media_query.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/owl.theme.default.css')}}" rel="stylesheet" type="text/css"/>
    @method('css')
    <!-- Bootstrap CSS -->
    <link href="{{asset('css/style_1.css')}}" rel="stylesheet" type="text/css"/>
    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-3.5.0.min.js')}}"></script>
</head>

<body class="single">
    <div class="container-fluid fh5co_header_bg">
        <div class="container">
            <div class="row">
                <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                        class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;{{date('D , d M Y')}}</a>
                    <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">{{__("Trending")}}</a>
                        <div class="fh5co_treding_position_absolute"></div>
                    </div>
                    <a href="#" class="color_fff fh5co_mediya_setting">{{__("Instagram’s big redesign goes live with black-and-white app")}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 fh5co_padding_menu">
                    <img src="images/logo.png" alt="img" class="fh5co_logo_width"/>
                </div>
                <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table" ><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table" href="https://wa.me/message/DEFOPUVBD66MA1"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a class="fh5co_display_table" href="https://wa.me/message/DEFOPUVBD66MA1"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://wa.me/message/DEFOPUVBD66MA1" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                    </div>
                    <div class="text-center d-inline-block">
                        <a href="https://wa.me/message/DEFOPUVBD66MA1" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                    </div>
                    <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                    <div class="mb-4  d-inline-block text-center dd_position_relative btn-group mb-1">
                        <div class="">
                            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              @if (App::getLocale() == 'ar')
                              {{ LaravelLocalization::getCurrentLocaleName() }}
                             <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                              @else
                              {{ LaravelLocalization::getCurrentLocaleName() }}
                              <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                              @endif
                              </button>
                            <div class="dropdown-menu">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width"/></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}">{{__("Home")}} <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('front.showBlog')}}">{{__("Blog")}} <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('login')}}">{{__("Login")}} <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('register')}}">{{__("Register")}} <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('front.showContact')}}">{{__("Contact")}} <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

@yield('body')
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <div class="col-12 spdp_right py-5"><img src="images/white_logo.png" alt="img" class="footer_logo"/></div>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="footer_main_title py-3"> {{__("About")}}</div>
                <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                    </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                        <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                    </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-2">
                <div class="footer_main_title py-3"> {{__("Category")}}</div>
                <ul class="footer_menu">
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Business</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Entertainment</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Environment</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Health</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Life style</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Politics</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Technology</a></li>
                    <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; World</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                <div class="footer_main_title py-3"> {{__("Most Viewed Posts")}}</div>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img" class="width_footer_sub_img"/></div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> {{__("Last Modified Posts")}}</div>
                <a href="#" class="footer_img_post_6"><img src="images/allef-vinicius-108153.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/32-450x260.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/download (1).jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/science-578x362.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/vil-son-35490.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/zack-minor-15104.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/download.jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/download (2).jpg" alt="img"/></a>
                <a href="#" class="footer_img_post_6"><img src="images/ryan-moreno-98837.jpg" alt="img"/></a>
            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7 ">
                <div class="input-group">
                    <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                    <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..." aria-describedby="basic-addon1">
                    <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2023, {{__("All rights reserved. Design by")}} <a href="https://wa.me/message/DEFOPUVBD66MA1" >{{__("Muhanad Ahmad Alnamruti")}} </a>. </div>
            </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
@method('js')
<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js')}}" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js')}}"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js')}}"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
<!-- Parallax -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/main.js')}}"></script>
<script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>

</body>
</html>
