<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        #video-container {
            position: relative;
            width: 80%;
            max-width: 640px;
            background-color: #000;
            border: 2px solid #333;
            border-radius: 8px;
            overflow: hidden; /* Hide the camera icon if it overflows */
        }

        #video {
            width: 100%; /* Make the video element fill the container */
            height: auto; /* Maintain the aspect ratio */
        }

        #camera-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
            padding: 5px;
        }

        #result-container {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border: 2px solid #333;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #result {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        #success-icon {
            font-size: 48px;
            color: green;
            border: 2px solid green;
            border-radius: 50%;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Scan QR Code</h1>
    <div id="video-container">
        {{-- <video id="video" autoplay playsinline></video>
        <div id="camera-icon">📷</div> --}}
    </div>
    <div id="result-container">
        <div id="result">Scanning...</div>
        <div id="success-icon">&#10004;</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jsqr"></script>
    <script>
        const resultElement = document.getElementById('result');
        const successIcon = document.getElementById('success-icon');

        // Request access to the camera devices
        navigator.mediaDevices.enumerateDevices()
            .then(devices => {
                const videoDevices = devices.filter(device => device.kind === 'videoinput');

                if (videoDevices.length > 0) {
                    // Use the first video device (camera)
                    const deviceId = videoDevices[0].deviceId;

                    // Define constraints with the selected device ID
                    const constraints = {
                        video: {
                            deviceId: { exact: deviceId },
                        },
                    };

                    // Request access to the camera with the specified constraints
                    navigator.mediaDevices.getUserMedia(constraints)
                        .then(stream => {
                            // Handle camera access
                            const videoElement = document.createElement('video');
                            videoElement.srcObject = stream;
                            videoElement.play();

                            // Add the video element to the DOM or perform other actions with the camera feed.
                            document.body.appendChild(videoElement);

                            // Listen for the 'loadedmetadata' event to ensure video metadata is loaded
                            videoElement.addEventListener('loadedmetadata', (e) => {
                                // Start scanning as shown in the previous response
                                function scanQRCode() {
                                    const canvasElement = document.createElement('canvas');
                                    const canvasContext = canvasElement.getContext('2d');
                                    canvasElement.width = videoElement.videoWidth;
                                    canvasElement.height = videoElement.videoHeight;
                                    canvasContext.drawImage(videoElement, 0, 0);

                                    const imageData = canvasContext.getImageData(
                                        0,
                                        0,
                                        canvasElement.width,
                                        canvasElement.height
                                    );

                                    const code = jsQR(imageData.data, imageData.width, imageData.height);

                                    if (code) {
                                        // QR code found
                                        resultElement.textContent = 'Scanned: ' + code.data;
                                        // Display the success icon
                                        successIcon.style.display = 'block';
                                    } else {
                                        // No QR code found in the current frame
                                        // Hide the success icon
                                        successIcon.style.display = 'none';
                                    }

                                    requestAnimationFrame(scanQRCode);
                                }

                                scanQRCode(); // Start scanning
                            });
                        })
                        .catch(error => {
                            // Handle errors if camera access was denied or if there was an issue.
                            console.error('Error accessing camera:', error);
                        });
                } else {
                    // No video devices (cameras) found
                    console.error('No video devices (cameras) available.');
                }
            })
            .catch(error => {
                // Handle errors if there was an issue with enumerating devices.
                console.error('Error enumerating devices:', error);
            });
    </script>
</body>
</html>
