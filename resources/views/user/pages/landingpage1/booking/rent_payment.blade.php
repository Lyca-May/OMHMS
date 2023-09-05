<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <title>OMHMS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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
<style>
    .payment-slip-form {
        max-width: 500px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .payment-slip-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .payment-slip-form input[type="text"],
    .payment-slip-form input[type="number"],
    .payment-slip-form input[type="file"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 15px;
    }

    .payment-slip-form .invalid-feedback {
        color: red;
        font-size: 14px;
        margin-top: 5px;
    }

    .payment-slip-form .btn-primary {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        border: none;
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
        font-size: 16px;
    }

    .payment-slip-form .btn-primary:hover {
        background-color: #0069d9;
    }

    .payment-slip-form .breadcrumb {
        background-color: transparent;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .payment-slip-form .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .payment-slip-form .col {
        flex: 0 0 50%;
        max-width: 50%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .payment-slip-form .gcash-details {
        background-color: #f8f9fa;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
    }

    .payment-slip-form .gcash-details p {
        margin: 0;
    }
</style>

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
        @foreach ($rents as $rent)
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col">
                        <nav aria-label="breadcrumb" class="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('user/rentconhall') }}">Rent</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rent Payment</li>
                            </ol>
                        </nav>

                        <div class="payment-slip-form">
                            <form method="POST" action="{{ url('/rent-payment/update/' . $rent->rent_id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="gcash-details">
                                    <p style="font-size: 15px">Gcash Name: Aristeo Ahorro</p>
                                    <p style="font-size: 15px">Gcash Number: 09151949345</p>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <div class="form-group">
                                            <label for="add_service_payment">Payment for Rent</label>
                                                <input type="text" class="form-control" id="payment_rent"
                                                name="payment_rent" value="{{ $rent->payment_rent }}" readonly>
                                            @error('payment_rent')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </span>
                                            <input type="hidden" class="form-control" id="full_payment"
                                                name="full_payment" value="{{ $rent->full_payment }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="add_service_payment"><i class="fa fa-plus"></i> Add On Payment</label>
                                            <input type="text" class="form-control" id="add_service_payment"
                                                name="add_service_payment" value="{{ $rent->add_service_payment }}" readonly>
                                            @error('add_service_payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="total_payment"><i class="fa fa-money"></i> Total Payment</label>
                                            <input type="text" class="form-control" id="total_payment"
                                                name="total_payment" value="{{ $rent->total_payment }}" readonly>
                                        </div>
                                        @error('total_payment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                        <div class="form-group">
                                            {{-- <label for="others_payment">Others' Payment</label> --}}
                                            <input type="hidden" class="form-control" id="others_payment"
                                                name="others_payment" value="{{ $rent->others_payment }}" required>
                                        </div>
                                        @error('others_payment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror

                                        <!-- Other form fields in the first column -->
                                    </div>

                                    <div class="col">
                                        <!-- Form fields in the second column -->
                                        <div class="form-group">
                                            <small id="notice" class="form-text text-danger" style="display: none;">Minimum downpayment is 2000.</small>
                                            <small id="notice1" class="form-text text-danger" style="display: none;">Minimum downpayment is 3000.</small>
                                            <label for="downpayment"><i class="bi bi-arrow-down"></i> Downpayment</label>
                                            <input type="number" class="form-control" id="downpayment" name="downpayment"
                                                value="{{ $rent->downpayment }}" required>
                                        </div>
                                        @error('downpayment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="gcash_reference"><i class="lnr lnr-credit-card"></i> Gcash Reference</label>
                                            <input type="number" class="form-control" id="gcash_reference"
                                                name="gcash_reference" value="{{ $rent->gcash_reference }}" required>
                                        </div>
                                        @error('gcash_reference')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="proof_of_payment"><i class="fa fa-file"></i> Proof of Payment</label>
                                            <input type="file" class="form-control @error('proof_of_payment') is-invalid @enderror"
                                                id="proof_of_payment" name="proof_of_payment" required>
                                            @error('proof_of_payment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Form fields in the second column -->
                                        <div class="form-group" style="width: 463px">
                                            <label for="downpayment"><i class="bi bi-arrow-down"></i> Pending Payment</label>
                                            <input type="number" class="form-control" id="pendingpayment"
                                                value="" required>
                                        </div>
                                    </div>
                                </div>
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    <a href="{{ url('user/mybookings') }}">Click to see reservation details</a>
                                    @endif

                                @if(session('failed'))
                                    <span style="color: red">
                                        {{session('failed')}}
                                    </span>
                                @endif

                                <button type="submit" class="btn btn-primary">Submit your Payment</button>
                            </form>
                        </div>

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

    @if (session('failed'))
        <script>
            Swal.fire({
                icon: 'failed',
                title: 'Error!',
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
        // Get the input fields
        var downpaymentInput = document.getElementById('downpayment');
        var totalPaymentInput = document.getElementById('total_payment');
        var pendingPaymentInput = document.getElementById('pendingpayment');
        var notice = document.getElementById('notice');
        var notice1 = document.getElementById('notice1');
        // Calculate the pending payment when the downpayment or total payment value changes
        downpaymentInput.addEventListener('input', calculatePendingPayment);
        totalPaymentInput.addEventListener('input', calculatePendingPayment);

        // Function to calculate the pending payment
        function calculatePendingPayment() {
            var downpayment = parseFloat(downpaymentInput.value);
            var totalPayment = parseFloat(totalPaymentInput.value);

            // Check if the values are valid numbers
            if (!isNaN(downpayment) && !isNaN(totalPayment)) {
                var pendingPayment = totalPayment - downpayment;

                // Update the pending payment input field with the calculated value
                pendingPaymentInput.value = pendingPayment;
            }
            // Show or hide the notice based on the downpayment value
            if (downpayment < 2000) {
                notice.style.display = 'block';
            } else {
                notice.style.display = 'none';
            }
        }
    </script>
</body>
</body>

</html>
