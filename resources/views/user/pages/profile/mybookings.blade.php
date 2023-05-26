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
    <link href="{{ asset('assets/css/css/mybook.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body class="bg-theme">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">OMHMS</h5>
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
                    <a href="{{ url('user/mybookings') }}" id="tablesLink">
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
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
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
                                        href="{{ asset('user/profile') }}"> Account</li></a>
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

        <div class="content-wrapper2">
            {{-- <div class="container">
                <ol class="breadcrumb" style="width:1050px">
                    <li><a href="{{ url('user/landlog') }}">Home</a></li>
                    <li><a href="{{ url('user/profile') }}">My Profile</a></li>
                    <li><a href="{{ url('user/myreview') }}">My Reviews</a></li>
                    <li class="active">My Bookings</li>

                </ol>
            </div> --}}
            <br>
            <div class="tabs">

                <input type="radio" id="tab1" name="tab-control" checked>
                <input type="radio" id="tab2" name="tab-control">
                {{-- <input type="radio" id="tab3" name="tab-control">
                <input type="radio" id="tab4" name="tab-control"> --}}
                <ul>
                    <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24">

                            </svg><br><span>Visits</span></label></li>
                    <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24">

                            </svg><br><span>Function Hall</span></label></li>

                </ul>

                <div class="slider">
                    <div class="indicator"></div>
                </div>
                <div class="content">
                    @if ($visit->isEmpty())
                        <section style="margin-left:20px">
                            <p>You have no active booking</p>
                        </section>
                    @else
                        @foreach ($visit as $visits)
                            <section>
                                <div class="container bootdey">
                                    <div class="row invoice row-printable">
                                        <div class="col-md-11">
                                            <div class="panel panel-default plain" id="dash_0"
                                                style="margin-left:30px; box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); border-radius: 10px">
                                                <div class="panel-body p30"
                                                    style="background-color:rgba(204, 198, 198, 0.27)">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="invoice-logo">
                                                                <img width="100" src="{{ asset('omhms.png') }}"
                                                                    alt="">
                                                                <strong>ORIENTAL MINDORO HERITAGE MUSEUM</strong>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="invoice-from">
                                                                <ul class="list-unstyled text-right"
                                                                    style="margin-top: 20px; margin-left:350px">
                                                                    <p>
                                                                        <li><strong>Status:</strong>
                                                                            <span
                                                                                class="label label-success">{{ $visits->visits_status }}</span>
                                                                        </li>
                                                                    </p>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <hr style="color:black">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <strong></strong>
                                                                    <p class="lead marginbottom">From : Oriental
                                                                        Mindoro
                                                                        Heritage Museum</p>
                                                                    @if ($visits->gender == 'Female')
                                                                        <p>Hi, Ms. {{ $visits->visits_lname }},
                                                                            {{ $visits->visits_fname }}
                                                                            {{ $visits->visits_mname }}.</p>
                                                                    @else
                                                                        <p>Hi, Mr. {{ $visits->visits_lname }},
                                                                            {{ $visits->visits_fname }}
                                                                            {{ $visits->visits_mname }}.</p>
                                                                    @endif
                                                                    <p>This is your Reservation for Visitation</p>
                                                                    <p>You are from {{ $visits->visits_street }},
                                                                        {{ $visits->visits_brgy }},
                                                                        {{ $visits->visits_municipality }},
                                                                        {{ $visits->visits_province }},
                                                                        {{ $visits->visits_country }}, with the zipcode
                                                                        {{ $visits->visits_zipcode }}.</p>
                                                                    <p>Your selected date is
                                                                        {{ date('F d, Y', strtotime($visits->visits_intended_date)) }}
                                                                        at {{ $visits->visits_time }}.</p>
                                                                    @if ($visits->visits_name_of_institution != null)
                                                                        <p>You are from
                                                                            {{ $visits->visits_name_of_institution }}
                                                                            Institution and you're with your</p>
                                                                    @endif
                                                                    @if ($visits->visits_no_of_visitors != null)
                                                                        <p>{{ $visits->visits_no_of_visitors }} members
                                                                        </p>
                                                                    @endif

                                                                    <p>We will send you an email notification for the
                                                                        status of
                                                                        your reservation. If you have a clarification
                                                                        with your
                                                                        booking information, please contact us at our
                                                                        contact
                                                                        number or email account</p>
                                                                    {{-- <p>Contact Number: 09151949345</p> --}}
                                                                    {{-- <p>Email: omhms@gmail.com</p> --}}
                                                                </div>
                                                            </div>
                                                            </div>


                                                            <hr>
                                                            <div class="invoice-items" style="width: 900px">
                                                                <div class="table-responsive"
                                                                    style="overflow: hidden; outline: none;"
                                                                    tabindex="0">
                                                                    <table class="table table-bordered">
                                                                        <thead style="color: black;" class="mt25">
                                                                            <tr>
                                                                                <th class="text-center"
                                                                                    style="width:5%">#</th>
                                                                                <th style="width:50%">Item</th>
                                                                                <th class="text-right"
                                                                                    style="width:15%">Quantity</th>
                                                                                <th class="text-right"
                                                                                    style="width:15%">Unit Price</th>
                                                                                <th class="text-right"
                                                                                    style="width:15%">Total Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody style="color: black">
                                                                            <tr>
                                                                                <td class="text-center">1</td>
                                                                                <td>Flatter Theme</td>
                                                                                <td class="text-right">10</td>
                                                                                <td class="text-right">$18</td>
                                                                                <td class="text-right">$180</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">2</td>
                                                                                <td>Flat Icons</td>
                                                                                <td class="text-right">6</td>
                                                                                <td class="text-right">$59</td>
                                                                                <td class="text-right">$254</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-center">3</td>
                                                                                <td>Wordpress version</td>
                                                                                <td class="text-right">4</td>
                                                                                <td class="text-right">$95</td>
                                                                                <td class="text-right">$285</td>
                                                                            </tr>
                                                                            <tr class="last-row">
                                                                                <td class="text-center">4</td>
                                                                                <td>Server Deployment</td>
                                                                                <td class="text-right">1</td>
                                                                                <td class="text-right">$300</td>
                                                                                <td class="text-right">$300</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-6 margintop">
                                                                    <p class="lead marginbottom">THANK YOU!</p>
                                                                    <a href="{{ url('user/visithistory') }}">
                                                                        <button class="btn btn-success"
                                                                            id="invoice-print">
                                                                            <i class="fa fa-history"></i> View History
                                                                        </button>
                                                                    </a>
                                                                    {{-- <button class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</button> --}}
                                                                </div>
                                                                <div
                                                                    class="col-xs-6 text-right pull-right invoice-total">
                                                                    <p>Subtotal : $1019</p>
                                                                    <p>Discount (10%) : $101</p>
                                                                    <p>VAT (8%) : $73</p>
                                                                    <p>Total : $991</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endforeach
                    @endif
                </div>




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


    {{-- <script src="{{ asset('assets/js/js/mybook.js') }}"></script> --}}




</body>

</html>
