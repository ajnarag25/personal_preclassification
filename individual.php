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
                        <thead class="" style="background-color:#7D0201">
                            <tr class="text-center">
                                <th class="text-white" scope="col" width="70%">CRITERIA</th>
                                <th class="text-white" scope="col" width="30%">FACULTY</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                $id = $_SESSION['user']['user_id'];

                                $query = "SELECT * FROM kra_1 WHERE id = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {
                                
                                // $total1 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'];
                            ?>

                             <!-- KRA 1 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA I Instruction (100 Points) </b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Teaching Effectiveness</b> (60 points)</th>
                                <td>
                                    <?php 
                                        $d1 = $row['Crit_A_total'];
                                        if($d1 < 60){
                                            echo $d1;
                                        }else{
                                            $d1 = 60;
                                            echo $d1;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Curriculum and/or Instructional Materials Developed</b> (30 points)</th>
                                <td>
                                    <?php 
                                        $d2 = $row['Crit_B_total'];
                                        if($d2 < 30){
                                            echo $d2;
                                        }else{
                                            $d2 = 30;
                                            echo $d2;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Speial Proj, Capstone Proj, Thesis, Dissertation & Mentorship Service (10 points)</b></th>
                                <td>
                                    <?php 
                                        $d3 = $row['Crit_C_total'];
                                        if($d3 < 10){
                                            echo $d3;
                                        }else{
                                            $d3 = 10;
                                            echo $d3;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>TOTAL </b></th>
                                <td class="text-white" style="background-color:#7D0201">
                                    <b>
                                        <?php 
                                            $total1 = $d1 + $d2 + $d3; 
                                            if($total1 > 100){
                                                $total1 = 100;
                                                echo $total1;
                                            }else{
                                                echo $total1;
                                            }
                                          
                                        ?>
                                    </b>
                                </td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_2 WHERE KRA2_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                // $total2 = $row['Crit_A_total'] + $row['Crit_B_Total'] + $row['Crit_C_total'];
                            ?>
                            <!-- KRA 2 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA II - Research, Innovation and/or  Creative Work (100 Points)</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Research Outputs Published</b> (100 points)</th>
                                <td>
                                    <?php 
                                        $d4 = $row['Crit_A_total'];
                                        if($d4 < 100){
                                            echo $d4;
                                        }else{
                                            $d4 = 100;
                                            echo $d4;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Inventions</b> (100 points)</th>
                                <td>
                                    <?php 
                                        $d5 = $row['Crit_B_Total'];
                                        if($d5 < 100){
                                            echo $d5;
                                        }else{
                                            $d5 = 100;
                                            echo $d5;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Creative Works </b> (100 points)</th>
                                <td>
                                    <?php 
                                        $d6 = $row['Crit_C_total'];
                                        if($d6 < 100){
                                            echo $d6;
                                        }else{
                                            $d6 = 100;
                                            echo $d6;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>TOTAL </b></th>
                                <td class="text-white" style="background-color:#7D0201">
                                    <b>
                                        <?php 
                                            $total2 = $d4 + $d5 + $d6;
                                            if($total2 > 100){
                                                $total2 = 100;
                                                echo $total2;
                                            }else{
                                                echo $total2;
                                            }
                                        ?>
                                    </b>
                                </td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_3 WHERE KRA3_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                // $total3 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'] + $row['Crit_D_total'];
                            ?>
                            <!-- KRA 3 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA III - Extension Services (100 Points)</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Service to the Institution</b> (30 points)</th>
                                <td>
                                    <?php 
                                        $d7 = $row['Crit_A_total'];
                                        if($d7 < 30){
                                            echo $d7;
                                        }else{
                                            $d7 = 30;
                                            echo $d7;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Service of the Community</b> (50 points)</th>
                                <td>
                                    <?php 
                                        $d8 = $row['Crit_B_total'];
                                        if($d8 < 50){
                                            echo $d8;
                                        }else{
                                            $d8 = 50;
                                            echo $d8;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Quality of Extension Service </b> (20 points)</th>
                                <td>
                                    <?php 
                                        $d9 = $row['Crit_C_total'];
                                        if($d9 < 20){
                                            echo $d9;
                                        }else{
                                            $d9 = 20;
                                            echo $d9;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion D - <b>Bonus Criterion </b> (20 points)</th>
                                <td>
                                    <?php 
                                        $d10 = $row['Crit_D_total'];
                                        if($d10 < 20){
                                            echo $d10;
                                        }else{
                                            $d10 = 20;
                                            echo $d10;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>TOTAL </b></th>
                                <td class="text-white" style="background-color:#7D0201">
                                    <b>
                                        <?php
                                            $total3 = $d7 + $d8 + $d9 + $d10;
                                            if($total3 > 100){
                                                $total3 = 100;
                                                echo $total3;
                                            }else{
                                                echo $total3;
                                            }
                                        ?>
                                    </b>
                                </td>
                            </tr>

                            <?php } ?>
                            
                            <?php
                                $query = "SELECT * FROM kra_4 WHERE Kra4_ID = $id";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_array($result)) {

                                // $total4 = $row['Crit_A_total'] + $row['Crit_B_total'] + $row['Crit_C_total'] + $row['Crit_D_total'];
                            ?>
                            <!-- KRA 4 -->
                            <tr class="table-primary">
                                <th scope="row" class="text-center"><b>KRA IV - Professional Development (100 Points)</b></th>
                            </tr>
                            <tr>
                                <th scope="row">Criterion A - <b>Involvement in Professional Organization</b> (20 points)</th>
                                <td>
                                    <?php 
                                        $d11 = $row['Crit_A_total'];
                                        if($d11 < 20){
                                            echo $d11;
                                        }else{
                                            $d11 = 20;
                                            echo $d11;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion B - <b>Continuing Development</b> (60 points)</th>
                                <td>
                                    <?php 
                                        $d12 = $row['Crit_B_total'];
                                        if($d12 < 60){
                                            echo $d12;
                                        }else{
                                            $d12 = 60;
                                            echo $d12;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion C - <b>Awards and Recognition </b> (20 points)</th>
                                <td>
                                    <?php 
                                        $d13 = $row['Crit_C_total'];
                                        if($d13 < 20){
                                            echo $d13;
                                        }else{
                                            $d13 = 20;
                                            echo $d13;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Criterion D - <b>Bonus Criterion </b> (20 points)</th>
                                <td>
                                    <?php 
                                        $d14 = $row['Crit_D_total'];
                                        if($d14 < 20){
                                            echo $d14;
                                        }else{
                                            $d14 = 20;
                                            echo $d14;
                                        }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center bg-secondary text-white"> <b>TOTAL</b></th>
                                <td class="text-white" style="background-color:#7D0201">
                                    <b>
                                        <?php
                                            $total4 = $d11 + $d12 + $d13 + $d14;
                                            if($total4 > 100){
                                                $total4 = 100;
                                                echo $total4;
                                            }else{
                                                echo $total4;
                                            }
                                        ?>
                                    </b>
                                </td>
                            </tr>

                            <?php } ?>
                            
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <!-- <th rowspan="2">KRA 1</th> -->
                                <th class="w-25 text-white text-center" style="background-color:#7D0201">Faculty Rank</th>
                                <th colspan="3" class="text-center text-white" style="background-color:#7D0201">KRA 1</th>
                                <th colspan="3" class="text-center text-white" style="background-color:#7D0201">KRA 2</th>
                                <th colspan="3" class="text-center text-white" style="background-color:#7D0201">KRA 3</th>
                                <th colspan="3" class="text-center text-white" style="background-color:#7D0201">KRA 4</th>
                                <th class="w-25 text-white text-center" style="background-color:#7D0201">Total Points</th>

                            </tr>
                            <tr>
                                <th class="bg-secondary text-white"></th>
                                <th class="bg-secondary text-white">Score</th>
                                <th class="bg-secondary text-white">Weight</th>
                                <th class="bg-secondary text-white">PTS</th>

                                <th class="bg-secondary text-white">Score</th>
                                <th class="bg-secondary text-white">Weight</th>
                                <th class="bg-secondary text-white">PTS</th>

                                <th class="bg-secondary text-white">Score</th>
                                <th class="bg-secondary text-white">Weight</th>
                                <th class="bg-secondary text-white">PTS</th>

                                <th class="bg-secondary text-white">Score</th>
                                <th class="bg-secondary text-white">Weight</th>
                                <th class="bg-secondary text-white">PTS</th>

                                <th class="bg-secondary text-white"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Instructor (I-III)</th>

                                <td><?php echo $total1; ?></td>
                                <td>60%</td>
                                <td>
                                    <?php 
                                        $inst1 = round($total1 * 0.60, 2);
                                        echo $inst1; 
                                    ?>
                                </td>

                                <td><?php echo $total2; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $inst2 = round($total2 * 0.10, 2);
                                        echo $inst2; 
                                    ?>
                                </td>

                                <td><?php echo $total3; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $inst3 = round($total3 * 0.20, 2);
                                        echo $inst3; 
                                    ?>
                                </td>

                                <td><?php echo $total4; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $inst4 = round($total4 * 0.10, 2);
                                        echo $inst4; 
                                    ?>
                                </td>

                                <td class="text-center">
                                    <?php 
                                        $inst_total = $inst1 + $inst2 + $inst3 + $inst4;
                                        echo round($inst_total);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Asst. Professor (I-IV)</th>
                                <td><?php echo $total1; ?></td>
                                <td>50%</td>
                                <td>
                                    <?php 
                                        $asst1 = round($total1 * 0.50, 2);
                                        echo $asst1; 
                                    ?>
                                </td>

                                <td><?php echo $total2; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $asst2 = round($total2 * 0.20, 2);
                                        echo $asst2; 
                                    ?>
                                </td>

                                <td><?php echo $total3; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $asst3 = round($total3 * 0.20, 2);
                                        echo $asst3; 
                                    ?>
                                </td>

                                <td><?php echo $total4; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $asst4 = round($total4 * 0.10, 2);
                                        echo $asst4; 
                                    ?>
                                </td>

                                <td class="text-center">
                                    <?php 
                                        $asst_total = $asst1 + $asst2 + $asst3 + $asst4;
                                        echo round($asst_total);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Assoc. Professor (I-V)</th>
                                <td><?php echo $total1; ?></td>
                                <td>40%</td>
                                <td>
                                    <?php 
                                        $assoc1 = round($total1 * 0.40, 2);
                                        echo $assoc1; 
                                    ?>
                                </td>

                                <td><?php echo $total2; ?></td>
                                <td>30%</td>
                                <td>
                                    <?php 
                                        $assoc2 = round($total2 * 0.30, 2);
                                        echo $assoc2; 
                                    ?>
                                </td>

                                <td><?php echo $total3; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $assoc3 = round($total3 * 0.20, 2);
                                        echo $assoc3; 
                                    ?>
                                </td>

                                <td><?php echo $total4; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $assoc4 = round($total4 * 0.10, 2);
                                        echo $assoc4; 
                                    ?>
                                </td>

                                <td class="text-center">
                                    <?php 
                                        $assoc_total = $assoc1 + $assoc2 + $assoc3 + $assoc4;
                                        echo round($assoc_total);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Professor (I-VI)</th>
                                <td><?php echo $total1; ?></td>
                                <td>30%</td>
                                <td>
                                    <?php 
                                        $prof1 = round($total1 * 0.30, 2);
                                        echo $prof1; 
                                    ?>
                                </td>

                                <td><?php echo $total2; ?></td>
                                <td>40%</td>
                                <td>
                                    <?php 
                                        $prof2 = round($total2 * 0.40, 2);
                                        echo $prof2; 
                                    ?>
                                </td>

                                <td><?php echo $total3; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $prof3 = round($total3 * 0.20, 2);
                                        echo $prof3; 
                                    ?>
                                </td>

                                <td><?php echo $total4; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $prof4 = round($total4 * 0.10, 2);
                                        echo $prof4; 
                                    ?>
                                </td>

                                <td class="text-center">
                                    <?php 
                                        $prof_total = $prof1 + $prof2 + $prof3 + $prof4;
                                        echo round($prof_total);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th>College/Univ. Prof.</th>
                                <td><?php echo $total1; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $univ1 = round($total1 * 0.20, 2);
                                        echo $univ1; 
                                    ?>
                                </td>

                                <td><?php echo $total2; ?></td>
                                <td>50%</td>
                                <td>
                                    <?php 
                                        $univ2 = round($total2 * 0.50, 2);
                                        echo $univ2; 
                                    ?>
                                </td>

                                <td><?php echo $total3; ?></td>
                                <td>20%</td>
                                <td>
                                    <?php 
                                        $univ3 = round($total3 * 0.20, 2);
                                        echo $univ3; 
                                    ?>
                                </td>

                                <td><?php echo $total4; ?></td>
                                <td>10%</td>
                                <td>
                                    <?php 
                                        $univ4 = round($total4 * 0.10, 2);
                                        echo $univ4; 
                                    ?>
                                </td>

                                <td class="text-center">
                                    <?php 
                                        $univ_total = $univ1 + $univ2 + $univ3 + $univ4;
                                        echo round($univ_total);
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <th class="text-white text-center" style="background-color:#7D0201">Score Bracket</th>
                            <th class="text-white text-center" style="background-color:#7D0201">No. of Sub-rank Increment</th>
                            <th class="text-white text-center" style="background-color:#7D0201">Current Faculty Rank</th>
                            <th class="text-white text-center" style="background-color:#7D0201">Action</th>
                        </thead>
                        <form action="process.php" method="POST">
                            <tbody>
                                <tr>
                                    <td class="text-center">41-50</td>
                                    <td class="text-center">1 sub-rank</td>	
                                    <td>Qualified for Auto. 1-Sub Rank (for PhD)?</td>
                                    <td>
                                        <select id="1subrank" class="form-select" name="1subrank" id="" required>
                                            <option value="" selected disabled>--Select--</option>
                                            <option value="YES">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">51-60</td>
                                    <td class="text-center">2 sub-rank</td>
                                    <td>Base Rank</td>
                                    <td>
                                        <input class="form-control" type="text" name="2subrank" id="incrementRank" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">61-70</td>
                                    <td class="text-center">3 sub-rank</td>	
                                    <td>No. of Sub-Rank Increment based on Base Rank</td>
                                    <td>
                                        <input class="form-control" value="" name="3subrank" type="text" id="displayVal" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">71-80</td>
                                    <td class="text-center">4 sub-rank</td>
                                    <td>Initial Reclassified Rank (first computation)</td>
                                    <td>
                                        <input class="form-control" name="4subrank" type="text" id="incrementRank2" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">81-90</td>
                                    <td class="text-center">5 sub-rank</td>
                                    <td>No. of Sub-Rank Increment based on Reclassified Rank</td>
                                    <?php 
                                        $check_scoreboard = $inst_total + $asst_total + $assoc_total + $prof_total + $univ_total;
                                        $scoreboard =  $check_scoreboard / 5;
                                        
                                        if($scoreboard <= 16.66666666666667){
                                            $scores = 1;
                                        }elseif($scoreboard <= 33.33333333333334){
                                            $scores = 2;
                                        }elseif($scoreboard <= 50.00000000000001){
                                            $scores = 3;
                                        }elseif($scoreboard <= 66.66666666666668){
                                            $scores = 4;
                                        }elseif($scoreboard <= 83.33333333333335){
                                            $scores = 5;
                                        }else{
                                            $scores = 6;
                                        }

                                    ?>
                                    <td>
                                        <input class="form-control" id="checkScores" name="5subrank" type="text" name="" value="<?php echo $scores ?>" readonly>
                                    </td>	
                                </tr>
                                <tr>
                                    <td class="text-center">91-100</td>
                                    <td class="text-center">6 sub-rank</td>	
                                    <td>Reclassified Rank (recomputation)</td>
                                    <td>
                                        <input class="form-control" name="6subrank" type="text" id="incrementRank3" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>	
                                    <td>Qualified for Auto. 1-Sub Rank (for Awards)?</td>
                                    <td>
                                        <select id="2subrank" class="form-select" name="7subrank" required>
                                            <option value="" selected disabled>--Select--</option>
                                            <option value="YES">YES</option>
                                            <option value="NO">NO</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>	
                                    <td>Final Recommended Faculty Rank</td>
                                    <td>
                                        <input class="form-control" name="final" type="text" id="incrementRank4" readonly>
                                        <br>
                                        <input type="hidden" value="<?php echo $id ?>" name="id_user">
                                        <button class="btn btn-danger w-100 text-white" name="faculty_ok">Ok</button>
                                    </td>
                                </tr>
                        </tbody>
                        </form>
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
    <script src="js/individual.js"></script>
</body>

</html>