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
            <h1>Manage Souvenirs Inventory</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item">Reservations</li>
                    <li class="breadcrumb-item active">Bookings</li>
                    <li class="breadcrumb-item active">Inventory</li>
                    <li class="breadcrumb-item active">Souvenirs > Inventory Control</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <hr>
        <section class="section dashboard">
            <div class="row">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" style="float:right" type="button"
                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filter Items
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" data-target="pending-table">List of Items</a>
                        <a class="dropdown-item" data-target="archive-table">Archived
                            Items</a>
                    </div>

                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#addItemModal">+Add</button>
                </div>
                <br><br>

                <!--- Visit Bookings -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Visit Table <span>| All Pending</span></h5>
                            <table class="table table-borderless datatable" id="pending-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Item ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Date Listed</th>
                                        <th scope="col">Date Updated</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($souvenirs as $artifact)
                                        <tr>
                                            <td>{{ $artifact->souvenir_id }}</td>
                                            <td>{{ $artifact->souvenir_name }}</td>
                                            <td>{{ $artifact->souvenir_description }}</td>
                                            <td>{{ $artifact->category->category_name }}</td>
                                            <td>{{ $artifact->souvenir_qty }}</td>
                                            <td>{{ $artifact->souvenir_price }}</td>
                                            <td>{{ $artifact->souvenir_municipality }}</td>
                                            <td>
                                                @if ($artifact->souvenir_image)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal">
                                                        <img src="{{ asset('souvenir_image/' . $artifact->souvenir_image) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($artifact->created_at)) }}
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($artifact->updated_at)) }}
                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#editItemModal{{ $artifact->souvenir_id }}">Edit</button>
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#archiveItemModal{{ $artifact->souvenir_id }}">Archive</button>
                                                {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                <!-- Archive button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <!-- ARCHIVED TABLE -->
                            <table class="table-borderless datatable" id="archive-table" style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">Item ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Municipality</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Date Listed</th>
                                        <th scope="col">Date Updated</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archived as $archive)
                                        <tr>
                                            <td>{{ $archive->souvenir_id }}</td>
                                            <td>{{ $archive->souvenir_name }}</td>
                                            <td>{{ $archive->souvenir_description }}</td>
                                            <td>{{ $archive->category->category_name }}</td>
                                            <td>{{ $archive->souvenir_qty }}</td>
                                            <td>{{ $archive->souvenir_price }}</td>
                                            <td>{{ $archive->souvenir_municipality }}</td>
                                            <td>
                                                @if ($archive->souvenir_image)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal">
                                                        <img src="{{ asset('souvenir_image/' . $archive->souvenir_image) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($archive->created_at)) }}
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($archive->updated_at)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- End Sales Table -->

                {{-- imagemodal --}}
                <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" style="margin-top: 80px;"
                    aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top: 80px">
                            <div class="modal-body">
                                <img id="fullImage" src="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Item Modal -->
                <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
                    aria-labelledby="addItemModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/add-souvenir') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        {{-- <label for="category">Category</label> --}}
                                        <input type="hidden" class="form-control" id="name" name="userid"
                                            value="{{ session('Admin')['user_fname'] }}" placeholder="Artifact Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Souvenir Name</label>
                                        <input type="text" class="form-control" id="name"
                                            name="souvenir_name" @error('souvenir_name') is-invalid @enderror
                                            value="{{ old('souvenir_name') }}" placeholder="Item Name">
                                        @error('souvenir_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea type="text" class="form-control" id="name" name="souvenir_description"
                                            @error('souvenir_description') is-invalid @enderror value="{{ old('souvenir_description') }}"
                                            placeholder="Description..."></textarea>
                                        @error('souvenir_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    {{-- <label for="Municipality">Municipality</label> --}}
                                    <br>
                                    <select name="souvenir_municipality" id="souvenir_municipality"
                                        class="form-control">
                                        <option value="">Select Municipality</option>
                                        <option value="Baco">Baco</option>
                                        <option value="Bansud">Bansud</option>
                                        <option value="Bongabong">Bongabong</option>
                                        <option value="Bulalacao">Bulalacao</option>
                                        <option value="Calapan">Calapan</option>
                                        <option value="Gloria">Gloria</option>
                                        <option value="Mansalay">Mansalay</option>
                                        <option value="Naujan">Naujan</option>
                                        <option value="Pinamalayan">Pinamalayan</option>
                                        <option value="Pola">Pola</option>
                                        <option value="Puerto Galera">Puerto Galera</option>
                                        <option value="Roxas">Roxas</option>
                                        <option value="San Teodoro">San Teodoro</option>
                                        <option value="Socorro">Socorro</option>
                                        <option value="Victoria">Victoria</option>
                                    </select>
                                    <br>
                                    <div class="form-group">
                                        <label for="souvenir_qty">Quantity</label>
                                        <input type="text" class="form-control" id="name"
                                            name="souvenir_qty" @error('souvenir_qty') is-invalid @enderror
                                            value="{{ old('souvenir_qty') }}" placeholder="Quantity">
                                        @error('souvenir_qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="souvenir_qty">Price</label>
                                        <input type="text" class="form-control" id="name"
                                            name="souvenir_price" @error('souvenir_price') is-invalid @enderror
                                            value="{{ old('souvenir_price') }}" placeholder="Price">
                                        @error('souvenir_price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="name"
                                            name="souvenir_image" @error('souvenir_image') is-invalid @enderror
                                            value="{{ old('souvenir_image') }}" placeholder="Item Name">
                                        @error('souvenir_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <br>
                                    <select name="category_name" id="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->category_id }}"
                                                {{ old('category_name') == $category->category_id ? 'selected' : '' }}>
                                                {{ $category->category_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Save Item</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Category Modal -->
                @foreach ($souvenirs as $artifact)
                    <div class="modal fade" id="editItemModal{{ $artifact->souvenir_id }}" tabindex="-1"
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
                                    <form action="{{ url('/update-souvenir/' . $artifact->souvenir_id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <!-- Form fields -->
                                        <div class="form-group">
                                            <label for="souvenir_name">Artifact Name</label>
                                            <input type="text" class="form-control" id="souvenir_name"
                                                name="souvenir_name" value="{{ $artifact->souvenir_name }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="souvenir_desription">Artifact Description</label>
                                            <textarea class="form-control" id="souvenir_description" name="souvenir_description" rows="5" required>{{ $artifact->souvenir_description }}</textarea>
                                        </div>
                                        <select name="souvenir_municipality" id="souvenir_municipality"
                                            class="form-control">
                                            <option value="{{ $artifact->souvenir_municipality }}">
                                                {{ $artifact->souvenir_municipality }}</option>
                                            <option value="Baco">Baco</option>
                                            <option value="Bansud">Bansud</option>
                                            <option value="Bongabong">Bongabong</option>
                                            <option value="Bulalacao">Bulalacao</option>
                                            <option value="Calapan">Calapan</option>
                                            <option value="Gloria">Gloria</option>
                                            <option value="Mansalay">Mansalay</option>
                                            <option value="Naujan">Naujan</option>
                                            <option value="Pinamalayan">Pinamalayan</option>
                                            <option value="Pola">Pola</option>
                                            <option value="Puerto Galera">Puerto Galera</option>
                                            <option value="Roxas">Roxas</option>
                                            <option value="San Teodoro">San Teodoro</option>
                                            <option value="Socorro">Socorro</option>
                                            <option value="Victoria">Victoria</option>
                                        </select>
                                        <div class="form-group">
                                            <label for="artifact_category">Artifact Category</label>
                                            <select class="form-control" id="artifact_category" name="category_id"
                                                required>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->category_id }}"
                                                        {{ $artifact->category_id == $category->category_id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="souvenir_qty">Quantity</label>
                                            <input type="number" class="form-control" id="souvenir_qty"
                                                name="souvenir_qty" value="{{ $artifact->souvenir_qty }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="souvenir_qty">Price</label>
                                            <input type="number" class="form-control" id="souvenir_qty"
                                                name="souvenir_price" value="{{ $artifact->souvenir_price }}"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="artifact_image">Souvenir Image</label>
                                            <input type="file" class="form-control" id="souvenir_image"
                                                name="souvenir_image">
                                            @if ($artifact->souvenir_image)
                                                <div class="mt-2">
                                                    <label>Current Image:</label>
                                                    <img src="{{ asset('souvenir_image/' . $artifact->souvenir_image) }}"
                                                        class="img-thumbnail" alt="Current Image">
                                                </div>
                                            @else
                                                <p>No image available</p>
                                            @endif
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
                @foreach ($souvenirs as $artifact)
                    <div class="modal fade" id="archiveItemModal{{ $artifact->souvenir_id }}" tabindex="-1"
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
                                    {{-- <form action="{{ url('/edit-category/' . $artifact->souvenir_id) }}" method="POST"> --}}
                                    {{-- @csrf --}}
                                    <p>Are you sure you want to archive the category: {{ $artifact->souvenir_name }}?
                                    </p>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <form action="{{ url('/archive-souvenir/' . $artifact->souvenir_id) }}"
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

        <!--End wrapper-->



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
        <script>
            $(document).ready(function() {
                $('.image-link').hover(function() {
                    var imageSrc = $(this).find('img').attr('src');
                    $('#fullImage').attr('src', imageSrc);
                });
            });
        </script>

</body>

</html>
