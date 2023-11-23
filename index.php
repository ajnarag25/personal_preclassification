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
    <title>Personal Preclassification - Main Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter:wght@700&display=swap" rel="stylesheet">
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
                        <a class="about" href="#about">
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
        <div clas="index-main">
            <div class="right">
                <div class="text-center mt-3 m-4">
                    <b>
                        Philippine Standard Time:
                        <br>
                        <span id="time_date"> </span>
                    </b>

                </div>
            </div>
            <div class="index-title">
                <div class="m-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                    <div class="marg">
                        <h2 class="impact">PERSONAL</h2>
                        <h2 class="impact">PRECLASSIFICATION</h2>
                        <br>
                        <h2 class="anton text-warning">Web Portal</h2>
                    </div>
                    <br>
                    <div class="mt-5">
                        <div class="d-flex text-center">
                            <a class="signup-custom" href="registration.php">SIGN UP</a>
                            <a class="login-custom ms-5" href="login.php">LOG IN</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="main mt-5" id="about">
        <div class="custom-cover">
            <div class="container">
                <div class="text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                    <br>
                    <h1 class="text-red"><b>About Us</b></h1>
                    <hr>
                    <h4 class="about-1">Creating Culture of Continuous Improvement- Welcome to the Personal
                        Pre-assessment Web Portal!</h4>
                    <h4 class="about-2 mt-5">Our user-friendly portal simplifies the faculty pre-assessment process with
                        transparent workflows and expert guidance. Explore valuable insights on our website and benefit
                        from secure data management and progress tracking. Join us for a streamlined, transparent, and
                        efficient pre-assessment experience!</h4>
                    <h1 class="mt-5 text-red"><b>Meet Our Team</b></h1>
                    <hr>
                </div>
                <div class="row align-items-center" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
                    <div class="col">
                        <div class="text-center">
                            <h4 class="about-2 mt-5"><b>This student-led team is dedicated to simplifying your faculty
                                    pre-assessment process for a seamless experience.</b></h4>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-custom mt-4">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active text-center">
                                        <img src="Assets/lyka.PNG" class="w-75" alt="...">
                                    </div>
                                    <div class="carousel-item text-center">
                                        <img src="Assets/nicole.png" class="w-75" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="feedback">
        <div class="container p-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 class="text-red"><b>Feedback</b></h1>
                    <form action="">
                        <input type="text" class="form-control mt-5 input-custom" placeholder="Name" required>
                        <input type="text" class="form-control mt-3 input-custom" placeholder="Email" required>
                        <textarea class="form-control mt-3 input-custom" placeholder="Type your recommendation here..."
                            name="" id="" cols="30" rows="10" required></textarea>
                        <button type="submit" class="send-custom mt-5">Send</button>
                    </form>

                </div>
                <hr class="mt-5">
                <div class="col-md-6 mt-3 text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-once="true">
                    <h1 class="text-red"><b>User Manual</b></h1>
                    <div class="card-custom2 mt-5">
                        <button type="submit" class="download-custom">DOWNLOAD HERE</button>
                    </div>
                    <h1 class="text-red mt-5"><b>Contact Us</b></h1>
                </div>
                <div class="row align-items-center" data-aos="zoom-out" data-aos-duration="1000" data-aos-once="true">
                    <div class="col">
                        <h4 class="about-1 mt-5"><b>Address:</b></h4>
                        <h4 class="">6XRW+3W9, Salazar St, Downtown, Tacloban City, Leyte</h4>
                        <h4 class="about-1 mt-5"><b>Phone:</b></h4>
                        <h4 class="">(053) 321 1084</h4>
                        <h4 class="about-1 mt-5"><b>Email:</b></h4>
                        <h4 class="">lyka.cabuello@evsu.edu.ph <br> nicole.yadao@evsu.edu.ph</h4>
                    </div>
                    <div class="col">
                        <div class="card-custom mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d500900.96169301495!2d124.66777495625004!3d11.240155400000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3307d9b941a4988d%3A0xecd6df00cc4b9bd7!2sEastern%20Visayas%20State%20University!5e0!3m2!1sen!2sph!4v1700676651156!5m2!1sen!2sph"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <script src="JS/jquery.js"></script>
    <script src="JS/bootstrap.js"></script>
    <script src="JS/Date.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 3000,
            once: true,
        });
    </script>
</body>

</html>
