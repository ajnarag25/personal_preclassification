<?php
    include('functions.php');
    session_start();

    // Registration
    if (isset($_POST['register'])) {
        $username = $_POST['user'];
        $department = $_POST['department'];
        $password1 = $_POST['pass1'];
        $password2 = $_POST['pass2'];

        $sql = "SELECT * FROM users WHERE username='$username' AND department='$department'";
        $result = mysqli_query($conn, $sql);

        if ($password1 != $password2){
            $_SESSION['status'] = 'Password does not match!';
            $_SESSION['status_icon'] = 'error';
            header('location:registration.php');
        }elseif(strlen($password1) <= 8){
            $_SESSION['status'] = 'Password Must Contain At Least 8 Characters!';
            $_SESSION['status_icon'] = 'error';
            header('location:registration.php');
        }else{
            if (!$result->num_rows > 0) {
                $conn->query("INSERT INTO users (username, password, department) 
                VALUES('$username', '".password_hash($password1, PASSWORD_DEFAULT)."', '$department')") or die($conn->error);
                $_SESSION['status'] = 'Successfully Created the Account';
                $_SESSION['status_icon'] = 'success';
                header('location:login.php');
            }else{
                $_SESSION['status'] = 'Account Already Exists';
                $_SESSION['status_icon'] = 'warning';
                header('location:registration.php');
            }
        }

    }

    // Login

    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $dept = $_POST['department'];
        $login ="SELECT * FROM users WHERE username='$user' and department='$dept'";
        $prompt = mysqli_query($conn, $login);
        $getData = mysqli_fetch_array($prompt);

        if ($user === 'admin' && $pass === 'admin123' && $type === 'system_admin' ){
            $_SESSION['admin'] = $user;
            unset($_SESSION['status']);
            header('location:admin/index.php');
        }else{
            if ($getData != null){
                if (password_verify($pass, $getData['password'])){
                    $_SESSION['user'] = $getData;
                    unset($_SESSION['status']);
                    header('location:dashboard.php');
                }else{
                    $_SESSION['status'] = 'Invalid Password';
                    $_SESSION['status_icon'] = 'error';
                    header('location:login.php');
                }
            }else{
                $_SESSION['status'] = 'Invalid Credentials';
                $_SESSION['status_icon'] = 'error';
                header('location:login.php');
            }
        }
    }

?>