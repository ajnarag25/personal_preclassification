<!-- ! PHP BACK-END DOWN BELOW -->
<?php
 session_start();
 include ('functions.php');
 $conn = DatabaseConnection();
 if(isset($_POST['Login']))
 {
     if (empty($_POST['Username']) || empty($_POST['Password']))
        {
        echo '<script>alert("Please fill up all information")</script>';
        }
     else
     {  
         $query = "SELECT * FROM users WHERE username = :username AND password = :password";
         $stmt = $conn -> prepare ($query);
         $stmt -> execute(
            array
            (
            'username'  => $_POST['Username'],
            'password'  => $_POST['Password']
            ) );

         $count = $stmt->rowcount();
         if ($count > 0)
         {
            $any = $stmt -> fetch(PDO::FETCH_ASSOC);
            $_SESSION["user_id"] = $any["user_id"];
            header("location: dashboard.php");
         }
         else
         {
            echo '<script>alert("Invalid Username or Password")</script>';
         }
     }
 }
 elseif (isset($_POST['Cancel']))
 {
    header("location: index.php");
 }
            
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Log in</title>
</head>

<style>
#bg_all{
background-image: url(./assets/BG_all.png);
background-size: cover;
background-repeat: no-repeat;
}

#index-btns{
height: 100%;
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
                <h2>Sign In</h2>
            </div>
            <br>
            <div id="login-input">
                <form method="post">
                    <input name="Username" type="text" placeholder="Username">
                    <br>
                    <input name="Password" type="password" placeholder="Password">
                    <br>
                    <button name="Login">Log in</button>
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



