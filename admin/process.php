<?php 

    include('../functions.php');
    session_start();

    // Edit Account
    if (isset($_POST['editAccount'])) {
        $id = $_POST['acc_id'];
        $dept = $_POST['department'];
        $stat = $_POST['status'];
        $user = $_POST['username'];
        $email = $_POST['email'];

        date_default_timezone_set('Asia/Manila');
        $currentDateTime = date('Y-m-d H:i:s');

        $sql = "SELECT * FROM users WHERE username='$user' AND status='$stat' AND department='$dept' AND email='$email'";
        $result = mysqli_query($conn, $sql);
    
        if (!$result->num_rows > 0) {
            $conn->query("UPDATE users SET username='$user', email='$email', department='$dept', status='$stat', date_updated='$currentDateTime'  WHERE user_id='$id'") or die($conn->error);
            $_SESSION['status'] = 'Successfully Updated the Account';
            $_SESSION['status_icon'] = 'success';
            header('location:users.php');
        }else{
            $_SESSION['status'] = 'No changes has been made';
            $_SESSION['status_icon'] = 'warning';
            header('location:users.php');
        }
        
    }

    // Edit Department
    if (isset($_POST['editDepartment'])) {
        $id = $_POST['dept_id'];
        $dept = $_POST['department'];

        $sql = "SELECT * FROM department WHERE dept='$dept'";
        $result = mysqli_query($conn, $sql);
    
        if (!$result->num_rows > 0) {
            $conn->query("UPDATE department SET dept='$dept' WHERE id='$id'") or die($conn->error);
            $_SESSION['status'] = 'Successfully Updated the Department';
            $_SESSION['status_icon'] = 'success';
            header('location:users.php');
        }else{
            $_SESSION['status'] = 'No changes has been made';
            $_SESSION['status_icon'] = 'warning';
            header('location:users.php');
        }
        
    }

    // Edit Settings
    if (isset($_POST['editSettings'])) {
        $about = $_POST['about'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $sql = "SELECT * FROM about WHERE about='$about' AND address='$address' AND phone='$phone' AND email='$email'";
        $result = mysqli_query($conn, $sql);
    
        if (!$result->num_rows > 0) {
            $conn->query("UPDATE about SET about='$about', address='$address', phone='$phone', email='$email' WHERE id=1") or die($conn->error);
            $_SESSION['status'] = 'Successfully Updated the General Settings';
            $_SESSION['status_icon'] = 'success';
            header('location:settings.php');
        }else{
            $_SESSION['status'] = 'No changes has been made';
            $_SESSION['status_icon'] = 'warning';
            header('location:settings.php');
        }
        
    }

    // add account
    if (isset($_POST['addAccount'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE username='$username' AND email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $conn->query("INSERT INTO admin (username, email, password) 
            VALUES('$username', '$email', '$password')") or die($conn->error);
            $_SESSION['status'] = 'Successfully Created the Account';
            $_SESSION['status_icon'] = 'success';
            header('location:settings.php');
        }else{
            $_SESSION['status'] = 'Account Already Exists';
            $_SESSION['status_icon'] = 'warning';
            header('location:settings.php');
        }
    

    }

    // edit admin
    if (isset($_POST['editAdmin'])) {
        $id = $_POST['admin_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE username='$username' AND email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
    
        if (!$result->num_rows > 0) {
            $conn->query("UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id'") or die($conn->error);
            $_SESSION['status'] = 'Successfully Updated Admin Account';
            $_SESSION['status_icon'] = 'success';
            header('location:settings.php');
        }else{
            $_SESSION['status'] = 'No changes has been made';
            $_SESSION['status_icon'] = 'warning';
            header('location:settings.php');
        }
    

    }
      // send feedback
      if (isset($_POST['sendFeedback'])) {
        $messages = $_POST['msg'];
        $emails = $_POST['email'];
        
        if (!empty($emails)){
            include 'send_feedback.php';
            $_SESSION['status'] = 'Successfully Send the Message';
            $_SESSION['status_icon'] = 'success';
            header('location:communication.php');
        }else{
            $_SESSION['status'] = 'An Error Occured!';
            $_SESSION['status_icon'] = 'danger';
            header('location:communication.php');
        }

    
    }

?>