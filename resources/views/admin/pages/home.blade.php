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

<<<<<<< Updated upstream
                <li>
                    <a href="#" id="tablesLink">
                        <i class="zmdi zmdi-book"></i> <span>Bookings</span>
                    </a>
                    <ul id="tablesDrawer" class="drawer-items">
                        <li><a class=" href="{{ asset('admin/visit') }}">Museum Visit</a></li>
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
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Sales</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items">
                        <li><a href="{{ url('/souvenir-sales') }}">Souvenirs</a></li>
                        <li><a href="{{ url('/rent-sales') }}">Function Hall</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/generate-report-form') }}">
                        <i class="zmdi zmdi-file-text"></i> <span>Souvenir Report</span>
                    </a>
                </li>

                <li class="sidebar-header">About Us</li>
                <li>
                    <a href="#" id="contentLink">
                        <i class="zmdi zmdi-edit"></i> <span>Edit Content</span>
                    </a>
                    <ul id="contentDrawer" class="drawer-items">
                        <li><a href="{{ url('about-us/history') }}">Edit History</a></li>
                        <li><a href="{{ url('about-us/footer') }}">Footer</a></li>
                        <li><a href="{{ url('about-us/wts') }}">What to see Inside</a></li>
                        <li><a href="{{ url('about-us/contact') }}">Contact</a></li>
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
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect"
                            data-toggle="dropdown" href="javascript:void();">
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
                                        href="{{ url('logout-admin') }}">Logout</li></a>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </header>
        <!--End topbar header-->

        <div class="clearfix"></div>

        <div class="content-wrapper">
            {{-- <div class="container-fluid"> --}}

            <!--Start Dashboard Content-->

            <div class="card mt-3">
                <div class="card-content">
                    <div class="row row-group m-0">
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card bg-white">

                                <h5 class="text-white mb-0">{{ $visitCount }}<span class="float-right"></i></span>
                                </h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font" class="fa fa-eye">Total Visitors Today<span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card bg-white">
                                <h5 class="text-white mb-0">{{ $rentCount }} <span class="float-right"><i
                                            class="fa fa-account"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Account who Reserve a Rent <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card bg-white text-dark">
                                <h5 class="text-white mb-0">{{ $souvenirsCount }} <span
                                        class="float-right"><i></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Souvenir Stocks <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-3 border-light">
                            <div class="card bg-white">
                                <h5 class="text-white mb-0">{{ $artifactsCount }} <span class="float-right"><i
                                            class="fa fa-envira"></i></span></h5>
                                <div class="progress my-3" style="height:3px;">
                                    <div class="progress-bar" style="width:55%"></div>
                                </div>
                                <p class="mb-0 text-white small-font">Total Quantity of Artifacts <span
                                        class="float-right"><i class="zmdi zmdi-long-arrow-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
=======
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
>>>>>>> Stashed changes

        <section class="section dashboard">
            <div class="row">
<<<<<<< Updated upstream
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-header text-dark">Visitors Yearly</div>
=======
>>>>>>> Stashed changes

                <!-- Start columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Users Card -->
                        <div class="col">
                            <div class="card info-card customers-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Visitors Today <span> | All</span></h5>

<<<<<<< Updated upstream
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-header text-dark">Visitors Monthly</div>
=======
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $visitCount }}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
>>>>>>> Stashed changes

                                        </div>
                                    </div>
                                </div>

<<<<<<< Updated upstream
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-header text-dark">Visitors Weekly</div>

                        <div class="card-body">
                            <canvas id="visitorsChartWeek" style="width: 100%; max-width: 600px;"></canvas>
                        </div>

                    </div>
                </div>


                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body">
                            <h5 class="card-title text-dark">Visitors</h5>
                            <div class="input-group mb-3">
                                <select id="chartTypeSelect" class="form-select form-select-sm">
                                    <option value="province">By Province</option>
                                    <option value="municipality">By Municipality</option>
                                    <option value="barangay">By Barangay</option>
                                    <option value="street">By Street</option>
                                </select>
=======
>>>>>>> Stashed changes
                            </div>
                        </div><!-- End Customers Card -->

                        <!-- Products Card -->
                        <div class="col">
                            <div class="card info-card product-card">


                                <div class="card-body">
                                    <h5 class="card-title">Accounts who Reserve a Rent <span> | All</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $rentCount }}</h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Products Card -->

                        <!-- Sales Card -->
                        <div class="col">

                            <div class="card info-card categories-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Souvenir Stocks <span> | All</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-menu-button-wide"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $souvenirsCount }}</h6>
                                            {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End sales Card -->

                        <!-- Customers Card -->
                        <div class="col">

                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Quantity of Artifacts <span> | All</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ $artifactsCount }} </h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End sales Card -->


                    </div><!-- End Left side columns -->

                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-6">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" value="province" href="#">By Province</a></li>
                                            <li><a class="dropdown-item" value="municipality" href="#">By Municipality</a></li>
                                            <li><a class="dropdown-item" value="barangay" href="#">By Barangay</a></li>
                                            <li><a class="dropdown-item" value="street" href="#">By Street</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Users</h5>

                                        <!-- Bar Chart -->
                                        <canvas id="provincePieChart" style="min-height: 200px;"></canvas>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new Chart(document.querySelector('#provincePieChart'), {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                        datasets: [{
                                                            label: 'Bar Chart',
                                                            data: [65, 59, 80, 81, 56, 55, 40],
                                                            backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(255, 159, 64, 0.2)',
                                                                'rgba(255, 205, 86, 0.2)',
                                                                'rgba(75, 192, 192, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                                'rgba(153, 102, 255, 0.2)',
                                                                'rgba(201, 203, 207, 0.2)'
                                                            ],
                                                            borderColor: [
                                                                'rgb(255, 99, 132)',
                                                                'rgb(255, 159, 64)',
                                                                'rgb(255, 205, 86)',
                                                                'rgb(75, 192, 192)',
                                                                'rgb(54, 162, 235)',
                                                                'rgb(153, 102, 255)',
                                                                'rgb(201, 203, 207)'
                                                            ],
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            y: {
                                                                beginAtZero: true
                                                            }
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                        <!-- End Bar CHart -->

                                    </div>
                                </div>
                            </div><!-- End Reports -->

                            <div class="col-6">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Bar CHart</h5>

                                        <!-- Bar Chart -->
                                        <canvas id="barChart1" style="min-height: 200px;"></canvas>
                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new Chart(document.querySelector('#barChart1'), {
                                                    type: 'bar',
                                                    data: {
                                                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                                        datasets: [{
                                                            label: 'Bar Chart',
                                                            data: [65, 59, 80, 81, 56, 55, 40],
                                                            backgroundColor: [
                                                                'rgba(255, 99, 132, 0.2)',
                                                                'rgba(255, 159, 64, 0.2)',
                                                                'rgba(255, 205, 86, 0.2)',
                                                                'rgba(75, 192, 192, 0.2)',
                                                                'rgba(54, 162, 235, 0.2)',
                                                                'rgba(153, 102, 255, 0.2)',
                                                                'rgba(201, 203, 207, 0.2)'
                                                            ],
                                                            borderColor: [
                                                                'rgb(255, 99, 132)',
                                                                'rgb(255, 159, 64)',
                                                                'rgb(255, 205, 86)',
                                                                'rgb(75, 192, 192)',
                                                                'rgb(54, 162, 235)',
                                                                'rgb(153, 102, 255)',
                                                                'rgb(201, 203, 207)'
                                                            ],
                                                            borderWidth: 1
                                                        }]
                                                    },
                                                    options: {
                                                        scales: {
                                                            y: {
                                                                beginAtZero: true
                                                            }
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                        <!-- End Bar CHart -->

                                    </div>
                                </div>
                            </div><!-- End Reports -->
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-4">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body pb-2">
                                        <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                                        <div id="trafficChart" style="min-height: 375px;" class="echart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                                    tooltip: {
                                                        trigger: 'item'
                                                    },
                                                    legend: {
                                                        top: '5%',
                                                        left: 'center'
                                                    },
                                                    series: [{
                                                        name: 'Access From',
                                                        type: 'pie',
                                                        radius: ['40%', '70%'],
                                                        avoidLabelOverlap: false,
                                                        label: {
                                                            show: false,
                                                            position: 'center'
                                                        },
                                                        emphasis: {
                                                            label: {
                                                                show: true,
                                                                fontSize: '18',
                                                                fontWeight: 'bold'
                                                            }
                                                        },
                                                        labelLine: {
                                                            show: false
                                                        },
                                                        data: [{
                                                                value: 1048,
                                                                name: 'Search Engine'
                                                            },
                                                            {
                                                                value: 735,
                                                                name: 'Direct'
                                                            },
                                                            {
                                                                value: 580,
                                                                name: 'Email'
                                                            },
                                                            {
                                                                value: 484,
                                                                name: 'Union Ads'
                                                            },
                                                            {
                                                                value: 300,
                                                                name: 'Video Ads'
                                                            }
                                                        ]
                                                    }]
                                                });
                                            });
                                        </script>

                                    </div>
                                </div>
                            </div><!-- End Reports -->

                            <!-- Reports -->
                            <div class="col-4">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Reports <span>/Today</span></h5>

                                        <!-- Line Chart -->
                                        <div id="reportsChart"></div>

                                        <script>
                                            document.addEventListener("DOMContentLoaded", () => {
                                                new ApexCharts(document.querySelector("#reportsChart"), {
                                                    series: [{
                                                        name: 'Sales',
                                                        data: [31, 40, 28, 51, 42, 82, 56],
                                                    }],
                                                    chart: {
                                                        height: 350,
                                                        type: 'area',
                                                        toolbar: {
                                                            show: false
                                                        },
                                                    },
                                                    markers: {
                                                        size: 4
                                                    },
                                                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                    fill: {
                                                        type: "gradient",
                                                        gradient: {
                                                            shadeIntensity: 1,
                                                            opacityFrom: 0.3,
                                                            opacityTo: 0.4,
                                                            stops: [0, 90, 100]
                                                        }
                                                    },
                                                    dataLabels: {
                                                        enabled: false
                                                    },
                                                    stroke: {
                                                        curve: 'smooth',
                                                        width: 2
                                                    },
                                                    xaxis: {
                                                        type: 'datetime',
                                                        categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                            "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                            "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                            "2018-09-19T06:30:00.000Z"
                                                        ]
                                                    },
                                                    tooltip: {
                                                        x: {
                                                            format: 'dd/MM/yy HH:mm'
                                                        },
                                                    }
                                                }).render();
                                            });
                                        </script>
                                        <!-- End Line Chart -->

                                    </div>

                                </div>
                            </div><!-- End Reports -->

                            <div class="col-4">
                                <div class="card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body">
                                        <h5 class="card-title">Pie Chart</h5>

                                        <!-- Pie Chart -->
                                        <canvas id="pieChart" style="min-height: 363px;"></canvas>
                                        <script>
                                          document.addEventListener("DOMContentLoaded", () => {
                                            new Chart(document.querySelector('#pieChart'), {
                                              type: 'pie',
                                              data: {
                                                labels: [
                                                  'Red',
                                                  'Blue',
                                                  'Yellow'
                                                ],
                                                datasets: [{
                                                  label: 'My First Dataset',
                                                  data: [300, 50, 100],
                                                  backgroundColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(255, 205, 86)'
                                                  ],
                                                  hoverOffset: 4
                                                }]
                                              }
                                            });
                                          });
                                        </script>
                                        <!-- End Pie CHart -->

                                      </div>
                                </div>
                            </div><!-- End Reports -->
                        </div>
                    </div>

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
<<<<<<< Updated upstream
                                <div id="provincePieChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark"></h5>
                            <div class="input-group mb-3">
                                <select id="Filter" class="form-select form-select-sm">
                                    <option value="gender">Gender</option>
                                    <option value="age">Age</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <div id="polarAreaChart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark">Time Schedule</h5>
                            <div class="card-body">
                                <div id="visitorChart" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark">Yearly Souvenir Sales</h5>
                            <div class="card-body">
                                <div id="yearSouvenirSales" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-daark">
                            <h5 class="card-title text-dark">Monthly Souvenir Sales</h5>
                            <div class="card-body">
                                <div id="monthSouvenirSales" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark">Weekly Souvenir Sales</h5>
                            <div class="card-body">
                                <div id="weekSouvenirSales" style="height: 400px;"></div>
=======
                                <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#">#2457</a></th>
                                            <td>Brandon Jacob</td>
                                            <td><a href="#" class="text-primary">At praesentium minu</a>
                                            </td>
                                            <td>$64</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2147</a></th>
                                            <td>Bridie Kessler</td>
                                            <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                    similique</a></td>
                                            <td>$47</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2049</a></th>
                                            <td>Ashleigh Langosh</td>
                                            <td><a href="#" class="text-primary">At recusandae
                                                    consectetur</a></td>
                                            <td>$147</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Angus Grady</td>
                                            <td><a href="#" class="text-primar">Ut voluptatem id earum
                                                    et</a></td>
                                            <td>$67</td>
                                            <td><span class="badge bg-danger">Rejected</span></td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#">#2644</a></th>
                                            <td>Raheem Lehner</td>
                                            <td><a href="#" class="text-primary">Sunt similique
                                                    distinctio</a></td>
                                            <td>$165</td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                        </tr>
                                    </tbody>
                                </table>

>>>>>>> Stashed changes
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                                    voluptas nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem
                                                    similique doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                    exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                                    sint rerum error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                        alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                                    delectus repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
<<<<<<< Updated upstream


            {{-- </div> --}}
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark">Yearly Rent Sales</h5>
                            <div class="card-body">
                                <div id="yearRentSales" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-daark">
                            <h5 class="card-title text-dark">Monthly Rent Sales</h5>
                            <div class="card-body">
                                <div id="monthRentSales" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-body text-dark">
                            <h5 class="card-title text-dark">Weekly Rent Sales</h5>
                            <div class="card-body">
                                <div id="weekRentSales" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            <!--End Row-->
=======
            </div><!-- End columns -->

            </div>
        </section>
>>>>>>> Stashed changes

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>eOMHeritage</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    {{-- Vendor JS --}}
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

<<<<<<< Updated upstream
    <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- Index js -->
    {{-- <script src="{{ asset('assets/js/jsadmin/index.js') }}"></script> --}}


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
=======
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/admin/datatable.js') }}"></script>
>>>>>>> Stashed changes

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


<<<<<<< Updated upstream
<script>

   $(document).ready(function () {
        // Get the data from your Laravel controller
        var years = <?= $years ?>;
        var yearlyCount = <?= $yearlyCount ?>;
        var months = <?= $months ?>;
        var monthlyCount = <?= $monthlyCount ?>;
        var weeks = <?= $weeks ?>;
        var weeklyCount = <?= $weeklyCount ?>;
        var days = <?= $days ?>;
        var dailyVisitorCounts = <?= $dailyVisitorCounts ?>;
=======
    <script>
        $(document).ready(function() {
            // Get the data from your Laravel controller
            var years = <?= $years ?>;
            var yearlyCount = <?= $yearlyCount ?>;
            var months = <?= $months ?>;
            var monthlyCount = <?= $monthlyCount ?>;
            var weeks = <?= $weeks ?>;
            var weeklyCount = <?= $weeklyCount ?>;
>>>>>>> Stashed changes


            // Create a new chart for yearly data
            var ctxYear = document.getElementById('visitorsChartYear').getContext('2d');
            var visitorsChartYear = new Chart(ctxYear, {
                type: 'bar',
                data: {
                    labels: years,
                    datasets: [{
                        label: 'Visitors per Year',
                        data: yearlyCount,
                        backgroundColor: 'rgba(75, 192, 192, 0.5)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Create a new chart for monthly data
            var ctxMonth = document.getElementById('visitorsChartMonth').getContext('2d');
            var visitorsChartMonth = new Chart(ctxMonth, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Visitors per Month',
                        data: monthlyCount,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Create a new chart for weekly data
            var ctxWeek = document.getElementById('visitorsChartWeek').getContext('2d');
            var visitorsChartWeek = new Chart(ctxWeek, {
                type: 'bar',
                data: {
                    labels: weeks,
                    datasets: [{
                        label: 'Visitors per Week',
                        data: weeklyCount,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Trigger the change event to display province data on page load
            $('#chartTypeSelect').val('province').trigger('change');

            $('#chartTypeSelect').on('change', function() {
                var selectedValue = $(this).val();

                // Change the label of the dropdown button
                $('#dropdownMenuButton').html(selectedValue);

                // Show/hide visualization based on selected option
                if (selectedValue === 'province') {
                    // Code to display province visualization
                    $('#visualizationDropdown .dropdown-item').removeClass('active');
                    $(this).addClass('active');
                    var ctx = document.getElementById('provincePieChart').getContext('2d');
                    var chartData = <?= json_encode($provinceData) ?>;

                    // Create the pie chart for province data
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: chartData.labels,
                            datasets: [{
                                data: chartData.data,
                                backgroundColor: chartData.backgroundColor,
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'User Counts by Province',
                                fontSize: 16,
                            },
                            legend: {
                                display: true,
                                position: 'bottom',
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var label = data.labels[tooltipItem.index];
                                        var currentValue = dataset.data[tooltipItem.index];
                                        return label + ': ' + currentValue;
                                    }
                                }
                            }
                        }

                    });

                } else if (selectedValue === 'municipality') {
                    // Code to display municipality visualization
                    $('#visualizationDropdown .dropdown-item').removeClass('active');
                    $(this).addClass('active');
                    var ctx = document.getElementById('provincePieChart').getContext('2d');
                    var chartData = <?= json_encode($municipalityData) ?>;

                    // Create the pie chart for municipality data
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: chartData.labels,
                            datasets: [{
                                data: chartData.data,
                                backgroundColor: chartData.backgroundColor,
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'User Counts by Municipality',
                                fontSize: 16,
                            },
                            legend: {
                                display: true,
                                position: 'bottom',
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var label = data.labels[tooltipItem.index];
                                        var currentValue = dataset.data[tooltipItem.index];
                                        return label + ': ' + currentValue;
                                    }
                                }
                            }
                        }
                    });

                } else if (selectedValue === 'barangay') {
                    // Code to display municipality visualization
                    $('#visualizationDropdown .dropdown-item').removeClass('active');
                    $(this).addClass('active');
                    var ctx = document.getElementById('provincePieChart').getContext('2d');
                    var chartData = <?= json_encode($barangayData) ?>;

                    // Create the pie chart for municipality data
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: chartData.labels,
                            datasets: [{
                                data: chartData.data,
                                backgroundColor: chartData.backgroundColor,
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'User Counts by Barangay',
                                fontSize: 16,
                            },
                            legend: {
                                display: true,
                                position: 'bottom',
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var label = data.labels[tooltipItem.index];
                                        var currentValue = dataset.data[tooltipItem.index];
                                        return label + ': ' + currentValue;
                                    }
                                }
                            }
                        }
                    });
                } else if (selectedValue === 'street') {
                    // Code to display municipality visualization
                    $('#visualizationDropdown .dropdown-item').removeClass('active');
                    $(this).addClass('active');
                    var ctx = document.getElementById('provincePieChart').getContext('2d');
                    var chartData = <?= json_encode($streetData) ?>;

                    // Create the pie chart for municipality data
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: chartData.labels,
                            datasets: [{
                                data: chartData.data,
                                backgroundColor: chartData.backgroundColor,
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                text: 'User Counts by Street',
                                fontSize: 16,
                            },
                            legend: {
                                display: true,
                                position: 'bottom',
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var label = data.labels[tooltipItem.index];
                                        var currentValue = dataset.data[tooltipItem.index];
                                        return label + ': ' + currentValue;
                                    }
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>

    //
    <script>
        //     var ctx = document.getElementById('userPieChart').getContext('2d');
        //     var chartData = <?= json_encode($provinceData) ?>;

        //     var myPieChart = new Chart(ctx, {
        //         type: 'pie',
        //         data: {
        //             labels: chartData.labels,
        //             datasets: [{
        //                 data: chartData.data,
        //                 backgroundColor: chartData.backgroundColor,
        //             }]
        //         },
        //         options: {
        //             title: {
        //                 display: true,
        //                 // text: 'User Counts by Province',
        //                 fontSize: 16,
        //             },
        //             legend: {
        //                 display: true,
        //                 position: 'bottom',
        //             },
        //             tooltips: {
        //                 callbacks: {
        //                     label: function(tooltipItem, data) {
        //                         var dataset = data.datasets[tooltipItem.datasetIndex];
        //                         var label = data.labels[tooltipItem.index];
        //                         var currentValue = dataset.data[tooltipItem.index];
        //                         return label + ': ' + currentValue;
        //                     }
        //                 }
        //             }
        //         }
        //     });
        //
    </script>
    //
    <script>
        //     var ctx = document.getElementById('userMunicipalityPieChart').getContext('2d');
        //     var chartData = <?= json_encode($municipalityData) ?>;

<<<<<<< Updated upstream
<script>
    $(document).ready(function () {
        var chartData = <?= json_encode($provinceData) ?>;

        // Function to create and display the pie chart
        function displayPieChart(data, title) {
            var options = {
                chart: {
                    type: 'pie',
                    height: 350,
                    width: '100%',
                },
                labels: data.labels,
                series: data.data,
                legend: {
                    position: 'bottom',
                },
                tooltip: {
                    enabled: true,
                    y: {
                        formatter: function (val) {
                            return val + ' visitors';
                        },
                    },
                },
                title: {
                    text: title,
                    style: {
                        fontSize: '16px',
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector('#provincePieChart'), options);
            chart.render();
        }

        // Initial chart display
        displayPieChart(chartData, 'Visitors by Province');

        $('#chartTypeSelect').on('change', function () {
            var selectedValue = $(this).val();

            // Change the label of the dropdown button
            $('#dropdownMenuButton').html(selectedValue);

            // Show/hide visualization based on selected option
            if (selectedValue === 'province') {
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                displayPieChart(chartData, 'Visitors by Province');
            } else if (selectedValue === 'municipality') {
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                var municipalityData = <?= json_encode($municipalityData) ?>;
                displayPieChart(municipalityData, 'Visitors by Municipality');
            } else if (selectedValue === 'barangay') {
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                var barangayData = <?= json_encode($barangayData) ?>;
                displayPieChart(barangayData, 'Visitors by Barangay');
            } else if (selectedValue === 'street') {
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                var streetData = <?= json_encode($streetData) ?>;
                displayPieChart(streetData, 'Visitors by Street');
            }
        });
    });
</script>

<script>
    // Define polar area chart function
    function createPolarAreaChart(chartData, chartTitle) {
        var options = {
            chart: {
                type: 'polarArea',
                width: '100%',
            },
            labels: chartData.labels,
            series: chartData.data,
            dataLabels: {
                enabled: false, // Disable data labels including percentages
            },
            legend: {
                position: 'bottom',
            },
            title: {
                text: chartTitle,
                style: {
                    fontSize: '16px',
                },
            },
        };

        var chart = new ApexCharts(document.querySelector('#polarAreaChart'), options);
        chart.render();
    }

    // Define event handler for the filter selection
    $('#Filter').on('change', function () {
        var selectedValue = $(this).val();

        // Change the label of the dropdown button
        $('#dropdownMenuButton').html(selectedValue);

        // Show/hide visualization based on selected option
        if (selectedValue === 'gender') {
            $('#visualizationDropdown .dropdown-item').removeClass('active');
            $(this).addClass('active');

            var chartData = @json($genderData);
            createPolarAreaChart(chartData, 'Gender Distribution');
        } else if (selectedValue === 'age') {
            $('#visualizationDropdown .dropdown-item').removeClass('active');
            $(this).addClass('active');

            var chartData = @json($ageData);
            createPolarAreaChart(chartData, 'Age Distribution');
        }
    });

    // Trigger the change event to display the default polar area chart for "Gender" on page load
    $('#Filter').trigger('change');
</script>

<script>
    var timeSchedule = @json($timeSchedule);

    var labels = timeSchedule.map(function (item) {
        return item.visits_time;
    });

    var data = timeSchedule.map(function (item) {
        return item.total_visitors;
    });

    var options = {
        chart: {
            type: 'bar',
            height: 400, // Increase height for better readability
            width: '100%',
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false, // Set to false for vertical bars
                columnWidth: '50%', // Adjust the column width for spacing
            },
        },
        dataLabels: {
            enabled: true,
        },
        series: [
            {
                name: 'Number of Visitors',
                data: data,
            },
        ],
        xaxis: {
            categories: labels,
            labels: {
                rotate: -45, // Rotate x-axis labels for better readability
            },
        },
        yaxis: {
            title: {
                text: 'Number of Visitors',
            },
        },
        colors: ['#007BFF'], // Customize bar colors
        fill: {
            opacity: 1,
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };

    var chart = new ApexCharts(document.querySelector('#visitorChart'), options);
    chart.render();
</script>
<script>
    var monthSouvenirSales = @json($formattedData);


    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Total Sales',
            data: monthSouvenirSales,
        }],
        xaxis: {
            type: 'datetime',
            categories: monthSouvenirSales.map(dataPoint => dataPoint.x),
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };


    var chart = new ApexCharts(document.querySelector("#monthSouvenirSales"), options);
    chart.render();


</script>
<script>
    var yearlySalesData = @json($formattedDatayearly);

    // Extract the year from each data point's x value
    var yearlyLabels = yearlySalesData.map(dataPoint => dataPoint.x.split('-')[0]);

    // Use ApexCharts to create the chart
    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Yearly Sales',
            data: yearlySalesData,
        }],
        xaxis: {
            categories: yearlyLabels, // Set the x-axis labels to the extracted years
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };

    var chart = new ApexCharts(document.querySelector("#yearSouvenirSales"), options);
    chart.render();
</script>

<script>
    var weeklySalesData = @json($formattedDataweekly);

    // Use ApexCharts to create the chart
    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Weekly Sales',
            data: weeklySalesData,
        }],
        xaxis: {
            categories: weeklySalesData.map(dataPoint => dataPoint.x),
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };

    var chart = new ApexCharts(document.querySelector("#weekSouvenirSales"), options);
    chart.render();
</script>


//for rent
<script>
    var monthRentSales = @json($formattedDataRent);


    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Total Sales',
            data: monthRentSales,
        }],
        xaxis: {
            type: 'datetime',
            categories: monthRentSales.map(dataPoint => dataPoint.x),
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };


    var chart = new ApexCharts(document.querySelector("#monthRentSales"), options);
    chart.render();


</script>
<script>
    var yearlyRentSales = @json($formattedDatayearlyRent);

    // Extract the year from each data point's x value
    var yearlyLabels = yearlyRentSales.map(dataPoint => dataPoint.x.split('-')[0]);

    // Use ApexCharts to create the chart
    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Yearly Sales',
            data: yearlyRentSales,
        }],
        xaxis: {
            categories: yearlyLabels, // Set the x-axis labels to the extracted years
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };

    var chart = new ApexCharts(document.querySelector("#yearRentSales"), options);
    chart.render();
</script>

<script>
    var weeklyRentSales = @json($formattedDataweeklyRent);

    // Use ApexCharts to create the chart
    var options = {
        chart: {
            type: 'line',
            height: 350,
        },
        series: [{
            name: 'Weekly Sales',
            data: weeklyRentSales,
        }],
        xaxis: {
            categories: weeklyRentSales.map(dataPoint => dataPoint.x),
        },
        yaxis: {
            title: {
                text: 'Total Price',
            },
        },
        tooltip: {
            theme: 'dark', // Set the tooltip theme to 'dark' for white text on a dark background
        },
    };

    var chart = new ApexCharts(document.querySelector("#weekRentSales"), options);
    chart.render();
</script>


=======
        //     var myPieChart = new Chart(ctx, {
        //         type: 'pie',
        //         data: {
        //             labels: chartData.labels,
        //             datasets: [{
        //                 data: chartData.data,
        //                 backgroundColor: chartData.backgroundColor,
        //             }]
        //         },
        //         options: {
        //             title: {
        //                 display: true,
        //                 // text: 'User Counts by Province',
        //                 fontSize: 16,
        //             },
        //             legend: {
        //                 display: true,
        //                 position: 'bottom',
        //             },
        //             tooltips: {
        //                 callbacks: {
        //                     label: function(tooltipItem, data) {
        //                         var dataset = data.datasets[tooltipItem.datasetIndex];
        //                         var label = data.labels[tooltipItem.index];
        //                         var currentValue = dataset.data[tooltipItem.index];
        //                         return label + ': ' + currentValue;
        //                     }
        //                 }
        //             }
        //         }
        //     });
        //
    </script>
>>>>>>> Stashed changes

</body>

</html>
