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

    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">
</head>
<style>
    .background-image {
        width: 500px;
        height: 1200px;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .modal-body {
        text-align: center;
    }

    .modal-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .modal-body img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .modal-body p {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .date {
        font-size: 14px;
        color: #888;
        margin-bottom: 10px;
    }

    .tags {
        margin-bottom: 20px;
    }

    .tag {
        display: inline-block;
        background-color: #f1f1f1;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 14px;
        color: #555;
        margin-right: 10px;
    }

    .quantity {
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .qty-input {
        width: 40px;
        text-align: center;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        font-size: 14px;
    }

    .minus-btn,
    .plus-btn {
        width: 30px;
        height: 30px;
        background-color: #ccc;
        border: none;
        color: #fff;
        font-size: 18px;
        cursor: pointer;
    }

    .minus-btn:hover,
    .plus-btn:hover {
        background-color: #555;
    }

    .modal-footer {
        border-top: none;
        text-align: right;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #555;
        border-color: #555;
    }

    .section_title {
        text-align: center;
        margin-left: 30px;
    }

    .dropdown {
        display: inline-block;
        position: relative;
        margin-left: 30px;
    }

    .dropdown span {
        cursor: pointer;
        padding: 10px;
        background-color: #f2f2f2;
        color: #333;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .search-box {
        text-align: center;
        margin-left: 30px;
    }

    .search-box input[type="text"] {
        padding: 10px;
        border: none;
        font-size: 16px;
    }

    .search-box button {
        padding: 10px 20px;
        border: none;
        background-color: #4caf50;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    .cards-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin: 0 auto;
    }

    .card {
        width: 200px;
        margin: 20px;
        padding: 20px;
        background-color: #f2f2f2;
        box-shadow: 0px 4px 8px 0px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .card a {
        text-decoration: none;
        color: inherit;
    }

    .image-container {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-details {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        text-align: center;
    }

    .card-details h1,
    .card-details p {
        margin: 5px 0;
    }

    .card-details {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
    }

    .modal-body {
        text-align: center;
    }

    .modal-body img {
        max-width: 100%;
        height: auto;
    }

    .modal-body p {
        margin-top: 20px;
    }

    .date {
        margin-top: 10px;
    }

    .tags {
        margin-top: 10px;
    }

    .tag {
        background-color: #4caf50;
        color: #fff;
        padding: 5px 10px;
        display: inline-block;
        margin-right: 5px;
    }

    .quantity {
        margin-top: 20px;
    }

    .quantity .btn {
        padding: 5px 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .qty-input {
        padding: 5px;
        text-align: center;
        width: 50px;
        border: none;
        border-radius: 5px;
        margin: 0 10px;
    }

    .modal-footer {
        margin-top: 20px;
        text-align: center;
    }

    .cart-icon {
        position: relative;
        display: inline-block;
    }

    .cart-icon i {
        font-size: 24px;
        color: #000;
    }

    .item-count {
        position: absolute;
        top: -8px;
        right: -8px;
        background-color: red;
        color: #fff;
        font-size: 12px;
        padding: 2px 6px;
        border-radius: 50%;
    }
</style>


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
                        <li class="nav-item active"><a class="nav-link" href="javascript:void(0);"
                                onclick="loadPage('{{ url('user/landlog') }}')">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                        onclick="loadPage('{{ url('user/history1') }}')">History</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                        onclick="loadPage('{{ url('user/vnm1') }}')">Vision &
                                        Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                        onclick="loadPage('{{ url('user/oper1') }}')">Operation</a></li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                onclick="loadPage('{{ url('user/testimonials1') }}')">Announcements</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                onclick="loadPage('{{ url('user/services1') }}')">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                onclick="loadPage('{{ url('user/feed1') }}')">Feed</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                onclick="loadPage('{{ url('user/contact1') }}')">Contact</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false" style="font-size: 10px">My Account</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                        onclick="loadPage('{{ url('user/myprofile') }}')">{{ session('User')['user_fname'] }}'s
                                        Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0);"
                                        onclick="loadPage('{{ url('logout') }}')">Log out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="" style="margin-top: 28px; display: inline-block;" class="shop-icon-btn">
                                <a href="your_cart_url">
                                    <div class="cart-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                        @if ($addedItem != null)
                                            <span class="item-count">{{ $addedItem }}</span>
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu" style="padding-top: 0;">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ url('user/souvenirs1') }}">Purchase Souvenirs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('user/cart') }}">My
                                            Cart</a>
                                </ul>
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

    <!--================ Categories Area  =================-->


    <div class="section_title text-center">
        <h1 class="title_w1">SOUVENIR ITEMS</h1>
    </div>

    <!-- Dropdown Menu -->
    <div class="dropdown">
        <span>Filter Items</span>
        <div class="dropdown-content">
            <a href="#" class="filter-option" data-filter="all">All</a>
            <a href="#" class="filter-option" data-filter="baskets">Baskets</a>
            <a href="#" class="filter-option" data-filter="bracelets">Bracelets</a>
            <a href="#" class="filter-option" data-filter="necklaces">Necklaces</a>
            <a href="#" class="filter-option" data-filter="bags">Bags</a>
            <a href="#" class="filter-option" data-filter="jars">Jars</a>
            <a href="#" class="filter-option" data-filter="keychains">Keychains</a>
            <a href="#" class="filter-option" data-filter="hats">Hats</a>
            <a href="#" class="filter-option" data-filter="cloth">Cloth</a>
            <a href="#" class="filter-option" data-filter="foods">Foods</a>
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
        <div class="card">
            <a class="card-link" data-toggle="modal" data-target="#myModal{{ $souvenir->souvenir_id }}">
                @if ($souvenir->souvenir_image)
                <div class="image-container">
                    <img src="{{ asset('souvenir_image/' . $souvenir->souvenir_image) }}"
                        alt="{{ $souvenir->souvenir_name }}">
                </div>
                @endif
                <div class="card-details">
                    <h1>{{ $souvenir->souvenir_name }}</h1>
                    <p>{{ $souvenir->souvenir_description }}</p>
                </div>
            </a>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal{{ $souvenir->souvenir_id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">{{ $souvenir->souvenir_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addToCartForm" action="{{ route('add-to-cart') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('souvenir_image/' . $souvenir->souvenir_image) }}"
                                        alt="{{ $souvenir->souvenir_name }}">
                                    <p>{{ $souvenir->souvenir_description }}</p>
                                </div>
                                <div class="col-md-6">
                                    <span>Stocks:</span>
                                    <div class="btn btn-secondary">{{ $souvenir->souvenir_qty / 2 }}</div>
                                    <div class="tags">
                                        <span>Price:</span>
                                        <div class="btn btn-secondary">{{ $souvenir->souvenir_price }}</div>
                                    </div>
                                    <div class="quantity">
                                        <button class="btn btn-primary minus-btn">-</button>
                                        <input type="text" class="qty-input" name="quantity" value="1" readonly>
                                        <button class="btn btn-primary plus-btn">+</button>
                                    </div>
                                    <input type="hidden" name="userid" value="{{ session('User') ['user_id']}}">
                                    <input type="hidden" name="souvenir_id" value="{{ $souvenir->souvenir_id }}">
                                    <input type="hidden" name="price" value="{{ $souvenir->souvenir_price }}" step="0.01" required>
                                    <input type="hidden" name="total_price" value="{{$souvenir->souvenir_price}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="addToCartButton">Add to Cart</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
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
                <div class="col col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon"
                            style="width: 150px; height: 100px; margin-left:90px ">
                        <img src="{{ asset('PGOM.png') }}" class="logo-icon" alt="logo icon"
                            style="width: 115px; height: 120px; ">
                        <img src="{{ asset('PTO.png') }}" class="logo-icon" alt="logo icon"
                            style="width: 130px; height: 137px; ">
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
                                        <li><a href="{{ url('user/landing1') }}">Home</a></li>
                                        <li><a href="{{ url('user/history1') }}">About</a></li>
                                        <li><a href="{{ url('user/testimonials1') }}">Announcements</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list_style">
                                        <li><a href="{{ url('user/services1') }}">Services</a></li>
                                        <li><a href="{{ url('user/feed1') }}">Feed</a></li>
                                        <li><a href="{{ url('user/contact1') }}">Contact</a></li>
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
                                <p>Brgy. Ibaba East, Calapan City, Oriental Mindoro, Philippines, Calapan, Philippines
                                </p>
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
                <div class="col-lg-4 col-sm-15  text-right">
                    <a href="https://web.facebook.com/orientalmindoroheritagemuseum" style="margin-right: 20px;"><i
                            class="fab fa-facebook fa-lg"></i></a>
                    <a href="https://www.youtube.com/@travelorientalmindoro" style="margin-right: 20px;"><i
                            class="fab fa-youtube fa-lg"></i></a>
                    <a href="https://mail.google.com/mail/u/0/#search/orientalmindoroheritagemuseum%40gmail.com?compose=DmwnWrRtsNJQdGbHcQrgFCcZKGKLnMFGWPmLCGtXWTTqQRCGKtcxvFwhwtzcQvBrzfMPRJSTvlPQ"
                        style="margin-right: 20px;"><i class="fas fa-envelope fa-lg"></i></a>
                    <a href="#https://www.instagram.com/travelorientalmindoro/" style="margin-right: 20px;"><i
                            class="fab fa-instagram fa-lg"></i></a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- jQuery -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#8cc63f',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'failed',
                title: 'failed!',
                text: '{{ session('failed') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#dc3545',
                iconColor: '#ffffff',
                customClass: {
                    title: 'text-white',
                    content: 'text-white'
                }
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('.minus-btn').click(function(event) {
                event.preventDefault(); // Prevent page reload
                var inputField = $(this).siblings('.qty-input');
                var currentValue = parseInt(inputField.val());
                if (currentValue > 1) {
                    inputField.val(currentValue - 1);
                }
            });

            $('.plus-btn').click(function(event) {
                event.preventDefault(); // Prevent page reload
                var inputField = $(this).siblings('.qty-input');
                var currentValue = parseInt(inputField.val());
                inputField.val(currentValue + 1);
            });
        });
    </script>



    <script>
        // Filter
        const filterOptions = document.querySelectorAll('.filter-option');
        const cards = document.querySelectorAll('.card');

        filterOptions.forEach(option => {
            option.addEventListener('click', () => {
                const filterValue = option.getAttribute('data-filter');

                cards.forEach(card => {
                    card.style.display = 'none';

                    if (filterValue === 'all' || card.classList.contains(filterValue)) {
                        card.style.display = 'block';
                    }
                });
            });
        });

        // Search
        const searchInput = document.getElementById('search-input');
        const searchButton = document.getElementById('search-button');

        searchButton.addEventListener('click', () => {
            const searchValue = searchInput.value.toLowerCase().trim();

            cards.forEach(card => {
                const cardTitle = card.querySelector('h1').textContent.toLowerCase();

                if (cardTitle.includes(searchValue)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>




</body>

</html>
