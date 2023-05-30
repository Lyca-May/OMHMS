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
    <link rel="stylesheet" href="{{ asset('assets/css/css/stylebook.css') }}">
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
    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area" style="margin-top: 150px">
        <div class="container">
            <div class="section_title">
                <h2 class="title_color">Reservation for Museum Visit</h2>
                <p>We invite you to reserve now and experience the wonders of our museum, where you can discover
                    fascinating exhibits and immerse yourself in a world of knowledge and culture.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col">
                        <h2 style="color:#f3c300">Schedule a visit</h2>
                        @error('visits_no_of_visitors')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if(session('success'))
                            <span style="color: green">{{session('success')}}</span>
                        @elseif (session('failed'))
                            <span style="color: red">{{session('failed')}}</span>
                        @endif
                        <form action="{{url("user/book")}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" class="form-control" placeholder="First Name" name="visits_fname" @error('visits_fname') is-invalid @enderror id="visits_fname" value="{{ session('User')['user_fname'] }}" >
                                    <!-- Add other hidden fields here -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="book_tabel">
                                        <div class="form-group">
                                            <div class='input-group date' id=''>
                                                <input type="date" class="form-control"
                                                    placeholder="Preferred Date of Visit" name="visits_intended_date"
                                                    id="visits_intended_date" value="{{ old('visits_intended_date') }}">

                                                @error('visits_intended_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <br>
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="book_tabel_">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select name="visits_time" class="form-control @error('visits_time') is-invalid @enderror" id="visits_time">
                                                    <option value="">Select Time</option>
                                                    <option value="09:30:00">9:30 AM</option>
                                                    <option value="11:00:00">11:00 AM</option>
                                                    <option value="13:30:00">1:30 PM</option>
                                                    <option value="15:00:00">3:00 PM</option>
                                                </select>
                                                @error('visits_time')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="book_tabel_">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control"
                                                    placeholder="Number of Visitors (Optional)" name="visits_no_of_visitors" @error('visits_no_of_visitors') is-invalid @enderror id="num_of_members" value="{{ old('visits_no_of_visitors') }}">
                                                @error('visits_no_of_visitors')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="book_tabel_">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <input type='text' class="form-control"
                                                    placeholder="Name of Institution (Optional)" name="visits_name_of_institution" @error('visits_name_of_institution') is-invalid @enderror id="visits_name_of_institution" value="{{ old('visits_name_of_institution') }}" >
                                                @error('visits_name_of_institution')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="book_tabel_">
                                        <div class="form-group">
                                            <div class='input-group'>
                                                <span style="color: yellow">Please upload your member's information</span>
                                                <input type='file' class="form-control"
                                                    placeholder="" name="file_of_visitors" @error('file_of_visitors') is-invalid @enderror id="file_of_visitors" value="{{ old('file_of_visitors') }}" >
                                                @error('file_of_visitors')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <button class="book_now_btn button_hover" href="#" style="width: 1040px" type="submit">Book Now</button>
                        </form>
                        <br>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: '{{ session('error') }}',
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
{{-- <script>
    const currentDate = new Date();
    const minDate = new Date();
    minDate.setDate(currentDate.getDate() + 2); // Adding 3 days to the current date

    const visitsIntendedDateInput = document.getElementById('visits_intended_date');

    visitsIntendedDateInput.min = formatDate(minDate);

    visitsIntendedDateInput.addEventListener('change', function() {
        const selectedDate = new Date(this.value);
        if (selectedDate < minDate) {
            alert('Sorry, you cannot reserve a visit less than 3 days from now.');
            this.value = ''; // Clear the selected date
        }
    });

    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }
</script> --}}

<script>
    const currentDate = new Date();
    const allowedDate = new Date();
    allowedDate.setDate(currentDate.getDate() + 3); // Adding 3 days to the current date

    const visitsIntendedDateInput = document.getElementById('visits_intended_date');

    visitsIntendedDateInput.min = formatDate(allowedDate);
    visitsIntendedDateInput.max = formatDate(allowedDate);

    visitsIntendedDateInput.addEventListener('change', function() {
        const selectedDate = new Date(this.value);

        const diffInDays = Math.floor((selectedDate - currentDate) / (1000 * 60 * 60 * 24));

        if (diffInDays !== 3) {
            // alert('Sorry, you can only select a date that is exactly 3 days from now.');
            this.value = formatDate(allowedDate); // Set the allowed date
        }
    });

    function formatDate(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    }
</script>


</body>
</body>

</html>
