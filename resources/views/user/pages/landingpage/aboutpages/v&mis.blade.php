<!doctype html>
<html lang="en">

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
    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">

</head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">


                    <style>
                        .container-fluid {
                            padding-left: 0;
                            padding-right: 0;
                        }

                        .navbar {
                            /* overflow-x:hidden; */

                        }
                        .logo-icon {
                            width: 40px;
                            height: 20px;
                            max-width: 100%; /* Ensure the image doesn't exceed its container */
                        }
                    </style>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon"
                        style="width: 40px; height: 20px;">
                    <a class="navbar logo_h" href="index.html"><b>ORIENTAL MINDORO HERITAGE MUSEUM</b></a>
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
    <section class="breadcrumb_area1">
        <div class="overlay bg-parallax1" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">About Us</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('user/history') }}">History</a></li>
                    <li class="active">Vision & Mission</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" style="margin-top: 90px" src="{{ asset('images/whattosee/1.jpg') }}"
                        alt="img">
                </div>
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Our Vision and Mission</h2>
                        <h4>About the Museum</h4>
                        <hr>
                        {{-- <h5><b>Vision</b></h5> --}}
                        <p>A province with healthy, upright and empowered citizenry living in a safe and green environment,
                             prepared and resilient to climate change and disaster risks and goverened by a dynamic and
                             responsive leadership.
                             By 2020, Oriental Mindoro is Luzon and Visayas' FOOD BASE, PREMIER TOURISM DESTINATION and
                             CENTER FOR INVESTMENTS.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        {{-- <h5><b>Mission</b></h5>x --}}
                        <p>The Provincial Government of Oriental Mindoro, as an improved and responsive organization, shall
                           enhance the capabilities of its elected officials and workforce, improve financial stability,
                           judiciously utilize its resources, and strengthen its linkages with other government units/agencies,
                           private sector and civil society groups.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" style="margin-top: 30px" src="{{ asset('images/whattosee/2.jpg') }}"
                        alt="img">
                </div>
            </div>

        </div>
    </section>
    <!--================ About History Area  =================-->

    {{-- <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
            data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">What to See Inside</h2>
                <p>Since the Oriental Mindoro Heritage Museum, Calapan, functions as the repository and custodian of
                    varying representations of legacy, it houses cultural artifacts, historical records, evidence of
                    abundant biodiversity, and remarkably collected memorabilia throughout the province. Inside the
                    museum, visitors will see displays of old things used by native Mangyan for their livelihood and
                    household.
                </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>Mangyan Traditional Wear</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item1">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>Ginaw Bilog</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item2">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>Jars</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item3">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>Various Mangyan artefacts</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item4">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>Ammonites Stone</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item5">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>Mangyan Basket Weaving</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--================ Contect Area  =================-->
    {{-- <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-align-justify">
                <h3>Operating Hours and Entrance Fee</h3>
                <p>According to their Facebook page, the Oriental Mindoro Heritage Museum, Calapan, is open from 8:30 am
                    to 4:30 pm, Monday to Sunday. However, the museum requires prior booking. Also, they don’t accept
                    same-day bookings and walk-ins. Thus, interested visitors should register thru the OMHM Online
                    Booking to enter the museum.
                    <br> Meanwhile, the museum offers free admission to the residents of Oriental Mindoro, allowing them
                    to explore varying areas of the facility. But if you’re not a local, the museum collects a minimal
                    entrance fee. For more details and inquiries, visit their Facebook page at<a
                        href="{{ url('https://www.facebook.com/orientalmindoroheritagemuseum/') }}">
                        https://www.facebook.com/orientalmindoroheritagemuseum/.</a>
                </p>
            </div>
        </div>
    </section> --}}

    <!--================ Contact Area  =================-->

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
