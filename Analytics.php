<?php

require 'functions.php';

$query1 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed FROM kra_1 WHERE id = 1";
$result1 = $conn->query($query1);

$query2 = "SELECT Crit_A_total_allowed, Crit_B_Total_allowed, Crit_C_Total_allowed FROM kra_2 WHERE KRA2_ID = 1";
$result2 = $conn->query($query2);

$query3 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed, Crit_D_total_allowed FROM kra_3 WHERE KRA3_ID = 1";
$result3 = $conn->query($query3);

$query4 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed, Crit_D_total_allowed FROM kra_4 WHERE Kra4_ID = 1";
$result4 = $conn->query($query4);

?>

<html>
<head>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript and dependencies from CDN (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <title>Analytics</title>
</head>
<body>

<nav class="navbar fixed-top" style="background-color: darkred ">
    <div class="container-fluid mx-5">
        <span class="navbar-brand mb-0 h1" style="color: white">User Analytics</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="background-color: white">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Links</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="request_form.php">Request Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ISS_File.php">Individual Summary Sheet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Analytics.php">Analytics</a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>

<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<div class="container py-5">
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                KRA Summary
            </div>
            <div class="card-body">

                <div class="row text-center">
                    <!-- Column 1 -->
                    <div class="col-3">
                        <div>

                            <?php
                            $data = array();
                            while ($row = $result1->fetch_assoc()) {
                                $data['labels'][] = 'Criterion A';
                                $data['values'][] = $row['Crit_A_total_allowed'];

                                $data['labels'][] = 'Criterion B';
                                $data['values'][] = $row['Crit_B_total_allowed'];

                                $data['labels'][] = 'Criterion C';
                                $data['values'][] = $row['Crit_C_total_allowed'];
                            }
                            ?>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="myPieChart1" width="400" height="200"></canvas>
                            <script>
                                // Access the formatted data from PHP
                                var dataForChart = <?php echo json_encode($data); ?>;

                                // Get the canvas element
                                var ctx = document.getElementById('myPieChart1').getContext('2d');

                                // Create a pie chart
                                var myPieChart1 = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: dataForChart.labels,
                                        datasets: [{
                                            data: dataForChart.values,
                                            backgroundColor: [
                                                'rgb(211,44,44)', // Red for Criterion A
                                                'rgba(54, 162, 235, 1)', // Blue for Criterion B
                                                'rgba(255, 206, 86, 1)', // Yellow for Criterion C
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 0)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        offset: 30
                                    }
                                });
                            </script>

                        </div>

                        <div>
                            <h3>KRA 1</h3>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-3">
                        <div>
                            <?php
                            $data = array();
                            while ($row = $result2->fetch_assoc()) {
                                $data['labels'][] = 'Criterion A';
                                $data['values'][] = $row['Crit_A_total_allowed'];

                                $data['labels'][] = 'Criterion B';
                                $data['values'][] = $row['Crit_B_Total_allowed'];

                                $data['labels'][] = 'Criterion C';
                                $data['values'][] = $row['Crit_C_Total_allowed'];
                            }
                            ?>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="myPieChart2" width="400" height="200"></canvas>
                            <script>
                                // Access the formatted data from PHP
                                var dataForChart = <?php echo json_encode($data); ?>;

                                // Get the canvas element
                                var ctx = document.getElementById('myPieChart2').getContext('2d');

                                // Create a pie chart
                                var myPieChart2 = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: dataForChart.labels,
                                        datasets: [{
                                            data: dataForChart.values,
                                            backgroundColor: [
                                                'rgb(211,44,44)', // Red for Criterion A
                                                'rgba(54, 162, 235, 1)', // Blue for Criterion B
                                                'rgba(255, 206, 86, 1)', // Yellow for Criterion C
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 0)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        offset: 30
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <h3>KRA 2</h3>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-3">
                        <div>
                            <?php
                            $data = array();
                            while ($row = $result3->fetch_assoc()) {
                                $data['labels'][] = 'Criterion A';
                                $data['values'][] = $row['Crit_A_total_allowed'];

                                $data['labels'][] = 'Criterion B';
                                $data['values'][] = $row['Crit_B_total_allowed'];

                                $data['labels'][] = 'Criterion C';
                                $data['values'][] = $row['Crit_C_total_allowed'];

                                $data['labels'][] = 'Criterion D';
                                $data['values'][] = $row['Crit_D_total_allowed'];
                            }
                            ?>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="myPieChart3" width="400" height="200"></canvas>
                            <script>
                                // Access the formatted data from PHP
                                var dataForChart = <?php echo json_encode($data); ?>;

                                // Get the canvas element
                                var ctx = document.getElementById('myPieChart3').getContext('2d');

                                // Create a pie chart
                                var myPieChart3 = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: dataForChart.labels,
                                        datasets: [{
                                            data: dataForChart.values,
                                            backgroundColor: [
                                                'rgb(211,44,44)', // Red for Criterion A
                                                'rgba(54, 162, 235, 1)', // Blue for Criterion B
                                                'rgba(255, 206, 86, 1)', // Yellow for Criterion C
                                                'rgb(78,159,57)' // Green for Criterion D
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 0)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        offset: 30
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <h3>KRA 3</h3>
                        </div>
                    </div>

                    <!-- Column 4 -->
                    <div class="col-3">
                        <div>
                            <?php
                            $data = array();
                            while ($row = $result4->fetch_assoc()) {
                                $data['labels'][] = 'Criterion A';
                                $data['values'][] = $row['Crit_A_total_allowed'];

                                $data['labels'][] = 'Criterion B';
                                $data['values'][] = $row['Crit_B_total_allowed'];

                                $data['labels'][] = 'Criterion C';
                                $data['values'][] = $row['Crit_C_total_allowed'];

                                $data['labels'][] = 'Criterion D';
                                $data['values'][] = $row['Crit_D_total_allowed'];
                            }
                            ?>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <canvas id="myPieChart4" width="400" height="200"></canvas>
                            <script>
                                // Access the formatted data from PHP
                                var dataForChart = <?php echo json_encode($data); ?>;

                                // Get the canvas element
                                var ctx = document.getElementById('myPieChart4').getContext('2d');

                                // Create a pie chart
                                var myPieChart4 = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: dataForChart.labels,
                                        datasets: [{
                                            data: dataForChart.values,
                                            backgroundColor: [
                                                'rgb(211,44,44)', // Red for Criterion A
                                                'rgba(54, 162, 235, 1)', // Blue for Criterion B
                                                'rgba(255, 206, 86, 1)', // Yellow for Criterion C
                                                'rgb(78,159,57)' // Green for Criterion D
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 0)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        offset: 30
                                    }
                                });
                            </script>
                        </div>
                        <div>
                            <h3>KRA 4</h3>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>



