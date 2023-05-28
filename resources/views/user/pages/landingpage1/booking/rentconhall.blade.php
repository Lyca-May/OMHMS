<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-********" crossorigin="anonymous" />

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
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ url('user/profile') }}">{{ session('User')['user_fname'] }}'s
                                        Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user/souvenirs1') }}" style="margin-top: 25px; display: inline-block;"
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
    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area" style="margin-top: 150px">
        <div class="container">
            <div class="section_title">
                <h2 class="title_color">Reservation for Renting the Function Hall</h2>
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
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li> --}}
                                <li class="breadcrumb-item"><a href="{{ url('user/rent') }}">Rent</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rent Payment</li>
                            </ol>
                        </nav>
                        <form method="POST" action="{{ url('user/rent-submit') }}">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="facility" class="col-md-4 col-form-label text-md-right">Facility</label>

                                        <div class="col-md-6">
                                            {{-- <input id="facility" type="hidden" class="form-control" name="userid" value="{{session('User') ['user_id']}}"> --}}
                                            <input id="facility" type="text"
                                                class="form-control @error('facility') is-invalid @enderror" name="facility"
                                                value="{{ old('facility') }}" required autofocus>

                                            @error('facility')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="agency" class="col-md-4 col-form-label text-md-right">Agency</label>

                                        <div class="col-md-6">
                                            <input id="agency" type="text"
                                                class="form-control @error('agency') is-invalid @enderror" name="agency"
                                                value="{{ old('agency') }}" required>

                                            @error('agency')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_person" class="col-md-4 col-form-label text-md-right">Contact
                                            Person</label>

                                        <div class="col-md-6">
                                            <input id="contact_person" type="text"
                                                class="form-control @error('contact_person') is-invalid @enderror"
                                                name="contact_person" value="{{ old('contact_person') }}" required>

                                            @error('contact_person')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_number" class="col-md-4 col-form-label text-md-right">Contact
                                            Number</label>

                                        <div class="col-md-6">
                                            <input id="contact_number" type="text"
                                                class="form-control @error('contact_number') is-invalid @enderror"
                                                name="contact_number" value="{{ old('contact_number') }}" required>

                                            @error('contact_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date_requested" class="col-md-4 col-form-label text-md-right">Date
                                            Requested</label>

                                        <div class="col-md-6">
                                            <input id="date_requested" type="date"
                                                class="form-control @error('date_requested') is-invalid @enderror"
                                                name="date_requested" value="{{ old('date_requested') }}" required>

                                            @error('date_requested')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="event_start" class="col-md-4 col-form-label text-md-right">Event Start
                                            Time</label>

                                        <div class="col-md-6">
                                            <input id="event_start" type="text"
                                                class="form-control @error('event_start') is-invalid @enderror"
                                                name="event_start" value="{{ old('event_start') }}" required
                                                placeholder="HH:MM">

                                            @error('event_start')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="event_type" class="col-md-4 col-form-label text-md-right">Event
                                            Type</label>

                                        <div class="col-md-6">
                                            <input id="event_type" type="text"
                                                class="form-control @error('event_type') is-invalid @enderror"
                                                name="event_type" value="{{ old('event_type') }}" required>

                                            @error('event_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="prep_setup_time" class="col-md-4 col-form-label text-md-right">Preparation
                                            Setup Time</label>

                                        <div class="col-md-6">
                                            <input id="prep_setup_time" type="text"
                                                class="form-control @error('prep_setup_time') is-invalid @enderror"
                                                name="prep_setup_time" value="{{ old('prep_setup_time') }}" required
                                                placeholder="HH:MM">

                                            @error('prep_setup_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="date_of_setup" class="col-md-4 col-form-label text-md-right">Date of
                                            Setup</label>

                                        <div class="col-md-6">
                                            <input id="date_of_setup" type="date"
                                                class="form-control @error('date_of_setup') is-invalid @enderror"
                                                name="date_of_setup" value="{{ old('date_of_setup') }}" required>

                                            @error('date_of_setup')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group row">
                                        <label for="others" class="col-md-4 col-form-label text-md-right">Others</label>

                                        <div class="col-md-6">
                                            <input id="others" type="text"
                                                class="form-control @error('others') is-invalid @enderror" name="others"
                                                value="{{ old('others') }}">

                                            @error('others')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <span>Ad On. Note: Add 3 thousand pesos once you select any of the additional service</span>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">Equipment</label>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="sound_system"
                                                    name="sound_system" {{ old('sound_system') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="sound_system">
                                                    Sound System
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="led_tv"
                                                    name="led_tv" {{ old('led_tv') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="led_tv">
                                                    LED TV
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="microphones"
                                                    name="microphones" {{ old('microphones') ? 'checked' : '' }}
                                                    onchange="toggleMicrophoneFields(this)">
                                                <label class="form-check-label" for="microphones">
                                                    Microphones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="stands"
                                                    name="stands" {{ old('stands') ? 'checked' : '' }}
                                                    onchange="toggleStandFields(this)">
                                                <label class="form-check-label" for="stands">
                                                    Stands
                                                </label>
                                            </div>

                                            @error('sound_system')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            @error('led_tv')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            @error('microphones')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            @error('stands')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" id="microphoneFields" style="display: none;">
                                        <label for="number_of_microphones"
                                            class="col-md-4 col-form-label text-md-right">Number of Microphones</label>
                                        <div class="col-md-6">
                                            <input id="number_of_microphones" type="number"
                                                class="form-control @error('number_of_microphones') is-invalid @enderror"
                                                name="number_of_microphones" value="{{ old('number_of_microphones') }}"
                                                disabled>
                                            @error('number_of_microphones')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" id="standFields" style="display: none;">
                                        <label for="number_of_stands" class="col-md-4 col-form-label text-md-right">Number of
                                            Stands</label>
                                        <div class="col-md-6">
                                            <input id="number_of_stands" type="number"
                                                class="form-control @error('number_of_stands') is-invalid @enderror"
                                                name="number_of_stands" value="{{ old('number_of_stands') }}">

                                            @error('number_of_stands')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right">Furniture</label>

                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="table"
                                                    name="table" {{ old('table') ? 'checked' : '' }}
                                                    onchange="toggleTableFields(this)">
                                                <label class="form-check-label" for="table">
                                                    Add Table?
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="chair"
                                                    name="chair" {{ old('chair') ? 'checked' : '' }}
                                                    onchange="toggleChairFields(this)">
                                                <label class="form-check-label" for="chair">
                                                    Add Chair?
                                                </label>
                                            </div>

                                            @error('tables')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                            @error('chairs')
                                                <span class="invalid-feedback d-block" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="form-group row" id="microphoneFields" style="display: none;">
                                            <label for="number_of_microphones"
                                                class="col-md-4 col-form-label text-md-right">Number of Microphones</label>
                                            <div class="col-md-6">
                                                <input id="number_of_microphones" type="number"
                                                    class="form-control @error('number_of_microphones') is-invalid @enderror"
                                                    name="number_of_microphones" value="{{ old('number_of_microphones') }}"
                                                    disabled>
                                                @error('number_of_microphones')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="tableFields" style="display: none;">
                                        <label for="number_of_tables" class="col-md-4 col-form-label text-md-right">Number of
                                            Table</label>
                                        <div class="col-md-6">
                                            <input id="number_of_tables" type="number"
                                                class="form-control @error('number_of_tables') is-invalid @enderror"
                                                name="number_of_tables" value="{{ old('number_of_tables') }}">

                                            @error('number_of_tables')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row" id="chairFields" style="display: none;">
                                        <label for="number_of_chairs" class="col-md-4 col-form-label text-md-right">Number of
                                            Chair</label>
                                        <div class="col-md-6">
                                            <input id="number_of_chairs" type="number"
                                                class="form-control @error('number_of_chairs') is-invalid @enderror"
                                                name="number_of_chairs" value="{{ old('number_of_chairs') }}">

                                            @error('number_of_chairs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Rent Room
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <div></div>
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

    <script>
        function toggleMicrophoneFields(checkbox) {
            var microphoneFields = document.getElementById('microphoneFields');
            var numberOfMicrophones = document.getElementById('number_of_microphones');

            if (checkbox.checked) {
                microphoneFields.style.display = 'block';
                numberOfMicrophones.disabled = false;
            } else {
                microphoneFields.style.display = 'none';
                numberOfMicrophones.disabled = true;
            }
        }

        function toggleStandFields(checkbox) {
            var standFields = document.getElementById('standFields');
            var numberOfStands = document.getElementById('number_of_stands');

            if (checkbox.checked) {
                standFields.style.display = 'block';
                numberOfStands.disabled = false;
            } else {
                standFields.style.display = 'none';
                numberOfStands.disabled = true;
            }
        }

        function toggleTableFields(checkbox) {
            var tableFields = document.getElementById('tableFields');
            var numberOfTables = document.getElementById('number_of_tables');

            if (checkbox.checked) {
                tableFields.style.display = 'block';
                numberOfTables.disabled = false;
            } else {
                tableFields.style.display = 'none';
                numberOfTables.disabled = true;
            }
        }

        function toggleChairFields(checkbox) {
            var chairFields = document.getElementById('chairFields');
            var numberOfChairs = document.getElementById('number_of_chairs');

            if (checkbox.checked) {
                chairFields.style.display = 'block';
                numberOfChairs.disabled = false;
            } else {
                chairFields.style.display = 'none';
                numberOfChairs.disabled = true;
            }
        }

    </script>
</body>
</body>

</html>
