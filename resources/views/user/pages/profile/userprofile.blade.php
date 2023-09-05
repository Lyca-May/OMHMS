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
    <link href="{{ asset('assets/css/css/app-style1.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">



</head>

<body class="bg-theme">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon">
                    <img src="{{ asset('eOMHeritage.png') }}" class="logo-icon1" alt="logo icon">
                    {{-- <h5 class="logo-text">OMHMS</h5> --}}
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="{{ url('user/landlog') }}">
                        <i class="zmdi zmdi-home"></i> <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('user/profile') }}">
                        <i class="zmdi zmdi-face"></i> <span>My Profile</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('user/myreview') }}">
                        <i class="zmdi zmdi-star"></i> <span>My Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/user/qr') }}" id="tablesLink">
                        <i class="zmdi zmdi-book"></i> <span>Active booking</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('user/visithistory') }}">
                        <i class="zmdi zmdi-time"></i> <span>Booking History</span>
                    </a>
                </li>
                {{--
          <li>
            <a href="{{url("admin/calendar")}}">
              <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>

            </a>
          </li> --}}

                {{-- <small class="badge float-right badge-light">New</small> --}}





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
                 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                 <i class="fa fa-envelope-open-o"></i></a>
               </li>
               <li class="nav-item dropdown-lg">
                 <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                 <i class="fa fa-bell-o"></i></a>
               </li>

               {{-- <div id="clock">
                   <i class="zmdi zmdi-time">{{ $currentDateTime }}</i>
               </div> --}}

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
                                           <h6 class="mt-2 user-title">Hi, {{ session('User')['user_fname'] }}
                                           </h6>
                                           <p class="user-subtitle">{{ session('User')['user_email'] }}</p>
                                       </div>
                                   </div>
                           </a>
                       </li>
                       <li class="dropdown-divider"></li>
                       <li class="dropdown-item"><i class="zmdi zmdi-account"></i><a
                               href="{{ asset('admin/profile') }}"> Account</li></a>
                       <li class="dropdown-divider"></li>
                       <li class="dropdown-item"><i class="zmdi zmdi-power"></i><a
                               href="{{ asset('logout') }}">Logout</li></a>
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

  {{-- <div class="card-img-block">
                <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
            </div> --}}

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="bg-white shadow rounded overflow-hidden">
                                <div class="px-4 pt-0 pb-4 cover">
                                    <div class="media align-items-end profile-head">
                                        <div class="profile mr-3"><img
                                                src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80"
                                                alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="javascript:void();"
                                                data-target="#edit" data-toggle="pill" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>

                                                {{-- <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                                class="nav-link"><i class="zmdi zmdi-edit"></i> <span
                                                    class="hidden-xs">Edit</span></a> --}}
                                        <div class="media-body mb-5 text-white">
                                            <h4 class="mt-0 mb-0">Mark Williams</h4>
                                            <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-4 py-3">
                                    {{-- <h5 class="mb-0">About</h5> --}}
                                    <div class="p-4 rounded shadow-sm bg-light">
                                        <div class="row text-center m-t-20" style= "padding-top: 60px">
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">0</h3><small  style="color: #455a64;"> Souvenirs</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">0</h3><small  style="color: #455a64;">Visits</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light">0</h3><small style="color: #455a64;">Reservations</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>





                            {{-- <div class="card profile-card-2">
                                <div class="card-body pt-5">
                                    @if ($user->avatar)
                                        <img src="{{ asset('avatar/' . $user->avatar) }}"
                                            alt="{{ $user->user_fname }}" class="rounded-circle me-2"
                                            style="width:100px; height:100px; object-fit:cover" />
                                    @endif
                                    <h5 class="card-title">{{ session('User')['user_fname'] }}'s Profile</h5>
                                    <p class="card-text">OMHMS Admin</p>
                                    <div class="icon-block">
                                        <a href="javascript:void();"><i
                                                class="fa fa-facebook bg-facebook text-white"></i></a>
                                        <a href="javascript:void();"> <i
                                                class="fa fa-twitter bg-twitter text-white"></i></a>
                                        <a href="javascript:void();"> <i
                                                class="fa fa-google-plus bg-google-plus text-white"></i></a>
                                    </div>
                                </div>
                            </div> --}}

                                    {{-- <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile"> --}}


                        </div>



                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                        <li class="nav-item">
                                            <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                                class="nav-link active"><i class="zmdi zmdi-account"></i> <span
                                                    class="hidden-xs" style="color: #455a64;">Profile</span>
                                            </a>
                                        </li>

                                        {{-- <li class="nav-item">
                                            <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                                class="nav-link"><i class="zmdi zmdi-edit"></i> <span
                                                    class="hidden-xs">Edit</span></a>
                                        </li> --}}
                                    </ul>
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="profile">
                                            <h3 class="mb-3" style="color:#455a64">User Profile</h3>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">

                                                </div>
                                                {{-- @foreach ($users as $user) --}}
                                                <div class="col-md-12">
                                                    <form>
                                                        <div class="form-group row" >
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Last
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_lname }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">First
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control"
                                                                    value="{{ $user->user_fname }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Middle
                                                                name: </label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_mname }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Email</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="email"
                                                                    value="{{ $user->user_email }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Address</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control"
                                                                    value="{{ $user->user_country }}, {{ $user->user_province }}, {{ $user->user_municipality }}, {{ $user->user_barangay }}, {{ $user->user_street }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Zipcode</label>
                                                            <div class="col-lg-9">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_zipcode }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Birthdate</label>
                                                            <div class="col-lg-6">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->birthdate }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Gender</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->gender }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Phone
                                                                Number</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->user_phonenum }}" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Username</label>
                                                            <div class="col-lg-3">
                                                                <input class="form-control" type="text"
                                                                    value="{{ $user->role }}" readonly>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label
                                                                class="col-lg-3 col-form-label form-control-label" style="color: #455a64"></label>
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
                                            <form action="/update-user-profile" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <br>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">First
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_fname"
                                                            value="{{ session('User')['user_fname'] }}"
                                                            placeholder="First Name" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Middle
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_mname"
                                                            value="{{ session('User')['user_mname'] }}"
                                                            placeholder="Middle Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Last
                                                        name</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="user_lname"
                                                            value="{{ session('User')['user_lname'] }}"
                                                            placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Email</label>
                                                    <div class="col-lg-9">
                                                        <input type="email" class="form-control" name="user_email"
                                                            value="{{ session('User')['user_email'] }}"
                                                            placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Change
                                                        profile</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="file" name="avatar">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Address</label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" style="color: #455a64"
                                                            name="user_country"
                                                            value="{{ session('User')['user_country'] }}"
                                                            placeholder="Country">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" style="color: #455a64"
                                                            name="user_province"
                                                            value="{{ session('User')['user_province'] }}"
                                                            placeholder="Province">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" style="color: #455a64"
                                                            name="user_municipality"
                                                            value="{{ session('User')['user_municipality'] }}"
                                                            placeholder="Municipality">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64"></label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text"
                                                            name="user_barangay"
                                                            value="{{ session('User')['user_barangay'] }}"
                                                            placeholder="Barangay">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="user_street" style="color: #455a64"
                                                            value="{{ session('User')['user_street'] }}"
                                                            placeholder="Street">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" style="color: #455a64"
                                                            name="user_zipcode"
                                                            value="{{ session('User')['user_zipcode'] }}"
                                                            placeholder="Zipcode">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Personal
                                                        Information</label>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" style="color: #455a64"
                                                            name="user_phonenum"
                                                            value="{{ session('User')['user_phonenum'] }}"
                                                            placeholder="Phone Number">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="gender" style="color: #455a64"
                                                            value="{{ session('User')['gender'] }}"
                                                            placeholder="Gender">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input class="form-control" type="text" name="birthdate" style="color: #455a64"
                                                            value="{{ session('User')['birthdate'] }}"
                                                            placeholder="Birthdate">
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Username</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="role" value="{{session('Admin') ['role']}}">
                            </div>
                        </div> --}}
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64"></label>
                                                    <div class="col-lg-9">
                                                        <input type="reset" class="btn btn-secondary"
                                                            value="Cancel">
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form action="">
                                                <div class="form-group row">
                                                    <label
                                                        class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Password</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password" style="color: #455a64"
                                                            value="11111122333">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64">Confirm
                                                        password</label>
                                                    <div class="col-lg-9">
                                                        <input class="form-control" type="password"
                                                            value="11111122333">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-3 col-form-label form-control-label" style="color: #455a64"></label>
                                                    <div class="col-lg-9">
                                                        <input type="reset" class="btn btn-secondary"
                                                            value="Cancel">
                                                        <input type="button" class="btn btn-primary"
                                                            value="Save New Password">
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
    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    {{-- <!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer--> --}}


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
    <script src="{{ asset('assets/js/js/app-script1.js') }}"></script>
    <!-- Chart js -->

    <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>

    <!-- Index js -->
    <script src="{{ asset('assets/js/js/index1.js') }}"></script>



</body>

</html>
