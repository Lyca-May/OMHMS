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

            <div class="row">
                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-header text-dark">Visitors Yearly</div>

                        <div class="card-body">
                            <canvas id="visitorsChartYear" style="width: 100%; max-width: 600px;"></canvas>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-lg-4 col-xl-4">
                    <div class="card bg-white">
                        <div class="card-header text-dark">Visitors Monthly</div>

                        <div class="card-body">
                            <canvas id="visitorsChartMonth" style="width: 100%; max-width: 600px;"></canvas>
                        </div>

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
                            </div>
                            <div class="card-body">
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
                            </div>
                        </div>
                    </div>
                </div>


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
        var days = <?= $days ?>;
        var dailyVisitorCounts = <?= $dailyVisitorCounts ?>;


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



</body>

</html>
