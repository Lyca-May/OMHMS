<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset("omhms.png")}}" type="image/png">
    <title>OMHMS</title>
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
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
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
                                    <li class="nav-item"><a class="nav-link" href="{{url("user/oper")}}">Operation</a></li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url("user/testimonials")}}">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/feed') }}">Feed</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/contact') }}">Contact</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('auth/register') }}">Register</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('auth/login') }}">Login</a></li>
                            </ul>
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
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
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
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title" >About the museum</h6>
                        <p>The Oriental Mindoro Heritage Museum (OMHM) was built at the Old Provincial Capitol of
                            Oriental Mindoro in Brgy. Ibaba East, Calapan City where the Cal-kuta, an abandoned Spanish
                            fortress stands. With a combination of classic and modern designs, its features are inspired
                            by the “MAHAL TANA” theme which highlights the iconic symbols of Oriental Mindoro – Mangyan,
                            Halcon, Tamaraw and Naujan Lake. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title1">Navigation Links</h6>
                        <div class="row">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="{{url("user/landing")}}">Home</a></li>
                                    <li><a href="{{url("user/history")}}">About us</a></li>
                                    <li><a href="{{url("user/gallery")}}">Gallery</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="{{url("user/services")}}">Services</a></li>
                                    <li><a href="{{url("user/testimonials")}}">Reviews</a></li>
                                    <li><a href="{{url("user/contact")}}">Contact</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title1">Newsletter</h6>
                        <p>For business professionals caught between high OEM price and mediocre print and graphic
                            output, </p>
                        <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn sub-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title1">InstaFeed</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="image/instagram/Image-01.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-02.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-03.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-04.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-05.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-06.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-07.jpg" alt=""></li>
                            <li><img src="image/instagram/Image-08.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
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
