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
            <h1>Manage Souvenirs Sales</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Reservations</li>
                    <li class="breadcrumb-item active">Bookings</li>
                    <li class="breadcrumb-item active">Inventory</li>
                    <li class="breadcrumb-item active">Souvenirs > Souvenir Sales History</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <hr>
        <section class="section dashboard">
            <div class="row">


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

    @if (session('error'))
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


</body>

</html>
