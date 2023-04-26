<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    @if (session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif

    <form action="{{url('auth/send-email')}}" method="POST">
    @csrf
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="{{old('email')}}" class="@error('email') is-invalid @enderror" autocomplete="on">
            @error('email')
                <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
