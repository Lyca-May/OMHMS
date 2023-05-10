<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>
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
                        <li class="nav-item active"><a class="nav-link" href="{{ url('user/landlog') }}">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">About Us</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/history1') }}">History</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/vnm1') }}">Vision &
                                        Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/oper1') }}">Operation</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('user/testimonials1') }}">Testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/services1') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/feed1') }}">Feed</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/contact1') }}">Contact</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">My Account</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ url('user/profile') }}">Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
                            </ul>
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
                        @if(session('success'))
                        <span style="color: green">{{session('success')}}</span>
                        @elseif (session('failed'))
                        <span style="color: red">{{session('failed')}}</span>
                        @endif
                        <form action="{{url("user/book")}}" method="POST">
                            @csrf
                        </div>
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_fname"  @error('visits_fname') is-invalid  @enderror id="visits_fname" value="{{ session('User')['user_fname'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_mname"  @error('visits_mname') is-invalid  @enderror id="visits_mname" value="{{ session('User')['user_mname'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_lname"  @error('visits_lname') is-invalid  @enderror id="visits_lname" value="{{ session('User')['user_lname'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_email"  @error('visits_email') is-invalid  @enderror id="visits_email" value="{{ session('User')['user_email'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_country"  @error('visits_country') is-invalid  @enderror id="visits_country" value="{{ session('User')['user_country'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_province"  @error('visits_province') is-invalid  @enderror id="visits_province" value="{{ session('User')['user_province'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_municipality"  @error('visits_municipality') is-invalid  @enderror id="visits_municipality" value="{{ session('User')['user_municipality'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_brgy"  @error('visits_brgy') is-invalid  @enderror id="visits_brgy" value="{{ session('User')['user_barangay'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_street"  @error('visits_street') is-invalid  @enderror id="visits_street" value="{{ session('User')['user_street'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="visits_zipcode"  @error('visits_zipcode') is-invalid  @enderror id="visits_zipcode" value="{{ session('User')['user_zipcode'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="gender"  @error('gender') is-invalid  @enderror id="gender" value="{{ session('User')['gender'] }}" >
                        <input type="hidden" class="form-control" placeholder="First Name" name="contact_no"  @error('contact_no') is-invalid  @enderror id="contact_no" value="{{ session('User')['user_phonenum'] }}" >
                        {{-- <input type="hidden" class="form-control" placeholder="First Name" name="visits_fname"  @error('visits_fname') is-invalid  @enderror id="visits_fname" value="{{ session('User')['age'] }}" > --}}

                        <div class="row">
                            <div class="col">
                                <div class="book_tabel">
                                    <div class="form-group">
                                        <div class='input-group date' id=''>
                                            <input type='date' class="form-control"
                                                placeholder="Preferred Date of Visit" name="visits_intended_date" @error('visits_intended_date') is-invalid  @enderror id="visits_intended_date" value="{{ old('visits_intended_date') }}" >
                                                @error('visits_intended_date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror <br>
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
                                            {{-- <select class="nice-select">
                                                <option data-display="Select Time of Visit" name="visits_time" class="form-control" @error('visits_time') is-invalid @enderror ">Select
                                                    Time of Visit</option>
                                                <option value="{{old('visits_time')}}">9:30 AM</option>
                                                <option value="{{old('visits_time')}}">11:00 AM</option>
                                                <option value="2">1:30 PM</option>
                                                <option value="3">3:00 PM</option>
                                                @error('visits_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </select> --}}

                                            <select name="visits_time" class="form-control @error('visits_time') is-invalid @enderror" id="visits_time">
                                                <option value="">Select Time</option>
                                                {{-- <option value="09:30:00">9:30 AM</option> --}}
                                                <option value="09:30:00">9:30 AM</option>
                                                <option value="11:00:00">11:00 AM</option>
                                                <option value="13:30:00">1:30 PM</option>
                                                <option value="15:00:00">3:00 PM</option>
                                            </select>
                                            @error('visits_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="book_tabel_">
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type='text' class="form-control"
                                                placeholder="Number of Visitors(Optional)"name="visits_no_of_visitors" @error('visits_no_of_visitors') is-invalid  @enderror id="num_of_members" value="{{ old('visits_no_of_visitors') }}">
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
                                                placeholder="Name of Institution(Optional)"name="visits_name_of_institution" @error('visits_name_of_institution') is-invalid  @enderror id="visits_name_of_institution" value="{{ old('visits_name_of_institution') }}" >
                                                @error('visits_name_of_institution')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="book_now_btn button_hover" href="#" style="width:1040px" type="submit">Book Now</button>

                    </div>
                        </form>
                        <br>

                </div>
            </div>
        </div>
        </div>
    </section>


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
</body>

</html>
