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
    <link rel="stylesheet" href="{{ asset('main1.css') }}" />
    <title>OMHMS</title>
</head>

<body>
    <div class="container">
        <div class="cover">
            <div class="front">
                <img src="{{ asset('images/hmnaulake.jpg') }}" alt="">

                <div class="text">
                    {{-- <span class="text-3"><img src="{{asset("images/POM.png")}}"></span> --}}
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>

                    <form action="{{ url('auth/login/user') }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="user_email" value="{{old('user_email')}}" @error('user_email') is-invalid @enderror autocomplete="on">
                        @error('user_email')
                            <span style="color: red; font-size:15px">{{$message}}</span>
                        @enderror
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="form-control" placeholder="Password" placeholder="Password" name="user_password" id="user_password" value="{{old('user_password')}}" @error('user_password') is-invalid @enderror autocomplete="on">
                                @error('user_password')
                                    <span style="color: red; font-size:15px">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="text"><a href="#">Forgot password?</a></div>
                            <div class="button input-box">
                                 <input type="submit" value="Submit">
                            </div>
                            <div class="text sign-up-text">Don't have an account? <a
                                    href="{{ url('auth/register') }}">Sign Up
                                    now</a>
                            </div>
                        </div>
                    </form>
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
