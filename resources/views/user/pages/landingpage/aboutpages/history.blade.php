<!doctype html>
<html lang="en">
<style>
    .facilities_item {
    border: 1px solid #777777;
    border-radius: 10px;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 31px 40px 37px;
    color: #fff;
    margin-bottom: 30px;
    height: 215px;
}
</style>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset("omhms.png")}}" type="image/png">
        <title>OMHMS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-********" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset("vendors/linericon/style.css")}}">
    <link rel="stylesheet" href="{{asset('assets/css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset("vendors/owl-carousel/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendors/nice-select/css/nice-select.css")}}">
    {{-- <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css"> --}}
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">

</head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a href="index.html">
                        <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon" style="width: 45px; height: 30px">
                        <img src="{{ asset('eOMHeritage1.png') }}" class="logo-icon" alt="logo icon" style="width: 190px; height: 45px">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">About Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/history') }}">History</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/vnm') }}">Vision &
                                            Mission</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/oper') }}">Operation</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ url('user/testimonials') }}">Announcements</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/services') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/feed') }}">Feed</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/contact') }}">Contact</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('auth/register') }}">Register</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('auth/login') }}">Login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="" style="margin-top: 28px; display: inline-block;" class="shop-icon-btn">
                                    <i class="fas fa-shopping-cart"></i></a>
                                    <ul class="dropdown-menu" style="padding-top: 0;">
                                        <li class="nav-item"><a class="nav-link" href="{{ url('user/souvenirs') }}">Purchase Souvenirs</a></li>
                                        {{-- <li class="nav-item"><a class="nav-link" href="{{ url('auth/login') }}">My Cart</a></li> --}}
                                    </ul>
                                </a>
                            </li>



                        </ul>
                    </div>
                </nav>
            </div>
        </header>
    <!--================Header Area =================-->

    <!--================Breadcrumb Area =================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">About Us</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">History</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        @foreach ($contents as $history )
        @if ($history->history_id == 1)
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <input type="hidden" name="" id="" value="{{$history->history_id==1 }}">
                        <h2 class="title title_color">{{$history->history_title}}</h2>
                        <h4>{{$history->history_desc}}</h4>
                        <p>{{$history->history_info}}
                        </p>
                        {{-- <a href="#" class="button_hover theme_btn_two">Request Custom Price</a> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    @if ($history->history_image)
                        <img class="img-fluid" style="margin-top: 90px" src="{{ asset('history_image/' . $history->history_image) }}"
                        alt="img" />
                @endif
                </div>
            </div>
            @foreach ($contents as $history )
            @if ($history->history_id == 6)
            <div class="row">
                <input type="hidden" name="" id="" value="{{$history->history_id==6 }}">
                <div class="col-md-6">
                    @if ($history->history_image)
                    <img class="img-fluid" style="margin-top: 90px" src="{{ asset('history_image/' . $history->history_image) }}"
                    alt="img" />
                    @endif
                </div>
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <p>{{$history->history_info}}
                        </p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endif
        @endforeach
    </section>
    <!--================ About History Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
        @foreach ($wts as $history )
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
            data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                @if ($history->wts_id == 1)
                <h2 class="title_w">{{$history->wts_title}}</h2>
                <p>{{$history->wts_info}}
                </p>
                @endif
            </div>
            <div class="row">
                @if ($history->wts_id == 1 && $history->wts_image)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="facilities_item" style="background-image: url({{ asset('wts_image/' . $history->wts_image) }});">
                        <h4 class="sec_h4">{{$history->wts_image_title}}</h4>
                    </div>
                </div>
                @endif

                @if ($history->wts_id == 2 && $history->wts_image)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="facilities_item" style="background-image: url({{ asset('wts_image/' . $history->wts_image) }});">
                        <h4 class="sec_h4">{{$history->wts_image_title}}</h4>
                    </div>
                </div>
                @endif

                @if ($history->wts_id == 3 && $history->wts_image)
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="facilities_item" style="background-image: url({{ asset('wts_image/' . $history->wts_image) }});">
                        <h4 class="sec_h4">{{$history->wts_image_title}}</h4>
                    </div>
                </div>
                @endif
            </div>




        </div>
        @endforeach
    </section>
    <!--================ Facilities Area  =================-->


     <!--================ start footer Area  =================-->
     <footer class="footer-area1 section_gap">
        <div class="container">
            <div class="row">
                <div class="col col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <img  src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon" style="width: 150px; height: 100px; margin-left:90px ">
                        <img src="{{ asset('PGOM.png') }}" class="logo-icon" alt="logo icon" style="width: 115px; height: 120px; ">
                        <img src="{{ asset('PTO.png') }}" class="logo-icon" alt="logo icon" style="width: 130px; height: 137px; ">
                        <hr>
                        <h5 style="text-align: center"><b>ORIENTAL MINDORO HERITAGE MUSEUM</b></h5>
                        <p style="text-align:justify">It was built at the Old Provincial Capitol of
                            Oriental Mindoro in Brgy. Ibaba East, Calapan City where the Cal-kuta, an abandoned Spanish
                            fortress stands. With a combination of classic and modern designs, its features are inspired
                            by the “MAHAL TANA” theme which highlights the iconic symbols of Oriental Mindoro – Mangyan,
                            Halcon, Tamaraw and Naujan Lake. </p>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title1">Navigation Links</h6>
                            <div class="row">
                                <div class="col">
                                    <ul class="list_style">
                                        <li><a href="{{url("user/landing")}}">Home</a></li>
                                        <li><a href="{{url("user/history")}}">About</a></li>
                                        <li><a href="{{url("user/testimonials")}}">Announcements</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list_style">
                                        <li><a href="{{url("user/services")}}">Services</a></li>
                                        <li><a href="{{url("user/feed")}}">Feed</a></li>
                                        <li><a href="{{url("user/contact")}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6" style="margin-left: 50px">
                    <div class="single-footer-widget">
                        <h6 class="footer_title1">Contact Us</h6>
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <p>Brgy. Ibaba East, Calapan City, Oriental Mindoro, Philippines, Calapan, Philippines</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <p> Telephone:(043) 288-6350 <br>
                                    Mobile: 0968-670-0754</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <p> <a href="{{ url('orientalmindoroheritagemuseum@gmail.com') }}">
                                    orientalmindoroheritage<br>museum@gmail.com</a></p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <p><a href="{{ url('https://www.facebook.com/orientalmindoroheritagemuseum/') }}">
                                    https://www.facebook.com/<br>orientalmindoroheritagemuseum/</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Oriental Mindoro Heritage Museum. All rights reserved.
                </p>
                <div class="col-lg-4 col-sm-15  text-right" >
                    <a href="https://web.facebook.com/orientalmindoroheritagemuseum" style="margin-right: 20px;"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.youtube.com/@travelorientalmindoro" style="margin-right: 20px;"><i class="fab fa-youtube fa-lg"></i></a>
                    <a href="https://mail.google.com/mail/u/0/#search/orientalmindoroheritagemuseum%40gmail.com?compose=DmwnWrRtsNJQdGbHcQrgFCcZKGKLnMFGWPmLCGtXWTTqQRCGKtcxvFwhwtzcQvBrzfMPRJSTvlPQ" style="margin-right: 20px;"><i class="fas fa-envelope fa-lg"></i></a>
                    <a href="#https://www.instagram.com/travelorientalmindoro/" style="margin-right: 20px;"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/js/bootstrap.js') }}"></script>
    <script src="{{asset("vendors/owl-carousel/owl.carousel.min.js")}}"></script>
    <script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{asset("vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js")}}"></script>
    <script src="{{asset("vendors/nice-select/js/jquery.nice-select.js")}}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/js/stellar.js') }}"></script>
    <script src="{{asset("vendor/lightbox/simpleLightbox.min.js")}}"></script>
    <script src="{{ asset('assets/js/js/custom.js') }}"></script>
</body>

</html>
