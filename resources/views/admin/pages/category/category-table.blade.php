<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
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
            <h1>All Souvenir's Category</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Reservations</li>
                    <li class="breadcrumb-item active">Bookings</li>
                    <li class="breadcrumb-item active">Inventory > Category</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <hr>
        <section class="section dashboard">
            <div class="row">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style="float:right" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter Category
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-target="pending-table">List of Category</a>
                        <a class="dropdown-item" data-target="archive-table">Archived Category</a>
                    </div>

                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#addItemModal">+Add</button>
                </div>
                <br><br>

                <!--- Category -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Souvenir's Category Table <span>| All</span></h5>
                            <table class="table table-borderless datatable" id="pending-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Category ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Date Listed</th>
                                        <th scope="col">Date Updated</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $categories)
                                        <tr>
                                            <td>{{ $categories->category_id }}</td>
                                            <td>{{ $categories->category_name }}</td>
                                            <td>{{ $categories->category_description }}</td>
                                            <td>{{ $categories->category_type }}</td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($categories->created_at)) }}</td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($categories->updated_at)) }}</td>
                                            <td>
                                                <!-- Edit button -->
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#editItemModal{{ $categories->category_id }}">Edit</button>
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#archiveItemModal{{ $categories->category_id }}">Archive</button>
                                                {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                <!-- Archive button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <table class="table table-borderless datatable" id="archive-table" style="display: none;"   >
                                <thead>
                                    <tr>
                                        <th scope="col">Category ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Date Listed</th>
                                        <th scope="col">Date Updated</th>
                                        {{-- <th scope="col">Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archived as $archive)
                                        <tr>
                                            <td>{{ $archive->category_id }}</td>
                                            <td>{{ $archive->category_name }}</td>
                                            <td>{{ $archive->category_description }}</td>
                                            <td>{{ $archive->category_type }}</td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($archive->created_at)) }}</td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($archive->updated_at)) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Add Item Modal -->
                <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
                    aria-labelledby="addItemModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header    ">
                                <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/add-category') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="hidden" class="form-control" id="name" name="userid"
                                            value="{{ session('Admin')['user_id'] }}">
                                        <input type="text" class="form-control" id="name"
                                            name="category_name" placeholder="Category Name">
                                        @error('category_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" id="description" name="category_description" placeholder="Category Name"></textarea>
                                        @error('category_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Type</label>
                                        <select class="form-control" id="type" name="category_type">
                                            <option value="Choose type">Choose type</option>
                                            <option value="Souvenir">Souvenir</option>
                                            <option value="Artifact">Artifact</option>
                                        </select>
                                        @error('category_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Save Category</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Category Modal -->
                @foreach ($category as $categories)
                    <div class="modal fade" id="editItemModal{{ $categories->category_id }}" tabindex="-1"
                        role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editItemModalLabel">Edit Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/edit-category/' . $categories->category_id) }}"
                                        method="POST">
                                        @csrf
                                        <!-- Form fields -->
                                        <div class="form-group">
                                            <label for="editName">Name</label>
                                            <input type="hidden" class="form-control" rows="3" name="userid"
                                                value="{{ $categories->userid }}">
                                            <input type="text" class="form-control" id="editName"
                                                name="category_name" placeholder="Enter name"
                                                value="{{ $categories->category_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">Description</label>
                                            <textarea class="form-control" id="editDescription" name="category_description" placeholder="Enter description">{{ $categories->category_description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select class="form-control" id="type" name="category_type">
                                                <option value="{{ $categories->category_type }}">
                                                    {{ $categories->category_type }}</option>
                                                <option value="Souvenir">Souvenir</option>
                                                <option value="Artifact">Artifact</option>
                                            </select>
                                            @error('category_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Archive Category Modal -->
                @foreach ($category as $categories)
                    <div class="modal fade" id="archiveItemModal{{ $categories->category_id }}" tabindex="-1"
                        role="dialog" aria-labelledby="archiveItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editItemModalLabel">Archive Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{-- <form action="{{ url('/edit-category/' . $categories->category_id) }}" method="POST"> --}}
                                    {{-- @csrf --}}
                                    <p>Are you sure you want to archive the category: {{ $categories->category_name }}?
                                    </p>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <form action="{{ url('/archive-category/' . $categories->category_id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Archive</button>

                                        </form>
                                    </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}',
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
            // Handle dropdown item click event
            $('.dropdown-item').click(function() {
                // Get the data-target attribute value
                var targetTable = $(this).data('target');

                // Hide all tables
                $('.datatable').hide();

                // Show the selected table
                $('#' + targetTable).show();
            });

            // Initially show the "pending" table
            $('#pendingTable').show();
        });
    </script>

    <script>
        // Function to filter table rows based on search input
        function filterTable() {
            var input = document.getElementById("searchInput");
            var filter = input.value.toUpperCase();
            var table = document.getElementById("categoryTable");
            var rows = table.getElementsByTagName("tr");

            for (var i = 0; i < rows.length; i++) {
                var rowData = rows[i].getElementsByTagName("td");
                var match = false;

                for (var j = 0; j < rowData.length; j++) {
                    if (rowData[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        match = true;
                        break;
                    }
                }

                if (match) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }

        // Attach event listener to search input
        document.getElementById("searchInput").addEventListener("keyup", filterTable);
    </script>

    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#pending-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                $("#cancelled-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
                $("#approved-table tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>



    <script>
        $(document).ready(function() {
            // Show list table, hide archive table initially
            $("#list").show();
            $("#archiveRow").hide();

            // Event handler for showing list table
            $("#showListBtn").click(function() {
                $("#list").show();
                $("#archiveRow").hide();
            });

            // Event handler for showing archive table
            $("#showArchiveBtn").click(function() {
                $("#list").hide();
                $("#archiveRow").show();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.filter-option').click(function() {
                var target = $(this).data('target');
                $('.table-responsive table').hide();
                $('#' + target).show();
            });
        });
    </script>

</body>

</html>
