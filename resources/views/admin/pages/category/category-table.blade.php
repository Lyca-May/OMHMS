<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OMHMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
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
                    <a href="#" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items">
                        <li><a href="{{ url('/artifacts') }}">Items & Artefacts</a></li>
                        <li><a href="{{ url('/souvenirs') }}">Souvenirs</a></li>
                        <li><a href="{{ url('/category') }}">Category</a></li>
                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="forms.html">
                        <i class="zmdi zmdi-info-outline"></i> <span>Announcements</span>
                    </a>
                </li>


                <li>
                    <a href="forms.html">
                        <i class="zmdi zmdi-file-text"></i> <span>Attendance</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/calendar') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        {{-- <small class="badge float-right badge-light">New</small> --}}
                    </a>
                </li>



                <li class="sidebar-header">LABELS</li>
                <li>
                    <a href="{{ asset('admin/profile') }}">
                        <i class="zmdi zmdi-face"></i> <span>Profile</span>
                    </a>
                </li>


            </ul>

        </div>

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
                <!--End sidebar-wrapper-->
                <div class="row">
                    <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#list" data-toggle="pill" class="nav-link" onclick="toggleSection('list')"><i class="zmdi zmdi-edit"></i> <span class="hidden-xs">Edit</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void();" data-target="#archived" data-toggle="pill" class="nav-link" onclick="toggleSection('archived')"><i class="zmdi zmdi-archive"></i> <span class="hidden-xs">Archived Category</span></a>
                        </li>
                    </ul>

                    {{-- <div id="archived" style="height: 500px; background-color: #f0f0f0; display: none;">
                        Archived Category
                    </div> --}}

                    <br>
                    <br>

                    <div class="row">
                        <div class="col-12 col-lg-12" id="list">
                            <div class="card">
                                <div class="card-header">List of Category
                                    <br>
                                    <br>
                                    <div class="col-sm-4">
                                        <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a>
                                        <div class="search-box">
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-borderless table-smaller" id="categoryTable">
                                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Date Listed</th>
                                                <th>Date Updated</th>
                                                <th>Action</th>
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
                                                    <button class="custom-button" data-toggle="modal" data-target="#editItemModal{{ $categories->category_id }}">Edit</button>
                                                    <button class="custom-button1" data-toggle="modal" data-target="#archiveItemModal{{ $categories->category_id }}">Archive</button>
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
                    </div>


                    {{-- ARCHIVE --}}
                    <div class="row" id="archiveRow" style="display: none;">
                        <div class="col-12 col-lg-12" id="archived">
                            <div class="card">
                                <div class="card-header">List of Archived Category
                                    <br>
                                    <br>
                                    <div class="col-sm-4">
                                        {{-- <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a> --}}
                                        <div class="search-box">
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-borderless table-smaller" id="archivedCategoryTable">
                                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Type</th>
                                                <th>Date Listed</th>
                                                <th>Date Updated</th>
                                                <th>Action</th>
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
                    </div>




                    <!-- Add Item Modal -->
                    <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog"
                        aria-labelledby="addItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                                <div class="modal-header    ">
                                    <h5 class="modal-title" id="addItemModalLabel">Add Item</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/add-category') }}" method="POST"
                                        enctype="multipart/form-data">
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
                                        <button type="submit" class="btn btn-primary">Save Category</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Edit Category Modal -->
                    @foreach ($category as $categories)
                    <div class="modal fade" id="editItemModal{{ $categories->category_id }}" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editItemModalLabel">Edit Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ url('/edit-category/' . $categories->category_id) }}" method="POST">
                                        @csrf
                                        <!-- Form fields -->
                                        <div class="form-group">
                                            <label for="editName">Name</label>
                                            <input type="hidden" class="form-control" rows="3" name="userid" value="{{ $categories->userid }}">
                                            <input type="text" class="form-control" id="editName" name="category_name" placeholder="Enter name" value="{{ $categories->category_name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription">Description</label>
                                            <textarea class="form-control" id="editDescription" name="category_description" placeholder="Enter description">{{ $categories->category_description }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select class="form-control" id="type" name="category_type">
                                                <option value="{{ $categories->category_type }}">{{ $categories->category_type }}</option>
                                                <option value="Souvenir">Souvenir</option>
                                                <option value="Artifact">Artifact</option>
                                            </select>
                                            @error('category_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    <div class="modal fade" id="archiveItemModal{{ $categories->category_id }}" tabindex="-1" role="dialog" aria-labelledby="archiveItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editItemModalLabel">Archive Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {{-- <form action="{{ url('/edit-category/' . $categories->category_id) }}" method="POST"> --}}
                                        {{-- @csrf --}}
                                        <p>Are you sure you want to archive the category: {{ $categories->category_name }}?</p>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <form action="{{ url('/archive-category/'. $categories->category_id) }}" method="POST">
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
        <script src="{{ asset('assets/js/inventory.js') }}"></script>
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

</body>

</html>
