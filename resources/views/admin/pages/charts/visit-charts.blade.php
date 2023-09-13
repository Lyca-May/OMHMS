<div class="col-12 col-lg-4 col-xl-4">
    <div class="card">
        <select id="chartTypeSelect">
            <option value="province">By Province</option>
            <option value="municipality">By Municipality</option>
            <option value="barangay">By Barangay</option>
            <option value="street">By Street</option>
        </select>
        <div class="card-header">Users per Province</div>

        <div class="card-body">
            <canvas id="provincePieChart" width="400" height="400"></canvas>
        </div>

    </div>
</div>


<script>
    $(document).ready(function() {
        $('#chartTypeSelect').on('change', function() {
            var selectedValue = $(this).val();

                    // Change the label of the dropdown button
                    $('#dropdownMenuButton').html(selectedValue);

                    // Show/hide visualization based on selected option
                    if (selectedValue === 'province') {
                      // Code to display monthly visualization
                      $('#visualizationDropdown .dropdown-item').removeClass('active');
                        $(this).addClass('active');
                        var ctx = document.getElementById('provincePieChart').getContext('2d');
                        var chartData = <?= json_encode($provinceData) ?>;

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
                                    // text: 'User Counts by Province',
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

                        // Code to display monthly visualization
                        $('#visualizationDropdown .dropdown-item').removeClass('active');
                        $(this).addClass('active');
                        var ctx = document.getElementById('provincePieChart').getContext('2d');
                        var chartData = <?= json_encode($municipalityData) ?>;

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
                                    // text: 'User Counts by Province',
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
                        // Code to display weekly visualization

                        $('#visualizationDropdown .dropdown-item').removeClass('active');
                        $(this).addClass('active');


                    } else if (selectedValue === 'street') {
                        // Code to display daily visualization
                        $('#visualizationDropdown .dropdown-item').removeClass('active');
                        $(this).addClass('active');


                    }

                });
            });

    </script>
