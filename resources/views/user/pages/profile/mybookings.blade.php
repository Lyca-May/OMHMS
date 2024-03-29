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
    <link href="{{ asset('assets/css/css/mybook.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<style>
     .body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            text-align: center;
            margin: 20px 0;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .title {
            text-align: center;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .date {
            text-align: right;
            margin-bottom: 20px;
        }

        .content {
            margin: 20px;
        }

        .partial {
            text-align: left;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .balance {
            text-align: left;
        }

        .signature {
            text-align: left;
            margin-top: 100px;
        }

        .signature img {
            width: 150px;
            height: auto;
        }
</style>
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

            {{-- <div>
                <button class="btn btn-success" id="visit-button">Visit</button>
            </div>
            <div>
                <button class="btn btn-success" id="function-button">Function Hall</button>
            </div>

            <div id="visit-section">VISIT</div> --}}
            <div class="content">
                <div class="card">
                        <div class="card-header custom-header">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('failed'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('failed') }}
                                </div>
                            @endif
                        </div>
                        {{-- @if ($visit->count() === 0)
                            <p>You haven't done any booking for visitation</p>
                        @else --}}
                        {{-- @foreach ($visit as $visits) --}}
                        <form>
                            <div class="container bootstrap snippets bootdeys">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel panel-default invoice" id="invoice">
                                            <div class="panel-body">
                                                <div class="invoice-ribbon">
                                                    <div class="ribbon-inner">
                                                        @if ($visit->visits_status == 'PENDING')
                                                            <p><span style="color: black; font-weight:bold">{{ $visit->visits_status }}</span></p>
                                                        @else
                                                            <p><span style="color: green">{{ $visit->visits_status }}</span></p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 top-left">
                                                        <img src="{{ asset('omhms.png') }}" alt="" style="width: 90px; height: 70px">
                                                    </div>
                                                    <div class="col-sm-6 top-right">
                                                        <h3 class="marginright" style="margin-top: 10px">RESERVATION OVERVIEW</h3>
                                                        <span class="marginright">{{ date('l, F j, Y') }}</span>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p class="lead marginbottom"><strong>From: Oriental Mindoro Heritage Museum</strong></p>

                                                        {{-- QR CODE DISPLAY --}}

                                                        <div class="container">
                                                            <h2>Your QR Code</h2>
                                                            <p>Scan this QR code in as you enter the museum.</p>
                                                            <img src="{{ asset('qrcodes/' . $visit->visits_id . '.png') }}" alt="QR Code" class="img-responsive">

                                                            <!-- Download Button -->
                                                            <a href="{{ asset('qrcodes/' . $visit->visits_id . '.png') }}" download="qr_code.png" class="btn btn-primary mt-3">
                                                                Download QR Code
                                                            </a>
                                                        </div>

                                                        <br>

                                                        <div class="post" style="line-height: 10px">
                                                            @if ($visit->gender == 'FEMALE')
                                                                <p>Hi, Ms. {{ $visit->visits_lname }}, {{ $visit->visits_fname }} {{ $visit->visits_mname }}.</p>
                                                            @else
                                                                <p>Hi, Mr. {{ $visit->visits_lname }}, {{ $visit->visits_fname }} {{ $visit->visits_mname }}.</p>
                                                            @endif
                                                            <p>This is your Reservation for Visitation.</p>
                                                            {{-- <p>You are from {{ $visit->visits_street }}, {{ $visit->visits_brgy }}, {{ $visit->visits_municipality }}, {{ $visit->visits_province }}, {{ $visit->visits_country }}, with the zipcode {{ $visit->visits_zipcode }}.</p>
                                                            <p>Your selected date is {{ date('F d, Y', strtotime($visit->visits_intended_date)) }} at {{ $visit->visits_time }}.</p>
                                                            @if ($visit->visits_name_of_institution != null)
                                                                <p>You are from {{ $visit->visits_name_of_institution }} Institution and you're with your</p>
                                                            @endif
                                                            @if ($visit->visits_no_of_visitors != null)
                                                                <p>{{ $visit->visits_no_of_visitors }} members.</p>
                                                            @endif --}}
                                                            <p>We will send you an email notification for the status of your reservation. If you have any clarifications regarding your booking information, please contact us at our contact number or email account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h1>Reserved Souvenirs</h1>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td colspan="3" class="text-cw" style="color: black"><strong style="color: black">Souvenir Name</strong></td>
                                                                    <td colspan="3" class="text-cw" style="color: black"><strong style="color: black">Price</strong></td>
                                                                    <td colspan="3" class="text-cw" style="color: black"><strong style="color: black">Quantity</strong></td>
                                                                    <td colspan="3" class="text-cw" style="color: black"><strong style="color: black">Total</strong></td>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $totalAmount = 0;
                                                                @endphp
                                                                @foreach ($reservedSouvenir as $souvenirs)
                                                                    <tr>
                                                                        <td style="color: black" class="text-cw">{{ $souvenirs->souvenir->souvenir_name }}</td>
                                                                        <td style="color: black" class="text-cw">{{ $souvenirs->souvenir->souvenir_price }}</td>
                                                                        <td style="color: black" class="text-cw">{{ $souvenirs->quantity }}</td>
                                                                        <td style="color: black" class="text-cw">{{ $souvenirs->total_price }}</td>
                                                                    </tr>
                                                                    @php
                                                                        $totalAmount += $souvenirs->total_price;
                                                                    @endphp
                                                                @endforeach
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <td colspan="3" class="text-right" style="color: black"><strong style="color: black">Total Amount:</strong></td>
                                                                    <td style="color: black">{{ $totalAmount }}</td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- @endforeach --}}



                        {{-- @endif --}}
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-xs-6 margintop">
                            <p class="lead marginbottom" style="margin-left:450px">
                                <strong>THANK YOU!</strong>
                            </p>

                            <button href="{{ url('user/visithistory') }}"   class="btn btn-success" id="invoice-print"
                                style="margin-left:900px; margin-bottom:20px"><i class="fa fa-history"></i>View
                                History</button>
                            {{-- <button class="btn btn-danger"><i class="fa fa-envelope-o" style="margin-left:250px"></i> Mail Invoice</button> --}}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    </div>

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
    {{-- <script src="{{ asset('assets/js/js/mybook.js') }}"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Hide the function section initially
            $('#function-section').hide();

            // Show the visit section and hide the function section when the visit button is clicked
            $('#visit-button').click(function() {
                $('#visit-section').show();
                $('#function-section').hide();
            });

            // Show the function section and hide the visit section when the function hall button is clicked
            $('#function-button').click(function() {
                $('#visit-section').hide();
                $('#function-section').show();
            });
        });
    </script>


</body>

</html>
