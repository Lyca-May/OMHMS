<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eOMHeritage Official Website</title>
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
    <link href="{{ asset('assets/css/css/visithis.css') }}" rel="stylesheet" />


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}



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
                    <a href="{{ url('user/qr') }}" id="tablesLink">
                        <i class="zmdi zmdi-book"></i> <span>Active booking</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('user/visithistory') }}">
                        <i class="zmdi zmdi-time"></i> <span>Booking History</span>
                    </a>
                </li>
            </ul>

        </div>

        <!--End sidebar-wrapper-->

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


        <div class="clearfix"></div>
        @foreach ($history as $hist)
        <div class="content-wrapper1">
            <div class="courses-container">
                <div class="course">
                    <div class="course-preview">
                        {{-- <h5>{{$hist->visits_id}}</h5> --}}
                        <h6>{{$hist->visits_intended_date}}</h6>
                        <h2>{{$hist->visits_status}}</h2>
                    </div>
                        <div class="course-info" style="color: black">
                            <p><b>Full Name:</b> {{$hist->visits_fname}} {{$hist->visits_mname}} {{$hist->visits_lname}} <br></p>
                            <p><b>Your Email:</b> {{$hist->visits_email}} <br></p>
                            <p><b>Your Address:</b> {{$hist->visits_street}}, {{$hist->visits_brgy}}, {{$hist->visits_municipality}}, {{$hist->visits_province}}, {{$hist->visits_country}} <br></p>
                            <p><b>Zipcode:</b> {{$hist->visits_zipcode}} <br></p>
                            <p><b>Gender:</b> {{$hist->gender}} <br></p>
                            <p><b>Number of Visitors:</b> {{$hist->visits_no_of_visitors}} <br></p>
                            <p><b>Name of Institution:</b> {{$hist->visits_name_of_institution}} <br></p>
                            <p><b>Date selected:</b> {{ date('F d, Y', strtotime($hist->visits_intended_date)) }} <br></p>
                            <p><b>Time selected:</b> {{$hist->visits_time}}</p>
                        </div>
                        <div class="course-preview">
                            <img src="{{ asset('omhms.png') }}" alt="" class="logo">
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
    <script src="{{ asset('assets/js/js/visithistory.js') }}"></script>

</body>

</html>
