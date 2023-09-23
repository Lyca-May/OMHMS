<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            text-align: center;
        }

        .logo img {
            max-width: 100px;
        }

        .button-link {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="logo">
            <img src="{{ asset('eOMHeritage.png') }}" alt="Museum Logo">
        </div>
        <h2>Good day!</h2>
        <p>Your rent for the Function Hall has been approved!</p>
        <p>Click the button below to view your reservation:</p>
        <a class="button-link" href="{{ $link }}">{{ $link }}</a>
        <p>Thank you for using our service!</p>
    </div>
</body>
</html>
