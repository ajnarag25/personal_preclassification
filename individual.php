<?php 
    include('functions.php');
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link href="Assets/evsu-logo-removebg-preview.png" rel="icon">
    <title>Personnal Preclarification - User Dashboard</title>
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
                                <span class="text-white">User Dashboard</span>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="analytics.php"
                                aria-expanded="false">
                                <i class="mdi mdi-poll"></i>
                                <span class="hide-menu">Analytics</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="individual.php" aria-expanded="false">
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
                        <h4 class="page-title">Individual Summary Sheet</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-danger" href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Individual Summary Sheet</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container-fluid">
                <div class="container">
                    <table class="table table-bordered">
                        <thead class="table-secondary">
                            <tr class="text-center">
                                <th scope="col" width="70%"><b>CRITERIA</b></th>
                                <th scope="col" width="30%"><b>FACULTY</b></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $id = $_SESSION['user']['user_id'];

                                $query = "SELECT * FROM kra_1 WHERE id = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                
                                $total1 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'];
                            ?>

                             <!-- KRA 1 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA I Instruction</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Teaching Effectiveness</b> (60 points)</th>
                                <td><?php echo $row['Crit_A_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Curriculum and/or Instructional Materials Developed</b> (30 points)</th>
                                <td><?php echo $row['Crit_B_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Speial Proj, Capstone Proj, Thesis, Dissertation & Mentorship Service </b></th>
                                <td><?php echo $row['Crit_C_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>GRAND TOTAL POINTS FOR KRA 1 </b></th>
                                <td class="bg-danger text-white"><b><?php echo $total1; ?></b></td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_2 WHERE KRA2_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                $total2 = $row['Crit_A_total'] + $row['Crit_B_Total'] + $row['Crit_C_total'];
                            ?>
                            <!-- KRA 2 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA II - Research, Innovation and/or  Creative Work</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Research Outputs Published</b> (100 points)</th>
                                <td><?php echo $row['Crit_A_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Inventions</b> (100 points)</th>
                                <td><?php echo $row['Crit_B_Total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Creative Works </b> (100 points)</th>
                                <td><?php echo $row['Crit_C_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>GRAND TOTAL POINTS FOR KRA II </b></th>
                                <td class="bg-danger text-white"><b><?php echo $total2 ?></b></td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_3 WHERE KRA3_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                $total3 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'] + $row['Crit_D_total'];
                            ?>
                            <!-- KRA 3 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA III - Extension Services</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Service to the Institution</b> (30 points)</th>
                                <td><?php echo $row['Crit_A_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Service of the Community</b> (50 points)</th>
                                <td><?php echo $row['Crit_B_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Quality of Extension Service </b> (20 points)</th>
                                <td><?php echo $row['Crit_C_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion D - <b>Bonus Criterion </b> (20 points)</th>
                                <td><?php echo $row['Crit_D_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>GRAND TOTAL POINTS FOR KRA III </b></th>
                                <td class="bg-danger text-white"><b><?php echo $total3 ?></b></td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_4 WHERE Kra4_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                $total4 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'] + $row['Crit_D_total'];
                            ?>
                            <!-- KRA 4 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA IV - Professional Development</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Involvement in Professional Organization</b> (20 points)</th>
                                <td><?php echo $row['Crit_A_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Continuing Development</b> (60 points)</th>
                                <td><?php echo $row['Crit_B_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Awards and Recognition </b> (20 points)</th>
                                <td><?php echo $row['Crit_C_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion D - <b>Bonus Criterion </b> (20 points)</th>
                                <td><?php echo $row['Crit_D_total'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>GRAND TOTAL POINTS FOR KRA IV </b></th>
                                <td class="bg-danger text-white"><b><?php echo $total4 ?></b></td>
                            </tr>

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

    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/dist/js/waves.js"></script>
    <script src="admin/dist/js/sidebarmenu.js"></script>
    <script src="admin/dist/js/custom.min.js"></script>
    <script src="admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
</body>

</html>