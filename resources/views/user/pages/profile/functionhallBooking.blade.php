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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <br>

            <div id="function-section" class="container mt-4">
                <section>
                    @if ($rent->isEmpty())
                        <p class="alert alert-warning">You have no active bookings.</p>
                    @else
                        @foreach ($rent as $visits)
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <img width="100" src="{{ asset('eOMHeritage.png') }}" alt="">
                                            <strong>ORIENTAL MINDORO HERITAGE MUSEUM</strong>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <strong>Status:</strong>
                                            <span class="badge badge-success">{{ $visits->status }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Booking Details</h5>
                                            <p class="card-text"><strong>Contact Person:</strong>
                                                {{ $visits->contact_person }}</p>
                                            <p class="card-text"><strong>Contact Number:</strong>
                                                {{ $visits->contact_number }}</p>
                                            <p class="card-text"><strong>Agency:</strong> {{ $visits->agency }}</p>
                                            <p class="card-text"><strong>Facility:</strong> {{ $visits->facility }}
                                            </p>
                                            <p class="card-text">Event Type: {{ $visits->event_type }}</p>
                                            <p class="card-text">Date Selected:
                                                {{ date('F d, Y', strtotime($visits->date_requested)) }}</p>
                                            <p class="card-text">Event Start
                                                Time:{{ date('h:i A', strtotime($visits->event_start)) }}</p>
                                            <p class="card-text">Date of Setup:
                                                {{ date('F d, Y', strtotime($visits->date_of_setup)) }}</p>
                                            <p class="card-text">Preparation Setup
                                                Time:{{ date('h:i A', strtotime($visits->prep_setup_time)) }}</p>
                                            <div>
                                                <span>
                                                    @if ($visits->microphones == 1)
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" checked>
                                                            <span>Microphones</span>
                                                        </div>
                                                        <span>Number of Microphones{{ $visits->number_of_microphones }}
                                                        </span>
                                                    @else
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" disabled>
                                                            <span>Microphones</span>
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    @if ($visits->stands == 1)
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" checked>
                                                            <span>Stands</span>
                                                        </div>
                                                        <span>Number of Stands{{ $visits->number_of_stands }} </span>
                                                    @else
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" disabled>
                                                            <span>Stands</span>
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    <span>
                                                        @if ($visits->sound_system == 1)
                                                            <div>
                                                                <input type="checkbox" id="led-tv" name="product"
                                                                    value="led-tv" checked>
                                                                <span>SOUND SYSTEM</span>
                                                            </div>
                                                        @else
                                                            <div>
                                                                <input type="checkbox" id="led-tv" name="product"
                                                                    value="led-tv" disabled>
                                                                <span>SOUND SYSTEM</span>
                                                            </div>
                                                        @endif
                                                    </span>
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    @if ($visits->led_tv == 1)
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" checked>
                                                            <span>LED TV</span>
                                                        </div>
                                                    @else
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" disabled>
                                                            <span>LED TV</span>
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    @if ($visits->tables == 1)
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" checked>
                                                            <span>Tables</span>
                                                        </div>
                                                        <span>Number of Tables{{ $visits->number_of_tables }} </span>
                                                    @else
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" disabled>
                                                            <span>Tables</span>
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    @if ($visits->chairs == 1)
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" checked>
                                                            <span>Chairs</span>
                                                        </div>
                                                        <span>Number of Chairs{{ $visits->number_of_chairs }} </span>
                                                    @else
                                                        <div>
                                                            <input type="checkbox" id="led-tv" name="product"
                                                                value="led-tv" disabled>
                                                            <span>Chairs</span>
                                                        </div>
                                                    @endif
                                                </span>
                                            </div>
                                            <div>
                                                <span>
                                                    @if ($visits->others == 0)
                                                        <span>Others:
                                                            <p>Wait for the price to pay</p>
                                                        </span>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <h5 class="card-title">Payment Details</h5>
                                            <p class="card-text"><strong>Payment for Rent:</strong>
                                                {{ $visits->payment_rent }}</p>
                                            <p class="card-text"><strong>Payment for Additional Service:</strong>
                                                {{ $visits->add_service_payment }}</p>
                                            <p class="card-text"><strong>Total Amount to be Paid:</strong>
                                                {{ $visits->total_payment }}</p>
                                            <p class="card-text"><strong>Downpayment:</strong>
                                                {{ $visits->downpayment }}</p>
                                            <p class="card-text"><strong>Pending Payment:</strong>
                                                {{ $visits->total_payment - $visits->downpayment }}</p>
                                            <!-- Add other payment details here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                    @foreach ($rent as $visit)
                    @if ($visit->recorded_by != null)
                        <button class="btn btn-primary" data-toggle="modal" data-target="#acknowledgementModal{{$visit->id}}">
                            View Acknowledgement Receipt
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="acknowledgementModal{{$visit->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="acknowledgementModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="text-center">
                                            <img src="{{ asset('eOMHeritage.png') }}" alt="Tourism Logo" class="logo">
                                            <h2 class="modal-title font-weight-bold text-center" id="acknowledgementModalLabel"
                                                style="font-size: 15px ">Acknowledgement Receipt</h2>
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-justify">
                                            Received from {{ date('F d, Y') }} the amount of Php {{ $visit->downpayment }} as partial payment for the
                                            @if ($visit->facility == 'Mangyan Ballroom')
                                                Rent of Mangyan Ballroom.
                                            @elseif ($visit->facility == 'Museum Galleries')
                                                Rent of Museum Galleries.
                                            @elseif ($visit->facility == 'Halcon Performance Area')
                                                Rent of Halcon Performance Area.
                                            @endif
                                            This payment is for the event scheduled on {{ date('F d, Y', strtotime($visit->date_requested)) }}.
                                        </p>
                                        <p class="text-justify">
                                            Please download the receipt as proof and provide it to the staff.
                                        </p>
                                        <div class="partial">
                                            <p>Partial: Php {{ $visit->downpayment }}</p>
                                        </div>
                                        <div class="balance">
                                            <p>Balance: Php {{ $visit->total_payment - $visit->downpayment }}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 text-center">
                                                <img src="{{ asset('recordedby_esign/' . $visit->recordedby_esign) }}"
                                                    alt="Admin Signature" class="img-fluid signature">
                                                <p class="mt-2">Recorded by: {{ $visit->recorded_by }}</p>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <img src="{{ asset('approvedby_esign/' . $visit->approvedby_esign) }}"
                                                    alt="Admin Signature" class="img-fluid signature">
                                                <p class="mt-2">Approved by: {{ $visit->approved_by }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="date text-center mt-2">{{ date('F d, Y') }}</div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="printModal('{{ asset("eOMHeritage.png") }}', '{{ asset("recordedby_esign/" . $visit->recordedby_esign) }}', '{{ asset("approvedby_esign/" . $visit->approvedby_esign) }}')" class="btn btn-primary">
                                            Print Receipt
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


                </section>
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


</body>


{{-- <script>
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
    </script> --}}
    <script>
        function printModal(logoUrl, recordedEsignUrl, approvedEsignUrl) {
            var modalContent = document.querySelector('.modal-content'); // Select the modal content

            var printWindow = window.open('', '', 'width=600,height=600'); // Open a new window

            // Write the modal's content to the new window
            printWindow.document.open();
            printWindow.document.write('<html><head><title>Receipt</title>');
            // Include Bootstrap CSS if needed
            printWindow.document.write('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
            printWindow.document.write('</head><body>');
            printWindow.document.write('<div class="container mt-5">'); // Add container for styling

            // Header with title, logo, and e-sign images
            printWindow.document.write('<div class="text-center">');
            printWindow.document.write('<img src="' + logoUrl + '" alt="Tourism Logo" class="receipt-logo">');
            printWindow.document.write('<h2 class="font-weight-bold mt-2">Acknowledgement Receipt</h2>');
            // Add recorded e-signature
            printWindow.document.write('<img src="' + recordedEsignUrl + '" alt="Recorded E-signature" class="receipt-esign">');
            // Add approved e-signature
            printWindow.document.write('<img src="' + approvedEsignUrl + '" alt="Approved E-signature" class="receipt-esign">');
            printWindow.document.write('</div>');

            // Content from the modal
            printWindow.document.write('<div class="receipt-content">');
            printWindow.document.write(modalContent.innerHTML);
            printWindow.document.write('</div>');

            // Close container and body
            printWindow.document.write('</div>');
            printWindow.document.write('</body></html>');
            printWindow.document.close();

            // Trigger the print dialog in the new window
            printWindow.print();
            printWindow.close(); // Close the new window after printing
        }
    </script>





</html>
