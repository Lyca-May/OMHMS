<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
        <h1>Register</h1>
        @if (session('success'))
        <span style="color: green">{{$message}}</span>
        @elseif (session('failed'))
        <span style="color: red">{{$message}}</span>
        @endif

        <form action="{{route('register')}}" method="POST">
            @csrf
            <div>
                <label for="">First Name</label>
                <input type="text" name="user_fname" value="{{old('user_fname')}}" class="@error('user_fname') is-invalid @enderror" autocomplete="on">
                @error('user_fname')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Middle Name</label>
                <input type="text" name="user_mname" value="{{old('user_mname')}}" class="@error('user_mname') is-invalid @enderror" autocomplete="on">
                @error('user_mname')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Last Name</label>
                <input type="text" name="user_lname" value="{{old('user_lname')}}" class="@error('user_lname') is-invalid @enderror" autocomplete="on">
                @error('user_lname')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Country</label>
                <input type="text" name="user_country" value="{{old('user_country')}}" class="@error('user_country') is-invalid @enderror" autocomplete="on">
                @error('user_country')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Province</label>
                <input type="text" name="user_province" value="{{old('user_province')}}" class="@error('user_province') is-invalid @enderror" autocomplete="on">
                @error('user_province')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Municipality</label>
                <input type="text" name="user_municipality" value="{{old('user_municipality')}}" class="@error('user_municipality') is-invalid @enderror" autocomplete="on">
                @error('user_municipality')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Barangay</label>
                <input type="text" name="user_barangay" value="{{old('user_barangay')}}" class="@error('user_barangay') is-invalid @enderror" autocomplete="on">
                @error('user_barangay')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Street</label>
                <input type="text" name="user_street" value="{{old('user_street')}}" class="@error('user_street') is-invalid @enderror" autocomplete="on">
                @error('user_street')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Zip Code</label>
                <input type="text" name="user_zipcode" value="{{old('user_zipcode')}}" class="@error('user_zipcode') is-invalid @enderror" autocomplete="on">
                @error('user_zipcode')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Phone Number</label>
                <input type="text" name="user_phonenum" value="{{old('user_phonenum')}}" class="@error('user_phonenum') is-invalid @enderror" autocomplete="on">
                @error('user_phonenum')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" name="user_email" value="{{old('user_email')}}" class="@error('user_email') is-invalid @enderror" autocomplete="on">
                @error('user_email')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="user_password" value="{{old('user_password')}}" class="@error('user_password') is-invalid @enderror" autocomplete="on">
                @error('user_password')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="">Confirm Password</label>
                <input type="password" name="user_password_confirmation" value="{{old('user_password_confirmation')}}" class="@error('user_password_confirmation') is-invalid @enderror" autocomplete="on">
                @error('user_password_confirmation')
                <span style="color: red">{{$message}}</span>
                @enderror
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
                                {{-- <a href="{{url('/auth/forgot')}}">Forgot Account</a> --}}
            <a href="{{url('/auth/signin')}}">Log in</a>
        </form>
</body>
</html>
