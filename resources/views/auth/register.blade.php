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
    <link rel="stylesheet" href="{{asset('assets/main.css')}}" />
    <title>OMHMS</title>
</head>
<style>
    .bg-image1 {
        background-image: url('{{ asset('images/front.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        /* opacity: .5; */
    }
</style>

<body class="bg-gray bg-image1 ">
    <!--Pegister-->
    <div class="container mt-3 pt-3">
        <div class="form-container">
            @if (session('success'))
            <span style="color: green">{{session('success')}}</span>
            @elseif (session('failed'))
            <span style="color: red">{{session('failed')}}</span>
            @endif

            <div class="row">
              <h3 class="title">Register</h3>
                <form class="form-horizontal" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="form-group" style="width: 610px">
                        <label>Email ID</label>
                        <input type="email" class="form-control" name="user_email" value="{{old('user_email')}}" class="@error('user_email') is-invalid @enderror" autocomplete="on">
                        @error('user_email')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="user_password" value="{{old('user_password')}}" class="@error('user_password') is-invalid @enderror" autocomplete="on">
                        @error('user_password')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control"  name="user_password_confirmation" value="{{old('user_password_confirmation')}}" class="@error('user_password_confirmation') is-invalid @enderror" autocomplete="on">
                            @error('user_password_confirmation')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <h4 class="sub-title">Personal Information</h4>
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="user_fname" value="{{old('user_fname')}}" class="@error('user_fname') is-invalid @enderror" autocomplete="on">
                        @error('user_fname')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" class="form-control"  type="text" name="user_mname" value="{{old('user_mname')}}" class="@error('user_mname') is-invalid @enderror" autocomplete="on">
                            @error('user_mname')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Surname</label>
                        <input type="text" class="form-control"  name="user_lname" value="{{old('user_lname')}}" class="@error('user_lname') is-invalid @enderror" autocomplete="on">
                            @error('user_lname')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control"  name="gender" value="{{old('gender')}}" class="@error('gender') is-invalid @enderror" autocomplete="on">
                            @error('gender')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Birthdate</label>
                        <input type="date" class="form-control"  name="birthdate" value="{{old('birthdate')}}" class="@error('birthdate') is-invalid @enderror" autocomplete="on">
                            @error('birthdate')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" name="user_phonenum" value="{{old('user_phonenum')}}" class="@error('user_phonenum') is-invalid @enderror" autocomplete="on">
                        @error('user_phonenum')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" type="text" name="user_country" value="{{old('user_country')}}" class="@error('user_country') is-invalid @enderror" autocomplete="on">
                            @error('user_country')
                            <span style="color: red">{{$message}}</span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Province</label>
                        <input type="text" class="form-control" name="user_province" value="{{old('user_province')}}" class="@error('user_province') is-invalid @enderror" autocomplete="on">
                        @error('user_province')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Municipality</label>
                        <input type="text" class="form-control" name="user_municipality" value="{{old('user_municipality')}}" class="@error('user_municipality') is-invalid @enderror" autocomplete="on">
                        @error('user_municipality')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Barangay</label>
                        <input type="text" class="form-control" name="user_barangay" value="{{old('user_barangay')}}" class="@error('user_barangay') is-invalid @enderror" autocomplete="on">
                        @error('user_barangay')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Street</label>
                        <input type="text" class="form-control" name="user_street" value="{{old('user_street')}}" class="@error('user_street') is-invalid @enderror" autocomplete="on">
                        @error('user_street')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Zip Code</label>
                        <input type="text" class="form-control" name="user_zipcode" value="{{old('user_zipcode')}}" class="@error('user_zipcode') is-invalid @enderror" autocomplete="on">
                        @error('user_zipcode')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="check-terms">
                        <input type="checkbox" class="checkbox">
                        <span class="check-label">I agree to the terms and conditions. <a href="">Terms and Condition.</a></span>
                    </div>

                    <div>
                       <button type="submit" class="btn signup" style="margin-left: 210px" >Create Account</button></a>
                        </div>
                    <span class="signin-link" style="margin-left: 155px; margin-top: 10px">Already have an account? Click here to <a href="{{url('/')}}">Login</a></span>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>
</body>

</html>
