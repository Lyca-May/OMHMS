<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>OMHMS</title>
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
                    <div class="col-12 col-lg-12">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" style="float:right;margin-right:20px;" aria-expanded="false">Filter
                            Bookings</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link filter-option" data-target="pending-table">List
                                    of Items</a></li>
                            <li class="nav-item"><a class="nav-link filter-option"
                                    data-target="cancelled-table">Archived Items</a></li>
                            {{-- <li class="nav-item"><a class="nav-link filter-option" data-target="approved-table">Approved Bookings</a></li> --}}
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">List of Souvenirs
                                    <br>
                                    <br>
                                    <div class="col-sm-4">
                                        <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a>
                                        <div class="search-box">
                                            <input type="text" class="form-control" id="searchInput"
                                                placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="width: 1707.50px; overflow-x: auto;">
                                    <table class="table align-items-center table-flush table-borderless" id="pending-table">
                                        <thead>
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Municipality</th>
                                                <th>Image</th>
                                                <th>Date Listed</th>
                                                <th>Date Updated</th>
                                                <th>Action</th>
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
                                                        <button class="custom-button" data-toggle="modal"
                                                            data-target="#editItemModal{{ $artifact->souvenir_id }}">Edit</button>
                                                        <button class="custom-button1" data-toggle="modal"
                                                            data-target="#archiveItemModal{{ $artifact->souvenir_id }}">Archive</button>
                                                        {{-- <button class="custom-button" id="editItemButton" data-toggle="modal" data-target="#editItemModal" >Edit</button> --}}
                                                        <!-- Archive button -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <table class="table align-items-center table-flush table-borderless" id="cancelled-table" style="display: none;">
                                        <thead>
                                            <tr>
                                                <th>Item ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Municipality</th>
                                                <th>Image</th>
                                                <th>Date Listed</th>
                                                <th>Date Updated</th>
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
                                    <select name="souvenir_municipality" id="souvenir_municipality" class="form-control">
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
                                        <input type="text" class="form-control" id="name" name="souvenir_qty"
                                            @error('souvenir_qty') is-invalid @enderror value="{{ old('souvenir_qty') }}"
                                            placeholder="Quantity">
                                        @error('souvenir_qty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="souvenir_qty">Price</label>
                                        <input type="text" class="form-control" id="name" name="souvenir_price"
                                            @error('souvenir_price') is-invalid @enderror value="{{ old('souvenir_price') }}"
                                            placeholder="Price">
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
                                        <option value="{{ $category->category_id }}" {{ old('category_name') == $category->category_id ? 'selected' : '' }}>
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
                            <div class="modal-content" style="background-color: rgb(3, 34, 3);">
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
                                        <select name="souvenir_municipality" id="souvenir_municipality" class="form-control">
                                            <option value="{{ $artifact->souvenir_municipality }}">{{ $artifact->souvenir_municipality }}</option>
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
                                                name="souvenir_price" value="{{ $artifact->souvenir_price }}" required>
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
                            <div class="modal-content" style="background-color: rgb(3, 34, 3);">
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
                <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
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
