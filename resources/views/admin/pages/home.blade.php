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
                        <li><a class=" href="{{ asset('admin/visit') }}">Museum Visit</a></li>
                        <li><a href="{{ url('admin/function') }}">Function Hall</a></li>

                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="#" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items">
                        <li><a href="{{ url('/artifacts') }}">Items & Artefacts</a></li>
                        <li><a href="{{ url('/souvenirs') }}">Souvenirs</a></li>
                        <li><a href="{{ url('/category') }}">Category</a></li>
                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="{{ url('admin/announcement') }}">
                        <i class="zmdi zmdi-info-outline"></i> <span>Announcements</span>
                    </a>
                </li>


                <li>
                    <a href="{{ url('admin/attendance') }}">
                        <i class="zmdi zmdi-file-text"></i> <span>Attendance</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/calendar') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        {{-- <small class="badge float-right badge-light">New</small> --}}
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
            {{-- <div class="container-fluid"> --}}

            <!--Start Dashboard Content-->

            <div class="card mt-3">
                <div class="card-content">
                    <div class="row row-group m-0">
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $visitCount }}<span class="float-right"></i></span>
                                </h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font" class="fa fa-eye">Total Visitors Today<span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $rentCount }} <span class="float-right"><i
                                            class="fa fa-account"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Account who Reserve a Rent <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $souvenirsCount }} <span
                                        class="float-right"><i></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Souvenir Stocks <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card-body">
                                <h5 class="text-white mb-0">{{ $artifactsCount }} <span class="float-right"><i
                                            class="fa fa-envira"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Quantity of Artifacts <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-header">Site Traffic
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                        data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-circle mr-2 text-white"></i>New
                                    Visitor</li>
                                <li class="list-inline-item"><i class="fa fa-circle mr-2 text-light"></i>Old
                                    Visitor</li>
                            </ul>
                            <div class="chart-container-1">
                                <canvas id="chart1"></canvas>
                            </div>
                        </div>

                        <div class="row m-0 row-group text-center border-top border-light-3">
                            <div class="col-12 col-lg-4">
                                <div class="p-3">
                                    <h5 class="mb-0">45.87M</h5>
                                    <small class="mb-0">Overall Visitor <span> <i class="fa fa-arrow-up"></i>
                                            2.43%</span></small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="p-3">
                                    <h5 class="mb-0">15:48</h5>
                                    <small class="mb-0">Visitor Duration <span> <i class="fa fa-arrow-up"></i>
                                            12.65%</span></small>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="p-3">
                                    <h5 class="mb-0">245.65</h5>
                                    <small class="mb-0">Pages/Visit <span> <i class="fa fa-arrow-up"></i>
                                            5.62%</span></small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">Weekly sales
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                        data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container-2">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-circle text-white mr-2"></i> Direct</td>
                                        <td>$5856</td>
                                        <td>+55%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-circle text-light-1 mr-2"></i>Affiliate</td>
                                        <td>$2602</td>
                                        <td>+25%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-circle text-light-2 mr-2"></i>E-mail</td>
                                        <td>$1802</td>
                                        <td>+15%</td>
                                    </tr>
                                    <tr>
                                        <td><i class="fa fa-circle text-light-3 mr-2"></i>Other</td>
                                        <td>$1105</td>
                                        <td>+5%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">Pending Bookings
                            <div class="col-sm-4">
                                {{-- <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a> --}}
                                <div class="search-box">
                                    <input type="text" class="form-control" id="searchInput"
                                        placeholder="Search">
                                </div>
                            </div>

                        </div>
                        <div class="table-responsive" style="width: 1255px; overflow-x: auto;">
                            <table class="table align-items-center table-flush table-borderless" id="pending-table">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Country</th>
                                        <th>Province</th>
                                        <th>Municipality</th>
                                        <th>Barangay</th>
                                        <th>Street</th>
                                        <th>Zipcode</th>
                                        <th>Date of Visit</th>
                                        <th>Selected Time</th>
                                        <th>Number of Visitors</th>
                                        <th>Name of Institution</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visit as $visits)
                                        <tr>
                                            <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }}
                                                {{ $visits->visits_mname }}.</td>
                                            <td>{{ $visits->visits_country }}</td>
                                            <td>{{ $visits->visits_province }}</td>
                                            <td>{{ $visits->visits_municipality }}</td>
                                            <td>{{ $visits->visits_brgy }}</td>
                                            <td>{{ $visits->visits_street }}</td>
                                            <td>{{ $visits->visits_zipcode }}</td>
                                            <td>{{ $visits->visits_intended_date }}</td>
                                            <td>{{ $visits->visits_time }}</td>
                                            <td>{{ $visits->visits_no_of_visitors }}</td>
                                            <td>{{ $visits->visits_name_of_institution }}</td>
                                            <td>
                                                @if ($visits->visits_status == 'PENDING')
                                                    <p><span style="color: gray">{{ $visits->visits_status }}</span>
                                                    </p>
                                                @else
                                                    <p><span style="color: green">{{ $visits->visits_status }}</span>
                                                    </p>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ url('/approve-status/' . $visits->userid) }}"
                                                    method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Approve</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#cancelModal">Cancel</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="cancelModal" tabindex="-1"
                                                    role="dialog" aria-labelledby="cancelModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content custom-modal">
                                                            <form
                                                                action="{{ url('/cancel_status/' . $visits->userid) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="cancelModalLabel">
                                                                        Confirm Cancel</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="cancel_reason">Reason for
                                                                            cancellation</label>
                                                                        <textarea class="form-control @error('cancel_reason') is-invalid @enderror" name="cancel_reason" id="cancel_reason"
                                                                            rows="3">{{ old('cancel_reason') }}</textarea>
                                                                        @error('cancel_reason')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success">Confirm Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
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

    <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>

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

    <script>
        // Function to filter table rows based on search input
        function filterTable() {
            var input = document.getElementById("searchInput");
            var filter = input.value.toUpperCase();
            var table = document.getElementById("categoryTable");
            var rows = table.getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var rowData = rows[i].getElementsByTagName("td");
                var match = false;

                for (var j = 0; j < rowData.length; j++) {
                    if (rowData[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }

                if (match) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        // Attach event listener to search input
        document.getElementById("searchInput").addEventListener("keyup", filterTable);
    </script>
</body>

</html>
