<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    {{-- <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png"> --}}
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
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


<<<<<<< Updated upstream
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

=======
>>>>>>> Stashed changes
</head>

<body>

    <!--Start sidebar-wrapper-->
    @include('admin.pages.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('admin.pages.navbar')
    <!--End topbar header-->

    <main id="main" class="main">

<<<<<<< Updated upstream
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
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
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
=======
        <div class="pagetitle">
            <h1>Manage Pending Reservations</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Reservations > Manage Reservations</li>
                </ol>
>>>>>>> Stashed changes
            </nav>
        </div><!-- End Page Title -->

        <hr>
        <section class="section dashboard">
            <div class="row">

<<<<<<< Updated upstream
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
                                    data-target="paid-table">Paid Bookings</a></li>
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
                                            <input type="text" class="form-control" id="searchInput"
                                                placeholder="Search">
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
                                                        @if ($visits->status == 'PENDING')
                                                            <p><span style="color: gray">{{ $visits->status }}</span>
                                                            </p>
                                                        @else
                                                            <p><span style="color: green">{{ $visits->status }}</span>
                                                            </p>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <form method="post">
                                                            @csrf
                                                            <button type="button"
                                                                class="btn btn-success"data-toggle="modal"
                                                                data-target="#approveModal{{ $visits->rent_id }}">Approve</button>
                                                        </form>

                                                        <button type="button" class="btn btn-danger"
                                                            data-toggle="modal"
                                                            data-target="#cancelModal{{ $visits->rent_id }}">Cancel</button>

                                                        <!-- APPROVE Modal -->
                                                        <div class="modal fade"
                                                            id="approveModal{{ $visits->rent_id }}" tabindex="-1"
                                                            role="dialog" aria-labelledby="approveModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content custom-modal">
                                                                    <form
                                                                        action="{{ url('admin/approve/' . $visits->rent_id) }}"
                                                                        method="POST" enctype="multipart/form-data">
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
                                                                                <span>Recorded date:
                                                                                    {{ date('F d, Y') }}</span>
                                                                                <br>
                                                                                <input type="hidden"
                                                                                    class="form-control @error('recorded_date') is-invalid @enderror"
                                                                                    name="recorded_date"
                                                                                    id="recorded_date" rows="3"
                                                                                    value=' ' readonly>
                                                                                <label for="cancel_reason">Recorded
                                                                                    by</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('recorded_by') is-invalid @enderror"
                                                                                    name="recorded_by"
                                                                                    id="recorded_by" rows="3"
                                                                                    {{ old('recorded_by') }}>
                                                                                @error('recorded_by')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                                <label for="recordedby_esign">Recorded
                                                                                    by E-Signature:</label>
                                                                                <input type="file"
                                                                                    class="form-control-file"
                                                                                    id="recordedby_esign"
                                                                                    name="recordedby_esign">
                                                                                <label for="cancel_reason">Approved
                                                                                    by</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('approved_by') is-invalid @enderror"
                                                                                    name="approved_by"
                                                                                    id="approved_by" rows="3"
                                                                                    {{ old('approved_by') }}>
                                                                                @error('approved_by')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                                <label for="approvedby_esign">Approved
                                                                                    by E-Signature:</label>
                                                                                <input type="file"
                                                                                    class="form-control-file"
                                                                                    id="approvedby_esign"
                                                                                    name="approvedby_esign">
                                                                                <input type="number"
                                                                                    class="form-control-file"
                                                                                    id="approvedby_esign"
                                                                                    name="others_payment"
                                                                                    placeholder="If customer has avail other services">

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


                                                        <!-- Cancel Modal -->
                                                        <div class="modal fade"
                                                            id="cancelModal{{ $visits->rent_id }}" tabindex="-1"
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
=======
                <!--- Function Hall Reservation (pending)-->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Function Hall Table <span>| All Pendings</span></h5>
                            <table class="table table-borderless datatable" id="pending-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Contact Person</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Agency</th>
                                        <th scope="col">Facility</th>
                                        <th scope="col">Event Type</th>
                                        <th scope="col">Date Requested</th>
                                        <th scope="col">Event Start Time</th>
                                        <th scope="col">Date of Setup</th>
                                        <th scope="col">Preparation Setup Time</th>
                                        <th scope="col">Others</th>
                                        <th scope="col">Sound System</th>
                                        <th scope="col">Led TV</th>
                                        <th scope="col">No. of Microphones</th>
                                        <th scope="col">No. of Tables</th>
                                        <th scope="col">No. of Details</th>
                                        <th scope="col">Payment Details</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
>>>>>>> Stashed changes

                                </thead>
                                <tbody>
                                    @foreach ($rent as $visits)
<<<<<<< Updated upstream
                                        <div class="modal fade" id="viewModal{{ $visits->rent_id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="viewModalLabel{{ $visits->rent_id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"
                                                            id="viewModalLabel{{ $visits->rent_id }}"
                                                            style="color: black">Payment Details</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p style="color: black">Rent Payment:
                                                            {{ $visits->payment_rent }}</p>
                                                        <p style="color: black">Ad On Payment:
                                                            {{ $visits->add_service_payment }}</p>
                                                        <p style="color: black">
                                                            @if ($visits->others_payment == 0)
                                                                Other Payment: <span style="color: red">No payment
                                                                    yet</span>
                                                            @endif
                                                        </p>
                                                        <p style="color: black">Total Price to Pay:
                                                            {{ $visits->total_payment }}</p>
                                                        <p style="color: black">Downpayment:
                                                            {{ $visits->downpayment }}</p>
                                                        <p style="color:#031a03">Balance:
                                                            {{ $visits->total_payment - $visits->downpayment }}</p>
                                                        @if ($visits->proof_of_payment)
                                                            <p style="color: black">Proof of Payment:
                                                            </p>
                                                            <a href="#" class="image-link" data-toggle="modal"
                                                                data-target="#imageModal">
                                                                <img src="{{ asset('proof_of_payment/' . $visits->proof_of_payment) }}"
                                                                    class="projcard-img img-fluid"
                                                                    style="width: 100%; height: auto;" />
                                                            </a>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                  <table class="table align-items-center table-flush table-borderless" id="approved-table"
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
                                            @foreach ($approved as $visits)
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
                                                    @if ($visits->status == 'PENDING')
                                                        <p><span style="color: gray">{{ $visits->status }}</span>
                                                        </p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->status }}</span>
                                                        </p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form method="post">
                                                        @csrf
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#paidModal{{ $visits->rent_id }}">Paid</button>
                                                    </form>
                                                      <!-- paid Modal -->
                                                      <div class="modal fade" id="paidModal{{ $visits->rent_id }}" tabindex="-1" role="dialog" aria-labelledby="paidModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content custom-modal">
                                                                <form action="{{ url('admin/paid/' . $visits->rent_id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="cancelModalLabel">Confirm Payment</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="full_payment">Pending Payment</label>
                                                                            <input type="number" class="form-control-file" id="full_payment" name="full_payment">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-success">Confirm Payment</button>
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


                                  <table class="table align-items-center table-flush table-borderless" id="paid-table"
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($paid as $visits)
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
                                                  <span style="color: green">{{ $visits->status }}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                  <table class="table align-items-center table-flush table-borderless" id="cancelled-table"
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cancelled as $visits)
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
                                                  <span style="color: rgb(57, 5, 5)">{{ $visits->status }}</span>
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($history as $visits)
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
                                                  @if ($visits->status == "PAID")
                                                    <p><span style="color: rgb(5, 107, 8)">{{ $visits->status }}</span></p>
                                                  @endif
                                                  <p><span style="color: rgb(81, 5, 5)">{{ $visits->status }}</span></p>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

=======
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
                                                <form method="post">
                                                    @csrf
                                                    <button type="button" class="btn btn-success"data-toggle="modal"
                                                        data-target="#approveModal{{ $visits->rent_id }}">Approve</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#cancelModal{{ $visits->rent_id }}">Cancel</button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="approveModal{{ $visits->rent_id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="approveModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content custom-modal">
                                                            <form
                                                                action="{{ url('admin/approve/' . $visits->rent_id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="cancelModalLabel">
                                                                        Confirm Approval
                                                                    </h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <span>Recorded date:
                                                                            {{ date('F d, Y') }}</span>
                                                                        <label for="cancel_reason">Recorded
                                                                            Date</label>
                                                                        <input type="hidden"
                                                                            class="form-control @error('recorded_date') is-invalid @enderror"
                                                                            name="recorded_date" id="recorded_date"
                                                                            rows="3" value=' ' readonly>
                                                                        <label for="cancel_reason">Recorded
                                                                            by</label>
                                                                        <input type="text"
                                                                            class="form-control @error('recorded_by') is-invalid @enderror"
                                                                            name="recorded_by" id="recorded_by"
                                                                            rows="3" {{ old('recorded_by') }}>
                                                                        @error('recorded_by')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                        <label for="cancel_reason">Approved
                                                                            by</label>
                                                                        <input type="text"
                                                                            class="form-control @error('approved_by') is-invalid @enderror"
                                                                            name="approved_by" id="approved_by"
                                                                            rows="3" {{ old('approved_by') }}>
                                                                        @error('approved_by')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
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
                                                <div class="modal fade" id="cancelModal{{ $visits->rent_id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content custom-modal">
                                                            <form
                                                                action="{{ url('admin/cancel/' . $visits->rent_id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="cancelModalLabel">
                                                                        Confirm Cancel
                                                                    </h5>
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

                         <!--- Modal Proof of Payment-->
                            @foreach ($rent as $visits)
                                <div class="modal fade" id="viewModal{{ $visits->rent_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="viewModalLabel{{ $visits->rent_id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewModalLabel{{ $visits->rent_id }}"
                                                    style="color: black">Payment Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color: black">Rent Payment:
                                                    {{ $visits->payment_rent }}</p>
                                                <p style="color: black">Ad On Payment:
                                                    {{ $visits->add_service_payment }}</p>
                                                <p style="color: black">
                                                    @if ($visits->others_payment == 0)
                                                        Other Payment: <span style="color: red">No payment
                                                            yet</span>
                                                    @endif
                                                </p>
                                                <p style="color: black">Total Price to Pay:
                                                    {{ $visits->total_payment }}</p>
                                                <p style="color: black">Downpayment:
                                                    {{ $visits->downpayment }}</p>
                                                <p style="color:#031a03">Balance:
                                                    {{ $visits->total_payment - $visits->downpayment }}</p>
                                                @if ($visits->proof_of_payment)
                                                    <p style="color: black">Proof of Payment:
                                                    </p>
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal">
                                                        <img src="{{ asset('proof_of_payment/' . $visits->proof_of_payment) }}"
                                                            class="projcard-img img-fluid"
                                                            style="width: 100%; height: auto;" />
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
>>>>>>> Stashed changes
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



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

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
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
    <script>
        $(document).ready(function() {
            // Hide all tables initially
            $('.datatable').hide();

            // Handle dropdown item click event
            $('.dropdown-item').click(function() {
                // Get the data-target attribute value
                var targetTable = $(this).data('target');

                // Hide all tables
                $('.datatable').hide();

                // Show the selected table
                $('#' + targetTable).show();
            });
        });
    </script>


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
                icon: 'error',
                title: 'Error!',
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
