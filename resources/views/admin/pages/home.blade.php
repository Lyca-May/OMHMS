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
                            <div class="card-body">
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
                            <div class="card-body">
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
                            <div class="card-body">
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
                            <div class="card-body">
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

            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">Visitors Report</div>

                        <div class="card-body">
                            <canvas id="visitorsChartYear" style="width: 100%; max-width: 600px;"></canvas>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">Visitors Monthly</div>

                        <div class="card-body">
                            <canvas id="visitorsChartMonth" style="width: 100%; max-width: 600px;"></canvas>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">Visitors Weekly</div>

                        <div class="card-body">
                            <canvas id="visitorsChartWeek" style="width: 100%; max-width: 600px;"></canvas>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Visitors</h5>
                            <div class="input-group mb-3">
                                {{-- <label class="input-group-text" for="chartTypeSelect">Chart Type</label> --}}
                                <select id="chartTypeSelect" class="form-select form-select-sm">
                                    <option value="province">By Province</option>
                                    <option value="municipality">By Municipality</option>
                                    <option value="barangay">By Barangay</option>
                                    <option value="street">By Street</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <canvas id="provincePieChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Gender</h5>
                            <div class="input-group mb-3">
                                <select id="Filter" class="form-select form-select-sm">
                                    <option value="gender">Gender</option>
                                    <option value="age">Age</option>
                                </select>
                            </div>
                            <div class="card-body">
                                <canvas id="genderBarChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Age</h5>
                            <div class="input-group mb-3">
                            <div class="card-body">
                                <canvas id="ageBarChart" width="400" height="400"></canvas>
                            </div>
                        </div>
                    </div>
                </div> --}}








            </div>
            <!--End Row-->







            <!--End Row-->

            <!--End Dashboard Content-->

            <!--start overlay-->
            <div class="overlay toggle-menu"></div>

        </div>
        <!--End content-wrapper-->

        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
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

   $(document).ready(function () {
        // Get the data from your Laravel controller
        var years = <?= $years ?>;
        var yearlyCount = <?= $yearlyCount ?>;
        var months = <?= $months ?>;
        var monthlyCount = <?= $monthlyCount ?>;
        var weeks = <?= $weeks ?>;
        var weeklyCount = <?= $weeklyCount ?>;


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
        // Function to create and display the province pie chart
        function displayProvinceChart() {
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
                        text: 'Visitors by Province',
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

        // Trigger the displayProvinceChart function to show province chart on page load
        displayProvinceChart();

        $('#chartTypeSelect').on('change', function() {
            var selectedValue = $(this).val();

            // Change the label of the dropdown button
            $('#dropdownMenuButton').html(selectedValue);

            // Show/hide visualization based on selected option
            if (selectedValue === 'province') {
                // Display the province chart
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                displayProvinceChart();
            } else if (selectedValue === 'municipality') {
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
                        text: 'Visitors by Municipality',
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
                        text: 'Visitors by Barangay',
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
                        text: 'Visitors by Street',
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



<script>
    $(document).ready(function() {
        // Define the event handler
        $('#Filter').on('change', function() {
            var selectedValue = $(this).val();

            // Change the label of the dropdown button
            $('#dropdownMenuButton').html(selectedValue);

            // Show/hide visualization based on selected option
            if (selectedValue === 'gender') {
                // Code to display gender visualization
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                var ctx = document.getElementById('genderBarChart').getContext('2d');
                var chartData = @json($genderData);

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: chartData.labels,
                        datasets: [{
                            label: 'Gender Distribution',
                            data: chartData.data,
                            backgroundColor: ['pink', 'blue'], // Customize colors as needed
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Number of Visitors',
                                },
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Gender',
                                },
                            },
                        },
                    }
                });
            } else if (selectedValue === 'age') {
                // Code to display age visualization
                $('#visualizationDropdown .dropdown-item').removeClass('active');
                $(this).addClass('active');
                var ctx = document.getElementById('genderBarChart').getContext('2d');
                var chartData = @json($ageData);

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: chartData.labels,
                        datasets: [{
                            label: 'Age Distribution',
                            data: chartData.data,
                            backgroundColor: ['blue', 'green', 'orange', 'red'], // Customize colors as needed
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Number of Visitors',
                                },
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Age Group',
                                },
                            },
                        },
                    }
                });
            }
        });

        // Trigger the change event to display the default graph for "Gender" on page load
        $('#Filter').trigger('change');
    });
</script>


// <script>

//     var ctx = document.getElementById('genderBarChart').getContext('2d');
//     var chartData = @json($genderData);

//     new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: chartData.labels,
//             datasets: [{
//                 label: 'Gender Distribution',
//                 data: chartData.data,
//                 backgroundColor: ['pink', 'blue'], // Customize colors as needed
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true,
//                     title: {
//                         display: true,
//                         text: 'Number of Visitors',
//                     },
//                 },
//                 x: {
//                     title: {
//                         display: true,
//                         text: 'Gender',
//                     },
//                 },
//             },
//         }
//     });

//     var ctx = document.getElementById('ageBarChart').getContext('2d');
//     var chartData = @json($ageData);

//     new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: chartData.labels,
//             datasets: [{
//                 label: 'Age Distribution',
//                 data: chartData.data,
//                 backgroundColor: ['blue', 'green', 'orange', 'red'], // Customize colors as needed
//             }]
//         },
//         options: {
//             scales: {
//                 y: {
//                     beginAtZero: true,
//                     title: {
//                         display: true,
//                         text: 'Number of Visitors',
//                     },
//                 },
//                 x: {
//                     title: {
//                         display: true,
//                         text: 'Age Group',
//                     },
//                 },
//             },
//         }
//     });
// </script>

</body>

</html>
