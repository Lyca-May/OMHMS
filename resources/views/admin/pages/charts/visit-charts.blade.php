<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary scripts and stylesheets -->
    <!-- Chart.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Data Chart</title>
</head>
<body>
    <!-- Create canvas elements for charts -->
    <div class="card-body">
        <canvas id="visitorsChartYear" style="width: 100%; max-width: 600px;"></canvas>
    </div>
    <div class="card-body">
        <canvas id="visitorsChartMonth" style="width: 100%; max-width: 600px;"></canvas>
    </div>
    <div class="card-body">
        <canvas id="visitorsChartWeek" style="width: 100%; max-width: 600px;"></canvas>
    </div>

    <!-- JavaScript code for chart creation -->
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
</body>
</html>
