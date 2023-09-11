<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eOMHeritage Admin</title>
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
        width: 200px; /* Set the desired width for the fixed column */
        white-space: nowrap; /* Prevent line breaks in the column content */
        overflow: hidden; /* Hide overflowing content */
        text-overflow: ellipsis; /* Display ellipsis (...) for truncated content */
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
                        <li><a href="{{url('admin/function')}}">Function Hall</a></li>

                        <!-- Add more link items as needed -->
                    </ul>
                </li>

                <li>
                    <a href="#" id="inventoryLink">
                        <i class="zmdi zmdi-archive"></i> <span>Inventory</span>
                    </a>
                    <ul id="inventoryDrawer" class="drawer-items">
                        <li><a href="{{ url('/historys') }}">Items & Artefacts</a></li>
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
                    <a href="{{ url('admin/attendance') }}">
                        <i class="zmdi zmdi-file-text"></i> <span>Attendance</span>
                    </a>
                </li>

                <li>
                    <a href="{{ asset('admin/calendar') }}">
                        <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                        {{-- <small class="badge float-right badge-light">New</small> --}}
                    </a>
                </li>
                <li class="sidebar-header">About Us</li>
                <li>
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Edit Content</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items" >
                        <li><a href="{{url('about-us/history') }}">Edit History</a></li>
                        <li><a href="{{url('about-us/footer')}}">Footer</a></li>
                        <li><a href="{{url('about-us/wts')}}">What to see Inside</a></li>
                        <li><a href="{{url('about-us/contact')}}">Contact</a></li>
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
                    <div class="col-12 col-lg-12">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" style="float:right;margin-right:20px;" aria-expanded="false">Filter Bookings</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link filter-option" data-target="pending-table">List of Items</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="cancelled-table">Archived Items</a></li>
                            {{-- <li class="nav-item"><a class="nav-link filter-option" data-target="approved-table">Approved Bookings</a></li> --}}
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">What to see
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
                                    <table class="table align-items-center table-flush table-borderless" id="pending-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Information</th>
                                                <th>Image Name</th>
                                                <th>Image</th>
                                                <th>Date Posted</th>
                                                <th>Date Updated</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tbody>
                                                @foreach ($wts as $history)
                                                    <tr>
                                                        <td>{{ $history->wts_id }}</td>
                                                        <td>{{ $history->wts_title }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#historyModal{{ $history->wts_id }}">
                                                              View Info
                                                            </button>
                                                            <div class="modal fade" id="historyModal{{ $history->wts_id }}" tabindex="-1" role="dialog" aria-labelledby="historyModalLabel{{ $history->wts_id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <h5 class="modal-title" id="historyModalLabel{{ $history->wts_id }}">Information</h5>
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <div class="modal-body" style="color: black; overflow-y: auto; max-height: 400px;" >
                                                                      <pre>{{ $history->wts_info }}</pre>
                                                                    </div>
                                                                    <div class="modal-wts">
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                        </td>
                                                        <td>{{ $history->wts_image_title }}</td>
                                                        <td>
                                                            @if ($history->wts_image)
                                                                <a href="#" class="image-link" data-toggle="modal"
                                                                    data-target="#imageModal">
                                                                    <img src="{{ asset('wts_image/' . $history->wts_image) }}"
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
                                                            <button class="custom-button" data-toggle="modal"
                                                                data-target="#editItemModal{{ $history->wts_id }}">Edit</button>
                                                            <button class="custom-button1" data-toggle="modal"
                                                                data-target="#archiveItemModal{{ $history->wts_id }}">Archive</button>
                                                            {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                            <!-- Archive button -->
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </tbody>
                                    </table>
                                    <table class="table align-items-center table-flush table-borderless" id="cancelled-table" style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Information</th>
                                                <th>Image Name</th>
                                                <th>Image</th>
                                                <th>Date Posted</th>
                                                <th>Date Updated</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($archivedwts as $history)
                                                    <tr>
                                                        <td>{{ $history->wts_id }}</td>
                                                        <td>{{ $history->wts_title }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#historyModal{{ $history->wts_id }}">
                                                              View Info
                                                            </button>
                                                            <div class="modal fade" id="historyModal{{ $history->wts_id }}" tabindex="-1" role="dialog" aria-labelledby="historyModalLabel{{ $history->wts_id }}" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                  <div class="modal-content">
                                                                    <div class="modal-header">
                                                                      <h5 class="modal-title" id="historyModalLabel{{ $history->wts_id }}">wts Information</h5>
                                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                      </button>
                                                                    </div>
                                                                    <div class="modal-body" style="color: black; overflow-y: auto; max-height: 400px;" >
                                                                      <pre>{{ $history->wts_info }}</pre>
                                                                    </div>
                                                                    <div class="modal-wts">
                                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                        </td>
                                                        <td>{{ $history->wts_image_title }}</td>
                                                        <td>
                                                            @if ($history->wts_image)
                                                                <a href="#" class="image-link" data-toggle="modal"
                                                                    data-target="#imageModal">
                                                                    <img src="{{ asset('wts_image/' . $history->wts_image) }}"
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
                                                            <button class="custom-button" data-toggle="modal"
                                                                data-target="#editItemModal{{ $history->wts_id }}">Edit</button>
                                                            <button class="custom-button1" data-toggle="modal"
                                                                data-target="#archiveItemModal{{ $history->wts_id }}">Unarchive</button>
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
                </div>

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
                    <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addItemModalLabel">Add Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/add-history-wts') }}" method="POST"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="category">Category</label> --}}
                                    <input type="hidden" class="form-control" id="name" name="userid"
                                        value="{{ session('Admin')['user_fname'] }}" placeholder="history Name">
                                </div>
                                <div class="form-group">
                                    <label for="name">Title Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="wts_title" @error('wts_title') is-invalid @enderror
                                        value="{{ old('wts_title') }}" placeholder="Title Name">
                                    @error('wts_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="wts_info">Information</label>
                                    <textarea type="text" class="form-control" id="name" name="wts_info"
                                        @error('wts_info') is-invalid @enderror value="{{ old('wts_info') }}"
                                        placeholder="Item Name"></textarea>
                                    @error('wts_info')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Image Name</label>
                                    <input type="text" class="form-control" id="name"
                                        name="wts_image_title" @error('wts_image_title') is-invalid @enderror
                                        value="{{ old('wts_image_title') }}" placeholder="Title Name">
                                    @error('wts_image_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control" id="name"
                                        name="wts_image" @error('wts_image') is-invalid @enderror
                                        value="{{ old('wts_image') }}" placeholder="Item Name">
                                    @error('wts_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Save Content</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Edit Category Modal -->
            @foreach ($wts as $history)
            <div class="modal fade" id="editItemModal{{ $history->wts_id }}" tabindex="-1" role="dialog" aria-labelledby="editItemModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editItemModalLabel">Edit Content</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/update-history-wts/' . $history->wts_id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Form fields -->
                                <div class="form-group">
                                    <label for="wts_title">Title Name</label>
                                    <input type="text" class="form-control" id="history_name" name="wts_title" value="{{ $history->wts_title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="wts_info">Information</label>
                                    <textarea type="text" class="form-control" id="wts_info" name="wts_info" required>{{ $history->wts_info }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="wts_title">Image Name</label>
                                    <input type="text" class="form-control" id="history_name" name="wts_image_title" value="{{ $history->wts_image_title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="wts_image">Image</label>
                                    <input type="file" class="form-control" id="wts_image" name="wts_image">
                                    @if ($history->wts_image)
                                        <div class="mt-2">
                                            <label>Current Image:</label>
                                            <img src="{{ asset('wts_image/' . $history->wts_image) }}" class="img-thumbnail" alt="Current Image">
                                        </div>
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>

                                <div class="modal-history">
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
            @foreach ($wts as $history)
            <div class="modal fade" id="archiveItemModal{{ $history->wts_id }}" tabindex="-1" role="dialog" aria-labelledby="archiveItemModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editItemModalLabel">Archive Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <p>Are you sure you want to archive the category: {{ $history->wts_title }}?</p>
                                <div class="modal-wts">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <form action="{{ url('/archive-history-wts/'. $history->wts_id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Archive</button>

                                    </form>
                                </div>
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

            <!--Start wts-->
            <wts class="wts">
                <div class="container">
                    <div class="text-center">
                        Copyright © 20203 eOMHeritage
                    </div>
                </div>
            </wts>
            <!--End wts-->

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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
