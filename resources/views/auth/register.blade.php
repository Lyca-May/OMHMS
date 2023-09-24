<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com') }}" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/admin/style.css') }}" rel="stylesheet">

</head>

<body
    style="
    background-image:url(../../../../../images/eomheritage_register.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;">

    <main>
        <div class="container">

            <section
                class="section register min-vh-150 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">



                            <div class="card mb-3">
                                <div class="d-flex py-4" style="margin-top: 10px; margin-left:20px">
                                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                                        <img src="{{ asset('omhms.png') }}" alt="logo icon">
                                        <span><img src="{{ asset('eOMHeritage.png') }}" alt="logo icon"></span>
                                        <span> <img src="{{ asset('images/lakbaylogo.jpg') }}" class="logo-icon" alt="logo icon"
                                        style="width: 70px; height: 60px; margin-left:290px "></span>
                                        <span> <img src="{{ asset('images/GSMlogo.jpg') }}" class="logo-icon" alt="logo icon"
                                        style="width: 70px; height: 60px; "></span>
                                        <span> <img src="{{ asset('PGOM.png') }}" class="logo-icon" alt="logo icon"
                                        style="width: 40px; height: 40px; "></span>
                                        <span> <img src="{{ asset('PTO.png') }}" class="logo-icon" alt="logo icon"
                                        style="width: 45px; height: 65px; "></span>
                                    </a>
                                </div><!-- End Logo -->
                                <div class="card-body">

                                    @if (session('success'))
                                        <span style="color: green">{{ session('success') }}</span>
                                    @elseif (session('failed'))
                                        <span style="color: red">{{ session('failed') }}</span>
                                    @endif
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate action="{{ route('register') }}"
                                        method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-at"></i></span>
                                                <input type="email" placeholder="Enter your Email"
                                                    class="form-control" name="user_email"
                                                    value="{{ old('user_email') }}" required
                                                    class="@error('user_email') is-invalid @enderror" autocomplete="on">
                                                @error('user_email')
                                                    <span style="color: red; font-size:15px">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top:20px">
                                            <div class="col-6">
                                                <label for="yourEmail" class="form-label">Password</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                                            class="bi bi-lock"></i></span>
                                                    <input type="password" placeholder="Confirm your Password"
                                                        class="form-control" name="user_password_confirmation"
                                                        value="{{ old('user_password_confirmation') }}"
                                                        class="@error('user_password_confirmation') is-invalid @enderror"
                                                        autocomplete="on" required>
                                                    @error('user_password_confirmation')
                                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="yourUsername" class="form-label">Confirm Password</label>
                                                <div class="input-group has-validation">
                                                    <span class="input-group-text" id="inputGroupPrepend"><i
                                                            class="bi bi-key"></i></span>
                                                    <input type="password" placeholder="Re-enter your Password"
                                                        class="form-control" name="user_password_confirmation"
                                                        value="{{ old('user_password_confirmation') }}"
                                                        class="@error('user_password_confirmation') is-invalid @enderror"
                                                        autocomplete="on" required>
                                                    @error('user_password_confirmation')
                                                        <span
                                                            style="color: red; font-size:15px">{{ $message }}</span>
                                                    @enderror

                                                </div>
                                            </div>

                                            <br><br><br> <br>

                                            <h6 class="sub-title" style="text-align: center"><b>PERSONAL INFORMATION</b></h6>
                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-4">
                                                    <label for="firstName" class="form-label">First Name</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-person"></i></span>
                                                        <input type="text" placeholder="First Name"
                                                            class="form-control" name="user_fname"
                                                            value="{{ old('user_fname') }}"
                                                            class="@error('user_fname') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_fname')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="middleName" class="form-label">Middle Name</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-person"></i></span>
                                                        <input type="text" placeholder="Middle Name"
                                                            class="form-control" name="user_mname"
                                                            value="{{ old('user_mname') }}"
                                                            class="@error('user_mname') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_mname')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-person"></i></span>
                                                        <input type="text" placeholder="Last Name"
                                                            class="form-control" name="user_lname"
                                                            value="{{ old('user_lname') }}"
                                                            class="@error('user_lname') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_lname')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-4">
                                                    <label for="gender" class="form-label">Gender</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend">⚥</span>
                                                        <input type="text" placeholder="Gender"
                                                            class="form-control" name="gender"
                                                            value="{{ old('gender') }}"
                                                            class="@error('gender') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('gender')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="birthday" class="form-label">Birthday</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-calendar"></i></span>
                                                        <input type="date" placeholder="Birthday"
                                                            class="form-control" name="birthdate"
                                                            value="{{ old('birthdate') }}"
                                                            class="@error('birthdate') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('birthdate')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="phonenum" class="form-label">Phone Number</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-phone"></i></span>
                                                        <input type="text" placeholder="Phone Number"
                                                            class="form-control" name="user_phonenum"
                                                            value="{{ old('user_phonenum') }}"
                                                            class="@error('user_phonenum') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_phonenum')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-3">
                                                    <label for="country" class="form-label">Country</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-geo"></i></span>
                                                        <input type="text" placeholder="Country"
                                                            class="form-control" name="user_country"
                                                            value="{{ old('user_country') }}"
                                                            class="@error('user_country') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_country')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="province" class="form-label">Province</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-geo"></i></span>
                                                        <input type="text" placeholder="Province"
                                                            class="form-control" name="user_province"
                                                            value="{{ old('user_province') }}"
                                                            class="@error('user_province') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_province')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="municipality" class="form-label">Municipality</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-geo"></i></span>
                                                        <input type="text" placeholder="Municipality"
                                                            class="form-control" name="user_municipality"
                                                            value="{{ old('user_municipality') }}"
                                                            class="@error('user_municipality') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_municipality')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <label for="barangay" class="form-label">Barangay</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-geo"></i></span>
                                                        <input type="text" placeholder="Barangay"
                                                            class="form-control" name="user_barangay"
                                                            value="{{ old('user_barangay') }}"
                                                            class="@error('user_barangay') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_barangay')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-top: 20px">
                                                <div class="col-8">
                                                    <label for="street" class="form-label">Street</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-geo"></i></span>
                                                        <input type="text" placeholder="Street"
                                                            class="form-control" name="user_street"
                                                            value="{{ old('user_street') }}"
                                                            class="@error('user_street') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_street')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <label for="zipcode" class="form-label">Zipcode</label>
                                                    <div class="input-group has-validation">
                                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                                class="bi bi-map"></i></span>
                                                        <input type="text" placeholder="Zipcode"
                                                            class="form-control" name="user_zipcode"
                                                            value="{{ old('user_zipcode') }}"
                                                            class="@error('user_zipcode') is-invalid @enderror"
                                                            autocomplete="on" required>
                                                        @error('user_zipcode')
                                                            <span
                                                                style="color: red; font-size:15px">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12"  style="margin-top: 20px">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="terms" type="checkbox"
                                                        value="" id="acceptTerms" required>
                                                    <label class="form-check-label" for="acceptTerms">I agree and
                                                        accept
                                                        the
                                                        <a href="#">terms and conditions</a></label>
                                                    <div class="invalid-feedback">You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center"style="margin-top: 20px;">
                                                <button class="btn btn-primary w-100" style="margin-left:260px" type="submit">Create
                                                    Account</button>
                                            </div>
                                            <div class="col-12" style="text-align: center;margin-top:20px">
                                                <p class="small mb-0">Already have an account? <a
                                                        href="{{ url('auth/login') }}">Log in</a></p>
                                            </div>
                                    </form>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/admin/main.js') }}"></script>

</body>

</html>
