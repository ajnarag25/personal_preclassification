<?php 
    include('../functions.php');
    session_start();
    if (!isset($_SESSION['admin'])) {
        header("Location: ../index.php");
    }

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link href="../assets/evsu-logo-removebg-preview.png" rel="icon">
    <title>Personnal Preclarification - Analytics</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/datatable.css">
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
                        <a href="index.php" class="logo">
                            <b class="logo-icon">
                                <img src="assets/images/users/FINAL_SEAL.png" width="35" alt="homepage"
                                    class="light-logo" />
                            </b>
                            <span class="logo-text">
                                <span class="text-white">ADMINISTRATOR</span>
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
                                <img src="assets/images/users/FINAL_SEAL.png" alt="user" class="rounded-circle"
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="users.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">User Management</span>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="communication.php"
                                aria-expanded="false">
                                <i class="mdi mdi-message"></i>
                                <span class="hide-menu">Communication & Support</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="settings.php"
                                aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Settings</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../logout.php"
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

            <div class="container-fluid">
                <div class="card p-5">
                <table class="table table-hover" id="users-table">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $query = "SELECT * FROM users";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row['user_id'];
                        ?>
                            <tr>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['department'] ?></td>
                                <td>
                                    <button class="btn btn-secondary text-white"  data-bs-toggle="modal" data-bs-target="#analytics<?php echo $id ?>">View</button>
                                </td>
                            </tr>

                            <!-- View Analytics -->
                            <div class="modal fade" id="analytics<?php echo $id ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="">Analytics of User: <?php echo $row['username'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                KRA Summary
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="text-center">
                                                            <b>KRA 1</b>
                                                        </div>
                                                        <br>
                                                        <ul>
                                                            <li><b> <span class="text-danger">Criterion A</span>  - Teaching Effectiveness </b></li>
                                                            <br>
                                                            <li><b> <span class="text-primary">Criterion B</span> - Curriculum and Instructional Materials Development </b></li>
                                                            <br>
                                                            <li><b> <span class="text-warning">Criterion C</span> - Thesis, Dissertation and Mentorship Services </b></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="text-center">
                                                            <b>KRA 2</b>
                                                        </div>
                                                        <br>
                                                        <ul>
                                                            <li><b> <span class="text-danger">Criterion A</span>  - Research Outputs </b></li>
                                                            <br>
                                                            <li><b> <span class="text-primary">Criterion B</span> - Inventions </b></li>
                                                            <br>
                                                            <li><b> <span class="text-warning">Criterion C</span> - Creative Works </b></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="text-center">
                                                            <b>KRA 3</b>
                                                        </div>
                                                        <br>
                                                        <ul>
                                                            <li><b> <span class="text-danger">Criterion A</span>  - Service to the Institution </b></li>
                                                            <br>
                                                            <li><b> <span class="text-primary">Criterion B</span> - Service to the Community </b></li>
                                                            <br>
                                                            <li><b> <span class="text-warning">Criterion C</span> - Quality of Extension Services </b></li>
                                                            <br>
                                                            <li><b> <span class="text-success">Criterion D</span> - Bonus Criterion </b></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="text-center">
                                                            <b>KRA 4</b>
                                                        </div>
                                                        <br>
                                                        <ul>
                                                            <li><b> <span class="text-danger">Criterion A</span>  - Involvement in Professional Organization </b></li>
                                                            <br>
                                                            <li><b> <span class="text-primary">Criterion B</span> - Continuing Development </b></li>
                                                            <br>
                                                            <li><b> <span class="text-warning">Criterion C</span> - Awards and Recognition </b></li>
                                                            <br>
                                                            <li><b> <span class="text-success">Criterion D</span> - Bonus Indicators for Newly Appointed Faculty </b></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row text-center">
                                                    <?php
                                                        $queryKRA = "SELECT 
                                                                        'kra_1' AS kra_type,
                                                                        Crit_A_total_allowed AS A,
                                                                        Crit_B_total_allowed AS B,
                                                                        Crit_C_total_allowed AS C,
                                                                        NULL AS D
                                                                    FROM kra_1
                                                                    WHERE id = $id
                                                                    
                                                                    UNION ALL
                                                                    
                                                                    SELECT 
                                                                        'kra_2' AS kra_type,
                                                                        Crit_A_total_allowed AS A,
                                                                        Crit_B_Total_allowed AS B,
                                                                        Crit_C_Total_allowed AS C,
                                                                        NULL AS D
                                                                    FROM kra_2
                                                                    WHERE KRA2_ID = $id
                                                                    
                                                                    UNION ALL
                                                                    
                                                                    SELECT 
                                                                        'kra_3' AS kra_type,
                                                                        Crit_A_total_allowed AS A,
                                                                        Crit_B_total_allowed AS B,
                                                                        Crit_C_total_allowed AS C,
                                                                        Crit_D_total_allowed AS D
                                                                    FROM kra_3
                                                                    WHERE KRA3_ID = $id
                                                                    
                                                                    UNION ALL
                                                                    
                                                                    SELECT 
                                                                        'kra_4' AS kra_type,
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

                                                            if ($kraType === 'kra_3' || $kraType === 'kra_4') {
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
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </tbody>
                </table>
                </div>
            </div>

            <footer class="footer text-center">
                PERSONAL PRECLASSIFICATION
            </footer>
        </div>
    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="dist/js/datatable.js"></script>
    <script>
        $(document).ready(function () {
            $('#users-table').DataTable();
            $('#roles-table').DataTable();
        });
    </script>
</body>

</html>