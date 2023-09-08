<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OMHMS</title>
    <!-- loader-->
    <link href="{{ asset('assets/css/cssadmin/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/jsadmin/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('assets/css/cssadmin/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('assets/css/cssadmin/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('assets/css/cssadmin/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('assets/css/cssadmin/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('assets/css/cssadmin/app-style.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
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
        overflow: hidden;
        /* Hide the camera icon if it overflows */
    }

    #video {
        width: 100%;
        /* Make the video element fill the container */
        height: auto;
        /* Maintain the aspect ratio */
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

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon"
                        style="width: 40px; height: 30px">
                    <img src="{{ asset('eOMHeritage.png') }}" class="logo-icon1" alt="logo icon"
                        style="180px; height: 30px">
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ asset('admin/home') }}">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="#" id="tablesLink">
                        <i class="zmdi zmdi-book"></i> <span>Bookings</span>
                    </a>
                    <ul id="tablesDrawer" class="drawer-items">
                        <li><a href="{{ asset('admin/visit') }}">Museum Visit</a></li>
                        <li><a href="{{ url('admin/function') }}">Function Hall</a></li>
                        <!-- Add more link items as needed -->
                    </ul>
                </li>
                <li>
                    <a href="#" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items">
                        <li><a href="{{ url('/artifacts') }}">Items & Artifacts</a></li>
                        <li><a href="{{ url('/souvenirs') }}">Souvenirs</a></li>
                        <li><a href="{{ url('/category') }}">Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/announcement') }}">
                        <i class="zmdi zmdi-info-outline"></i> <span>Announcements</span>
                    </a>
                </li>


                <li>
                    <a href="forms.html">
                        <i class="zmdi zmdi-file-text"></i> <span>Attendance</span>
                    </a>
                </li>



                <li>
                    <a href="{{ url('admin/calendar') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    </a>
                </li>



                <li class="sidebar-header">About Us</li>

                <li>
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Edit Content</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items">
                        <li><a href="{{ url('about-us/history') }}">Edit History</a></li>
                        <li><a href="{{ url('about-us/footer') }}">Footer</a></li>
                        <li><a href="{{ url('about-us/wts') }}">What to see Inside</a></li>
                        <li><a href="{{ url('about-us/contact') }}">Contact</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ asset('admin/profile') }}">
                        <i class="zmdi zmdi-face"></i> <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ asset('admin/scan-qr') }}">
                        <i class="zmdi zmdi-camera"></i> <span>Scanner</span>
                    </a>
                </li>


            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <div id="clock">
                        <i class="zmdi zmdi-time">{{ $currentDateTime }}</i>
                    </div>

                    @foreach ($users as $user)
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                                href="#">
                                <span class="user-profile"><img src="{{ asset('avatar/' . $user->avatar) }}"
                                        class="img-circle" alt="user avatar"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item user-details">
                                    <a href="javaScript:void();">
                                        <div class="media">

                                            @if ($user->avatar)
                                                <div class="avatar"><img class="align-self-start mr-3"
                                                        src="{{ asset('avatar/' . $user->avatar) }}"
                                                        alt="user avatar"></div>
                                                {{-- <img src="{{ asset('avatar/' .$user->avatar) }}" alt="{{$user->user_fname}}" --}}
                                                {{-- class="rounded-circle me-2" style="width:100px; height:100px; object-fit:cover" /> --}}
                                            @endif

                                            <div class="media-body">
                                                <h6 class="mt-2 user-title">Hi, {{ session('Admin')['user_fname'] }}
                                                </h6>
                                                <p class="user-subtitle">{{ session('Admin')['user_email'] }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-account"></i><a
                                        href="{{ asset('admin/profile') }}"> Account</li></a>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="zmdi zmdi-power"></i><a
                                        href="{{ url('logout-admin') }}">Logout</li></a>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">

            <h1>Scan QR Code</h1>
            <div id="video-container">
                {{-- <video id="video" autoplay playsinline></video>
        <div id="camera-icon">📷</div> --}}
            </div>
            <div id="result-container">
                <div id="result">Scanning...</div>
                <div id="success-icon">&#10004;</div>
            </div>

        </div>

        <!--End Row-->

        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

        {{-- </div> --}}
        <!-- End container-fluid-->
    </div>

    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <footer class="footer">
        <div class="container">
            <div class="text-center">
                Copyright © 2023 eOMHeritage Admin
            </div>
        </div>
    </footer>
    <!--End footer-->

    </div>
    <!--End wrapper-->
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
                            deviceId: {
                                exact: deviceId
                            },
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

     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset('assets/js/jsadmin/jquery.min.js') }}"></script>
     <script src="{{ asset('assets/js/jsadmin/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/jsadmin/bootstrap.min.js') }}"></script>

     <!-- simplebar js -->
     <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
     <!-- sidebar-menu js -->
     <script src="{{ asset('assets/js/jsadmin/sidebar-menu.js') }}"></script>
     <!-- loader scripts -->
     <script src="{{ asset('assets/js/jsadmin/jquery.loading-indicator.js') }}"></script>
     <!-- Custom scripts -->
     <script src="{{ asset('assets/js/jsadmin/app-script.js') }}"></script>
     <!-- Chart js -->

     {{-- <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script> --}}

     <!-- Index js -->
     <script src="{{ asset('assets/js/jsadmin/index.js') }}"></script>

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
