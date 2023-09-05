<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Your QR Code</h2>
                <p>Scan this QR code for your reservation details:</p>
                <img src="data:image/png;base64,{{ base64_encode($qrCode) }}" alt="QR Code for Visit {{ $visit->visits_id }}">
            </div>
            <div class="col-md-6">
                @if ($visit->visits_status == 'PENDING')
                    <h3>Reservation Details</h3>
                    <p>Number of Visitors: {{ $visit->visits_no_of_visitors }}</p>
                    <p>Intended Date: {{ $visit->visits_intended_date }}</p>
                    {{-- Add other data as needed --}}
                @else
                    <p>Reservation is not active.</p>
                @endif
            </div>
        </div>
    </div>
    

</body>

</html>
