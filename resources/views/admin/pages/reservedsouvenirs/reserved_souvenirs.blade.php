<!DOCTYPE html>
<html lang="en">
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

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


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
                    <ul id="tablesDrawer" class="drawer-items" >
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
                    <div id="clock">
                        <i class="zmdi zmdi-time">{{ $currentDateTime }}</i>
                    </div>

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
                                href="{{url('logout-admin')}}">Logout</li></a>
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

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            style="float:right;margin-right:20px;" aria-expanded="false">Filter</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link filter-option" data-target="pending-table">Pending Reservation</a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="approved-table">Done Reservation </a></li>
                            <li class="nav-item"><a class="nav-link filter-option" data-target="cancelled-table">Cancelled Reservation</a></li>
                            {{-- <li class="nav-item"><a class="nav-link filter-option" data-target="history-table"><i class="zmdi zmdi-history"></i> History</a></li> --}}
                        </ul>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">List of Reserved Souvenirs
                                    <br>
                                    <br>
                                    <div class="col-sm-4">
                                        {{-- <a class="btn btn-success" style="float:left;margin-right:20px;" data-toggle="modal" data-target="#addItemModal">+ Add</a> --}}
                                        <div class="search-box">
                                            <input type="text" class="form-control" id="searchInput" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive" style="width: 1255px; overflow-x: auto;">
                                    <table class="table align-items-center table-flush table-borderless" id="pending-table">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Souvenir Name</th>
                                                <th>Souvenir Image</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reservedSouvenirs as $reservedSouvenir)
                                            <tr>
                                                <td>{{$reservedSouvenir->user->user_fname}} {{$reservedSouvenir->user->user_lname}}</td>
                                                <td>{{$reservedSouvenir->souvenir->souvenir_name}}</td>
                                                <td>
                                                    @if ($reservedSouvenir->souvenir->souvenir_image)
                                                        <a href="#" class="image-link" data-toggle="modal"
                                                            data-target="#imageModal{{ $reservedSouvenir->souvenir->souvenir_id }}">
                                                            <img src="{{ asset('souvenir_image/' . $reservedSouvenir->souvenir->souvenir_image) }}"
                                                                class="projcard-img" />
                                                        </a>
                                                    @endif
                                                </td>

                                                {{-- imagemodal --}}
                                                @if ($reservedSouvenir->souvenir->souvenir_image)
                                                    <div class="modal fade" id="imageModal{{ $reservedSouvenir->souvenir->souvenir_id }}" tabindex="-1" role="dialog"
                                                         aria-labelledby="imageModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <img src="{{ asset('souvenir_image/' . $reservedSouvenir->souvenir->souvenir_image) }}"
                                                                        class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <td>{{$reservedSouvenir->quantity}}</td>
                                                <td>{{$reservedSouvenir->souvenir->souvenir_price}}</td>
                                                <td>{{$reservedSouvenir->total_price}}</td>
                                                <td>{{$reservedSouvenir->status}}</td>
                                                <td>
                                                    <form action="{{ url('/paid-reserved-souvenir/' . $reservedSouvenir->souvenir_reservations_id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-success">Paid</button>
                                                    </form>
                                                    <form action="{{ route('cancel_status', ['souvenir_reservations_id' => $reservedSouvenir->souvenir_reservations_id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
                                                    </form>



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
                         Copyright © 2023 eOMHeritage Admin
                     </div>
                 </div>
             </footer>
             <!--End footer-->

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
