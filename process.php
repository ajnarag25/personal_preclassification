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

                $conn->query("INSERT INTO kra_1 (
                    Crit_A_student_eval, Crit_A_supervisor_eval, Crit_A_total, Crit_A_total_allowed,
                    Crit_B_sole_autho, Crit_B_co_autho, Crit_B_academe, Crit_B_total, Crit_B_total_allowed,
                    Crit_C_Adviser, Crit_C_Panel, Crit_C_Mentor, Crit_C_total, Crit_C_total_allowed,
                    Total_kra_1, Total_kra_1_allowed
                ) VALUES (
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0
                )") or die($conn->error);

                $conn->query("INSERT INTO kra_2 (
                    Crit_A_SA, Crit_A_CA, Crit_A_LR, Crit_A_Contrib, Crit_A_Local, Crit_A_Local_Allowed,
                    Crit_A_International_Allowed, Crit_A_International, Crit_A_total, Crit_A_total_allowed,
                    Crit_B_PI_SI, Crit_B_PI_CI, Crit_B_UMID_SI, Crit_B_UMID_CI, Crit_B_CPP_Local,
                    Crit_B_CPP_Local_allowed, Crit_B_CPP_International_allowed, Crit_B_CPP_International,
                    Crit_B_NPI_SI, Crit_B_NPI_CI, Crit_B_NPI_USP, Crit_B_NPVA_SD, Crit_B_NPVA_CD, Crit_B_Total,
                    Crit_B_Total_allowed, Crit_C_PA, Crit_C_Exhibition, Crit_C_Designs, `Crit_C_Lit-pub`,
                    Crit_C_total, Crit_C_Total_allowed, KRA_2_total, KRA_2_total_allowed
                ) VALUES (
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0
                )") or die($conn->error);


                $conn->query("INSERT INTO kra_3 (
                    Crit_A_LNAP, Crit_A_CTIG, Crit_A_total, Crit_A_total_allowed,
                    `Crit_B_1.1`, `Crit_B_1.2`, `Crit_B_1.3`, `Crit_B_1.4.1`, `Crit_B_1.4.1_allowed`,
                    `Crit_B_1.4.2`, `Crit_B_1.4.3`, `Crit_B_1.4.4`, `Crit_B_1.4.4_allowed`, `Crit_B_1.5`,
                    `Crit_B_2.1`, `Crit_B_2.1_allowed`, Crit_B_total, Crit_B_total_allowed,
                    Crit_C_1, Crit_C_total, Crit_C_total_allowed, Crit_D_1, Crit_D_total,
                    Crit_D_total_allowed, KRA3_total, KRA3_total_allowed
                ) VALUES (
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0
                )") or die($conn->error);


                $conn->query("INSERT INTO kra_4 (
                    Crit_A_1st, Crit_A_total, Crit_A_total_allowed, Crit_B_1st, Crit_B_1st_allowed,
                    Crit_B_2nd, Crit_B_2nd_allowed, Crit_B_3rd, Crit_B_3rd_allowed, Crit_B_total,
                    Crit_B_total_allowed, Crit_C_1st, Crit_C_1st_allowed, Crit_C_total, Crit_C_total_allowed,
                    Crit_D_1st, Crit_D_2nd, Crit_D_total, Crit_D_total_allowed, KRA4_total, KRA4_total_allowed
                ) VALUES (
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                    0
                )") or die($conn->error);

            
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

    if (isset($_POST['feedback'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        if (!empty($name) && !empty($email)) {
            $conn->query("INSERT INTO communication (name, email, message) 
            VALUES('$name', '$email', '$msg')") or die($conn->error);
            $_SESSION['status'] = 'Successfully Sent your Feedback';
            $_SESSION['status_icon'] = 'success';
            header('location:index.php');
        }else{
            $_SESSION['status'] = 'An error occured sending your Feedback';
            $_SESSION['status_icon'] = 'error';
            header('location:index.php');
        }
   
    }

?>

