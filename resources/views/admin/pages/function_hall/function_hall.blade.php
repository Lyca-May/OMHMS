<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{-- <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png"> --}}
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}



    <style>
        #pending-table {
  display: block;
  width: 100%;
  overflow-x: auto;
  white-space: nowrap;
}
        .custom-modal {
            background-color: #031a03;
            /* Dark green color */
            color: #fff;
            /* Text color */
        }

        .custom-modal .modal-header {
            border-bottom: none;
            /* Remove header border */
        }

        .custom-modal .modal-footer {
            border-top: none;
            /* Remove footer border */
        }

        .custom-modal .btn-success {
            background-color: #006400;
            /* Dark green color for the Confirm Cancel button */
        }

        .avatar-image {
            width: 50px;
            /* Adjust the size as needed */
            height: 50px;
            /* Adjust the size as needed */
            border-radius: 50%;
            object-fit: cover;
        }
        @media (max-width: 1707.50px) {
        #pending-table {
            width: 100%;
        }
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
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">OMHMS</h5>
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
                        <li><a class="zmdi zmdi-building" href="{{ asset('admin/visit') }}">Museum Visit</a></li>
                        <li><a href="">Function Hall</a></li>
                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="{{ asset('admin/inventory') }}" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items">
                        <li><a href="{{ url('/artifacts') }}">Items & Artifacts</a></li>
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
                    <a href="{{ url('admin/calendar') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        {{-- <small class="badge float-right badge-light">New</small> --}}
                    </a>
                </li>



                <li class="sidebar-header">About Us</li>
                <li>
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Edit Content</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items" >
                        <li><a href="{{url('about-us/history') }}">Edit History</a></li>
                        <li><a href="{{url('about-us/footer')}}">Footer</a></li>
                        <li><a href="{{url('about-us/wts')}}">What to see Inside</a></li>
                        <li><a href="{{url('about-us/contact')}}">Contact</a></li>
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
            <div class="container-fluid">

                <!--Start Dashboard Content-->

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" style="float:right;margin-right:20px;" aria-expanded="false">Filter
                            Bookings</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link filter-option"
                                    data-target="pending-table">Pending Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option"
                                    data-target="approved-table">Approved Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option"
                                    data-target="cancelled-table">Cancelled Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="history-table"><i
                                        class="zmdi zmdi-history"></i> History</a></li>
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">List of Bookings
                                    <br>
                                    <br>
                                    <div class="col-sm-4">
                                        {{-- <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a> --}}
                                        <div class="search-box">
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="width: 1255px; overflow-x: auto";>
                                    <table class="table align-items-center table-flush table-border"
                                        id="pending-table" style="width: 100%; max-width: 100%;">
                                        <!-- table content goes here -->
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                                <th>Agency</th>
                                                <th>Facility</th>
                                                <th>Event Type</th>
                                                <th>Date Requested</th>
                                                <th>Event Start Time</th>
                                                <th>Date of Setup</th>
                                                <th>Preparation Setup Time</th>
                                                <th>Others</th>
                                                <th>Sound System</th>
                                                <th>LED TV</th>
                                                <th>Number of Microphones</th>
                                                <th>Number of Tables</th>
                                                <th>Number of Chairs</th>
                                                <th>Payment Details</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rent as $visits)
                                                <tr>
                                                    <td>{{ $visits->user->user_lname }},
                                                        {{ $visits->user->user_fname }}
                                                        {{ $visits->user->user_mname }}.</td>
                                                    <td>{{ $visits->contact_person }}</td>
                                                    <td>{{ $visits->contact_number }}</td>
                                                    <td>{{ $visits->agency }}</td>
                                                    <td>{{ $visits->facility }}</td>
                                                    <td>{{ $visits->event_type }}</td>
                                                    <td>{{ $visits->date_requested }}</td>
                                                    <td>{{ $visits->event_start }}</td>
                                                    <td>{{ $visits->date_of_setup }}</td>
                                                    <td>{{ $visits->prep_setup_time }}</td>
                                                    @if ($visits->others != null)
                                                        <td>{{ $visits->others }}</td>
                                                    @else
                                                        <td>NONE</td>
                                                    @endif
                                                    @if ($visits->sound_system == 1)
                                                        <td>INCLUDED</td>
                                                    @else
                                                        <td>NOT INCLUDED</td>
                                                    @endif
                                                    @if ($visits->led_tv == 1)
                                                        <td>INCLUDED</td>
                                                    @else
                                                        <td>NOT INCLUDED</td>
                                                    @endif
                                                    @if ($visits->microphones == 1)
                                                        <td>{{ $visits->number_of_microphones }}</td>
                                                    @else
                                                        <td>NOT INCLUDED</td>
                                                    @endif
                                                    @if ($visits->tables == 1)
                                                        <td>{{ $visits->number_of_tables }}</td>
                                                    @else
                                                        <td>NOT INCLUDED</td>
                                                    @endif
                                                    @if ($visits->chairs == 1)
                                                        <td>{{ $visits->number_of_chairs }}</td>
                                                    @else
                                                        <td>NOT INCLUDED</td>
                                                    @endif
                                                    <td><button class="btn btn-primary" data-toggle="modal"
                                                            data-target="#viewModal{{ $visits->rent_id }}">View</button>
                                                    </td>
                                                    <td>
                                                        @if ($visits->status == 'pending')
                                                            <p><span style="color: gray">{{ $visits->status }}</span>
                                                            </p>
                                                        @else
                                                            <p><span style="color: green">{{ $visits->status }}</span>
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form
                                                            method="post">
                                                            @csrf
                                                            <button type="button"
                                                                class="btn btn-success"data-toggle="modal"
                                                                data-target="#approveModal{{$visits->rent_id}}" >Approve</button>
                                                        </form>
                                                        <button type="button" class="btn btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#cancelModal{{$visits->rent_id}}">Cancel</button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="approveModal{{$visits->rent_id}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="approveModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content custom-modal">
                                                                    <form
                                                                        action="{{ url('admin/approve/' . $visits->rent_id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="cancelModalLabel">Confirm Approval
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                               <span>Recorded date: {{date('F d, Y') }}</span>
                                                                                <label for="cancel_reason">Recorded Date</label>
                                                                                <input type="hidden" class="form-control @error('recorded_date') is-invalid @enderror" name="recorded_date" id="recorded_date"
                                                                                    rows="3" value=' ' readonly>
                                                                                <label for="cancel_reason">Recorded by</label>
                                                                                <input type="text" class="form-control @error('recorded_by') is-invalid @enderror" name="recorded_by" id="recorded_by"
                                                                                    rows="3" {{ old('recorded_by') }}>
                                                                                @error('recorded_by')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                                <label for="cancel_reason">Approved by</label>
                                                                                <input type="text" class="form-control @error('approved_by') is-invalid @enderror" name="approved_by" id="approved_by"
                                                                                    rows="3" {{ old('approved_by') }}>
                                                                                @error('approved_by')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-success">Confirm
                                                                                Approval</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="cancelModal{{$visits->rent_id}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="cancelModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content custom-modal">
                                                                    <form
                                                                        action="{{ url('admin/cancel/' . $visits->rent_id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="cancelModalLabel">Confirm Cancel
                                                                            </h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal"
                                                                                aria-label="Close">
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
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-success">Confirm
                                                                                Cancel</button>
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

                                    @foreach ($rent as $visits)
                                    <div class="modal fade" id="viewModal{{ $visits->rent_id }}" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel{{ $visits->rent_id }}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel{{ $visits->rent_id }}" style="color: black">Payment Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="color: black">Rent Payment: {{ $visits->payment_rent }}</p>
                                                    <p style="color: black">Ad On Payment: {{ $visits->add_service_payment }}</p>
                                                    <p style="color: black">
                                                        @if ($visits->others_payment==0)
                                                            Other Payment: <span style="color: red">No payment yet</span>
                                                        @endif
                                                    </p>
                                                    <p style="color: black">Total Price to Pay: {{ $visits->total_payment }}</p>
                                                    <p style="color: black">Downpayment: {{ $visits->downpayment }}</p>
                                                    <p style="color:#031a03">Balance: {{ $visits->total_payment - $visits->downpayment }}</p>
                                                    @if ($visits->proof_of_payment)
                                                        <p style="color: black">Proof of Payment:
                                                        </p>
                                                        <a href="#" class="image-link" data-toggle="modal" data-target="#imageModal">
                                                            <img src="{{ asset('proof_of_payment/' . $visits->proof_of_payment) }}" class="projcard-img img-fluid" style="width: 100%; height: auto;" />
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                                    {{-- <table class="table align-items-center table-flush table-borderless" id="approved-table"
                                        style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                                <th>Agency</th>
                                                <th>Facility</th>
                                                <th>Event Type</th>
                                                <th>Date Requested</th>
                                                <th>Event Start Time</th>
                                                <th>Date of Setup</th>
                                                <th>Preparation Setup Time</th>
                                                <th>Others</th>
                                                <th>Sound System</th>
                                                <th>LED TV</th>
                                                <th>Number of Microphones</th>
                                                <th>Number of Tables</th>
                                                <th>Number of Chairs</th>
                                                <th>Payment Details</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rent as $visits)
                                            <tr>
                                                <td>{{ $visits->user->user_lname }}, {{ $visits->user->user_fname }} {{ $visits->user->user_mname }}.</td>
                                                <td>{{ $visits->contact_person }}</td>
                                                <td>{{ $visits->contact_number }}</td>
                                                <td>{{ $visits->agency }}</td>
                                                <td>{{ $visits->facility }}</td>
                                                <td>{{ $visits->event_type }}</td>
                                                <td>{{ $visits->date_requested }}</td>
                                                <td>{{ $visits->event_start }}</td>
                                                <td>{{ $visits->date_of_setup }}</td>
                                                <td>{{ $visits->prep_setup_time }}</td>
                                                 @if ($visits->others != null)
                                                   <td>{{$visits->others}}</td>
                                                 @endif
                                                 @if ($visits->sound_system == 1)
                                                   <td>INCLUDED</td>
                                                 @endif
                                                 @if ($visits->led_tv == 1)
                                                   <td>INCLUDED</td>
                                                 @endif
                                                 @if ($visits->microphones == 1)
                                                   <td>{{$visits->number_of_microphones}}</td>
                                                 @endif
                                                 @if ($visits->tables == 1)
                                                   <td>{{$visits->number_of_tables}}</td>
                                                 @endif
                                                 @if ($visits->chairs == 1)
                                                   <td>{{$visits->number_of_chairs}}</td>
                                                 @endif
                                                <td><button class="btn btn-primary">View</button></td>

                                                <td>
                                                    @if ($visits->status == 'pending')
                                                        <p><span style="color: gray">{{ $visits->status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->status }}</span></p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ url('/approve-status/' . $visits->userid) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Approve</button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content custom-modal">
                                                                <form action="{{ url('/cancel_status/' . $visits->userid) }}" method="POST">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="cancelModalLabel">Confirm Cancel</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="cancel_reason">Reason for cancellation</label>
                                                                            <textarea class="form-control @error('cancel_reason') is-invalid @enderror" name="cancel_reason" id="cancel_reason" rows="3">{{ old('cancel_reason') }}</textarea>
                                                                            @error('cancel_reason')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Confirm Cancel</button>
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
                                    <table class="table align-items-center table-flush table-borderless" id="history-table"
                                        style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Contact Person</th>
                                                <th>Contact Number</th>
                                                <th>Agency</th>
                                                <th>Facility</th>
                                                <th>Event Type</th>
                                                <th>Date Requested</th>
                                                <th>Event Start Time</th>
                                                <th>Date of Setup</th>
                                                <th>Preparation Setup Time</th>
                                                <th>Others</th>
                                                <th>Sound System</th>
                                                <th>LED TV</th>
                                                <th>Number of Microphones</th>
                                                <th>Number of Tables</th>
                                                <th>Number of Chairs</th>
                                                <th>Payment Details</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rent as $visits)
                                            <tr>
                                                <td>{{ $visits->user->user_lname }}, {{ $visits->user->user_fname }} {{ $visits->user->user_mname }}.</td>
                                                <td>{{ $visits->contact_person }}</td>
                                                <td>{{ $visits->contact_number }}</td>
                                                <td>{{ $visits->agency }}</td>
                                                <td>{{ $visits->facility }}</td>
                                                <td>{{ $visits->event_type }}</td>
                                                <td>{{ $visits->date_requested }}</td>
                                                <td>{{ $visits->event_start }}</td>
                                                <td>{{ $visits->date_of_setup }}</td>
                                                <td>{{ $visits->prep_setup_time }}</td>
                                                 @if ($visits->others != null)
                                                   <td>{{$visits->others}}</td>
                                                 @endif
                                                 @if ($visits->sound_system == 1)
                                                   <td>INCLUDED</td>
                                                 @endif
                                                 @if ($visits->led_tv == 1)
                                                   <td>INCLUDED</td>
                                                 @endif
                                                 @if ($visits->microphones == 1)
                                                   <td>{{$visits->number_of_microphones}}</td>
                                                 @endif
                                                 @if ($visits->tables == 1)
                                                   <td>{{$visits->number_of_tables}}</td>
                                                 @endif
                                                 @if ($visits->chairs == 1)
                                                   <td>{{$visits->number_of_chairs}}</td>
                                                 @endif
                                                <td><button class="btn btn-primary">View</button></td>

                                                <td>
                                                    @if ($visits->status == 'pending')
                                                        <p><span style="color: gray">{{ $visits->status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->status }}</span></p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ url('/approve-status/' . $visits->userid) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Approve</button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content custom-modal">
                                                                <form action="{{ url('/cancel_status/' . $visits->userid) }}" method="POST">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="cancelModalLabel">Confirm Cancel</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="cancel_reason">Reason for cancellation</label>
                                                                            <textarea class="form-control @error('cancel_reason') is-invalid @enderror" name="cancel_reason" id="cancel_reason" rows="3">{{ old('cancel_reason') }}</textarea>
                                                                            @error('cancel_reason')
                                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Confirm Cancel</button>
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
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Contact Person</th>
                                            <th>Contact Number</th>
                                            <th>Agency</th>
                                            <th>Facility</th>
                                            <th>Event Type</th>
                                            <th>Date Requested</th>
                                            <th>Event Start Time</th>
                                            <th>Date of Setup</th>
                                            <th>Preparation Setup Time</th>
                                            <th>Others</th>
                                            <th>Sound System</th>
                                            <th>LED TV</th>
                                            <th>Number of Microphones</th>
                                            <th>Number of Tables</th>
                                            <th>Number of Chairs</th>
                                            <th>Payment Details</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rent as $visits)
                                        <tr>
                                            <td>{{ $visits->user->user_lname }}, {{ $visits->user->user_fname }} {{ $visits->user->user_mname }}.</td>
                                            <td>{{ $visits->contact_person }}</td>
                                            <td>{{ $visits->contact_number }}</td>
                                            <td>{{ $visits->agency }}</td>
                                            <td>{{ $visits->facility }}</td>
                                            <td>{{ $visits->event_type }}</td>
                                            <td>{{ $visits->date_requested }}</td>
                                            <td>{{ $visits->event_start }}</td>
                                            <td>{{ $visits->date_of_setup }}</td>
                                            <td>{{ $visits->prep_setup_time }}</td>
                                             @if ($visits->others != null)
                                               <td>{{$visits->others}}</td>
                                             @endif
                                             @if ($visits->sound_system == 1)
                                               <td>INCLUDED</td>
                                             @endif
                                             @if ($visits->led_tv == 1)
                                               <td>INCLUDED</td>
                                             @endif
                                             @if ($visits->microphones == 1)
                                               <td>{{$visits->number_of_microphones}}</td>
                                             @endif
                                             @if ($visits->tables == 1)
                                               <td>{{$visits->number_of_tables}}</td>
                                             @endif
                                             @if ($visits->chairs == 1)
                                               <td>{{$visits->number_of_chairs}}</td>
                                             @endif
                                            <td><button class="btn btn-primary">View</button></td>

                                            <td>
                                                @if ($visits->status == 'pending')
                                                    <p><span style="color: gray">{{ $visits->status }}</span></p>
                                                @else
                                                    <p><span style="color: green">{{ $visits->status }}</span></p>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ url('/approve-status/' . $visits->userid) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Approve</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content custom-modal">
                                                            <form action="{{ url('/cancel_status/' . $visits->userid) }}" method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="cancelModalLabel">Confirm Cancel</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="cancel_reason">Reason for cancellation</label>
                                                                        <textarea class="form-control @error('cancel_reason') is-invalid @enderror" name="cancel_reason" id="cancel_reason" rows="3">{{ old('cancel_reason') }}</textarea>
                                                                        @error('cancel_reason')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-success">Confirm Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Row-->

                <!--End Dashboard Content-->

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

        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2023 OMHMS Admin
                </div>
            </div>
        </footer>
        <!--End footer-->

        <!--start color switcher-->
        <div class="right-sidebar">
            <div class="switcher-icon">
                <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
            </div>
            <div class="right-sidebar-content">

                <p class="mb-0">Gaussion Texture</p>
                <hr>

                <ul class="switcher">
                    <li id="theme3"></li>
                    <li id="theme2"></li>
                    <li id="theme1"></li>
                    <li id="theme4"></li>
                    <li id="theme5"></li>
                    <li id="theme6"></li>
                </ul>

                <p class="mb-0">Gradient Background</p>
                <hr>

                <ul class="switcher">
                    <li id="theme7"></li>
                    <li id="theme8"></li>
                    <li id="theme9"></li>
                    <li id="theme10"></li>
                    <li id="theme11"></li>
                    <li id="theme12"></li>
                    <li id="theme13"></li>
                    <li id="theme14"></li>
                    <li id="theme15"></li>
                </ul>

            </div>
        </div>
        <!--end color switcher-->

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
                timer: 3000,
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
                icon: 'error',
                title: 'Error!',
                text: '{{ session('failed') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
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

    <script>
        $(document).ready(function() {
            // Function to handle the filter option click
            $(".filter-option").click(function() {
                var targetTable = $(this).data("target");
                showTable(targetTable);
            });

            // Function to show the selected table and hide others
            function showTable(targetTable) {
                $(".table").each(function() {
                    var tableId = $(this).attr("id");
                    if (tableId === targetTable) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Initial table display (show the first table by default)
            showTable("pending-table");

            // Table search functionality
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

</body>

</html>
