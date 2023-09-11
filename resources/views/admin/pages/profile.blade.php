<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eOMHeritage Admin</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}


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
                    <ul id="tablesDrawer" class="drawer-items" style="display:block">
                        <li><a class="" href="{{ asset('admin/visit') }}">Museum Visit</a></li>
                        <li><a href="{{ url('admin/function') }}">Function Hall</a></li>

                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="#" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items" style="display:block">
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
                    <ul id="contentDrawer" class="drawer-items" style="display:block">
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
            @foreach ($users as $user)
                <div class="container-fluid">

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="bg-white shadow rounded overflow-hidden">
                                <div class="px-4 pt-0 pb-4 cover">
                                    <div class="media align-items-end profile-head">
                                        <div class="profile mr-3">
                                            <img src="{{ asset('avatar/' . $user->avatar) }}"
                                            class="rounded mb-2 img-thumbnail" alt="user avatar">
                                           <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                                class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>

                                        {{-- <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                                class="nav-link"><i class="zmdi zmdi-edit"></i> <span
                                                    class="hidden-xs">Edit</span></a> --}}
                                        <div class="media-body mb-5 text-white">
                                            <h4 class="mt-0 mb-0">{{ session('Admin')['user_fname'] }}'s Profile</h4>
                                            <p class="small mb-4"> <i
                                                    class="fas fa-map-marker-alt mr-2"></i>{{ $user->user_barangay }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3">
                                    {{-- <h5 class="mb-0">About</h5> --}}
                                    <div class="p-4 rounded shadow-sm bg-light">
                                        <div class="row text-center m-t-20" style="padding-top: 60px">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                                class="nav-link active"><i class="zmdi zmdi-account"></i> <span
                                                    class="hidden-xs">Profile</span></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="profile">
                                            <h5 class="mb-3">User Profile</h5>
                                            <div class="row">
                                                <div class="col-md-6">

                                                </div>
                                                {{-- @foreach ($users as $user) --}}
                                                <div class="col-md-12">
                                                    <form>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Last
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_lname }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">First
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control"
                                                                    value="{{ $user->user_fname }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Middle
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_mname }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Email</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="email"
                                                                    value="{{ $user->user_email }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Address</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control"
                                                                    value="{{ $user->user_country }}, {{ $user->user_province }}, {{ $user->user_municipality }}, {{ $user->user_barangay }}, {{ $user->user_street }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Zipcode</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_zipcode }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Birthdate</label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->birthdate }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Gender</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->gender }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Phone
                                                                Number</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_phonenum }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label">Username</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->role }}">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label"></label>
                                                            <div class="col-lg-9">

                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- @endforeach --}}
                                            </div>
                                            <!--/row-->
                                        </div>


                                        {{-- EDIT PROFILE --}}
                                        <div class="tab-pane" id="edit">
                                            <form action="/update-profile" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">First
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_fname"
                                                            value="{{ session('Admin')['user_fname'] }}"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Middle
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_mname"
                                                            value="{{ session('Admin')['user_mname'] }}"
                                                            placeholder="Middle Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Last
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_lname"
                                                            value="{{ session('Admin')['user_lname'] }}"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Email</label>
                                                    <div class="col-lg-9">
                                                        <input type="email" class="form-control" name="user_email"
                                                            value="{{ session('Admin')['user_email'] }}"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Change
                                                        profile</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="file" name="avatar">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label">Address</label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_country"
                                                            value="{{ session('Admin')['user_country'] }}"
                                                            placeholder="Country">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_province"
                                                            value="{{ session('Admin')['user_province'] }}"
                                                            placeholder="Province">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_municipality"
                                                            value="{{ session('Admin')['user_municipality'] }}"
                                                            placeholder="Municipality">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_barangay"
                                                            value="{{ session('Admin')['user_barangay'] }}"
                                                            placeholder="Barangay">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="user_street"
                                                            value="{{ session('Admin')['user_street'] }}"
                                                            placeholder="Street">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_zipcode"
                                                            value="{{ session('Admin')['user_zipcode'] }}"
                                                            placeholder="Zipcode">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label">Personal
                                                        Information</label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_phonenum"
                                                            value="{{ session('Admin')['user_phonenum'] }}"
                                                            placeholder="Phone Number">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="gender"
                                                            value="{{ session('Admin')['gender'] }}"
                                                            placeholder="Gender">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="birthdate"
                                                            value="{{ session('Admin')['birthdate'] }}"
                                                            placeholder="Birthdate">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                                    <div class="col-lg-9">
                                                        <input type="reset" class="btn btn-secondary"
                                                            value="Cancel">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form method="POST" action="{{ route('change.password') }}">
                                                @csrf

                                                <!-- Old Password Field -->
                                                <div class="form-group row">
                                                    <label for="old_password"
                                                        class="col-lg-3 col-form-label form-control-label">Old
                                                        Password</label>
                                                    <div class="col-lg-9">
                                                        <input id="old_password" type="password"
                                                            class="form-control @error('old_password') is-invalid @enderror"
                                                            name="old_password" required
                                                            autocomplete="current-password">
                                                        @error('old_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- New Password Field -->
                                                <div class="form-group row">
                                                    <label for="new_password"
                                                        class="col-lg-3 col-form-label form-control-label">New
                                                        Password</label>
                                                    <div class="col-lg-9">
                                                        <input id="new_password" type="password"
                                                            class="form-control @error('new_password') is-invalid @enderror"
                                                            name="new_password" required autocomplete="new-password">
                                                        @error('new_password')
                                                            <span class="invalid-feedback" role="alert">
                                                                {{ $message }}
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <!-- Confirm Password Field -->
                                                <div class="form-group row">
                                                    <label for="new_password_confirmation"
                                                        class="col-lg-3 col-form-label form-control-label">Confirm
                                                        Password</label>
                                                    <div class="col-lg-9">
                                                        <input id="new_password_confirmation" type="password"
                                                            class="form-control" name="new_password_confirmation"
                                                            required autocomplete="new-password">
                                                    </div>
                                                </div>

                                                <!-- Submit Button -->
                                                <div class="form-group row">
                                                    <div class="col-lg-9 offset-lg-3">
                                                        <button type="submit" class="btn btn-primary">Save New
                                                            Password</button>
                                                        <button type="reset"
                                                            class="btn btn-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            @endforeach



            <!--start overlay-->
            <div class="overlay toggle-menu"></div>
            <!--end overlay-->

        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
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


    </div><!--End wrapper-->


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


  {{-- ALERT --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
  @if (session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Success!',
          text: '{{ session('success') }}',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000,
          timerProgressBar: true,
          background: '#8cc63f',
          iconColor: '#ffffff',
          customClass: {
              title: 'text-white',
              content: 'text-white'
          }
      });
  </script>
@endif

@if (session('failed'))
  <script>
      Swal.fire({
          icon: 'failed',
          title: 'failed!',
          text: '{{ session('failed') }}',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 1000,
          timerProgressBar: true,
          background: '#dc3545',
          iconColor: '#ffffff',
          customClass: {
              title: 'text-white',
              content: 'text-white'
          }
      });
  </script>
@endif

</body>

</html>
