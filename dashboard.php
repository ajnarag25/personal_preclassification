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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="dashboard.php"
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
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-danger" href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body" style="background-color: rgba(255, 255, 0, 0.534);">
                                <div class="text-center">
                                    <h3 class="card-title"><b>INSTURCTION</b></h3>
                                 
                                    Form 1A - Teaching Effectiveness <br>
                                    Form 1B - Curriculum & Instructional Materials Development <br>
                                    Form 1C- Thesis Dissertation and Mentorship Services <br>
                                </div>
                            </div>
                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#kra1" class="btn btn-warning w-100">KRA 1</a>
                            <!-- Modal KRA 1-->
                            <div class="modal fade" id="kra1" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">KRA 1</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="FORM1_A.php" class="btn btn-danger text-white w-50">Form 1-A</a> 
                                            <a href="FORM1_B&C.php" class="btn btn-danger text-white w-50 mt-3">Form 1-B&C</a>
                                            <a href="KRA_1.php" class="btn btn-danger text-white w-50 mt-3">KRA 1 Summary of Points</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body" style="background-color: rgba(116, 212, 72, 0.534);">
                                <div class="text-center">
                                    <h3 class="card-title"><b>RESEARCH, INNOVATION & CREATIVE WORK</b></h3>
                                    Form 2A - Research Output <br>
                                    Form 2B - Inventions <br>
                                    Form 2C - Creative Works <br>
                                </div>
                            </div>
                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#kra2" class="btn btn-success text-white w-100">KRA 2</a>
                            <!-- Modal KRA 2-->
                            <div class="modal fade" id="kra2" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">KRA 3</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="FORM2_A.php" class="btn btn-danger text-white w-50">Form 2-A</a> 
                                            <a href="FORM2_B.php" class="btn btn-danger text-white w-50 mt-3">Form 2-B</a>
                                            <a href="FORM2_C.php" class="btn btn-danger text-white w-50 mt-3">Form 2-C</a>
                                            <a href="KRA_2.php" class="btn btn-danger text-white w-50 mt-3">KRA 2 Summary of Points</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body" style="background-color: #72FFDE;">
                                <div class="text-center">
                                    <h3 class="card-title"><b>EXTENSION</b></h3>
                                    Form 3A - Service to the Institution <br>
                                    Form 3B - Service to the Community <br>
                                    Form 3C- Quality of Extension Services <br>
                                </div>
                            </div>
                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#kra3" class="btn btn-primary w-100">KRA 3</a>
                            <!-- Modal KRA 3-->
                            <div class="modal fade" id="kra3" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">KRA 3</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="FORM3_A&B.php" class="btn btn-danger text-white w-50">Form 3-A&B</a> 
                                            <a href="FORM3_C&D.php" class="btn btn-danger text-white w-50 mt-3">Form 3-C&D</a>
                                            <a href="KRA_3.php" class="btn btn-danger text-white w-50 mt-3">KRA 3 Summary of Points</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100">
                            <div class="card-body" style="background-color: #cbcecd;">
                                <div class="text-center">
                                    <h3 class="card-title"><b>PROFESSIONAL DEVELOPMENT</b> </h3>
                                    Form 4A - Involvement in Professional Organization <br>
                                    Form 4B - Continuing Development <br>
                                    Form 4C- Awards & Recognition <br>
                                    Form 4D - Bonus Indicators for Newly Appointed Faculty <br>
                                </div>
                            </div>
                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#kra4" class="btn btn-secondary w-100">KRA 4</a>
                            <!-- Modal KRA 4-->
                            <div class="modal fade" id="kra4" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">KRA 4</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <a href="FORM4_A&B.php" class="btn btn-danger text-white w-50">Form 4-A&B</a> 
                                            <a href="FORM4_C&D.php" class="btn btn-danger text-white w-50 mt-3">Form 4-C&D</a>
                                            <a href="KRA_4.php" class="btn btn-danger text-white w-50 mt-3">KRA 4 Summary of Points</a>
                                        </div>

                                    </div>
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