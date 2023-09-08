<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-********" crossorigin="anonymous" />

    <!-- Add the Bootstrap CSS file -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Add the Bootstrap JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/souvenir.css') }}">

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
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/testimonials') }}">Testimonials</a>
                        </li>
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
                        <li class="nav-item">
                            <a href="{{ url('user/souvenirs') }}" style="margin-top: 25px; display: inline-block;"
                                class="shop-icon-btn">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

     <!--================ Souvenir Area  =================-->
     <section class="breadcrumb_area3">
        <div class="overlay bg-parallax3" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
            data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle"><b>SOUVENIRS</b></h2>

            </div>
        </div>
    </section>


     <!--================ Oyay Area  =================-->

    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0"
            data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <img src="{{ asset('images/whattosee/oyayy.png') }}" style="width:130px; height:125px"
                    alt="">
                <h5>BEYOND BAREFOOT</h5>
                <h4>APPAREL | TOURS | CULTURE</h4>
                <br>
                <h3 class="title_w">WHO WE ARE</h3>
                <p>Oyay is a small social enterprise based in the southern part of Mindoro Island that offers exotic and
                    authentic experiences, provides other related responsible tourism products and services, and helps
                    to empower local youth and underpriviledged orphans by giving sustainable welfare projects toward
                    community developmet for great positve impacts.
                </p>
                <p>The name O. Y. A. Y. is an acronym derived from a Filipino phrase "Oo, Yakapin Ang Yapak na
                    Paglalakbay" which means "Yes, embrace the barefoot journey".
                </p>

            </div>
        </div>
    </section>



    <div class="section_title text-center" style="margin-left: 30px">
        <h1 class="title_w1">SOUVENIR ITEMS</h1>
    </div>
    <!-- Dropdown Menu -->>
    <div class="dropdown">
        <span>Filter Items</span>
        <div class="dropdown-content">
            <a href="#">All</a>
            <a href="#">Baskets</a>
            <a href="#">Bracelets</a>
            <a href="#">Necklaces</a>
            <a href="#">Bags</a>
            <a href="#">Jars</a>
            <a href="#">Keychains</a>
            <a href="#">Hats</a>
            <a href="#">Cloth</a>
            <a href="#">Foods</a>
        </div>

    </div>

    <!-- Search Box -->
    <div class="search-box">
        <input type="text" id="search-input" placeholder="Search...">
        <button id="search-button">Search</button>
    </div>

    <br>
    <br>
    <br>
    <section class="cards-wrapper">
        @foreach ($souvenirs as $souvenir)

        <div class="card-button">
            <div class="card-grid-space">
                <a class="card" id="card1" data-toggle="modal" data-target="#myModal{{ $souvenir->souvenir_id }}">
                    @if ($souvenir->souvenir_image)
                        <div class="image-link">
                            <img src="{{ asset('souvenir_image/' . $souvenir->souvenir_image) }}" alt="{{ $souvenir->souvenir_name }}" style="max-width: 100%; height: auto;">
                            <div style="margin-top: 120px">
                                <h1>{{ $souvenir->souvenir_name }}</h1>
                                <p>{{ $souvenir->souvenir_description }}</p>
                            </div>
                        </div>
                    @endif
                </a>
            </div>
        </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal{{ $souvenir->souvenir_id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">{{ $souvenir->souvenir_name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="addToCartForm{{ $souvenir->souvenir_id }}">
                            <form action="{{ url('/add-to-cart') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('souvenir_image/' . $souvenir->souvenir_image) }}"
                                            alt="{{ $souvenir->souvenir_name }}" style="max-width: 100%; height: auto;">
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $souvenir->souvenir_description }}</p>
                                        <div class="date">Stocks: {{ $souvenir->souvenir_qty }}</div>
                                        <div class="tags">
                                            <div class="tag">{{ $souvenir->souvenir_price }}</div>
                                        </div>
                                        <div class="quantity">
                                            <button class="btn btn-primary minus-btn">-</button>
                                            <input type="text" class="qty-input" name="quantity" value="1" readonly>
                                            <button class="btn btn-primary plus-btn">+</button>
                                        </div>
                                        <input type="hidden" name="souvenir_id" value="{{ $souvenir->souvenir_id }}">
                                        <input type="hidden" name="price" value="{{ $souvenir->souvenir_price }}">
                                        <input type="hidden" name="total_price" value="{{ $souvenir->souvenir_price }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>




        <!-- https://images.unsplash.com/photo-1520839090488-4a6c211e2f94?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=38951b8650067840307cba514b554ba5&auto=format&fit=crop&w=1350&q=80 -->
    </section>
    </div>


    <!--================ start footer Area  =================-->
    <footer class="footer-area1 section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">About the museum</h6>
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
                                    <li><a href="{{ url('user/landing') }}">Home</a></li>
                                    <li><a href="{{ url('user/history') }}">About us</a></li>
                                    <li><a href="{{ url('user/gallery') }}">Gallery</a></li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="{{ url('user/services') }}">Services</a></li>
                                    <li><a href="{{ url('user/testimonials') }}">Reviews</a></li>
                                    <li><a href="{{ url('user/contact') }}">Contact</a></li>

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
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">OMHMS</a>
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
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/js/stellar.js') }}"></script>
    <script src="{{ asset('vendor/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/custom.js') }}"></script>
</body>

</html>
