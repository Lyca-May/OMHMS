<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Account</title>
</head>
<body>
    <h1>Verify you Account</h1>
    <span>Please activate you account. Click the button below.</span>
    <a href="{{url('auth/verify-account', $mail['token'])}}">Activate</a>
</body>
</html>
