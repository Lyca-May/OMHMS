<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>eOMHeritage Admin</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js"></script>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/cssadmin/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Vendor CSS File -->
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/admin/style.css') }}" rel="stylesheet">



</head>

</head>

<body>

    <!--Start sidebar-wrapper-->
    @include('admin.pages.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('admin.pages.navbar')
    <!--End topbar header-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active">Edit Content</li>
                    <li class="breadcrumb-item active">Profile</li>
                    <li class="breadcrumb-item active">Scanner</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="card-content">
                    <hr>
                    <h1>QR Code Scanner</h1>
                    <hr>
                    <div id="video-container">
                        <canvas id="detector-box"></canvas>
                    </div>
                    <div id="result-container">
                        <div id="result">Scanning...</div>
                        <div id="success-icon" style="display: none;">&#10004;</div>
                    </div>
                    <div class="card">
                        <div class="row">
                            <button class="btn btn-primary" onclick="logIn()">Log In</button>
                        </div>
                        <div class="row">
                            <button class="btn btn-danger" onclick="logOut()">Log Out</button>
                        </div>
                    </div>s
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jsqr"></script>

    <div id="result"></div>
    <img id="success-icon" alt="Success Icon" style="display: none;">
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

    <script>
        const resultElement = document.getElementById('result');
        const successIcon = document.getElementById('success-icon');
<<<<<<< Updated upstream
        let qrCodeData = null; // Store scanned QR code data
=======
        const detectorBoxCanvas = document.getElementById('detector-box');
        const detectorBoxContext = detectorBoxCanvas.getContext('2d');
        let qrCodeDetected = false; // Flag to track if a QR code has been detected

        // Define the dimensions and position of the detector box
        const boxWidth = 350; // Adjust as needed
        const boxHeight = 300; // Adjust as needed
        const boxX = (window.innerWidth - boxWidth) / 3;
        const boxY = (window.innerHeight - boxHeight) / 5;

        // Set the dimensions of the detector box canvas
        detectorBoxCanvas.width = window.innerWidth;
        detectorBoxCanvas.height = window.innerHeight;

        // Draw the initial red detector box on the canvas
        detectorBoxContext.strokeStyle = 'red';
        detectorBoxContext.lineWidth = 2;
        detectorBoxContext.strokeRect(boxX, boxY, boxWidth, boxHeight);
>>>>>>> Stashed changes

        function logIn() {
            if (qrCodeData) {
                // Send the QR code data and action to the server
                sendDataToServer(qrCodeData, 'LOGGED IN');
            } else {
                alert('No QR code scanned.');
            }
        }

        function logOut() {
            if (qrCodeData) {
                // Send the QR code data and action to the server
                sendDataToServer(qrCodeData, 'LOGGED OUT');
            } else {
                alert('No QR code scanned.');
            }
        }

        function sendDataToServer(qrData, action) {
            // Send the scanned QR code data and action to the server for processing
            // Replace this with your actual server endpoint and request format
            fetch('/process-qr-code', {
                method: 'POST',
                body: JSON.stringify({ qrData, action }),
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // QR code successfully processed on the server
                    // Update the UI or perform any other actions as needed
                    console.log('QR code processed successfully:', data.message);
                    qrCodeData = null; // Clear scanned QR code data
                    resultElement.textContent = ''; // Clear the result display
                    successIcon.style.display = 'none'; // Hide the success icon
                } else {
                    console.error('Error processing QR code:', data.error);
                }
            })
            .catch(error => {
                console.error('Error sending QR code data:', error);
            });
        }

        // Request access to the camera devices and handle QR code scanning
        navigator.mediaDevices.enumerateDevices()
            .then(devices => {
                const videoDevices = devices.filter(device => device.kind === 'videoinput');

                if (videoDevices.length > 0) {
                    const deviceId = videoDevices[0].deviceId;
                    const constraints = {
                        video: {
                            deviceId: {
                                exact: deviceId
                            },
                        },
                    };

                    navigator.mediaDevices.getUserMedia(constraints)
                        .then(stream => {
<<<<<<< Updated upstream
                            const videoElement = document.createElement('video');
                            videoElement.srcObject = stream;
                            videoElement.play();
                            document.body.appendChild(videoElement);

                            videoElement.addEventListener('loadedmetadata', () => {
=======
                            // Handle camera access
                            const videoContainer = document.getElementById('video-container');
                            const videoElement = document.createElement('video');
                            videoElement.srcObject = stream;
                            videoElement.play();

                            // Listen for the 'loadedmetadata' event to ensure video metadata is loaded
                            videoElement.addEventListener('loadedmetadata', () => {
                                // Append the video element to the video container
                                videoContainer.appendChild(videoElement);

>>>>>>> Stashed changes
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
                                        successIcon.style.display = 'block';
<<<<<<< Updated upstream
                                        qrCodeData = code.data; // Store scanned QR code data
=======

                                        // Change detection box color to green
                                        if (!qrCodeDetected) {
                                            detectorBoxContext.strokeStyle = 'green';
                                            detectorBoxContext.lineWidth = 2;
                                            detectorBoxContext.strokeRect(boxX, boxY, boxWidth, boxHeight);
                                            qrCodeDetected = true; // Set the flag to true
                                        }

                                        // Send the scanned QR code data to the server for processing
                                        // ...

>>>>>>> Stashed changes
                                    } else {
                                        successIcon.style.display = 'none';

                                        // Change detection box color back to red
                                        if (qrCodeDetected) {
                                            detectorBoxContext.strokeStyle = 'red';
                                            detectorBoxContext.lineWidth = 2;
                                            detectorBoxContext.strokeRect(boxX, boxY, boxWidth, boxHeight);
                                            qrCodeDetected = false; // Set the flag to false
                                        }
                                    }

                                    requestAnimationFrame(scanQRCode);
                                }

                                scanQRCode();
                            });
                        })
                        .catch(error => {
                            console.error('Error accessing camera:', error);
                        });
                } else {
                    console.error('No video devices (cameras) available.');
                }
            })
            .catch(error => {
                console.error('Error enumerating devices:', error);
            });
    </script>




    {{-- Vendor JS --}}
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/admin/datatable.js') }}"></script>
    <!-- Bootstrap core JavaScript-->

    <script src="{{ asset('assets/js/jsadmin/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsadmin/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/jsadmin/bootstrap.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Convert 24-hour format to 12-hour format
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;

            var timeString = hours.toString().padStart(2, '0') + ':' +
                minutes.toString().padStart(2, '0') + ':' +
                seconds.toString().padStart(2, '0') + ' ' + ampm;

            document.getElementById('clock').innerHTML = timeString;

            // Update the time every second
            setTimeout(updateTime, 1000);
        }

        updateTime();
    </script>

</body>

</html>
