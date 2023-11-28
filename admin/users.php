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
    <title>Personnal Preclarification - User Management</title>
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
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="users.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">User Management</span>
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
                        <h4 class="page-title">User Management</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-danger" href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="users-tab" data-bs-toggle="tab" data-bs-target="#users"
                            type="button" role="tab" aria-controls="users" aria-selected="true">Users</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles"
                            type="button" role="tab" aria-controls="roles" aria-selected="false">User Roles</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="users" role="tabpanel" aria-labelledby="users-tab">
                        <div class="card">
                            <div class="card-body m-3">
                                <table class="table table-hover" id="users-table">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Date & Time Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $query = "SELECT * FROM users";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <tr>
                                            <th><?php echo $row['username'] ?></th>
                                            <td>
                                                <?php
                                                if($row['status'] == 'Active'){
                                                    ?>
                                                    <label class="text-success">Active</label>
                                                    <?php
                                                }else{
                                                    ?>
                                                     <label class="text-danger">Deactivated</label>
                                                    <?php
                                                }
                                                
                                                ?>
                                            </td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['department'] ?></td>
                                            <td><?php echo $row['date_created'] ?></td>
                                            <td><button class="btn btn-secondary text-white"  data-bs-toggle="modal" data-bs-target="#editAccount<?php echo $row['user_id'] ?>">Edit</button>
                                        </tr>

                                        <!-- Modal Edit Account-->
                                        <div class="modal fade" id="editAccount<?php echo $row['user_id'] ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="">Edit Account</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="process.php" method="POST">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="acc_id" value="<?php echo $row['user_id'] ?>">
                                                            <label for="">Username</label>
                                                            <input class="form-control" type="text" name="username" value="<?php echo $row['username'] ?>" required>
                                                            <br>
                                                            <label for="">Department</label>
                                                            <select class="form-select input-login" name="department" id="" required>
                                                                <option value="" selected disabled><?php echo $row['department'] ?></option>
                                                                <option value="College of Architecture and Allied Discipline">College of Architecture
                                                                    and Allied Discipline</option>
                                                                <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                                                <option value="College of Business and Entrepreneurship">College of Business and
                                                                    Entrepreneurship</option>
                                                                <option value="College of Education">College of Education</option>
                                                                <option value="College of Engineering">College of Engineering</option>
                                                                <option value="College of Technology">College of Technology</option>
                                                            </select>
                                                            <br>
                                                            <label for="">Edit Status</label>
                                                            <select class="form-select input-login" name="status" id="" required>
                                                                <option value="Active">Active</option>
                                                                <option value="Disabled">Disable</option>
                                                            </select>
                                                            <br>
                                                            <label for="">Email</label>
                                                            <input class="form-control" name="email" value="<?php echo $row['email'] ?>" type="text" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="editAccount" class="btn btn-danger text-white">Edit Account</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="roles" role="tabpanel" aria-labelledby="roles-tab">
                        <div class="card">
                            <div class="card-body m-3">
                                <table class="table table-hover" id="roles-table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Roles</th>
                                            <th scope="col">No. of Users</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $query = "SELECT d.id,d.dept, COUNT(u.department) as user_count FROM department as d LEFT JOIN users as u ON u.department = d.dept GROUP BY d.dept";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row['dept'] ?></td>
                                                <td><?php echo $row['user_count'] ?></td>
                                                <td><button class="btn btn-secondary text-white" data-bs-toggle="modal" data-bs-target="#editDept<?php echo $row['id'] ?>">Edit</button></td>
                                            </tr>

                                        <!-- Modal Edit Department-->
                                        <div class="modal fade" id="editDept<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="">Edit Department</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="process.php" method="POST">
                                                        <div class="modal-body">
                                                            <input type="hidden" name="dept_id" value="<?php echo $row['id'] ?>">
                                                            <label for="">Department</label>
                                                            <input class="form-control" type="text" name="department" value="<?php echo $row['dept'] ?>" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="editDepartment" class="btn btn-danger text-white">Edit Department</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
    </script>
    <!-- Validation Messages -->
    <?php 
        if (isset($_SESSION['status']) && $_SESSION['status'] !='')
        {
    ?>
    <script>
        $(document).ready(function(){
            Swal.fire({
                icon: '<?php echo $_SESSION['status_icon'] ?>',
                title: '<?php echo $_SESSION['status'] ?>',
                confirmButtonColor: 'rgb(0, 0, 0)',
                confirmButtonText: 'Okay'
            });
            <?php  unset($_SESSION['status']); ?>
        })
    </script>
    
    <?php
    }else{
        unset($_SESSION['status']);
    }
    ?>
</body>

</html>