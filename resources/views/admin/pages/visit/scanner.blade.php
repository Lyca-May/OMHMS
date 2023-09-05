<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Scan QR Code</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js"></script>
</head>
<body>
    <h1>Scan QR Code</h1>
    <div id="scanner" style="width: 100%;"></div>
    <div id="result"></div>

    <script>
        // Get the video element
        const scanner = document.getElementById('scanner');
        const csrfToken = '{{ csrf_token() }}';

        // Initialize and start QuaggaJS
        Quagga.init({
            inputStream: {
                name: 'Live',
                type: 'LiveStream',
                target: scanner,
                constraints: {
                    width: 640,
                    height: 480,
                },
            },
            decoder: {
                readers: ['code_128_reader', 'ean_reader', 'qr_reader'],
            },
        }, function (err) {
            if (err) {
                console.error(err);
                return;
            }
            Quagga.start();
        });

        Quagga.onDetected(function (result) {
            const code = result.codeResult.code;
            document.getElementById('result').textContent = 'Scanned: ' + code;

            // Make API request to update visits_status to "DONE"
            fetch('/admin/mark-visit-done', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({ visitId: code }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Visit marked as done!');
                } else {
                    alert('Error marking visit as done.');
                }
            })
            .catch(error => {
                console.error(error);
            });
        });
    </script>
</body>
</html>
