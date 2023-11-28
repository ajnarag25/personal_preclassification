<?php
    include('functions.php');
    session_start();

    // Registration
    if (isset($_POST['register'])) {
        $username = $_POST['user'];
        $department = $_POST['department'];
        $password1 = $_POST['pass1'];
        $password2 = $_POST['pass2'];
        $email = $_POST['email'];

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
                $conn->query("INSERT INTO users (username, password, email, department, status) 
                VALUES('$username', '".password_hash($password1, PASSWORD_DEFAULT)."', '$email', '$department', 'Active')") or die($conn->error);
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

        $loginAdmin ="SELECT * FROM admin WHERE username='$user' and password='$pass'";
        $promptAdmin = mysqli_query($conn, $loginAdmin);
        $getDataAdmin = mysqli_fetch_array($promptAdmin);

        if ($getDataAdmin && $dept == 'Administrator'){
            $_SESSION['admin'] = $user;
            unset($_SESSION['status']);
            header('location:admin/index.php');
        }else{
            if ($getData != null && $getData['status'] == 'Active'){
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
                $_SESSION['status'] = 'Invalid Credentials / Deactivated Account';
                $_SESSION['status_icon'] = 'error';
                header('location:login.php');
            }
        }
    }

?>