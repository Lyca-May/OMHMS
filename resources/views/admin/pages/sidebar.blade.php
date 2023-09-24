<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com') }}" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/admin/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-heading">Main Navigation</li>

            <li class="nav-item">
                <a class="nav-link " href="{{ asset('admin/home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#reservation-nav" data-bs-toggle="collapse" href="#">
                    <i class=" bi bi-calendar"></i><span>Reservations</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="reservation-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/function') }}">
                            <i class="bi bi-circle"></i><span>Manage Reservations</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/renthistory') }}">
                            <i class="bi bi-circle"></i><span>View All Reservations</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Reservations Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#bookings-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-book"></i><span>Bookings</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="bookings-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ asset('admin/visit') }}">
                            <i class="bi bi-circle"></i><span>Manage Bookings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/allvisit') }}">
                            <i class="bi bi-circle"></i><span>View All Bookings</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Bookings Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#inventory-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-archive"></i><span>Inventory</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="inventory-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/category') }}">
                            <i class="bi bi-circle"></i><span>Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/artifacts') }}">
                            <i class="bi bi-circle"></i><span>Items and Artifacts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Inventory Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#souvenirs-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gift"></i><span>Souvenirs</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="souvenirs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                    <li class="nav-heading">Souvenir Inventory</li>
                    <li>
                        <a href="{{ url('/category') }}">
                            <i class="bi bi-circle"></i><span>Category</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/souvenirs') }}">
                            <i class="bi bi-circle"></i><span>Inventory Control</span>
                        </a>
                    </li>


                    <li class="nav-heading">Souvenir Purchase</li>
                    <li>
                        {{-- /*wala pa*/ --}}
                        <a href="{{ url('admin/reserved') }}">
                            <i class="bi bi-circle"></i><span>Souvenir Management</span>
                        </a>
                    </li>

                    <li>
                        {{-- /*wala pa*/ --}}
                        <a href="{{ url('admin/souvenirpurchasedhistory') }}">
                            <i class="bi bi-circle"></i><span>Souvenir Purchased History</span>
                        </a>
                    </li>

                    <li>
                        {{-- /*wala pa*/ --}}
                        <a href="{{  url('admin/souvenirsaleshistory') }}">
                            <i class="bi bi-circle"></i><span>Souvenir Sales History</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Souvenirs Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/artifacts') }}">
                            <i class="bi bi-circle"></i><span>Admin Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/souvenirs') }}">
                            <i class="bi bi-circle"></i><span>Visitors Accounts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Inventory Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-graph-up"></i><span>Reports & Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('/artifacts') }}">
                            <i class="bi bi-circle"></i><span>Reservation Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/souvenirs') }}">
                            <i class="bi bi-circle"></i><span>Booking Reports</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/souvenirs') }}">
                            <i class="bi bi-circle"></i><span>Sales Reports</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Inventory Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#announce-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-megaphone"></i><span>Announcements</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="announce-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/announcement') }}">
                            <i class="bi bi-circle"></i><span>Announcement Management</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Inventory Nav -->



            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('admin/announcement') }}">
                    <i class="bi bi-megaphone"></i>
                    <span>Announcement</span>
                </a>
            </li><!-- End Announcement Nav --> --}}


            <li class="nav-item">
                <a class="nav-link collapsed " href="{{ url('admin/attendance') }}">
                    <i class="bi bi-check"></i>
                    <span>Attendance</span>
                </a>
            </li><!-- End Attendance Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed " href="{{ url('admin/attendance') }}">
                    <i class="bi bi-file-text"></i>
                    <span>Sales Report</span>
                </a>
            </li><!-- End Attendance Nav -->



            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#content-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-pencil"></i><span>Content Revisions</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="content-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('about-us/history') }}">
                            <i class="bi bi-circle"></i><span>Revise History</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about-us/footer') }}">
                            <i class="bi bi-circle"></i><span>Revise Footer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about-us/wts') }}">
                            <i class="bi bi-circle"></i><span>Revise WTS</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about-us/contact') }}">
                            <i class="bi bi-circle"></i><span>Revise Contact</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Edit Content Nav -->


            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ asset('admin/profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ asset('admin/scan-qr') }}">
                    <i class="bi bi-camera"></i>
                    <span>Scanner</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->
        </ul>

    </aside><!-- End Sidebar-->







    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/admin/main.js') }}"></script>

</body>

</html>
