<body>
    <h1>Scan QR Code</h1>
    <div id="scanner" style="width: 100%;"></div>
    <div id="result"></div>

    <script>
        // Quagga configuration
        const config = {
            inputStream: {
                type: 'LiveStream',
                constraints: {
                    width: { min: 640 },
                    height: { min: 480 },
                    facingMode: 'environment', // or 'user' for front camera
                },
            },
            locator: {
                patchSize: 'medium',
                halfSample: true,
            },
            numOfWorkers: navigator.hardwareConcurrency || 4,
            decoder: {
                readers: ['ean_reader', 'code_128_reader', 'code_39_reader', 'code_39_vin_reader', 'codabar_reader', 'upc_reader', 'upc_e_reader', 'i2of5_reader', '2of5_reader', 'code_93_reader'],
            },
            locate: true,
        };

        // Start the scanner
        Quagga.init(config, function(err) {
            if (err) {
                console.error(err);
                return;
            }
            Quagga.start();
        });

        // Handle scanned result
        Quagga.onDetected(function(result) {
            const code = result.codeResult.code;
            document.getElementById('result').textContent = 'Scanned: ' + code;

            // Make an API request to mark the visit as "done"
            fetch('/admin/mark-visit-done', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ visitId: code })
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
