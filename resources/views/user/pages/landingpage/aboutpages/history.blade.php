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
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">

</head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">Our History</h2>
                        <h4>About the Museum</h4>
                        <p>The Oriental Mindoro Heritage Museum (OMHM), Calapan, exhibits the province’s rich culture
                            and history. Its construction was spearheaded by Governor Bonz Dolor and funded thru the
                            General Appropriations Act of 2020 by the National Government. The museum opened its doors
                            to the public during the 71st Founding Anniversary Celebration of the province on November
                            15, 2021.
                            Like its exhibits, the facility was constructed in a historic site Cal-kuta, an abandoned
                            Spaniard fortress located at the Old Provincial Capitol of Oriental Mindoro in Brgy. Ibaba
                            East, Calapan City. The museum features a fusion of classic and modern designs, influenced
                            by the “MAHAL TANA” concept, focusing on Oriental Mindoro iconic symbols – Mangyan, Halcon,
                            Tamaraw, and Naujan Lake.
                        </p>
                        {{-- <a href="#" class="button_hover theme_btn_two">Request Custom Price</a> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" style="margin-top: 90px" src="{{ asset('images/aboutomhms.jpeg') }}"
                        alt="img">
                    <p style="text-align:center">Oriental Mindoro Heritage Museum</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" style="margin-top: 60px"
                        src="{{ asset('images/whattosee/tamaraw.jpeg') }}" alt="img">
                    <p style="text-align:center">Tamaraw Bones photo via TravelOrientalMindoro.ph</p>
                </div>
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <p> In addition, the construction of this two-story museum cost P60,000,000, granted by the
                            former House Speaker Allan Peter Cayetano, which covers a lot of approximately 2,500 square
                            meters. Currently, the facility presents the true legacy of the province, allowing the new
                            and future generations to understand the people and society that made Oriental Mindoro what
                            it is today.
                            <br>
                            It also exhibits events in the province from the 18th to 19th century, details on former
                            governors, how Mindoro got divided into two provinces, the people behind it, and more.
                            Furthermore, visitors will see exhibits about the province’s rich culture, history articles,
                            and the number of tribes of native Mangyan. Aside from the museum, the property has coffee
                            and souvenir shops and a convention hall where weddings, birthdays, and other events are
                            held.
                            <br>So if you’re in for some educational trip with your family and friends, add to your
                            things-to-do the Oriental Mindoro Heritage Museum to learn more about the province. Also, if
                            you’re looking for a place for big parties and reunions, this place would make a great
                            venue.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Facilities Area  =================-->
    <section class="facilities_area section_gap">
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
                        <h4 class="sec_h4">Mangyan Traditional Wear</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item1">
                        <h4 class="sec_h4">Ginaw Bilog</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item2">
                        <h4 class="sec_h4">Jars</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item3">
                        <h4 class="sec_h4">Various Mangyan artefacts</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item4">
                        <h4 class="sec_h4">Ammonites Stone</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item5">
                        <h4 class="sec_h4">Mangyan Basket Weaving</h4>
                    </div>
                </div>
            </div>
        </div>
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
