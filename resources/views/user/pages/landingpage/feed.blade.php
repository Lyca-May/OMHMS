<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-********" crossorigin="anonymous" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    {{-- <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css"> --}}
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/feedcom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
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


    <!--================Blog Categorie Area =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="bg-gray p-2 mt-4 rounded border shadow">
                <!-- avatar -->
                <div class="d-flex" type="button">
                    <div class="p-1">
                        <img src="https://source.unsplash.com/collection/happy-people" alt="avatar"
                            class="rounded-circle me-4" style="width: 42px; height: 42px; object-fit: cover; margin-left: 8px; margin-top:10px" />
                    </div>
                    <textarea type="text" class="form-control rounded-pill border-0 bg-gray pointer"
                        style="margin-left:20px; " placeholder="Create Post" data-bs-toggle="modal"
                        data-bs-target="#createModal"></textarea>
                </div>
                <hr>
                <input type="file" style="margin-left: 80px" name="image" onchange="this.form.submit()">
                <a href="{{asset("auth/login")}}" class="genric-btn primary circle text-right" style="margin-left: 630px">Post it!</a>
            </div>
    </section>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">

        <h4 style="text-align:center; font-weight:200px; font-size: 40px"> FEED </h4>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="blog_left_sidebar"> --}}
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                {{-- <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div> --}}
                                <ul class="blog_meta list_style">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="" alt=""
                                    style=" width: 600px; height: auto;">
                                <div class="blog_details">
                                    <a href="#">
                                        <h2>Astronomy Binoculars A Great Alternative</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction.</p>

                                        <div class="post__comment mt-3 position-relative bg-gray">
                                            <!-- likes -->
                                            <div
                                              class="
                                                d-flex
                                                align-items-center
                                                top-0
                                                start-0
                                                position-absolute
                                              "
                                              style="height: 50px; z-index: 5"
                                            >
                                              <div class="me-2">
                                                <i class="text-primary fas fa-thumbs-up"></i>
                                                <i class="text-danger fab fa-gratipay"></i>
                                                <i class="text-warning fas fa-grin-squint"></i>
                                              </div>
                                              <p class="m-0 text-muted fs-7">Phu, Tuan, and 3 others</p>
                                            </div>
                                            <!-- comments start-->
                                            <div class="accordion" id="accordionExample">
                                              <div class="accordion-item border-0">
                                                <!-- comment collapse -->
                                                <h2 class="accordion-header" id="headingTwo">
                                                  <div
                                                    class="
                                                      accordion-button
                                                      collapsed
                                                      pointer
                                                      d-flex
                                                      justify-content-end
                                                    "
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsePost1"
                                                    aria-expanded="false"
                                                    aria-controls="collapsePost1"
                                                  >
                                                  </div>
                                                </h2>
                                                <hr />
                                                <!-- comment & like bar -->
                                                <div class="d-flex justify-content-around">
                                                  <div
                                                    class="
                                                      dropdown-item
                                                      rounded
                                                      d-flex
                                                      justify-content-center
                                                      align-items-center
                                                      pointer
                                                      text-muted
                                                      p-1
                                                    "
                                                  >
                                                    <i class="fas fa-thumbs-up me-3"></i>
                                                    <p class="m-0">Like</p>
                                                  </div>
                                                  <div
                                                    class="
                                                      dropdown-item
                                                      rounded
                                                      d-flex
                                                      justify-content-center
                                                      align-items-center
                                                      pointer
                                                      text-muted
                                                      p-1
                                                    "
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapsePost1"
                                                    aria-expanded="false"
                                                    aria-controls="collapsePost1"
                                                  >
                                                    <i class="fas fa-comment-alt me-3"></i>
                                                    <p class="m-0">Comment</p>
                                                  </div>
                                                </div>
                                                <!-- comment expand -->
                                                <div
                                                  id="collapsePost1"
                                                  class="accordion-collapse collapse"
                                                  aria-labelledby="headingTwo"
                                                  data-bs-parent="#accordionExample"
                                                >
                                                  <hr />
                                                  <div class="accordion-body">
                                                    <!-- comment 1 -->
                                                    <div class="d-flex align-items-center my-1">
                                                      <!-- avatar -->
                                                      <img
                                                        src="https://source.unsplash.com/collection/happy-people"
                                                        alt="avatar"
                                                        class="rounded-circle me-2"
                                                        style="
                                                          width: 38px;
                                                          height: 38px;
                                                          object-fit: cover;
                                                        "
                                                      />
                                                      <!-- comment text -->
                                                      <div class="p-3 rounded comment__input w-100">
                                                        <!-- comment menu of author -->
                                                        <div class="d-flex justify-content-end">
                                                          <!-- icon -->
                                                          <i
                                                            class="fas fa-ellipsis-h text-blue pointer"
                                                            id="post1CommentMenuButton"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false"
                                                          ></i>
                                                          <!-- menu -->
                                                          <ul
                                                            class="dropdown-menu border-0 shadow"
                                                            aria-labelledby="post1CommentMenuButton"
                                                          >
                                                            <li class="d-flex align-items-center">
                                                              <a
                                                                class="
                                                                  dropdown-item
                                                                  d-flex
                                                                  justify-content-around
                                                                  align-items-center
                                                                  fs-7
                                                                "
                                                                href="#"
                                                              >
                                                                Edit Comment</a
                                                              >
                                                            </li>
                                                            <li class="d-flex align-items-center">
                                                              <a
                                                                class="
                                                                  dropdown-item
                                                                  d-flex
                                                                  justify-content-around
                                                                  align-items-center
                                                                  fs-7
                                                                "
                                                                href="#"
                                                              >
                                                                Delete Comment</a
                                                              >
                                                            </li>
                                                          </ul>
                                                        </div>
                                                        <p class="fw-bold m-0">John</p>
                                                        <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                          Lorem ipsum dolor sit amet, consectetur
                                                          adipiscing elit.
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <!-- comment 2 -->
                                                    <div class="d-flex align-items-center my-1">
                                                      <!-- avatar -->
                                                      <img
                                                        src="https://source.unsplash.com/random/2"
                                                        alt="avatar"
                                                        class="rounded-circle me-2"
                                                        style="
                                                          width: 38px;
                                                          height: 38px;
                                                          object-fit: cover;
                                                        "
                                                      />
                                                      <!-- comment text -->
                                                      <div class="p-3 rounded comment__input w-100">
                                                        <p class="fw-bold m-0">Jerry</p>
                                                        <p class="m-0 fs-7 bg-gray p-2 rounded">
                                                          Lorem ipsum dolor sit amet, consectetur
                                                          adipiscing elit.
                                                        </p>
                                                      </div>
                                                    </div>
                                                    <!-- create comment -->
                                                    <form class="d-flex my-1">
                                                      <!-- avatar -->
                                                      <div>
                                                        <img
                                                          src="https://source.unsplash.com/collection/happy-people"
                                                          alt="avatar"
                                                          class="rounded-circle me-2"
                                                          style="
                                                            width: 38px;
                                                            height: 38px;
                                                            object-fit: cover;
                                                          "
                                                        />
                                                      </div>
                                                      <!-- input -->
                                                      <input
                                                        type="text"
                                                        class="form-control border-0 rounded-pill bg-gray"

                                                        placeholder="Write a comment"
                                                      />
                                                      <a href="{{asset("auth/login")}}" class="genric-btn primary circle">Comment</a>
                                                    </form>
                                                    <!-- end -->
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- end -->
                                          </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </article>



                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                {{-- <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div> --}}
                                <ul class="blog_meta list_style">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <div class="row">
                                    <div class="col">
                                <img src="" alt=""
                                style=" width: 600px; height: auto;">
                                    </div>
                                    <div class="col">
                                <img src="" alt=""
                                style=" width: 600px; height: auto;">
                                    </div>
                                </div>
                                <div class="blog_details">
                                    <a href="#">
                                        <h2>The Basics Of Buying A Telescope</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction.</p>
                                    <a href="#" class="view_btn button_hover">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="image/blog/main-blog/m-blog-3.jpg" alt="">
                                <div class="blog_details">
                                    <a href="#">
                                        <h2>The Glossary Of Telescopes</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction.</p>
                                    <a href="#" class="view_btn button_hover">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="image/blog/main-blog/m-blog-4.jpg" alt="">
                                <div class="blog_details">
                                    <a href="#">
                                        <h2>The Night Sky</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction.</p>
                                    <a href="#" class="view_btn button_hover">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#">Mark wiens<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="image/blog/main-blog/m-blog-5.jpg" alt="">
                                <div class="blog_details">
                                    <a href="#">
                                        <h2>Telescopes 101</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get the
                                        MCSE study materials yourself at a fraction.</p>
                                    <a href="#" class="view_btn button_hover">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <span class="lnr lnr-chevron-right"></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    {{-- </div> --}}
                </div>

            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


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
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/js/stellar.js') }}"></script>
    <script src="{{ asset('vendor/lightbox/simpleLightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/js/custom.js') }}"></script>
    <script src="{{ asset('assets/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>
