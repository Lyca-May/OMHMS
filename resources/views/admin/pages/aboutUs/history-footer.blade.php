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


    <style>
        /* Button styles */
        .custom-button {
            background-color: #4CAF50;
            /* Green color */
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #001a01;
            /* Darker green color on hover */
        }

        .custom-button1 {
            background-color: #f55b1f;
            /* Green color */
            color: white;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .custom-button1:hover {
            background-color: #200f00;
            /* Darker green color on hover */
        }

        /* Table styles */
        .table-smaller {
            font-size: 12px;
        }

        .table-large {
            font-size: 16px;
        }

        .projcard-img {
            width: 50px;
            /* Set the desired width */
            height: 50px;
            /* Set the desired height */
            object-fit: cover;
            /* Preserve the aspect ratio and crop if needed */
        }

        .tooltip-inner {
            max-width: none;
            padding: 0;
        }

        .full-image {
            max-width: 100%;
            height: auto;
        }

        .fixed-column {
            width: 200px;
            /* Set the desired width for the fixed column */
            white-space: nowrap;
            /* Prevent line breaks in the column content */
            overflow: hidden;
            /* Hide overflowing content */
            text-overflow: ellipsis;
            /* Display ellipsis (...) for truncated content */
        }
    </style>


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
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Bookings</li>
                    <li class="breadcrumb-item active">Inventory</li>
                    <li class="breadcrumb-item active">Announcements</li>
                    <li class="breadcrumb-item active">Attendance</li>
                    <li class="breadcrumb-item active">Edit Content > Footer</li>
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
                        <a class="dropdown-item" data-target="current-table">Current</a>
                        <a class="dropdown-item" data-target="archive-table">Archived</a>
                    </div>

                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#addItemModal">+Add</button>
                </div>
                <br><br>



                <!--- History Content -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Current History Footer</span></h5>
                            <table class="table table-borderless datatable" id="current-table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Information</th>
                                        <th scope="col">Logo 1</th>
                                        <th scope="col">Logo 2</th>
                                        <th scope="col">Logo 3</th>
                                        <th scope="col">Date Posted</th>
                                        <th scope="col">Date Updated</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archived as $history)
                                        <tr>
                                            <td>{{ $history->footer_id }}</td>
                                            <td>{{ $history->footer_title }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#historyModal{{ $history->footer_id }}">
                                                    View Info
                                                </button>
                                                <div class="modal fade" id="historyModal{{ $history->footer_id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="historyModalLabel{{ $history->footer_id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="historyModalLabel{{ $history->footer_id }}">
                                                                    Footer Information</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"
                                                                style="color: black; overflow-y: auto; max-height: 400px;">
                                                                <pre>{{ $history->footer_info }}</pre>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($history->footer_image1)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal1">
                                                        <img src="{{ asset('footer_image1/' . $history->footer_image1) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($history->footer_image2)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal2">
                                                        <img src="{{ asset('footer_image2/' . $history->footer_image2) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($history->footer_image3)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal3">
                                                        <img src="{{ asset('footer_image3/' . $history->footer_image3) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($history->created_at)) }}
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($history->updated_at)) }}
                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#editItemModal{{ $history->footer_id }}">Edit</button>
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#archiveItemModal{{ $history->footer_id }}">Archive</button>
                                                {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                <!-- Archive button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <table class="table table-borderless datatable" id="archive-table"
                                style="display: none;">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Information</th>
                                        <th scope="col">Logo 1</th>
                                        <th scope="col">Logo 2</th>
                                        <th scope="col">Logo 3</th>
                                        <th scope="col">Date Posted</th>
                                        <th scope="col">Date Updated</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archived as $history)
                                        <tr>
                                            <td>{{ $history->footer_id }}</td>
                                            <td>{{ $history->footer_title }}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#historyModal{{ $history->footer_id }}">
                                                    View Info
                                                </button>
                                                <div class="modal fade" id="historyModal{{ $history->footer_id }}"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="historyModalLabel{{ $history->footer_id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="historyModalLabel{{ $history->footer_id }}">
                                                                    Footer Information</h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body"
                                                                style="color: black; overflow-y: auto; max-height: 400px;">
                                                                <pre>{{ $history->footer_info }}</pre>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($history->footer_image1)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal1">
                                                        <img src="{{ asset('footer_image1/' . $history->footer_image1) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($history->footer_image2)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal2">
                                                        <img src="{{ asset('footer_image2/' . $history->footer_image2) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($history->footer_image3)
                                                    <a href="#" class="image-link" data-toggle="modal"
                                                        data-target="#imageModal3">
                                                        <img src="{{ asset('footer_image3/' . $history->footer_image3) }}"
                                                            class="projcard-img" />
                                                    </a>
                                                @endif
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($history->created_at)) }}
                                            </td>
                                            <td>{{ date('F d, Y H:i:s', strtotime($history->updated_at)) }}
                                            </td>
                                            <td>
                                                <!-- Edit button -->
                                                <button class="btn btn-success" data-toggle="modal"
                                                    data-target="#editItemModal{{ $history->footer_id }}">Edit</button>
                                                <button class="btn btn-warning" data-toggle="modal"
                                                    data-target="#archiveItemModal{{ $history->footer_id }}">Unarchive</button>
                                                {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                <!-- Archive button -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- imagemodal --}}
                <div class="modal fade" id="imageModal1" tabindex="-1" role="dialog" style="margin-top: 80px;"
                    aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top: 80px">
                            <div class="modal-body">
                                <img id="fullImage" src="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    {{-- imagemodal --}}
                    <div class="modal fade" id="imageModal2" tabindex="-1" role="dialog"
                        style="margin-top: 80px;" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="margin-top: 80px">
                                <div class="modal-body">
                                    <img id="fullImage" src="" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        {{-- imagemodal --}}
                        <div class="modal fade" id="imageModal3" tabindex="-1" role="dialog"
                            style="margin-top: 80px;" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="margin-top: 80px">
                                    <div class="modal-body">
                                        <img id="fullImage" src="" class="img-fluid" />
                                    </div>
                                </div>
                            </div>

                            <!-- Add Content Modal -->
                            <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
                                aria-labelledby="addItemModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addItemModalLabel">Add Content</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ url('/add-history-content') }}" method="POST"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    {{-- <label for="category">Category</label> --}}
                                                    <input type="hidden" class="form-control" id="name"
                                                        name="userid" value="{{ session('Admin')['user_fname'] }}"
                                                        placeholder="history Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name">Title Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="history_title"
                                                        @error('history_title') is-invalid @enderror
                                                        value="{{ old('history_title') }}" placeholder="Title Name">
                                                    @error('history_title')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="description">Description</label>
                                                    <input type="text" class="form-control" id="name"
                                                        name="history_desc" @error('history_desc') is-invalid @enderror
                                                        value="{{ old('history_desc') }}" placeholder="Description">
                                                    @error('history_desc')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="history_info">Information</label>
                                                    <textarea type="text" class="form-control" id="name" name="history_info"
                                                        @error('history_info') is-invalid @enderror value="{{ old('history_info') }}" placeholder="Item Name"></textarea>
                                                    @error('history_info')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Image</label>
                                                    <input type="file" class="form-control" id="name"
                                                        name="history_image"
                                                        @error('history_image') is-invalid @enderror
                                                        value="{{ old('history_image') }}" placeholder="Item Name">
                                                    @error('history_image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <br>
                                                <br>
                                                <button type="submit" class="btn btn-success">Save Content</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Edit History Modal -->
                            @foreach ($footer as $history)
                                <div class="modal fade" id="editItemModal{{ $history->footer_id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editItemModalLabel">Edit Content</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ url('/update-history-footer/' . $history->footer_id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- Form fields -->
                                                    <div class="form-group">
                                                        <label for="footer_title">Title Name</label>
                                                        <input type="text" class="form-control" id="history_name"
                                                            name="footer_title" value="{{ $history->footer_title }}"
                                                            required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="footer_info">Information</label>
                                                        <textarea type="text" class="form-control" id="footer_info" name="footer_info" required>{{ $history->footer_info }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="footer_image1">Logo 1</label>
                                                        <input type="file" class="form-control" id="footer_image1"
                                                            name="footer_image1">
                                                        @if ($history->footer_image1)
                                                            <div class="mt-2">
                                                                <label>Current Image:</label>
                                                                <img src="{{ asset('footer_image1/' . $history->footer_image1) }}"
                                                                    class="img-thumbnail" alt="Current Image">
                                                            </div>
                                                        @else
                                                            <p>No image available</p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="footer_image2">Image</label>
                                                        <input type="file" class="form-control" id="footer_image2"
                                                            name="footer_image2">
                                                        @if ($history->footer_image2)
                                                            <div class="mt-2">
                                                                <label>Current Image:</label>
                                                                <img src="{{ asset('footer_image2/' . $history->footer_image2) }}"
                                                                    class="img-thumbnail" alt="Current Image">
                                                            </div>
                                                        @else
                                                            <p>No image available</p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="footer_image3">Image</label>
                                                        <input type="file" class="form-control" id="footer_image3"
                                                            name="footer_image3">
                                                        @if ($history->footer_image3)
                                                            <div class="mt-2">
                                                                <label>Current Image:</label>
                                                                <img src="{{ asset('footer_image3/' . $history->footer_image3) }}"
                                                                    class="img-thumbnail" alt="Current Image">
                                                            </div>
                                                        @else
                                                            <p>No image available</p>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success">Save
                                                            Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <!-- Archive Footer Modal -->
                            @foreach ($footer as $history)
                                <div class="modal fade" id="archiveItemModal{{ $history->footer_id }}"
                                    tabindex="-1" role="dialog" aria-labelledby="archiveItemModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editItemModalLabel">Archive Category</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to archive: {{ $history->footer_title }}?</p>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Cancel</button>
                                                    <form
                                                        action="{{ url('/archive-history-content/' . $history->footer_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-success">Archive</button>

                                                    </form>
                                                </div>
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
                text: '{{ session('error') }}',
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
