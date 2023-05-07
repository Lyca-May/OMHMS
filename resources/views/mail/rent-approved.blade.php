<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank you</title>
</head>
<body>
    <p>
        <span>Good day!</span>
        <p>Your rent for functional hall has been approved! Click the link below to view your reservation</p>
        {{-- <p>Please click on the following link to view your reservation:</p> --}}
        <a href="{{ $link }}">{{ $link }}</a>
        <p>Thank you for using our service!</p>

</body>
</html>
