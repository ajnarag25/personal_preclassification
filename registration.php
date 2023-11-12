<!-- ! PHP BACK-END DOWN BELOW -->
<?php
require_once 'functions.php';
    if (isset($_POST['Register']))      
    {
        $username = $_POST['u_name'];
        $password = $_POST['p_word'];

        $conn->query("INSERT INTO users (username, password) VALUES('$username', '$password')") or die($conn->error);
        echo '<script>alert("Login Info Saved")</script>';
        header('location:login.php');
    }

    else if (isset($_POST['Cancel']))
    {   
        header('location:index.php');
    }
?>




<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Registration</title>
</head>

<style>
    
#bg_all{
  background-image: url(./Assets/BG_all.png);
  background-size: cover;
  background-repeat: no-repeat;
}
</style>

<?php
require_once 'header.php'
?>


<body id="bg_all">
    <div class="Center-Main_div">
        <div class="div-container">
            <div id="div-title">
                <h2>FACULTY PORTAL</h2> 
            </div>
            <br>
            <div id="div-2title">
                <h2>Sign Up</h2>
            </div>
            <br>
            <div id="login-input">
                <form method="Post">
                    <input name="u_name" type="text" placeholder="Username">
                    <br>
                    <input name="p_word" type="password" placeholder="Password">
                    <br>
                    <button name="Register">Register</button>
                    <button name="Cancel">Cancel</button>
                </form>
            </div>

            <div class="pg-footer">
                <p><span>By using this service, you understood and agree to the</span> <a href="">EVSU Online Services Terms of Use and Privacy Statement</a></p>
            </div>
        </div>
    </div>
    
</body>
</html>

