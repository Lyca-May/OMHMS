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
            <h1>All Bookings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Bookings > View All Bookings</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <hr>
        <section class="section dashboard">
            <div class="row">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style="float:right" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter Bookings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-target="history-table">History</a>
                        <a class="dropdown-item" data-target="approved-table">Approved
                            Bookings</a>
                        <a class="dropdown-item" data-target="cancelled-table">Cancelled
                            Bookings</a>
                    </div>
                </div>
                <br><br>

                <!--- Visit Bookings -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">All Booking's Table <span>| All Pending</span></h5>
                            {{-- Booking History --}}
                            <table class="table-borderless datatable" id="history-table" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        {{-- <th scope="col">Avatar</th> --}}
                                        <th scope="col">Country</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">Street</th>
                                        <th scope="col">Zipcode</th>
                                        <th scope="col">Date of Visit</th>
                                        <th scope="col">Selected Time</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Number of Visitors</th>
                                        <th scope="col">Name of Institution</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th> <!-- Include this column for consistency -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($history as $visits)
                                        <tr>
                                            <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }}
                                                {{ $visits->visits_mname }}.</td>
                                            {{-- <td>
                @if ($visits->users && $visits->users->avatar)
                    <img src="{{ asset('avatar/' . $visits->users->avatar) }}" alt="Avatar" class="avatar-image">
                @else
                    <img src="{{ asset('avatar/default-avatar.jpg') }}" alt="Default Avatar" class="avatar-image">
                @endif
            </td> --}}
                                            <td>{{ $visits->visits_country }}</td>
                                            <td>{{ $visits->visits_province }}</td>
                                            <td>{{ $visits->visits_municipality }}</td>
                                            <td>{{ $visits->visits_brgy }}</td>
                                            <td>{{ $visits->visits_street }}</td>
                                            <td>{{ $visits->visits_zipcode }}</td>
                                            <td>{{ $visits->visits_intended_date }}</td>
                                            <td>{{ $visits->visits_time }}</td>
                                            <td>{{ $visits->contact_no }}</td>
                                            <td>{{ $visits->visits_no_of_visitors }}</td>
                                            <td>{{ $visits->visits_name_of_institution }}</td>
                                            <td>
                                                @if ($visits->visits_status == 'CANCELLED')
                                                    <p><span style="color: red"><b>{{ $visits->visits_status }}</b></span>
                                                    </p>
                                                @else
                                                    <p><span style="color: green"><b>{{ $visits->visits_status }}</b></span>
                                                    </p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Approved Bookings -->
                            <table class="table-borderless datatable" id="approved-table" style="display: none;">
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
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Number of Visitors</th>
                                        <th scope="col">Name of Institution</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th> <!-- Include this column for consistency -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($approved as $visits)
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
                                            <td>{{ $visits->visits_contactno }}</td>
                                            <td>{{ $visits->visits_no_of_visitors }}</td>
                                            <td>{{ $visits->visits_name_of_institution }}</td>
                                            <td>
                                                <p><span
                                                        style="color: green"><b>{{ $visits->visits_status }}</b></span>
                                                </p>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            {{-- Cancelled Bookings --}}
                            <table class="table-borderless datatable" id="cancelled-table" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Province</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Barangay</th>
                                        <th scope="col">Street</th>
                                        <th scope="col">Zipcode</th>
                                        <th scope="col">Date of Visit</th>
                                        <th scope="col">Selected Time</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Number of Visitors</th>
                                        <th scope="col">Name of Institution</th>
                                        <th scope="col">Status</th>
                                        {{-- <th scope="col">Action</th> <!-- Include this column for consistency --> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cancelled as $visits)
                                        <tr>
                                            <td>{{ $visits->visits_lname }}, {{ $visits->visits_fname }}
                                                {{ $visits->visits_mname }}.</td>
                                            <td>
                                                @if ($visits->users && $visits->users->avatar)
                                                    <img src="{{ asset('avatar/' . $visits->users->avatar) }}"
                                                        alt="Avatar" class="avatar-image">
                                                @else
                                                    <img src="{{ asset('avatar/default-avatar.jpg') }}"
                                                        alt="Default Avatar" class="avatar-image">
                                                @endif
                                            </td>
                                            <td>{{ $visits->visits_country }}</td>
                                            <td>{{ $visits->visits_province }}</td>
                                            <td>{{ $visits->visits_municipality }}</td>
                                            <td>{{ $visits->visits_brgy }}</td>
                                            <td>{{ $visits->visits_street }}</td>
                                            <td>{{ $visits->visits_zipcode }}</td>
                                            <td>{{ $visits->visits_intended_date }}</td>
                                            <td>{{ $visits->visits_time }}</td>
                                            <td>{{ $visits->visits_contactno }}</td>
                                            <td>{{ $visits->visits_no_of_visitors }}</td>
                                            <td>{{ $visits->visits_name_of_institution }}</td>
                                            <td>
                                                <p><span
                                                        style="color: rgb(211, 19, 19)"><b>{{ $visits->visits_status }}</b></span>
                                                </p>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
