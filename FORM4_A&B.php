<?php
require 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}


$id = $_SESSION['user']['user_id'];
$query1_a = "SELECT * FROM form4_a WHERE user_id = $id";
$result1_a = $conn->query($query1_a);
while ($row = mysqli_fetch_array($result1_a)) {
    $ca1 = $row['ca1'];	
    $ca2 = $row['ca2'];	
    $ca3 = $row['ca3'];	
    $ca4 = $row['ca4'];	
    $cat1 = $row['cat1'];	
    $cat2 = $row['cat2'];	
    $cat3 = $row['cat3'];	
    $cat4 = $row['cat4'];	
    $caa1 = $row['caa1'];	
    $caa2 = $row['caa2'];	
    $caa3 = $row['caa3'];	
    $caa4 = $row['caa4'];	
    $car1 = $row['car1'];	
    $car2 = $row['car2'];	
    $car3 = $row['car3'];	
    $car4 = $row['car4'];	
    $cad1 = $row['cad1'];	
    $cad2 = $row['cad2'];	
    $cad3 = $row['cad3'];	
    $cad4 = $row['cad4'];	
}

$query2_b = "SELECT * FROM form4_b WHERE user_id = $id";
$result2_b = $conn->query($query2_b);
while ($row2 = mysqli_fetch_array($result2_b)) {
    $cb1 = $row2['cb1'];	
    $cb2 = $row2['cb2'];	
    $cb3 = $row2['cb3'];	
    $cb4 = $row2['cb4'];	
    $cbd1 = $row2['cbd1'];	
    $cbd2 = $row2['cbd2'];	
    $cbd3 = $row2['cbd3'];	
    $cbd4 = $row2['cbd4'];	
    $cbdn1 = $row2['cbdn1'];	
    $cbdn2 = $row2['cbdn2'];	
    $cbdn3 = $row2['cbdn3'];	
    $cbdn4 = $row2['cbdn4'];	
    $cbh1 = $row2['cbh1'];	
    $cbh2 = $row2['cbh2'];	
    $cbh3 = $row2['cbh3'];	
    $cbh4 = $row2['cbh4'];	
    $cbdd1 = $row2['cbdd1'];	
    $cbdd2 = $row2['cbdd2'];	
    $cbdd3 = $row2['cbdd3'];	
    $cbdd4 = $row2['cbdd4'];	
    $cbc1 = $row2['cbc1'];	
    $cbc2 = $row2['cbc2'];	
    $cbc3 = $row2['cbc3'];	
    $cbs1 = $row2['cbs1'];	
    $cbs2 = $row2['cbs2'];	
    $cbs3 = $row2['cbs3'];	
    $cbo1 = $row2['cbo1'];	
    $cbo2 = $row2['cbo2'];	
    $cbo3 = $row2['cbo3'];	
    $cbda1 = $row2['cbda1'];	
    $cbda2 = $row2['cbda2'];	
    $cbda3 = $row2['cbda3'];	
    $cbt1 = $row2['cbt1'];	
    $cbt2 = $row2['cbt2'];	
    $cbt3 = $row2['cbt3'];	
    $cbi1 = $row2['cbi1'];	
    $cbi2 = $row2['cbi2'];	
    $cbi3 = $row2['cbi3'];	
    $cbtc1 = $row2['cbtc1'];	
    $cbtc2 = $row2['cbtc2'];	
    $cbtc3 = $row2['cbtc3'];	
    $cbco1 = $row2['cbco1'];	
    $cbco2 = $row2['cbco2'];	
    $cbco3 = $row2['cbco3'];	
    $cbdp1 = $row2['cbdp1'];	
    $cbdp2 = $row2['cbdp2'];	
    $cbdp3 = $row2['cbdp3'];	
}


if (isset($_POST['Submit_btn'])) {
    $id = $_SESSION['user']['user_id'];
    $scoreFCIM = isset($_POST['FCIM_total']) ? (float)$_POST['FCIM_total'] : 0;
    $scoreFDD = isset($_POST['FDD_total']) ? (float)$_POST['FDD_total'] : 0;
    $scoreAD = isset($_POST['AD_total']) ? (float)$_POST['AD_total'] : 0;
    
    $ca1 =  $_POST['ca1'];
    $ca2 =  $_POST['ca2'];
    $ca3 =  $_POST['ca3'];
    $ca4 =  $_POST['ca4'];
    $cat1 =  $_POST['cat1'];
    $cat2 =  $_POST['cat2'];
    $cat3 =  $_POST['cat3'];
    $cat4 =  $_POST['cat4'];
    $caa1 =  $_POST['caa1'];
    $caa2 =  $_POST['caa2'];
    $caa3 =  $_POST['caa3'];
    $caa4 =  $_POST['caa4'];
    $car1 =  $_POST['car1'];
    $car2 =  $_POST['car2'];
    $car3 =  $_POST['car3'];
    $car4 =  $_POST['car4'];
    $cad1 =  $_POST['cad1'];
    $cad2 =  $_POST['cad2'];
    $cad3 =  $_POST['cad3'];
    $cad4 =  $_POST['cad4'];

    $cb1 = $_POST['cb1'];
    $cb2 = $_POST['cb2'];
    $cb3 = $_POST['cb3'];
    $cb4 = $_POST['cb4'];
    $cbd1 = $_POST['cbd1'];
    $cbd2 = $_POST['cbd2'];
    $cbd3 = $_POST['cbd3'];
    $cbd4 = $_POST['cbd4'];
    $cbdn1 = $_POST['cbdn1'];
    $cbdn2 = $_POST['cbdn2'];
    $cbdn3 = $_POST['cbdn3'];
    $cbdn4 = $_POST['cbdn4'];
    $cbh1 = $_POST['cbh1'];
    $cbh2 = $_POST['cbh2'];
    $cbh3 = $_POST['cbh3'];
    $cbh4 = $_POST['cbh4'];
    $cbdd1 = $_POST['cbdd1'];
    $cbdd2 = $_POST['cbdd2'];
    $cbdd3 = $_POST['cbdd3'];
    $cbdd4 = $_POST['cbdd4'];
    $cbc1 = $_POST['cbc1'];
    $cbc2 = $_POST['cbc2'];
    $cbc3 = $_POST['cbc3'];
    $cbs1 = $_POST['cbs1'];
    $cbs2 = $_POST['cbs2'];
    $cbs3 = $_POST['cbs3'];
    $cbo1 = $_POST['cbo1'];
    $cbo2 = $_POST['cbo2'];
    $cbo3 = $_POST['cbo3'];
    $cbda1 = $_POST['cbda1'];
    $cbda2 = $_POST['cbda2'];
    $cbda3 = $_POST['cbda3'];
    $cbt1 = $_POST['cbt1'];
    $cbt2 = $_POST['cbt2'];
    $cbt3 = $_POST['cbt3'];
    $cbi1 = $_POST['cbi1'];
    $cbi2 = $_POST['cbi2'];
    $cbi3 = $_POST['cbi3'];
    $cbtc1 = $_POST['cbtc1'];
    $cbtc2 = $_POST['cbtc2'];
    $cbtc3 = $_POST['cbtc3'];
    $cbco1 = $_POST['cbco1'];
    $cbco2 = $_POST['cbco2'];
    $cbco3 = $_POST['cbco3'];
    $cbdp1 = $_POST['cbdp1'];
    $cbdp2 = $_POST['cbdp2'];
    $cbdp3 = $_POST['cbdp3'];

    if ($scoreFDD && $scoreAD) {
        $scoreBFirst = $scoreFDD + $scoreAD;
    } else {
        $scoreBFirst = 0; 
    }
    
    $scoreFEP = isset($_POST['FEP_total']) ? (float)$_POST['FEP_total'] : 0;
    $scoreFEPP = isset($_POST['FEPP_total']) ? (float)$_POST['FEPP_total'] : 0;
    
    $scoreBTotal = $scoreBFirst + $scoreFEP + $scoreFEPP;
    if (
        empty($scoreFCIM) &&
        empty($scoreFDD) &&
        empty($scoreAD) &&
        empty($scoreFEP) &&
        empty($scoreFEPP)
    ) {
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Please do not leave it blank',
                    text: 'Something went wrong!',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                })

            })

        </script>
        <?php
    } else {
        $conn->query(
            "UPDATE kra_4 SET
                 Crit_A_1st = '$scoreFCIM',
                 Crit_A_total = '$scoreFCIM',
                 Crit_A_total_allowed = IF(Crit_A_total > 20, 20, Crit_A_total),
                 Crit_B_1st = '$scoreBFirst',
                 Crit_B_1st_allowed = IF(Crit_B_1st > 40, 40, Crit_B_1st),
                 Crit_B_2nd = '$scoreFEP',
                 Crit_B_2nd_allowed = IF(Crit_B_2nd > 10, 10, Crit_B_2nd),
                 Crit_B_3rd = '$scoreFEPP',
                 Crit_B_3rd_allowed = IF(Crit_B_3rd > 10, 10, Crit_B_3rd),
                 Crit_B_total = '$scoreBTotal',
                 Crit_B_total_allowed = IF(Crit_B_1st_allowed + Crit_B_2nd_allowed + Crit_B_3rd_allowed > 60, 60, Crit_B_1st_allowed + Crit_B_2nd_allowed + Crit_B_3rd_allowed),
                 KRA4_total = Crit_A_total + Crit_B_total + Crit_C_total + Crit_D_total,
                 KRA4_total_allowed = IF(Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed + Crit_D_total_allowed > 100, 100, Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed + Crit_D_total_allowed)
             WHERE Kra4_ID = $id") or die($conn->error);

        $conn->query("INSERT INTO form4_a (
            user_id, ca1, ca2, ca3, ca4, cat1, cat2, cat3, cat4, caa1, caa2, caa3, caa4, car1, car2, car3, car4, cad1, cad2, cad3, cad4
        ) VALUES (
            '$id', '$ca1', '$ca2', '$ca3', '$ca4', '$cat1', '$cat2', '$cat3', '$cat4', '$caa1', '$caa2', '$caa3', '$caa4', '$car1', '$car2', '$car3', '$car4', '$cad1', '$cad2', '$cad3', '$cad4'
        ) ON DUPLICATE KEY UPDATE
            ca1 = VALUES(ca1),
            ca2 = VALUES(ca2),
            ca3 = VALUES(ca3),
            ca4 = VALUES(ca4),
            cat1 = VALUES(cat1),
            cat2 = VALUES(cat2),
            cat3 = VALUES(cat3),
            cat4 = VALUES(cat4),
            caa1 = VALUES(caa1),
            caa2 = VALUES(caa2),
            caa3 = VALUES(caa3),
            caa4 = VALUES(caa4),
            car1 = VALUES(car1),
            car2 = VALUES(car2),
            car3 = VALUES(car3),
            car4 = VALUES(car4),
            cad1 = VALUES(cad1),
            cad2 = VALUES(cad2),
            cad3 = VALUES(cad3),
            cad4 = VALUES(cad4);"
        ) or die($conn->error);

        $conn->query("INSERT INTO form4_b (
            user_id, cb1, cb2, cb3, cb4, cbd1, cbd2, cbd3, cbd4, cbdn1, cbdn2, cbdn3, cbdn4, cbh1, cbh2, cbh3, cbh4, cbdd1, cbdd2, cbdd3, cbdd4, cbc1, cbc2, cbc3, cbs1, cbs2, cbs3, cbo1, cbo2, cbo3, cbda1, cbda2, cbda3, cbt1, cbt2, cbt3, cbi1, cbi2, cbi3, cbtc1, cbtc2, cbtc3, cbco1, cbco2, cbco3, cbdp1, cbdp2, cbdp3
        ) VALUES (
            '$id', '$cb1', '$cb2', '$cb3', '$cb4', '$cbd1', '$cbd2', '$cbd3', '$cbd4', '$cbdn1', '$cbdn2', '$cbdn3', '$cbdn4', '$cbh1', '$cbh2', '$cbh3', '$cbh4', '$cbdd1', '$cbdd2', '$cbdd3', '$cbdd4', '$cbc1', '$cbc2', '$cbc3', '$cbs1', '$cbs2', '$cbs3', '$cbo1', '$cbo2', '$cbo3', '$cbda1', '$cbda2', '$cbda3', '$cbt1', '$cbt2', '$cbt3', '$cbi1', '$cbi2', '$cbi3', '$cbtc1', '$cbtc2', '$cbtc3', '$cbco1', '$cbco2', '$cbco3', '$cbdp1', '$cbdp2', '$cbdp3'
        ) ON DUPLICATE KEY UPDATE
            cb1 = VALUES(cb1),
            cb2 = VALUES(cb2),
            cb3 = VALUES(cb3),
            cb4 = VALUES(cb4),
            cbd1 = VALUES(cbd1),
            cbd2 = VALUES(cbd2),
            cbd3 = VALUES(cbd3),
            cbd4 = VALUES(cbd4),
            cbdn1 = VALUES(cbdn1),
            cbdn2 = VALUES(cbdn2),
            cbdn3 = VALUES(cbdn3),
            cbdn4 = VALUES(cbdn4),
            cbh1 = VALUES(cbh1),
            cbh2 = VALUES(cbh2),
            cbh3 = VALUES(cbh3),
            cbh4 = VALUES(cbh4),
            cbdd1 = VALUES(cbdd1),
            cbdd2 = VALUES(cbdd2),
            cbdd3 = VALUES(cbdd3),
            cbdd4 = VALUES(cbdd4),
            cbc1 = VALUES(cbc1),
            cbc2 = VALUES(cbc2),
            cbc3 = VALUES(cbc3),
            cbs1 = VALUES(cbs1),
            cbs2 = VALUES(cbs2),
            cbs3 = VALUES(cbs3),
            cbo1 = VALUES(cbo1),
            cbo2 = VALUES(cbo2),
            cbo3 = VALUES(cbo3),
            cbda1 = VALUES(cbda1),
            cbda2 = VALUES(cbda2),
            cbda3 = VALUES(cbda3),
            cbt1 = VALUES(cbt1),
            cbt2 = VALUES(cbt2),
            cbt3 = VALUES(cbt3),
            cbi1 = VALUES(cbi1),
            cbi2 = VALUES(cbi2),
            cbi3 = VALUES(cbi3),
            cbtc1 = VALUES(cbtc1),
            cbtc2 = VALUES(cbtc2),
            cbtc3 = VALUES(cbtc3),
            cbco1 = VALUES(cbco1),
            cbco2 = VALUES(cbco2),
            cbco3 = VALUES(cbco3),
            cbdp1 = VALUES(cbdp1),
            cbdp2 = VALUES(cbdp2),
            cbdp3 = VALUES(cbdp3);"
        ) or die($conn->error);
        
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Successfully saved!',
                    text: 'Inserted into database',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "dashboard.php";
                    }
                })

            })
        </script>
        <?php

    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/Global.css">
    <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Form4_A&B</title>
</head>

<style>
    @font-face {
        font-family: Inter;
        src: url(Fonts/Inter-VariableFont_slnt,wght.ttf);
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Inter;
        text-decoration: none;
        align-items: center;
    }

    table {
        margin: auto;
    }

    td {
        text-align: center;
        background-color: #dbd7d7;
    }

    input {
        width: auto;
        height: auto;
    }

    body{
        background-color: #E3E3E3;
    }

    .cancel_btn {
        border: none;
        background-color: #7d0201;
        font-size: 20px;
        text-decoration: none;
        color: white;
        padding: 5px;
        border-radius: 10px;
    }

    .row__des td {
        padding: 10px;
        color: white;
        background-color: #7d0201;
        text-align: center;
    }

    .title {
        text-align: center;
    }

    .page_title {
        margin-left: 90px;
        padding: 15px;
        font-style: italic;
    }

    .form__btns {
        text-align: center;
    }

    .form__btns button {
        align-items: center;
        color: white;
        background-color: #7d0201;
        border: solid #afd9ea;
        border-radius: 15px;
        padding: 5px;
        font-size: 20px;
    }
</style>

<body>
<form method="POST" action="FORM4_A&B.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION A – INVOLVEMENT IN PROFESSIONAL ORGANIZATION (MAX = 20 POINTS)</h1>
    <h2 class="page_title">1. FOR CURRENT INDIVIDUAL MEMBERSHIP AND ACTIVE ROLE/CONTRIBUTION IN PROFESSIONAL
        ORGANIZATION,
        LEARNED/HONOR/SCIENTIFIC SOCIETY</h2>
    <table>
        <tr class="row__des">
            <td>Name of Organization</td>
            <td>Type of Organization</td>
            <td>Activity of the organization participated by the faculty</td>
            <td>Role or contribution to the activity of the organization</td>
            <td>Date of Activity <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td><input id="FCIM_1" type="text"  value="<?php echo isset($ca1) ? $ca1 : ''; ?>" name="ca1"></td>
            <td><input id="FCIM_2" type="text" value="<?php echo isset($cat1) ? $cat1 : ''; ?>" name="cat1"></td>
            <td><input id="FCIM_3" type="text" value="<?php echo isset($caa1) ? $caa1 : ''; ?>" name="caa1"></td>
            <td>
                <select id="FCIM_Selection_1" name="car1">
                    <option value = "<?php echo isset($car1) ? $car1 : "None"; ?>">
                        <?php echo isset($car1) ? $car1 : "Select Option"; ?>
                    </option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_1" type="date" name="cad1" value="<?php echo isset($cad1) ? $cad1 : ''; ?>" name="cad1"></td>
            <td><input id="FCIM_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_4" type="text" value="<?php echo isset($ca2) ? $ca2 : ''; ?>" name="ca2"></td>
            <td><input id="FCIM_5" type="text" value="<?php echo isset($cat2) ? $cat2 : ''; ?>" name="cat2"></td>
            <td><input id="FCIM_6" type="text" value="<?php echo isset($caa2) ? $caa2 : ''; ?>" name="caa2"></td>
            <td>
                <select id="FCIM_Selection_2" name="car2">
                    <option value = "<?php echo isset($car2) ? $car2 : "None"; ?>">
                        <?php echo isset($car2) ? $car2 : "Select Option"; ?>
                    </option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_2" type="date" name="cad2" value="<?php echo isset($cad2) ? $cad2 : ''; ?>" name="cad2"></td>
            <td><input id="FCIM_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_7" type="text" value="<?php echo isset($ca3) ? $ca3 : ''; ?>" name="ca3"></td>
            <td><input id="FCIM_8" type="text" value="<?php echo isset($cat3) ? $cat3 : ''; ?>" name="cat3"></td>
            <td><input id="FCIM_9" type="text" value="<?php echo isset($caa3) ? $caa3 : ''; ?>" name="caa3"></td>
            <td>
                <select id="FCIM_Selection_3" name="car3">
                    <option value = "<?php echo isset($car3) ? $car3 : "None"; ?>">
                        <?php echo isset($car3) ? $car3 : "Select Option"; ?>
                    </option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_3" type="date" name="cad3" value="<?php echo isset($cad3) ? $cad3 : ''; ?>" name="cad3"></td>
            <td><input id="FCIM_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_10" type="text" value="<?php echo isset($ca4) ? $ca4 : ''; ?>" name="ca4"></td>
            <td><input id="FCIM_11" type="text" value="<?php echo isset($cat4) ? $cat4 : ''; ?>" name="cat4"></td>
            <td><input id="FCIM_12" type="text" value="<?php echo isset($caa4) ? $caa4 : ''; ?>" name="caa4"></td>
            <td>
                <select id="FCIM_Selection_4" name="car4">
                    <option value = "<?php echo isset($car4) ? $car4 : "None"; ?>">
                        <?php echo isset($car4) ? $car4 : "Select Option"; ?>
                    </option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_4" type="date" name="cad4" value="<?php echo isset($cad4) ? $cad4 : ''; ?>" name="cad4"></td>
            <td><input id="FCIM_result_4" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button onclick="calcCriterionA()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FCIM_result_total" name="FCIM_total" readonly type="text"></td>
        </tr>

    </table>
    <br><br><br><br><br>
    <h1 class="title">CRITERION B – CONTINUING DEVELOPMENT (MAX = 60 POINTS)</h1>
    <h2 class="page_title">2. FOR DOCTORATE DEGREE (First Time)</h2>
    <table>
        <tr class="row__des">
            <td>Name of Doctorate Degree <br>
                (provide complete name of the program)
            </td>
            <td>Name of Institution where the degree was earned</td>
            <td>Date Completed <br>
                (mm/dd/yyyy)
            </td>
            <td>Is the faculty Qualified for the automatic 1 sub-rank increase?</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td><input id="FDD_1" type="text" value="<?php echo isset($cb1) ? $cb1 : ''; ?>" name="cb1"></td>
            <td><input id="FDD_2" type="text" value="<?php echo isset($cb2) ? $cb2 : ''; ?>" name="cb2"></td>
            <td><input id="FDD_date" type="date" value="<?php echo isset($cb3) ? $cb3 : ''; ?>" name="cb3"></td>
            <td>
                <select id="FDD_Selection" name="cb4">
                    <option value = "<?php echo isset($cb4) ? $cb4 : "None"; ?>">
                        <?php echo isset($cb4) ? $cb4 : "Select Option"; ?>
                    </option>
                    <option value="no">NO</option>
                    <option value="yes">YES</option>
                </select>
            </td>
            <td><input id="FDD_result" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="2"></td>
            <td>
                <button onclick="calcCriterionB_FDD()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FDD_result_total" name="FDD_total" readonly type="text" max="40"></td>
        </tr>
    </table>

    <h2 class="page_title">ADDITIONAL DEGREES</h2>
    <table>
        <tr class="row__des">
            <td>Degree</td>
            <td>Degree Name</td>
            <td>Name of HEI</td>
            <td>Date Completed <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_1" name="cbd1">
                    <option value = "<?php echo isset($cbd1) ? $cbd1 : "None"; ?>">
                        <?php echo isset($cbd1) ? $cbd1 : "Select Option"; ?>
                    </option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_1" type="text" value="<?php echo isset($cbdn1) ? $cbdn1 : ''; ?>" name="cbdn1"></td>
            <td><input id="AD_2" type="text" value="<?php echo isset($cbh1) ? $cbh1 : ''; ?>" name="cbh1"></td>
            <td><input id="AD_date_1" type="date" value="<?php echo isset($cbdd1) ? $cbdd1 : ''; ?>" name="cbdd1"></td>
            <td><input id="AD_Result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_2" name="cbd2">
                    <option value = "<?php echo isset($cbd2) ? $cbd2 : "None"; ?>">
                        <?php echo isset($cbd2) ? $cbd2 : "Select Option"; ?>
                    </option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_3" type="text" value="<?php echo isset($cbdn2) ? $cbdn2 : ''; ?>" name="cbdn2"></td>
            <td><input id="AD_4" type="text" value="<?php echo isset($cbh2) ? $cbh2 : ''; ?>" name="cbh2"></td>
            <td><input id="AD_date_2" type="date" value="<?php echo isset($cbdd2) ? $cbdd2 : ''; ?>" name="cbdd2"></td>
            <td><input id="AD_Result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_3" name="cbd3">
                    <option value = "<?php echo isset($cbd3) ? $cbd3 : "None"; ?>">
                        <?php echo isset($cbd3) ? $cbd3 : "Select Option"; ?>
                    </option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_5" type="text" value="<?php echo isset($cbdn3) ? $cbdn3 : ''; ?>" name="cbdn3"></td>
            <td><input id="AD_6" type="text" value="<?php echo isset($cbh3) ? $cbh3 : ''; ?>" name="cbh3"></td>
            <td><input id="AD_date_3" type="date" value="<?php echo isset($cbdd3) ? $cbdd3 : ''; ?>" name="cbdd3"></td>
            <td><input id="AD_Result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_4" name="cbd4">
                    <option value = "<?php echo isset($cbd4) ? $cbd4 : "None"; ?>">
                        <?php echo isset($cbd4) ? $cbd4 : "Select Option"; ?>
                    </option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_7" type="text" value="<?php echo isset($cbdn4) ? $cbdn4 : ''; ?>" name="cbdn4"></td>
            <td><input id="AD_8" type="text" value="<?php echo isset($cbh4) ? $cbh4 : ''; ?>" name="cbh4"></td>
            <td><input id="AD_date_4" type="date" value="<?php echo isset($cbdd4) ? $cbdd4 : ''; ?>" name="cbdd4"></td>
            <td><input id="AD_Result_4" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="2"></td>
            <td>
                <button onclick="calcCriterionB_AD()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="AD_result_total" name="AD_total" readonly type="text" max="40"></td>
        </tr>
    </table>

    <h2 class="page_title">FOR EVERY PARTICIPATION IN CONFERENCES, SEMINARS, WORKSHOPS, INDUSTRY IMMERSION (MAX = 10
        POINTS)</h2>
    <table>
        <tr class="row__des">
            <td>Name of Conference/Training</td>
            <td>Scope</td>
            <td>Organizer</td>
            <td>Date of Activity <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td><input id="FEP_1" type="text" value="<?php echo isset($cbc1) ? $cbc1 : ''; ?>" name="cbc1"></td>
            <td>
                <select id="FEP_selection_1" name="cbs1">
                    <option value = "<?php echo isset($cbs1) ? $cbs1 : "None"; ?>">
                        <?php echo isset($cbs1) ? $cbs1 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_2" type="text" value="<?php echo isset($cbo1) ? $cbo1 : ''; ?>" name="cbo1"></td>
            <td><input id="FEP_date_1" type="date" value="<?php echo isset($cbda1) ? $cbda1 : ''; ?>" name="cbda1"></td>
            <td><input id="FEP_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEP_3" type="text" value="<?php echo isset($cbc2) ? $cbc2 : ''; ?>" name="cbc2"></td>
            <td>
                <select id="FEP_selection_2" name="cbs2">
                    <option value = "<?php echo isset($cbs2) ? $cbs2 : "None"; ?>">
                        <?php echo isset($cbs2) ? $cbs2 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_4" type="text" value="<?php echo isset($cbo2) ? $cbo2 : ''; ?>" name="cbo2"></td>
            <td><input id="FEP_date_2" type="date" value="<?php echo isset($cbda2) ? $cbda2 : ''; ?>" name="cbda2"></td>
            <td><input id="FEP_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEP_5" type="text" value="<?php echo isset($cbc3) ? $cbc3 : ''; ?>" name="cbc3"></td>
            <td>
                <select id="FEP_selection_3" name="cbs3">
                    <option value = "<?php echo isset($cbs3) ? $cbs3 : "None"; ?>">
                        <?php echo isset($cbs3) ? $cbs3 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_6" type="text" value="<?php echo isset($cbo3) ? $cbo3 : ''; ?>" name="cbo3"></td>
            <td><input id="FEP_date_3" type="date" value="<?php echo isset($cbda3) ? $cbda3 : ''; ?>" name="cbda3"></td>
            <td><input id="FEP_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="2"></td>
            <td>
                <button onclick="calcCriterionB_FEP()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FEP_result_total" name="FEP_total" readonly type="text"></td>
        </tr>
    </table>

    <h2 class="page_title">FOR EVERY PAPER PRESENTATION IN CONFERENCES (MAX = 10 POINTS)</h2>
    <table>
        <tr class="row__des">
            <td>Title of Paper</td>
            <td>Local or International</td>
            <td>Title of the Conference</td>
            <td>Conference Organizer</td>
            <td>Date Presented</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td><input id="FEPP_1" type="text" value="<?php echo isset($cbt1) ? $cbt1 : ''; ?>" name="cbt1"></td>
            <td>
                <select id="FEPP_selection_1" name="cbi1">
                    <option value = "<?php echo isset($cbi1) ? $cbi1 : "None"; ?>">
                        <?php echo isset($cbi1) ? $cbi1 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_2" type="text" value="<?php echo isset($cbtc1) ? $cbtc1 : ''; ?>" name="cbtc1"></td>
            <td><input id="FEPP_3" type="text" value="<?php echo isset($cbco1) ? $cbco1 : ''; ?>" name="cbco1"></td>
            <td><input id="FEPP_date_1" type="date" value="<?php echo isset($cbdp1) ? $cbdp1 : ''; ?>" name="cbdp1"></td>
            <td><input id="FEPP_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEPP_4" type="text" value="<?php echo isset($cbt2) ? $cbt2 : ''; ?>" name="cbt2"></td>
            <td>
                <select id="FEPP_selection_2" name="cbi2">
                    <option value = "<?php echo isset($cbi2) ? $cbi2 : "None"; ?>">
                        <?php echo isset($cbi2) ? $cbi2 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_5" type="text" value="<?php echo isset($cbtc2) ? $cbtc2 : ''; ?>" name="cbtc2"></td>
            <td><input id="FEPP_6" type="text" value="<?php echo isset($cbco2) ? $cbco2 : ''; ?>" name="cbco2"></td>
            <td><input id="FEPP_date_2" type="date" value="<?php echo isset($cbdp2) ? $cbdp2 : ''; ?>" name="cbdp2"></td>
            <td><input id="FEPP_result_2" type="text" readonly></td>
        </tr>
        <tr>
            <td><input id="FEPP_7" type="text" value="<?php echo isset($cbt3) ? $cbt3 : ''; ?>" name="cbt3"></td>
            <td>
                <select id="FEPP_selection_3" name="cbi3">
                    <option value = "<?php echo isset($cbi3) ? $cbi3 : "None"; ?>">
                        <?php echo isset($cbi3) ? $cbi3 : "Select Option"; ?>
                    </option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_8" type="text" value="<?php echo isset($cbtc3) ? $cbtc3 : ''; ?>" name="cbtc3"></td>
            <td><input id="FEPP_9" type="text" value="<?php echo isset($cbco3) ? $cbco3 : ''; ?>" name="cbco3"></td>
            <td><input id="FEPP_date_3" type="date" value="<?php echo isset($cbdp3) ? $cbdp3 : ''; ?>" name="cbdp3"></td>
            <td><input id="FEPP_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button onclick="calcCriterionB_FEPP()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FEPP_result_total" name="FEPP_total" readonly type="text"></td>
        </tr>


    </table>
    <br><br><br>


    <div class="form__btns">
        <button name="Submit_btn">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>

</body>
</html>

<script>
    function calcCriterionA() {
        const FCIM_1 = document.getElementById('FCIM_1').value
        const FCIM_2 = document.getElementById('FCIM_2').value
        const FCIM_3 = document.getElementById('FCIM_3').value
        const FCIM_Selection_1 = document.getElementById('FCIM_Selection_1').value
        const FCIM_date_1 = document.getElementById('FCIM_date_1').value
        const FCIM_result_1 = document.getElementById('FCIM_result_1')

        if (FCIM_1 !== "" && FCIM_2 !== "" && FCIM_3 !== "" && FCIM_Selection_1 !== "" && FCIM_date_1 !== "") {
            if (FCIM_Selection_1 === "none") {
                FCIM_result_1.value = 0;
            } else {
                FCIM_result_1.value = 5;
            }
        } else {
            FCIM_result_1.value = 0;
        }

        const FCIM_4 = document.getElementById('FCIM_4').value
        const FCIM_5 = document.getElementById('FCIM_5').value
        const FCIM_6 = document.getElementById('FCIM_6').value
        const FCIM_Selection_2 = document.getElementById('FCIM_Selection_2').value
        const FCIM_date_2 = document.getElementById('FCIM_date_2').value
        const FCIM_result_2 = document.getElementById('FCIM_result_2')

        if (FCIM_4 !== "" && FCIM_5 !== "" && FCIM_6 !== "" && FCIM_Selection_2 !== "" && FCIM_date_2 !== "") {
            if (FCIM_Selection_2 === "none") {
                FCIM_result_2.value = 0;
            } else {
                FCIM_result_2.value = 5;
            }
        } else {
            FCIM_result_2.value = 0;
        }

        const FCIM_7 = document.getElementById('FCIM_7').value
        const FCIM_8 = document.getElementById('FCIM_8').value
        const FCIM_9 = document.getElementById('FCIM_9').value
        const FCIM_Selection_3 = document.getElementById('FCIM_Selection_3').value
        const FCIM_date_3 = document.getElementById('FCIM_date_3').value
        const FCIM_result_3 = document.getElementById('FCIM_result_3')

        if (FCIM_7 !== "" && FCIM_8 !== "" && FCIM_9 !== "" && FCIM_Selection_3 !== "" && FCIM_date_3 !== "") {
            if (FCIM_Selection_3 === "none") {
                FCIM_result_3.value = 0;
            } else {
                FCIM_result_3.value = 5;
            }
        } else {
            FCIM_result_3.value = 0;
        }

        const FCIM_10 = document.getElementById('FCIM_10').value
        const FCIM_11 = document.getElementById('FCIM_11').value
        const FCIM_12 = document.getElementById('FCIM_12').value
        const FCIM_Selection_4 = document.getElementById('FCIM_Selection_4').value
        const FCIM_date_4 = document.getElementById('FCIM_date_4').value
        const FCIM_result_4 = document.getElementById('FCIM_result_4')

        if (FCIM_10 !== "" && FCIM_11 !== "" && FCIM_12 !== "" && FCIM_Selection_4 !== "" && FCIM_date_4 !== "") {
            if (FCIM_Selection_4 === "none") {
                FCIM_result_4.value = 0;
            } else {
                FCIM_result_4.value = 5;
            }
        } else {
            FCIM_result_4.value = 0;
        }

        document.getElementById('FCIM_result_total').value = parseFloat(FCIM_result_1.value) + parseFloat(FCIM_result_2.value) + parseFloat(FCIM_result_3.value) + parseFloat(FCIM_result_4.value);
    }

    function calcCriterionB_FDD() {
        const FDD_1 = document.getElementById('FDD_1').value
        const FDD_2 = document.getElementById('FDD_2').value
        const FDD_date = document.getElementById('FDD_date').value
        const FDD_Selection = document.getElementById('FDD_Selection').value
        const FDD_Result = document.getElementById('FDD_result')
        const FDD_Result_total = document.getElementById('FDD_result_total')


        if (FDD_1 && FDD_2 && FDD_date && FDD_Selection) {
            FDD_Result.value = FDD_Result_total.value = (FDD_Selection === "no") ? 40 : 0;
        } else {
            FDD_Result.value = FDD_Result_total.value = 0;
        }
    }

    function calcCriterionB_AD() {
        const AD_Selection_1 = document.getElementById('AD_Selection_1').value
        const AD_1 = document.getElementById('AD_1').value
        const AD_2 = document.getElementById('AD_2').value
        const AD_date_1 = document.getElementById('AD_date_1').value
        const AD_Result_1 = document.getElementById('AD_Result_1')

        if (AD_Selection_1 && AD_1 && AD_2 && AD_date_1) {
            AD_Result_1.value = (AD_Selection_1 === "post_doctorate" || AD_Selection_1 === "post_masters" ? 10 :
                    AD_Selection_1 === "masters" ? 20 :
                        AD_Selection_1 === "doctorate" ? 40 : 0
            )
        } else {
            AD_Result_1.value = 0;
        }

        const AD_Selection_2 = document.getElementById('AD_Selection_2').value
        const AD_3 = document.getElementById('AD_3').value
        const AD_4 = document.getElementById('AD_4').value
        const AD_date_2 = document.getElementById('AD_date_2').value
        const AD_Result_2 = document.getElementById('AD_Result_2')

        if (AD_Selection_2 && AD_3 && AD_4 && AD_date_2) {
            AD_Result_2.value = (AD_Selection_2 === "post_doctorate" || AD_Selection_2 === "post_masters" ? 10 :
                    AD_Selection_2 === "masters" ? 20 :
                        AD_Selection_2 === "doctorate" ? 40 : 0
            )
        } else {
            AD_Result_2.value = 0;
        }

        const AD_Selection_3 = document.getElementById('AD_Selection_3').value
        const AD_5 = document.getElementById('AD_5').value
        const AD_6 = document.getElementById('AD_6').value
        const AD_date_3 = document.getElementById('AD_date_3').value
        const AD_Result_3 = document.getElementById('AD_Result_3')

        if (AD_Selection_3 && AD_5 && AD_6 && AD_date_3) {
            AD_Result_3.value = (AD_Selection_3 === "post_doctorate" || AD_Selection_3 === "post_masters" ? 10 :
                    AD_Selection_3 === "masters" ? 20 :
                        AD_Selection_3 === "doctorate" ? 40 : 0
            )
        } else {
            AD_Result_3.value = 0;
        }

        const AD_Selection_4 = document.getElementById('AD_Selection_4').value
        const AD_7 = document.getElementById('AD_7').value
        const AD_8 = document.getElementById('AD_8').value
        const AD_date_4 = document.getElementById('AD_date_4').value
        const AD_Result_4 = document.getElementById('AD_Result_4')

        if (AD_Selection_4 && AD_7 && AD_8 && AD_date_4) {
            AD_Result_4.value = (AD_Selection_4 === "post_doctorate" || AD_Selection_4 === "post_masters" ? 10 :
                    AD_Selection_4 === "masters" ? 20 :
                        AD_Selection_4 === "doctorate" ? 40 : 0
            )
        } else {
            AD_Result_4.value = 0;
        }

        const AD_result_total = document.getElementById('AD_result_total')
        AD_result_total.value = parseFloat(AD_Result_1.value) + parseFloat(AD_Result_2.value) + parseFloat(AD_Result_3.value) + parseFloat(AD_Result_4.value);
    }

    function calcCriterionB_FEP() {
        const FEP_1 = document.getElementById('FEP_1').value
        const FEP_selection_1 = document.getElementById('FEP_selection_1').value
        const FEP_2 = document.getElementById('FEP_2').value
        const FEP_date_1 = document.getElementById('FEP_date_1').value
        const FEP_result_1 = document.getElementById('FEP_result_1')

        if (FEP_1 && FEP_selection_1 && FEP_2 && FEP_result_1 && FEP_date_1) {
            FEP_result_1.value = (FEP_selection_1 === "local" ? 1 :
                    FEP_selection_1 === "international" ? 2 : 0
            )
        } else {
            FEP_result_1.value = 0
        }

        const FEP_3 = document.getElementById('FEP_3').value
        const FEP_selection_2 = document.getElementById('FEP_selection_2').value
        const FEP_4 = document.getElementById('FEP_4').value
        const FEP_date_2 = document.getElementById('FEP_date_2').value
        const FEP_result_2 = document.getElementById('FEP_result_2')

        if (FEP_3 && FEP_selection_2 && FEP_4 && FEP_result_2 && FEP_date_2) {
            FEP_result_2.value = (FEP_selection_2 === "local" ? 1 :
                    FEP_selection_2 === "international" ? 2 : 0
            )
        } else {
            FEP_result_2.value = 0
        }

        const FEP_5 = document.getElementById('FEP_5').value
        const FEP_selection_3 = document.getElementById('FEP_selection_3').value
        const FEP_6 = document.getElementById('FEP_6').value
        const FEP_date_3 = document.getElementById('FEP_date_3').value
        const FEP_result_3 = document.getElementById('FEP_result_3')

        if (FEP_5 && FEP_selection_3 && FEP_6 && FEP_result_3 && FEP_date_3) {
            FEP_result_3.value = (FEP_selection_3 === "local" ? 1 :
                    FEP_selection_3 === "international" ? 2 : 0
            )
        } else {
            FEP_result_3.value = 0
        }

        const FEP_result_total = document.getElementById('FEP_result_total')
        FEP_result_total.value = parseFloat(FEP_result_1.value) + parseFloat(FEP_result_2.value) + parseFloat(FEP_result_3.value);
    }

    function calcCriterionB_FEPP() {
        const FEPP_1 = document.getElementById('FEPP_1').value
        const FEPP_selection_1 = document.getElementById('FEPP_selection_1').value
        const FEPP_2 = document.getElementById('FEPP_2').value
        const FEPP_3 = document.getElementById('FEPP_3').value
        const FEPP_date_1 = document.getElementById('FEPP_date_1').value
        const FEPP_result_1 = document.getElementById('FEPP_result_1')

        if (FEPP_1 && FEPP_2 && FEPP_3 && FEPP_selection_1 && FEPP_date_1) {
            FEPP_result_1.value = (FEPP_selection_1 === "local" ? 3 :
                FEPP_selection_1 === "international" ? 5 : 0)
        } else {
            FEPP_result_1.value = 0;
        }

        const FEPP_4 = document.getElementById('FEPP_4').value
        const FEPP_selection_2 = document.getElementById('FEPP_selection_2').value
        const FEPP_5 = document.getElementById('FEPP_5').value
        const FEPP_6 = document.getElementById('FEPP_6').value
        const FEPP_date_2 = document.getElementById('FEPP_date_2').value
        const FEPP_result_2 = document.getElementById('FEPP_result_2')

        if (FEPP_4 && FEPP_5 && FEPP_6 && FEPP_selection_2 && FEPP_date_2) {
            FEPP_result_2.value = (FEPP_selection_2 === "local" ? 3 :
                FEPP_selection_2 === "international" ? 5 : 0)
        } else {
            FEPP_result_2.value = 0;
        }

        const FEPP_7 = document.getElementById('FEPP_7').value
        const FEPP_selection_3 = document.getElementById('FEPP_selection_3').value
        const FEPP_8 = document.getElementById('FEPP_8').value
        const FEPP_9 = document.getElementById('FEPP_9').value
        const FEPP_date_3 = document.getElementById('FEPP_date_3').value
        const FEPP_result_3 = document.getElementById('FEPP_result_3')

        if (FEPP_7 && FEPP_8 && FEPP_9 && FEPP_selection_3 && FEPP_date_3) {
            FEPP_result_3.value = (FEPP_selection_3 === "local" ? 3 :
                FEPP_selection_3 === "international" ? 5 : 0)
        } else {
            FEPP_result_3.value = 0;
        }

        const FEPP_result_total = document.getElementById('FEPP_result_total')
        FEPP_result_total.value = parseFloat(FEPP_result_1.value) + parseFloat(FEPP_result_2.value) + parseFloat(FEPP_result_3.value);

    }
</script>