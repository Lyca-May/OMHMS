<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('omhms.png') }}">
    <title>OMHMS</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    @if (session('success'))
                    <span style="color: green">{{session('success')}}</span>
                    @elseif (session('failed'))
                    <span style="color: red">{{session('failed')}}</span>
                    @endif

                    <form action="{{route('register')}}" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <label>User Name</label>
                            <input type="email" class="form-control" placeholder="User Name">
                        </div> --}}
                     <div class = "row">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_fname" value="{{old('user_fname')}}" class="@error('user_fname') is-invalid @enderror" autocomplete="on">
                            @error('user_fname')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_mname" value="{{old('user_mname')}}" class="@error('user_mname') is-invalid @enderror" autocomplete="on">
                            @error('user_mname')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_lname" value="{{old('user_lname')}}" class="@error('user_lname') is-invalid @enderror" autocomplete="on">
                            @error('user_lname')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class = "row">

                        <div class="form-group">
                            <label for="">Country</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_country" value="{{old('user_country')}}" class="@error('user_country') is-invalid @enderror" autocomplete="on">
                            @error('user_country')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Province</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_province" value="{{old('user_province')}}" class="@error('user_province') is-invalid @enderror" autocomplete="on">
                            @error('user_province')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Municipality</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_municipality" value="{{old('user_municipality')}}" class="@error('user_municipality') is-invalid @enderror" autocomplete="on">
                            @error('user_municipality')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class = "row">

                        <div class="form-group">
                            <label for="">Barangay</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_barangay" value="{{old('user_barangay')}}" class="@error('user_barangay') is-invalid @enderror" autocomplete="on">
                            @error('user_barangay')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Street</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_street" value="{{old('user_street')}}" class="@error('user_street') is-invalid @enderror" autocomplete="on">
                            @error('user_street')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Zip Code</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_zipcode" value="{{old('user_zipcode')}}" class="@error('user_zipcode') is-invalid @enderror" autocomplete="on">
                            @error('user_zipcode')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>


                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" placeholder="User Name" name="user_phonenum" value="{{old('user_phonenum')}}" class="@error('user_phonenum') is-invalid @enderror" autocomplete="on">
                            @error('user_phonenum')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="User Name" name="user_email" value="{{old('user_email')}}" class="@error('user_email') is-invalid @enderror" autocomplete="on">
                            @error('user_email')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="User Name" name="user_password" value="{{old('user_password')}}" class="@error('user_password') is-invalid @enderror" autocomplete="on">
                            @error('user_password')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="User Name" name="user_password_confirmation" value="{{old('user_password_confirmation')}}" class="@error('user_password_confirmation') is-invalid @enderror" autocomplete="on">
                            @error('user_password_confirmation')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <button type="submit">Sign Up</button>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{url('auth/signin')}}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
