<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if(session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif

    <form action="{{url('auth/login/user')}}" method="POST">
        @csrf
        <div>
            <label for="">Email</label>
            <input type="text" name="user_email" value="{{old('user_email')}}" class="@error('user_email') is-invalid @enderror" autocomplete="on">
            @error('user_email')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="">Password</label>
                         <input type="text" name="user_password" value="{{old('user_password')}}" class="@error('user_password') is-invalid @enderror" autocomplete="on">
            @error('user_password')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
        <a href="{{url('/auth/forgot')}}">Forgot Account</a>
        <a href="{{url('/auth/register')}}">Register</a>
    </form>
</body>
</html>
