<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{asset("omhms.png")}}" type="image/png">
    <title>eOMHeritage Official Website</title>

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
                            <li class="nav-item active"><a class="nav-link" href="{{ url('user/landlog') }}">Home</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">About Us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/history1') }}">History</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/vnm1') }}">Vision &
                                            Mission</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{url("user/oper1")}}">Operation</a></li>

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url("user/testimonials1")}}">Announcements</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/services1') }}">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/feed1') }}">Feed</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('user/contact1') }}">Contact</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false" style="font-size: 10px">My Account</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="{{url('user/profile')}}">{{session('User')['user_fname']}}'s Profile</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="" style="margin-top: 28px; display: inline-block;" class="shop-icon-btn">
                                    <i class="fas fa-shopping-cart"></i></a>
                                    <ul class="dropdown-menu" style="padding-top: 0;">
                                        <li class="nav-item"><a class="nav-link" href="{{ url('user/souvenirs1') }}">Purchase Souvenirs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ url('user/cart') }}">My Cart</a></li>
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
                <h2 class="page-cover-tittle">Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ url('user/landing') }}">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    <!--================Breadcrumb Area =================-->
  <!--================Contact Area =================-->
  <section class="contact_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact_info">
                    <h3>Contact Details</h3>
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
            <div class="col-md-9">
                <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <h3>Send us your concerns & suggestions</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->

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
                    </script> All rights reserved | <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">eOMHeritage</a>
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
</body>

</html>
