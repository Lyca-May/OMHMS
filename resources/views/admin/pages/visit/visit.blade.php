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


</head>

<body>

    <!--Start sidebar-wrapper-->
    @include('admin.pages.sidebar')
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    @include('admin.pages.navbar')
    <!--End topbar header-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage Pending Bookings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Bookings > Manage Bookings</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <hr>
        <section class="section dashboard">
            <div class="row">
                <br><br>

                <!--- Visit Bookings -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Booking's Table <span>| All Pending</span></h5>
                            <table class="table table-borderless datatable" id="pending-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">Street</th>
                                        <th scope="col">Zipcode</th>
                                        <th scope="col">Date of Visit</th>
                                        <th scope="col">Selected Time</th>
                                        <th scope="col">Number of Visitors</th>
                                        <th scope="col">Name of Institution</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Action</th>
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
                                                @if ($visits->file_of_visitors)
                                                    <a href="{{ asset('uploads/' . $visits->file_of_visitors) }}"
                                                        target="_blank">View File</a>
                                                @else
                                                    No file available
                                                @endif
                                            </td>
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
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#cancelModal">Cancel</button>

<<<<<<< Updated upstream
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            style="float:right;margin-right:20px;" aria-expanded="false">Filter Bookings</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link filter-option" data-target="pending-table">Pending Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="approved-table">Approved Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="cancelled-table">Cancelled Bookings</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="history-table"><i class="zmdi zmdi-history"></i> History</a></li>
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
                                                <th>File</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($visit as $visits)
                                            <tr>
                                                <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</td>
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
                                                    @if ($visits->file_of_visitors)
                                                        <a href="{{ asset('uploads/' . $visits->file_of_visitors) }}" target="_blank">View File</a>
                                                    @else
                                                        No file available
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($visits->visits_status == 'PENDING')
                                                        <p><span style="color: gray">{{ $visits->visits_status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->visits_status }}</span></p>
                                                    @endif
                                                </td>
                                                <td>
                                                    <form action="{{ url('/approve-status/' . $visits->userid) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Approve</button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cancelModal">Cancel</button>
=======
>>>>>>> Stashed changes

                                                </form>


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
                                                                        <label for="cancel_reason"
                                                                            style="color: black">Reason for
                                                                            cancellation</label>
                                                                        <textarea class="form-control @error('cancel_reason') is-invalid @enderror" name="cancel_reason" id="cancel_reason"
                                                                            rows="3">{{ old('cancel_reason') }}</textarea>
                                                                        @error('cancel_reason')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
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
<<<<<<< Updated upstream
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <table class="table align-items-center table-flush table-borderless" id="approved-table"
                                        style="display: none;">
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
                                                <th>File</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($approved as $visits)
                                            <tr>
                                                <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</td>
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
                                                    @if ($visits->file_of_visitors)
                                                        <a href="{{ asset('uploads/' . $visits->file_of_visitors) }}" target="_blank">View File</a>
                                                    @else
                                                        No file available
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($visits->visits_status == 'PENDING')
                                                        <p><span style="color: gray">{{ $visits->visits_status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->visits_status }}</span></p>
                                                    @endif
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
                                                <th>File</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($history as $visits)
                                            <tr>
                                                <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</td>
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
                                                    @if ($visits->file_of_visitors)
                                                        <a href="{{ asset('uploads/' . $visits->file_of_visitors) }}" target="_blank">View File</a>
                                                    @else
                                                        No file available
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($visits->visits_status == 'PENDING')
                                                        <p><span style="color: gray">{{ $visits->visits_status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->visits_status }}</span></p>
                                                    @endif
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
                                                <th>File</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($cancelled as $visits)
                                            <tr>
                                                <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }} {{ $visits->visits_mname }}.</td>
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
                                                    @if ($visits->file_of_visitors)
                                                        <a href="{{ asset('uploads/' . $visits->file_of_visitors) }}" target="_blank">View File</a>
                                                    @else
                                                        No file available
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($visits->visits_status == 'PENDING')
                                                        <p><span style="color: gray">{{ $visits->visits_status }}</span></p>
                                                    @else
                                                        <p><span style="color: green">{{ $visits->visits_status }}</span></p>
                                                    @endif
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
=======
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
>>>>>>> Stashed changes
                        </div>
                    </div>
                </div><!-- End Sales Table -->
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
