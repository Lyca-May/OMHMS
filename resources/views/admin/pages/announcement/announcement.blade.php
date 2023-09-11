<!DOCTYPE html>
<html lang="en">

{{-- <style>
    .projcard {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }

    .projcard-innerbox {
        display: flex;
        align-items: center;
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .projcard-img {
        width: 200px;
        height: 150px;
        object-fit: cover;
        margin-right: 20px;
    }

    .projcard-textbox {
        flex-grow: 1;
    }

    .projcard-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .projcard-subtitle {
        font-size: 14px;
        color: #777;
        margin-bottom: 10px;
    }

    .projcard-description {
        margin-bottom: 10px;
    }

    .projcard-actions {
        display: flex;
        gap: 10px;
    }
</style> --}}

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('omhms.png') }}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>eOMHeritage Admin</title>
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
    <link href="{{ asset('assets/css/cssadmin/announce.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/cssadmin/announcemodal.css') }}" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}


    <style>
        .form-control::placeholder {
            color: #ffffff;
            /* Light color for placeholder text */
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
                    <img src="{{ asset('omhms.png') }}" class="logo-icon" alt="logo icon"
                        style="width: 40px; height: 30px">
                    <img src="{{ asset('eOMHeritage.png') }}" class="logo-icon1" alt="logo icon"
                        style="180px; height: 30px">
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
                        <li><a href="{{ url('admin/function') }}">Function Hall</a></li>

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
                    <a href="{{ url('admin/announcement') }}">
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
        <!--End sidebar-wrapper-->

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
                    {{-- <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li> --}}
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
            <br>
            <div class="row">
                <div class="col-12 col-lg-12" style="white-space: nowrap">
                    <span style="display: inline-block; margin-left:30px">
                        <h3><b>Announcements</b></h3>
                    </span>

                    <style>
                        .center-button {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            height: 70vh;
                        }
                    </style>

                    @if (count($announcement) === 0)
                    <div class="center-button">
                        <div class="card" style="text-align: center; padding: 20px;">
                            <div class="card-body">
                                <button href="#myModal" data-backdrop="false" data-toggle="modal" class="btn btn-success"
                                    style="background-color: #28a745; width:200px">
                                    <span style="color: #fff;"> <b>+</b>Create Announcement</span>

                                </button>
                            </div>
                        </div>
                    </div>



                    @else
                        <!-- Move the button to the upper right corner when announcements exist -->
                        <div>
                            < <button href="#myModal" data-backdrop="false" data-toggle="modal"
                                style="float:right;margin-right:20px;display: inline-block" class="btn btn-success">
                                <b> + Add</b>
                                </button>
                        </div>
                    @endif
                </div>
                {{-- <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <br>
                                <h4><b>Create Announcement</b></h4>
                                <br>
                                <form>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-light">Announce something..</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control form-control-light" type="text" value=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label text-light">Upload Picture</label>
                                        <div class="col-lg-9">
                                            <input class="form-control form-control-light" type="file">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button id="loadpage" type="button" class="save-btn">Save</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div> --}}

                <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="addItemModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="background-color: rgb(3, 34, 3);">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addItemModalLabel">Add Announcement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/create-announcement') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group" >
                                        <label for="announcer" style="color:white">Announcer</label>
                                        <input type="text" name="announcer" id="announcer" class="form-control"
                                            value="{{ session('Admin')['user_fname'] }}"
                                            @error('announcer') is-invalid @enderror autocomplete="off">
                                        @error('announcer')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="announcement_content" style="color:white">Announce something..</label>
                                        <input type="text" name="announcement_content" id="announcement_content"
                                            class="form-control" value="{{ old('announcement_content') }}"
                                            @error('announcement_content') is-invalid @enderror autocomplete="off">
                                        @error('announcement_content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="announcement_image">Upload Picture</label>
                                        <input type="file" name="announcement_image" id="announcement_image"
                                            class="form-control-file" @error('announcement_image') is-invalid @enderror
                                            autocomplete="off">
                                        @error('announcement_image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- /.modal -->
            </div>
            <div class="container-fluid">


                @foreach ($announcement as $announcements)
                    <div class="projcard-container">

                        <div class="projcard projcard-blue">
                            <div class="projcard-innerbox">
                                @if ($announcements->announcement_image)
                                    <a href="#" data-toggle="modal"
                                        data-target="#imageModal{{ $announcements->announcement_id }}">
                                        <img src="{{ asset('announcement_image/' . $announcements->announcement_image) }}"
                                            class="projcard-img" />
                                    </a>
                                @else
                                    <img src="{{ asset('announcement_image/default-image.jpg') }}"
                                        class="projcard-img" />
                                @endif

                                <div class="projcard-textbox">
                                    <div class="projcard-title">{{ $announcements->announcement_id }}</div>
                                    <div class="projcard-subtitle">
                                        {{ date('F d, Y', strtotime($announcements->created_at)) }}</div>
                                    <hr>
                                    <div class="projcard-description">{{ $announcements->announcement_content }}</div>
                                    <div class="projcard-actions">
                                        <form method="POST" action="{{ url('archive-announcement') }}">
                                            @csrf
                                            <input type="hidden" name="announcement_id"
                                                value="{{ $announcements->announcement_id }}">
                                            <button type="submit" class="btn btn-danger">Archive</button>
                                        </form>
                                        <form>
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#editModal">Edit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Modal -->
                        <div class="modal fade" id="imageModal{{ $announcements->announcement_id }}" tabindex="-1"
                            role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true"
                            style="margin-top: 100px">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body" style="margin-top: 20px">
                                        <img src="{{ asset('announcement_image/' . $announcements->announcement_image) }}"
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Edit Announcement Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content bg-darkgreen text-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Announcement</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Your form for editing the announcement goes here -->
                                        <form method="POST"
                                            action="{{ url('update-announcement', $announcements->announcement_id) }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">Announcer</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="announcer" value="{{ $announcements->announcer }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Content</label>
                                                <textarea class="form-control" id="description" name="announcement_content">{{ $announcements->announcement_content }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Image</label>
                                                <input class="form-control" id="description" type="file"
                                                    name="announcement_image"
                                                    value="{{ $announcements->announcement_image }}">
                                            </div>
                                            {{-- <div class="form-group">
                                  <label for="announcementContent">Announcement Content</label>
                                  <textarea class="form-control" id="announcementContent" rows="4"></textarea>
                                </div> --}}
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


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

        <script src="{{ asset('assets/js/jsadmin/announce.min.js') }}"></script>

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

        @if (session('failed'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('failed') }}',
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

</body>

</html>
