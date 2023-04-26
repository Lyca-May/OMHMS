<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Account Link</title>
</head>
<body>
        <h1>Your Forgot Account Link</h1>
        <span>Please click the link to confirm your reset password</span>
        <a href="{{url('auth/verify-reset', $mail['token'])}}">Click here</a>
</body>
</html>
