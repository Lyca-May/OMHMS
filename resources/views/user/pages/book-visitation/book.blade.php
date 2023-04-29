<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Book Visit</h1>
    {{-- @if(session('success'))
    <span style="color: green">{{session('success')}}</span>
    @elseif (session('failed'))
    <span style="color: red">{{session('failed')}}</span>
    @endif --}}
    <form action="" method="POST">
        <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
        <input type="text" placeholder="Email" name="user_email" value="{{old('user_email')}}" autocomplete="on">
    </form>
</body>
</html>
