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
                                <a class="dropdown-item" href="logout.php"><i class="ti-shift-right me-1 ms-1"></i>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="individual.php" aria-expanded="false">
                                <i class="mdi mdi-book"></i>
                                <span class="hide-menu">Individual Summary Sheet</span>
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
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <ul>
                                    <li><b> <span class="text-danger">Criterion A</span>  - Teaching Effectiveness </b></li>
                                    <br>
                                    <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">Criterion B</span> - Curriculum and Instructional Materials Development </b></li>
                                    <br>
                                    <li><b> <span class="text-warning">Criterion C</span> - Thesis, Dissertation and Mentorship Services </b></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><b> <span class="text-danger">Criterion A</span>  - Research Outputs </b></li>
                                    <br>
                                    <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">Criterion B</span> - Inventions </b></li>
                                    <br>
                                    <li><b> <span class="text-warning">Criterion C</span> - Creative Works </b></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><b> <span class="text-danger">Criterion A</span>  - Service to the Institution </b></li>
                                    <br>
                                    <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">Criterion B</span> - Service to the Community </b></li>
                                    <br>
                                    <li><b> <span class="text-warning">Criterion C</span> - Quality of Extension Services </b></li>
                                    <br>
                                    <li><b> <span class="text-success">Criterion D</span> - Bonus Criterion </b></li>
                                </ul>
                            </div>
                            <div class="col-3">
                                <ul>
                                    <li><b> <span class="text-danger">Criterion A</span>  - Involvement in Professional Organization </b></li>
                                    <br>
                                    <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">Criterion B</span> - Continuing Development </b></li>
                                    <br>
                                    <li><b> <span class="text-warning">Criterion C</span> - Awards and Recognition </b></li>
                                    <br>
                                    <li><b> <span class="text-success">Criterion D</span> - Bonus Indicators for Newly Appointed Faculty </b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
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

                            <div class="text-center">
                                <h4 class="mt-3">KRA 1 - Instruction</h4>
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
                            <div class="text-center">
                                <h4 class="mt-3">KRA 2 - Research, Innovation & Creative Work</h4>
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
                            <div class="text-center">
                                <h4 class="mt-3">KRA 3 - Extension</h4>
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
                            <div class="text-center">
                                <h4 class="mt-3">KRA 4 - Professional Development</h4>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            
            <center>
            <div class="card" style="width:80%">
                <div class="card-header">
                    Overall KRA Summary
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <ul>
                                <li><b> <span class="text-danger">KRA 1 Criterion A</span>  - Teaching Effectiveness </b></li>
                                <br>
                                <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">KRA 1 Criterion B</span> - Curriculum and Instructional Materials Development </b></li>
                                <br>
                                <li><b> <span class="text-warning">KRA 1 Criterion C</span> - Thesis, Dissertation and Mentorship Services </b></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul>
                                <li><b> <span class="text-primary">KRA 2 Criterion A</span>  - Research Outputs </b></li>
                                <br>
                                <li><b> <span class="text-danger">KRA 2 Criterion B</span> - Inventions </b></li>
                                <br>
                                <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">KRA 2 Criterion C</span> - Creative Works </b></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul>
                                <li><b> <span class="text-warning">KRA 3 Criterion A</span>  - Service to the Institution </b></li>
                                <br>
                                <li><b> <span class="text-primary" >KRA 3 Criterion B</span> - Service to the Community </b></li>
                                <br>
                                <li><b> <span class="text-danger">KRA 3 Criterion C</span> - Quality of Extension Services </b></li>
                                <br>
                                <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">KRA 3 Criterion D</span> - Bonus Criterion </b></li>
                            </ul>
                        </div>
                        <div class="col-3">
                            <ul>
                                <li><b> <span class="text-warning">KRA 4 Criterion A</span>  - Involvement in Professional Organization </b></li>
                                <br>
                                <li><b> <span class="text-primary">KRA 4 Criterion B</span> - Continuing Development </b></li>
                                <br>
                                <li><b> <span class="text-danger">KRA 4 Criterion C</span> - Awards and Recognition </b></li>
                                <br>
                                <li><b> <span class="" style="color:rgba(54, 162, 235, 1)">KRA 4 Criterion D</span> - Bonus Indicators for Newly Appointed Faculty </b></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row text-center">
                        <?php
                            $queryKRA = "SELECT 
                                            'KRA 1' AS kra_type,
                                            Crit_A_total_allowed AS A,
                                            Crit_B_total_allowed AS B,
                                            Crit_C_total_allowed AS C,
                                            NULL AS D
                                        FROM kra_1
                                        WHERE id = $id
                                        
                                        UNION ALL
                                        
                                        SELECT 
                                            'KRA 2' AS kra_type,
                                            Crit_A_total_allowed AS A,
                                            Crit_B_Total_allowed AS B,
                                            Crit_C_Total_allowed AS C,
                                            NULL AS D
                                        FROM kra_2
                                        WHERE KRA2_ID = $id
                                        
                                        UNION ALL
                                        
                                        SELECT 
                                            'KRA 3' AS kra_type,
                                            Crit_A_total_allowed AS A,
                                            Crit_B_total_allowed AS B,
                                            Crit_C_total_allowed AS C,
                                            Crit_D_total_allowed AS D
                                        FROM kra_3
                                        WHERE KRA3_ID = $id
                                        
                                        UNION ALL
                                        
                                        SELECT 
                                            'KRA 4' AS kra_type,
                                            Crit_A_total_allowed AS A,
                                            Crit_B_total_allowed AS B,
                                            Crit_C_total_allowed AS C,
                                            Crit_D_total_allowed AS D
                                        FROM kra_4
                                        WHERE Kra4_ID = $id";

                            $resultKRA = $conn->query($queryKRA);
                            $data = array();

                            while ($kraRow = $resultKRA->fetch_assoc()) {
                                $kraType = $kraRow['kra_type'];

                                $data['labels'][] = $kraType . ' - Criterion A';
                                $data['values'][] = $kraRow['A'];

                                $data['labels'][] = $kraType . ' - Criterion B';
                                $data['values'][] = $kraRow['B'];

                                $data['labels'][] = $kraType . ' - Criterion C';
                                $data['values'][] = $kraRow['C'];

                   
                                if ($kraType == 'KRA 3' || $kraType == 'KRA 4') {
                                    $data['labels'][] = $kraType . ' - Criterion D';
                                    $data['values'][] = $kraRow['D'];
                                }
                            }
                        ?>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <div>
                            <canvas id="myCombinedPieChart<?php echo $id; ?>" width="400" height="200"></canvas>
                            <script>
                                var dataForCombinedChart<?php echo $id; ?> = <?php echo json_encode($data); ?>;
                                var ctxCombined<?php echo $id; ?> = document.getElementById('myCombinedPieChart<?php echo $id; ?>').getContext('2d');

                                var myCombinedPieChart<?php echo $id; ?> = new Chart(ctxCombined<?php echo $id; ?>, {
                                    type: 'pie',
                                    data: {
                                        labels: dataForCombinedChart<?php echo $id; ?>.labels,
                                        datasets: [{
                                            data: dataForCombinedChart<?php echo $id; ?>.values,
                                            backgroundColor: [
                                                'rgb(211,44,44)', // Red (KRA 1)
                                                'rgba(54, 162, 235, 1)', // Blue (KRA 2)
                                                'rgba(255, 206, 86, 1)', // Yellow (KRA 3)
                                                'rgba(148, 0, 271, 1)' // Violet (KRA 4)
                                            ],
                                            borderColor: [
                                                'rgba(0, 0, 0, 0)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        offset: 30,
                                        legend: {
                                            display: true,
                                            position: 'bottom',
                                            labels: {
                                                fontColor: 'black'
                                            }
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            </center>
        


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