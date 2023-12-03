<?php 
    include('functions.php');
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    }

    $id = $_SESSION['user']['user_id'];
    $query1 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed FROM kra_1 WHERE id = $id";
    $result1 = $conn->query($query1);

    $query2 = "SELECT Crit_A_total_allowed, Crit_B_Total_allowed, Crit_C_Total_allowed FROM kra_2 WHERE KRA2_ID = $id";
    $result2 = $conn->query($query2);

    $query3 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed, Crit_D_total_allowed FROM kra_3 WHERE KRA3_ID = $id";
    $result3 = $conn->query($query3);

    $query4 = "SELECT Crit_A_total_allowed, Crit_B_total_allowed, Crit_C_total_allowed, Crit_D_total_allowed FROM kra_4 WHERE Kra4_ID = $id";
    $result4 = $conn->query($query4);
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link href="Assets/evsu-logo-removebg-preview.png" rel="icon">
    <title>Personnal Preclarification - User Analytics</title>
    <link href="admin/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin3">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <div class="navbar-brand text-center">
                        <a href="dashboard.php" class="logo">
                            <b class="logo-icon">
                                <img src="admin/assets/images/users/FINAL_SEAL.png" width="35" alt="homepage"
                                    class="light-logo" />
                            </b>
                            <span class="logo-text">
                                <span class="text-white">User Analytics</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box">
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="admin/assets/images/users/FINAL_SEAL.png" alt="user" class="rounded-circle"
                                    width="40">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../logout.php"><i class="ti-shift-right me-1 ms-1"></i>
                                    Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="analytics.php"
                                aria-expanded="false">
                                <i class="mdi mdi-poll"></i>
                                <span class="hide-menu">Analytics</span>
                            </a>
                        </li>
            
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php"
                                aria-expanded="false">
                                <i class="mdi mdi-arrow-left"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>

                    </ul>
                </nav>

            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Analytics</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-danger" href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Analytics</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container-fluid">
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

            <footer class="footer text-center">
                PERSONAL PRECLASSIFICATION
            </footer>
        </div>
    </div>

    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/dist/js/waves.js"></script>
    <script src="admin/dist/js/sidebarmenu.js"></script>
    <script src="admin/dist/js/custom.min.js"></script>
    <script src="admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
</body>

</html>