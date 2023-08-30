<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-********" crossorigin="anonymous" />

     <!-- Add the Bootstrap CSS file -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

     <!-- Add the Bootstrap JavaScript files -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <link rel="stylesheet" href="{{ asset('assets/css/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/css/testimonial1.css') }}">


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

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6> Discover the Past, Enrich Your Present:</h6>
                    <h2 style="color: #f3c300;"> Welcome to Our Museum</h2>
                    <p>If you're searching for a museum experience that goes beyond mere displays of artifacts, we
                        invite<br>
                        you to join us on a journey through time, where you'll discover the stories that <br>
                        shaped our province and the beauty and artistry of our past.</p>
                </div>
            </div>
        </div>
        {{-- <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2 style="color:#f3c300">Schedule <br> a visit</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control" placeholder="First Name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control"
                                                    placeholder="Preferred Date of Visit" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select class="nice-select">
                                                    <option data-display="Select Time of Visit" placeholder="">Select
                                                        Time of Visit</option>
                                                    <option value="1">9:30 AM</option>
                                                    <option value="1">11:00 AM</option>
                                                    <option value="2">1:30 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control" placeholder="Middle Name" />
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <select class="nice-select">
                                                <option data-display="Adult" style="margin-left: 15px">Gender</option>
                                                <option value="1">Female</option>
                                                <option value="2">Male</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class='input-group'>
                                                    <input type='text' class="form-control" placeholder="Age" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control" placeholder="Last Name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control"
                                                    placeholder="Number of Visitors" />
                                            </div>
                                        </div>
                                        <a class="book_now_btn button_hover" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!--================Banner Area =================-->

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Available Reservation</h2>
                <p>We invite you to reserve now and experience the wonders of our museum, where you can discover
                    fascinating exhibits and immerse yourself in a world of knowledge and culture.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('images/whattosee/stair.jpg') }}" alt="">
                                <a href="{{ url('user/bookvisit') }}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Reservation for Museum Visit</h4>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-6 col-sm-6">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="{{ asset('images/whattosee/tam.jpg') }}" alt="">
                                <a href="{{ url('user/rentconhall') }}" class="btn theme_btn button_hover">Book Now</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Rent Conference Hall</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

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

    <!--================ About History Area  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">About Us <br>
                            <h4>Our History, Mission & Vision</h4>
                        </h2>
                        <p>Welcome to Our History Museum, where the past comes alive through immersive exhibits and
                            interactive displays. Our museum is committed to preserving the rich history of our
                            community, with a mission to educate and inspire visitors through the stories of our
                            ancestors. Our vision is to become a premier destination for historical education and
                            appreciation, offering engaging programs and exhibits that encourage visitors to connect
                            with the past and understand its relevance to our present and future.
                        </p>
                        <a href="{{ url('user/history') }}" class="button_hover theme_btn_two">Read more</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset('images/aboutomhms.jpeg') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ About History Area  =================-->

    <!--================ Testimonial Area  =================-->
    <section class="testimonial_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Announcement</h2>
                <p style="text-align:center">We invite you to reserve now and experience the wonders of our museum, where you can discover
                    fascinating exhibits and immerse yourself in a world of knowledge and culture.</p>

                <br>
                <hr>
                <br>
                <!-- Start Announcement Layout -->
                <section class="articles">
                    @foreach ($announcement as $announcements)
                    <article>
                      <div class="article-wrapper" style="display: flex; flex-direction: column; margin-bottom: 20px;">
                        <figure style="flex: 0;">
                            @if ($announcements->announcement_image)
                            <a href="#" data-toggle="modal" data-target="#imageModal{{ $announcements->announcement_id }}">
                                <img src="{{ asset('announcement_image/' .$announcements->announcement_image) }}" class="projcard-img"  style="width: 100%; height: auto;" />
                            </a>
                            @else
                            <img src="{{ asset('announcement_image/default-image.jpg') }}" class="projcard-img"  style="width: 100%; height: auto;" />
                            @endif
                          {{-- <img src="https://picsum.photos/id/1011/800/450" alt="" style="width: 100%; height: auto;" /> --}}
                        </figure>
                        <br>
                        <a href="#" style="display: flex; align-items: center; margin-left: 10px;">
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#777777" width="24px" height="24px" style="margin-right: 5px;">
                            <path d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 2H4.25C3.01 2 2 3.01 2 4.25v7.5C2 12.99 3.01 14 4.25 14h2.5v5l5-5h5.75C20.99 14 22 12.99 22 11.75v-7.5C22 3.01 20.99 2 19.75 2H14zm1 11H4v-7h12v7zm-6 2h2v2h-2v-2z" />
                          </svg>
                          <div style="margin-right: auto;">{{ date('F d, Y', strtotime($announcements->created_at)) }}</div>
                        </a>

                        <div class="article-body" style="flex: 1;">
                          <p>{{ $announcements->announcement_content }}</p>
                          <h6 style="text-align: right">- Admin {{ $announcements->announcer }}</h6>
                          <a href="#" class="read-more">
                            Read more <span class="sr-only">about this is some title</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </article>
                    @endforeach
                  </section>
                  <br>
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
                        <li class="page-item"><a href="#" class="page-link">02</a></li>
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
    </section>
    <!--================ Testimonial Area  =================-->

    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">Posts from the Newsfeed</h2>
                <p>Explore the latest news and updates from our museum by checking out our collection of posts.
                </p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/blog/blog-1.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Low Cost Advertising</h4>
                            </a>
                            <p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A
                                farmer.</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/blog/blog-2.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">Creative Outdoor Ads</h4>
                            </a>
                            <p>Self-doubt and fear interfere with our ability to achieve or set goals. Self-doubt and
                                fear are</p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="image/blog/blog-3.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="#" class="button_hover tag_btn">Travel</a>
                                <a href="#" class="button_hover tag_btn">Life Style</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">It S Classified How To Utilize Free</h4>
                            </a>
                            <p>Why do you want to motivate yourself? Actually, just answering that question fully can
                            </p>
                            <h6 class="date title_color">31st January,2018</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->

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
                                        <li><a href="{{url("user/landing1")}}">Home</a></li>
                                        <li><a href="{{url("user/history1")}}">About</a></li>
                                        <li><a href="{{url("user/testimonials1")}}">Announcements</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="list_style">
                                        <li><a href="{{url("user/services1")}}">Services</a></li>
                                        <li><a href="{{url("user/feed1")}}">Feed</a></li>
                                        <li><a href="{{url("user/contact1")}}">Contact</a></li>
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

</body>

</html>
