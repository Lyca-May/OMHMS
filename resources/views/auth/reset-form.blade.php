<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Form</title>
</head>
<body>
    <h1>Reset Form</h1>
    @if (session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif
    <form action="{{url('auth/confirm-reset')}}" method="POST">
        @csrf
        <div>
            <label for="">New Password</label>
            <input type="password" name="password" value="{{old('password')}} " class="@error('password')is-invalid @enderror" autocomplete="on">
            <input type="hidden" name="token" value="{{session('token')}} " autocomplete="on">
            @error('password')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="">Confirm Password</label>
            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}} " class="@error('password_confirmation')is-invalid @enderror" autocomplete="on">
            @error('password_confirmation')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Reset</button>
        </div>
    </form>
</body>
</html>
