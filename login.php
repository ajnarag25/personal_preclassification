<?php 
    include('functions.php');
    session_start();
    if(isset($_SESSION['user'])){
        header('location: dashboard.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/evsu-logo-removebg-preview.png" rel="icon">
    <title>Personal Preclassification - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/custom_style.css">
</head>

<body>
    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-light bg-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/evsu-logo-removebg-preview.png" width="70" alt=""></a>
                <h3 class="main-color">Eastern Visayas State University</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    </ul>
                    <div style="display: flex; align-items: center;">
                        <a class="about" href="index.php#about">
                            <h4>About</h4>
                        </a>
                        <h3 class="mx-3">|</h3>
                        <a href="">
                            <img src="Assets/profile.png" width="55" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="right">
            <div class="text-center mt-3 m-4">
                <b>
                    Philippine Standard Time:
                    <br>
                    <span id="time_date"> </span>
                </b>
            </div>
        </div>

        <div class="mt-3">
            <a class="login-button ms-3" href="index.php"><i class='bx bx-caret-left'></i>Return</a>
        </div>

        <center>
            <div class="container mt-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                <div class="login-card">
                    <h2 class="login-head">FACULTY PORTAL</h2>
                    <h6>Sign in</h6>
                    <div class="mt-3">
                        <form action="process.php" method="POST">
                            <input type="text" placeholder="Username" name="username" class="form-control input-login w-50" required>
                            <br>
                            <select class="form-select input-login w-50" name="department" id="" required>
                                <option value="" selected disabled>Select Department</option>
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
                            <input type="password" name="password" placeholder="Password" class="form-control input-login w-50" required>
                            <br>

                            <button type="submit" name="login" class="login-button w-25">Login</button>
                        </form>
                    </div>
                    <h6 class="mt-3"> <b>By using this service, you understood and agree to the</b> <a
                            style="text-decoration: none;" href=""><span class="privacy"> EVSU Online
                                Services
                                Terms of Use
                                and Privacy Statement </span></a>
                    </h6>
                </div>
            </div>

        </center>

    </div>





    <script src="JS/jquery.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/Date.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
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
