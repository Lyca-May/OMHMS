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
    <link rel="stylesheet" href="{{asset("main1.css" )}}"/>
    <title>OMHMS</title>
</head>
<style>
    .bg-image1 {
        background-image: url('{{ asset('images/front.jpg') }}');
        background-size: cover;
        background-position: center;
        /* opacity: .5; */
    }
</style>

<body class="bg-gray bg-image1 ">
    <!--Pegister-->
    <div class="container mt-3 pt-3">
        <div class="form-container">
            <div class="row">
                <h3 class="title">Login</h3>
                @if(session('success'))
                    <span style="color: green">{{session('success')}}</span>
                    @elseif (session('failed'))
                    <span style="color: red">{{session('failed')}}</span>
                    @endif
                    <form action="{{url('auth/login/user')}}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Email ID</label>
                        <input type="email" class="form-control" placeholder="Email Address" name="user_email" id="user_email" value="{{old('user_email')}}" @error('user_email') is-invalid @enderror autocomplete="on">
                        @error('user_email')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" placeholder="Password" name="user_password" id="user_password" value="{{old('user_password')}}" @error('user_password') is-invalid @enderror autocomplete="on">
                        @error('user_password')
                            <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <a href="{{ url('user/home') }}"><button class="btn signup" style="margin-left: 120px" >Login</button></a>
                        </div>

                    <span class="signin-link" style="margin-top: 20px">Already have an account? Click here to <a href="{{url('auth/register')}}">Register</a></span>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
</body>

</html>
