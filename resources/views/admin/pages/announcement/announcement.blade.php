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

<<<<<<< Updated upstream
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
                    <a href="{{ url('admin/reserved') }}">
                        <i class="zmdi zmdi-info-outline"></i> <span>Reserved Souvenirs</span>
                    </a>
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
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Sales</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items">
                        <li><a href="{{ url('/souvenir-sales') }}">Souvenirs</a></li>
                        <li><a href="{{ url('') }}">Function Hall</a></li>
                    </ul>
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
=======
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Bookings</li>
                    <li class="breadcrumb-item active">Inventory</li>
                    <li class="breadcrumb-item active">Announcements</li>
                </ol>
>>>>>>> Stashed changes
            </nav>
        </div><!-- End Page Title -->


        <hr>
        <section class="section dashboard">
            <div class="row">



                <br>
                <div class="row">
                    <div class="col-12 col-lg-12" style="white-space: nowrap">
                        <span style="display: inline-block; margin-left:30px">
                        </span>

                        <style>
                            .center-button {
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                height: 60vh;
                            }
                        </style>

                        @if (count($announcement) === 0)
                            <div class="center-button">
                                <div class="card">
                                    <button href="#myModal" data-backdrop="true" data-toggle="modal"
                                        class="btn btn-success"
                                        style="background-color: #28a745; width:300px; height:75px">
                                        <span style="color: #fff; font-size:15px"> <b>+ </b>Create
                                            Announcement</span>

                                    </button>
                                </div>
                            </div>
                        @else
                            <!-- Move the button to the upper right corner when announcements exist -->
                            <div>
                                <button href="#myModal" data-backdrop="false" data-toggle="modal"
                                    style="float:right;margin-left:60px;display: inline-block" class="btn btn-success">
                                    <b> + Add</b>
                                </button>
                            </div>
                        @endif
                    </div>
                    <br><br><br><br>

                    {{-- Add Announcement --}}
                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                        aria-labelledby="addItemModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
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
                                        <div class="form-group">
                                            <label for="announcer">Announcer</label>
                                            <input type="text" name="announcer" id="announcer" class="form-control"
                                                value="{{ session('Admin')['user_fname'] }}"
                                                @error('announcer') is-invalid @enderror autocomplete="off">
                                            @error('announcer')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="announcement_content">Announce something..</label>
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
                                                class="form-control-file"
                                                @error('announcement_image') is-invalid @enderror autocomplete="off">
                                            @error('announcement_image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.modal -->
                </div>
                <div class="container-fluid">

                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center"><b>Announcement</b></h5>

                                <!-- Vertical Pills Tabs -->
                                <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true"><i
                                                class="bi bi-megaphone"></i>Announce</button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false"><i
                                                class="bi bi-archive"></i> Archive</button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            @foreach ($announcement as $announcements)
                                                <div class="cardannounce">
                                                    <div class="my_profile">A</div>
                                                    <div class="datetime">
                                                        {{ date('F d, Y', strtotime($announcements->created_at)) }}
                                                    </div>
                                                    <div class="announce_content">
                                                        <div class="my_name">{{ $announcements->announcer }}</div>
                                                        <small>eOMHeritage Admin</small>
                                                        <div style="margin-top: 30px">
                                                            <div>{{ $announcements->announcement_content }}</div>
                                                        </div>
                                                        <!-- Image below the announcement content -->
                                                        <img src="{{ asset('announcement_image/' . $announcements->announcement_image) }}"
                                                            alt="Image Caption">
                                                    </div>
                                                    <br>
                                                    <form method="POST" action="{{ url('archive-announcement') }}">
                                                        @csrf
                                                        <input type="hidden" name="announcement_id"
                                                            value="{{ $announcements->announcement_id }}">
                                                        <div class="button-container">
                                                            <button type="submit"
                                                                class="btn btn-danger">Archive</button>
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal"
                                                                data-target="#editModal">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">
                                            Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos
                                            quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque
                                            aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae
                                            mollitia dolores. Ut laboriosam voluptatum dicta.
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                            aria-labelledby="v-pills-messages-tab">
                                            Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis
                                            cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis
                                            accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos
                                            fuga tempore dolor.
                                        </div>
                                    </div>
                                </div>
                                <!-- End Vertical Pills Tabs -->

                            </div>
                        </div>

                    </div>

                    @foreach ($announcement as $announcements)
                        <div class="projcard-container">

                            <!-- Image Modal -->
                            <div class="modal fade" id="imageModal{{ $announcements->announcement_id }}"
                                tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true"
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
                                    <div class="modal-content bg-darkgreen ">
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
                                                    <textarea class="form-control" rows="4" id="description" name="announcement_content">{{ $announcements->announcement_content }}</textarea>
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
        </section>
    </main>


    {{-- Vendor JS --}}
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <!-- Template Main JS File -->
    {{-- <script src="{{ asset('assets/js/admin/datatable.js') }}"></script> --}}
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


    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Convert 24-hour format to 12-hour format
            var ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12;

            var timeString = hours.toString().padStart(2, '0') + ':' +
                minutes.toString().padStart(2, '0') + ':' +
                seconds.toString().padStart(2, '0') + ' ' + ampm;

            document.getElementById('clock').innerHTML = timeString;

            // Update the time every second
            setTimeout(updateTime, 1000);
        }

        updateTime();
    </script>

</body>

</html>
