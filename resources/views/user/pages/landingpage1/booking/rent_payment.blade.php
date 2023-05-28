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
                                <li class="nav-item"><a class="nav-link" href="{{url('user/profile')}}">{{session('User')['user_fname']}}'s Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('user/souvenirs1') }}" style="margin-top: 25px; display: inline-block;" class="shop-icon-btn">
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
                <h2 class="title_color">Reservation for Renting the Function Hallt</h2>
                <p>We invite you to reserve now and experience the wonders of our museum, where you can discover
                    fascinating exhibits and immerse yourself in a world of knowledge and culture.</p>
            </div>
        </div>
    </section>
    <section>
        @foreach ($payment as $payments)
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('user/rentconhall') }}">Rent</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rent Payment</li>
                            </ol>
                        </nav>
                        <form method="POST" action="{{ route('rent.payment.update', ['rentid' => $payment->rentid]) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="userid">User ID</label>
                                <input type="text" class="form-control" id="userid" name="userid" value="{{ $payment->userid }}" required>
                            </div>

                            <div class="form-group">
                                <label for="downpayment">Downpayment</label>
                                <input type="text" class="form-control" id="downpayment" name="downpayment" value="{{ $payment->downpayment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="add_service_payment">Ad On Payment</label>
                                <input type="text" class="form-control" id="add_service_payment" name="add_service_payment" value="{{ $payment->add_service_payment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="others_payment">Others' Payment</label>
                                <input type="text" class="form-control" id="others_payment" name="others_payment" value="{{ $payment->others_payment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="total_payment">Total Payment</label>
                                <input type="text" class="form-control" id="total_payment" name="total_payment" value="{{ $payment->total_payment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="full_payment">Full Payment</label>
                                <input type="text" class="form-control" id="full_payment" name="full_payment" value="{{ $payment->full_payment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="proof_of_payment">Proof of Payment</label>
                                <input type="text" class="form-control" id="proof_of_payment" name="proof_of_payment" value="{{ $payment->proof_of_payment }}" required>
                            </div>

                            <div class="form-group">
                                <label for="gcash_reference">Gcash Reference</label>
                                <input type="text" class="form-control" id="gcash_reference" name="gcash_reference" value="{{ $payment->gcash_reference }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        <br>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


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
</body>
</body>

</html>
