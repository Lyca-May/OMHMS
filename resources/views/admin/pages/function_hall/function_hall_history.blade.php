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
                <h1>All Reservations</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Reservations > View All Reservations</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->

            <hr>
            <section class="section dashboard">
                <div class="row">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" style="float:right" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter Reservations
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" data-target="history-table">All Reservations</a>
                            <a class="dropdown-item" data-target="approved-table">Approved
                                Reservations</a>
                            <a class="dropdown-item" data-target="cancelled-table">Cancelled
                                Reservations</a>
                        </div>
                    </div>
                    <br><br>


                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Function Hall Table <span></span></h5>
                                <!--- Approved Reservation -->
                                <table class="table-borderless datatable" id="approved-table" style="display: none;">
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
                                    </thead>
                                    <tbody>
                                        @foreach ($approved as $rent)
                                            <tr>
                                                <td>{{ $rent->user->user_lname }},
                                                    {{ $rent->user->user_fname }}
                                                    {{ $rent->user->user_mname }}.</td>
                                                <td>{{ $rent->contact_person }}</td>
                                                <td>{{ $rent->contact_number }}</td>
                                                <td>{{ $rent->agency }}</td>
                                                <td>{{ $rent->facility }}</td>
                                                <td>{{ $rent->event_type }}</td>
                                                <td>{{ $rent->date_requested }}</td>
                                                <td>{{ $rent->event_start }}</td>
                                                <td>{{ $rent->date_of_setup }}</td>
                                                <td>{{ $rent->prep_setup_time }}</td>
                                                <td>{{ $rent->others }}</td>
                                                <td>{{ $rent->sound_system }}</td>
                                                <td>{{ $rent->number_of_microphones }}</td>
                                                <td>{{ $rent->led_tv }}</td>
                                                <td>{{ $rent->tables }}</td>
                                                <td>{{ $rent->chairs }}</td>
                                                <td><button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#viewModal{{ $rent->rent_id }}">View</button></td>
                                                <td>
                                                    <p><span style="color:green"><b>{{ $rent->status }}</b></span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <!-- Include appropriate action buttons here, if needed -->
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Modal Proof of payment (Approved) -->
                                @foreach ($approved as $rent)
                                    <div class="modal fade" id="viewModal{{ $rent->rent_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="viewModalLabel{{ $rent->rent_id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel{{ $rent->rent_id }}"
                                                        style="color: black">Payment Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="color: black">Rent Payment:
                                                        {{ $rent->payment_rent }}</p>
                                                    <p style="color: black">Ad On Payment:
                                                        {{ $rent->add_service_payment }}</p>
                                                    <p style="color: black">
                                                        @if ($rent->others_payment == 0)
                                                            Other Payment: <span style="color: red">No payment
                                                                yet</span>
                                                        @endif
                                                    </p>
                                                    <p style="color: black">Total Price to Pay:
                                                        {{ $rent->total_payment }}</p>
                                                    <p style="color: black">Downpayment:
                                                        {{ $rent->downpayment }}</p>
                                                    <p style="color:#031a03">Balance:
                                                        {{ $rent->total_payment - $rent->downpayment }}</p>
                                                    @if ($rent->proof_of_payment)
                                                        <p style="color: black">Proof of Payment:
                                                        </p>
                                                        <a href="#" class="image-link" data-toggle="modal"
                                                            data-target="#imageModal">
                                                            <img src="{{ asset('proof_of_payment/' . $rent->proof_of_payment) }}"
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

                                {{-- Cancelled Reservation --}}
                                <table class="table-borderless datatable" id="cancelled-table" style="display: none;">
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
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cancelled as $rent)
                                            <tr>
                                                <td>{{ $rent->user->user_lname }},
                                                    {{ $rent->user->user_fname }}
                                                    {{ $rent->user->user_mname }}.</td>
                                                <td>{{ $rent->contact_person }}</td>
                                                <td>{{ $rent->contact_number }}</td>
                                                <td>{{ $rent->agency }}</td>
                                                <td>{{ $rent->facility }}</td>
                                                <td>{{ $rent->event_type }}</td>
                                                <td>{{ $rent->date_requested }}</td>
                                                <td>{{ $rent->event_start }}</td>
                                                <td>{{ $rent->date_of_setup }}</td>
                                                <td>{{ $rent->prep_setup_time }}</td>
                                                <td>{{ $rent->others }}</td>
                                                <td>{{ $rent->sound_system }}</td>
                                                <td>{{ $rent->number_of_microphones }}</td>
                                                <td>{{ $rent->led_tv }}</td>
                                                <td>{{ $rent->tables }}</td>
                                                <td>{{ $rent->chairs }}</td>
                                                <td><button class="btn btn-primary" data-toggle="modal"
                                                        data-target="#viewModal{{ $rent->rent_id }}">View</button></td>
                                                <td>
                                                    <p><span style="color:rgb(227, 9, 9)"><b>{{ $rent->status }}</b></span>
                                                    </p>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Modal Proof of payment (Approved) -->
                                @foreach ($cancelled as $rent)
                                    <div class="modal fade" id="viewModal{{ $rent->rent_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="viewModalLabel{{ $rent->rent_id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewModalLabel{{ $rent->rent_id }}"
                                                        style="color: black">Payment Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p style="color: black">Rent Payment:
                                                        {{ $rent->payment_rent }}</p>
                                                    <p style="color: black">Ad On Payment:
                                                        {{ $rent->add_service_payment }}</p>
                                                    <p style="color: black">
                                                        @if ($rent->others_payment == 0)
                                                            Other Payment: <span style="color: red">No payment
                                                                yet</span>
                                                        @endif
                                                    </p>
                                                    <p style="color: black">Total Price to Pay:
                                                        {{ $rent->total_payment }}</p>
                                                    <p style="color: black">Downpayment:
                                                        {{ $rent->downpayment }}</p>
                                                    <p style="color:#031a03">Balance:
                                                        {{ $rent->total_payment - $rent->downpayment }}</p>
                                                    @if ($rent->proof_of_payment)
                                                        <p style="color: black">Proof of Payment:
                                                        </p>
                                                        <a href="#" class="image-link" data-toggle="modal"
                                                            data-target="#imageModal">
                                                            <img src="{{ asset('proof_of_payment/' . $rent->proof_of_payment) }}"
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
                showTable("history-table");

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
