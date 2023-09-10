<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('main.css') }}" />
    <title>OMHMS</title>
</head>

<body>
    <div class="container">
        <div class="forms">
            <div class="form-content">
                <div class="signup-form">
                    @if (session('success'))
                        <span style="color: green">{{ session('success') }}</span>
                    @elseif (session('failed'))
                        <span style="color: red">{{ session('failed') }}</span>
                    @endif
                    <div class="title">Signup</div>
                    <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="input-boxes">
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" placeholder="Enter your Email" class="form-control"
                                            name="user_email" value="{{ old('user_email') }}"
                                            class="@error('user_email') is-invalid @enderror" autocomplete="on">
                                        @error('user_email')
                                            <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" placeholder="Enter your Password" class="form-control"
                                            name="user_password" value="{{ old('user_password') }}"
                                            class="@error('user_password') is-invalid @enderror" autocomplete="on">
                                        @error('user_password')
                                            <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" placeholder="Confirm your Password" class="form-control"
                                            name="user_password_confirmation"
                                            value="{{ old('user_password_confirmation') }}"
                                            class="@error('user_password_confirmation') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_password_confirmation')
                                            <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h6 class="sub-title" style="text-align: center">Personal Information</h6>
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="First Name" class="form-control" name="user_fname"
                                            value="{{ old('user_fname') }}" class="@error('user_fname') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_fname')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Middle Name" class="form-control" name="user_mname"
                                            value="{{ old('user_mname') }}" class="@error('user_mname') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_mname')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Last Name" class="form-control" name="user_lname"
                                            value="{{ old('user_lname') }}" class="@error('user_lname') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_lname')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Gender" class="form-control" name="gender"
                                            value="{{ old('gender') }}" class="@error('gender') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('gender')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="date" placeholder="Birthday" class="form-control" name="birthdate"
                                            value="{{ old('birthdate') }}" class="@error('birthdate') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('birthdate')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" placeholder="Phone Number" class="form-control" name="user_phonenum"
                                            value="{{ old('user_phonenum') }}" class="@error('user_phonenum') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_phonenum')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Country" class="form-control" name="user_country"
                                            value="{{ old('user_country') }}"
                                            class="@error('user_country') is-invalid @enderror" autocomplete="on">
                                        @error('user_country')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Province" class="form-control" name="user_province"
                                            value="{{ old('user_province') }}"
                                            class="@error('user_province') is-invalid @enderror" autocomplete="on">
                                        @error('user_province')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" placeholder="Municipality" class="form-control"
                                            name="user_municipality" value="{{ old('user_municipality') }}"
                                            class="@error('user_municipality') is-invalid @enderror" autocomplete="on">
                                        @error('user_municipality')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-phone"></i>
                                        <input type="text" placeholder="Barangay" class="form-control" name="user_barangay"
                                            value="{{ old('user_barangay') }}"
                                            class="@error('user_barangay') is-invalid @enderror" autocomplete="on">
                                        @error('user_barangay')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Street" class="form-control" name="user_street"
                                            value="{{ old('user_street') }}" class="@error('user_street') is-invalid @enderror"
                                            autocomplete="on">
                                        @error('user_street')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-box">
                                        <i class="fas fa-user"></i>
                                        <input type="text" placeholder="Zipcode" class="form-control" name="user_zipcode"
                                            value="{{ old('user_zipcode') }}"
                                            class="@error('user_zipcode') is-invalid @enderror" autocomplete="on">
                                        @error('user_zipcode')
                                        <span style="color: red; font-size:15px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button input-box">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Already have an account?<a href="{{ url('auth/login') }}">
                                    Login now</a></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="cover">
            <div class="front">
                <img src="{{ asset('images/hmhal.jpg') }}" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
    </div>


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
                timer: 1000,
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
                timer: 1000,
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
