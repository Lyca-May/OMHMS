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
                    @if (session('success'))
                        <span style="color: green">{{ session('success') }}</span>
                    @elseif (session('failed'))
                        <span style="color: red">{{ session('failed') }}</span>
                    @endif
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

</body>

</html>
