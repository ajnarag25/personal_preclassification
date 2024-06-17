<?php
require 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

$id = $_SESSION['user']['user_id'];
$query1_c = "SELECT * FROM form4_c WHERE user_id = $id";
$result1_c = $conn->query($query1_c);
while ($row = mysqli_fetch_array($result1_c)) {
    $cc1 = $row['cc1'];	
    $cc2 = $row['cc2'];	
    $cc3 = $row['cc3'];	
    $ccs1 = $row['ccs1'];	
    $ccs2 = $row['ccs2'];	
    $ccs3 = $row['ccs3'];	
    $cca1 = $row['cca1'];	
    $cca2 = $row['cca2'];	
    $cca3 = $row['cca3'];	
    $ccd1 = $row['ccd1'];	
    $ccd2 = $row['ccd2'];	
    $ccd3 = $row['ccd3'];	
    $ccv1 = $row['ccv1'];	
    $ccv2 = $row['ccv2'];	
    $ccv3 = $row['ccv3'];	
}

$query2_d = "SELECT * FROM form4_d WHERE user_id = $id";
$result2_d = $conn->query($query2_d);
while ($row2 = mysqli_fetch_array($result2_d)) {
    $cd1 = $row2['cd1'];	
    $cd2 = $row2['cd2'];	
    $cd3 = $row2['cd3'];	
    $cdn1 = $row2['cdn1'];	
    $cdn2 = $row2['cdn2'];	
    $cdn3 = $row2['cdn3'];	
    $cdy1 = $row2['cdy1'];	
    $cdy2 = $row2['cdy2'];	
    $cdy3 = $row2['cdy3'];	
    $cdps1 = $row2['cdps1'];	
    $cdps2 = $row2['cdps2'];	
    $cdps3 = $row2['cdps3'];	
    $cdpe1 = $row2['cdpe1'];	
    $cdpe2 = $row2['cdpe2'];	
    $cdpe3 = $row2['cdpe3'];	
    $cdd1 = $row2['cdd1'];	
    $cdd2 = $row2['cdd2'];	
    $cdd3 = $row2['cdd3'];	
    $cdd_1 = $row2['cdd_1'];	
    $cdd_2 = $row2['cdd_2'];	
    $cdd_3 = $row2['cdd_3'];	
    $cdny1 = $row2['cdny1'];	
    $cdny2 = $row2['cdny2'];	
    $cdny3 = $row2['cdny3'];	
    $cdpcs1 = $row2['cdpcs1'];	
    $cdpcs2 = $row2['cdpcs2'];	
    $cdpcs3 = $row2['cdpcs3'];	
    $cdpce1 = $row2['cdpce1'];	
    $cdpce2 = $row2['cdpce2'];	
    $cdpce3 = $row2['cdpce3'];
}

if (isset($_POST['submit_btn'])) {
    $id = $_SESSION['user']['user_id'];
    $scoreFEA = isset($_POST['FEA_score']) ? (float)$_POST['FEA_score']: 0;
    $scoreFEY = isset($_POST['FEY_score']) ? (float)$_POST['FEY_score']: 0;
    $scoreFEYO = isset($_POST['FEYO_score']) ? (float)$_POST['FEYO_score']: 0;
    $scoreDTotal = $scoreFEY + $scoreFEYO;

    $cc1 = $_POST['cc1'];
    $cc2 = $_POST['cc2'];
    $cc3 = $_POST['cc3'];
    $ccs1 = $_POST['ccs1'];
    $ccs2 = $_POST['ccs2'];
    $ccs3 = $_POST['ccs3'];
    $cca1 = $_POST['cca1'];
    $cca2 = $_POST['cca2'];
    $cca3 = $_POST['cca3'];
    $ccd1 = $_POST['ccd1'];
    $ccd2 = $_POST['ccd2'];
    $ccd3 = $_POST['ccd3'];
    $ccv1 = $_POST['ccv1'];
    $ccv2 = $_POST['ccv2'];
    $ccv3 = $_POST['ccv3'];

    $cd1 = $_POST['cd1'];
    $cd2 = $_POST['cd2'];
    $cd3 = $_POST['cd3'];
    $cdn1 = $_POST['cdn1'];
    $cdn2 = $_POST['cdn2'];
    $cdn3 = $_POST['cdn3'];
    $cdy1 = $_POST['cdy1'];
    $cdy2 = $_POST['cdy2'];
    $cdy3 = $_POST['cdy3'];
    $cdps1 = $_POST['cdps1'];
    $cdps2 = $_POST['cdps2'];
    $cdps3 = $_POST['cdps3'];
    $cdpe1 = $_POST['cdpe1'];
    $cdpe2 = $_POST['cdpe2'];
    $cdpe3 = $_POST['cdpe3'];
    $cdd1 = $_POST['cdd1'];
    $cdd2 = $_POST['cdd2'];
    $cdd3 = $_POST['cdd3'];
    $cdd_1 = $_POST['cdd_1'];
    $cdd_2 = $_POST['cdd_2'];
    $cdd_3 = $_POST['cdd_3'];
    $cdny1 = $_POST['cdny1'];
    $cdny2 = $_POST['cdny2'];
    $cdny3 = $_POST['cdny3'];
    $cdpcs1 = $_POST['cdpcs1'];
    $cdpcs2 = $_POST['cdpcs2'];
    $cdpcs3 = $_POST['cdpcs3'];
    $cdpce1 = $_POST['cdpce1'];
    $cdpce2 = $_POST['cdpce2'];
    $cdpce3 = $_POST['cdpce3'];

    if (
        empty($scoreFEA) &&
        empty($scoreFEY) &&
        empty($scoreFEYO) &&
        empty($scoreDTotal)
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
                 Crit_C_1st = '$scoreFEA',
                 Crit_C_1st_allowed = Crit_C_1st,
                 Crit_C_total = '$scoreFEA',
                 Crit_C_total_allowed = IF(Crit_C_total > 30, 30, Crit_C_total),
                 Crit_D_1st = '$scoreFEY',
                 Crit_D_2nd = '$scoreFEYO',
                 Crit_D_total = '$scoreDTotal',
                 Crit_D_total_allowed = IF(Crit_D_total > 30, 30, Crit_D_total),
                 Crit_D_total_allowed = IF(Crit_D_total > 20, 20 , Crit_D_total),
                 KRA4_total_allowed = IF(Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed + Crit_D_total_allowed > 100, 100, Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed + Crit_D_total_allowed)
             WHERE Kra4_ID = $id") or die($conn->error);

        $conn->query("INSERT INTO form4_c (
            user_id, cc1, cc2, cc3, ccs1, ccs2, ccs3, cca1, cca2, cca3, ccd1, ccd2, ccd3, ccv1, ccv2, ccv3
        ) VALUES (
            '$id', '$cc1', '$cc2', '$cc3', '$ccs1', '$ccs2', '$ccs3', '$cca1', '$cca2', '$cca3', '$ccd1', '$ccd2', '$ccd3', '$ccv1', '$ccv2', '$ccv3'
        ) ON DUPLICATE KEY UPDATE
            cc1 = VALUES(cc1),
            cc2 = VALUES(cc2),
            cc3 = VALUES(cc3),
            ccs1 = VALUES(ccs1),
            ccs2 = VALUES(ccs2),
            ccs3 = VALUES(ccs3),
            cca1 = VALUES(cca1),
            cca2 = VALUES(cca2),
            cca3 = VALUES(cca3),
            ccd1 = VALUES(ccd1),
            ccd2 = VALUES(ccd2),
            ccd3 = VALUES(ccd3),
            ccv1 = VALUES(ccv1),
            ccv2 = VALUES(ccv2),
            ccv3 = VALUES(ccv3);"
        ) or die($conn->error);
        
        $conn->query("INSERT INTO form4_d (
            user_id, cd1, cd2, cd3, cdn1, cdn2, cdn3, cdy1, cdy2, cdy3, cdps1, cdps2, cdps3, cdpe1, cdpe2, cdpe3, cdd1, cdd2, cdd3, cdd_1, cdd_2, cdd_3, cdny1, cdny2, cdny3, cdpcs1, cdpcs2, cdpcs3, cdpce1, cdpce2, cdpce3
        ) VALUES (
            '$id', '$cd1', '$cd2', '$cd3', '$cdn1', '$cdn2', '$cdn3', '$cdy1', '$cdy2', '$cdy3', '$cdps1', '$cdps2', '$cdps3', '$cdpe1', '$cdpe2', '$cdpe3', '$cdd1', '$cdd2', '$cdd3', '$cdd_1', '$cdd_2', '$cdd_3', '$cdny1', '$cdny2', '$cdny3', '$cdpcs1', '$cdpcs2', '$cdpcs3', '$cdpce1', '$cdpce2', '$cdpce3'
        ) ON DUPLICATE KEY UPDATE
            cd1 = VALUES(cd1),
            cd2 = VALUES(cd2),
            cd3 = VALUES(cd3),
            cdn1 = VALUES(cdn1),
            cdn2 = VALUES(cdn2),
            cdn3 = VALUES(cdn3),
            cdy1 = VALUES(cdy1),
            cdy2 = VALUES(cdy2),
            cdy3 = VALUES(cdy3),
            cdps1 = VALUES(cdps1),
            cdps2 = VALUES(cdps2),
            cdps3 = VALUES(cdps3),
            cdpe1 = VALUES(cdpe1),
            cdpe2 = VALUES(cdpe2),
            cdpe3 = VALUES(cdpe3),
            cdd1 = VALUES(cdd1),
            cdd2 = VALUES(cdd2),
            cdd3 = VALUES(cdd3),
            cdd_1 = VALUES(cdd_1),
            cdd_2 = VALUES(cdd_2),
            cdd_3 = VALUES(cdd_3),
            cdny1 = VALUES(cdny1),
            cdny2 = VALUES(cdny2),
            cdny3 = VALUES(cdny3),
            cdpcs1 = VALUES(cdpcs1),
            cdpcs2 = VALUES(cdpcs2),
            cdpcs3 = VALUES(cdpcs3),
            cdpce1 = VALUES(cdpce1),
            cdpce2 = VALUES(cdpce2),
            cdpce3 = VALUES(cdpce3);"
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
    <title>FORM4_C&D</title>
</head>

<style>
    @font-face {
        font-family: Inter;
        src: url(./fonts/Inter-VariableFont_slnt\,wght.ttf);
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
<form method="POST" action="FORM4_C&D.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION C – AWARDS AND RECOGNITION (MAX = 20 POINTS)</h1>
    <h2 class="page_title">1. FOR EVERY AWARD OF DISTINCTION RECEIVED IN RECOGNITION OF ACHIEVEMENT IN RELEVANT AREAS OF
        SPECIALIZATION, PROFESSION AND/OR ASSIGNMENT OF THE FACULTY CONCERNED.</h2>
    <table>
        <tr class="row__des">
            <td>Name of the Award</td>
            <td>Scope of the Award</td>
            <td>Award-Giving Body/Organization</td>
            <td>Date the Award was Given <br>
                (mm/dd/yyyy)
            </td>
            <td>Venue of the Award Ceremony</td>
            <td>Faculty Score</td>
        </tr>
        <tr>
            <td><input id="FEA_1" type="text" value="<?php echo isset($cc1) ? $cc1 : ''; ?>" name="cc1"></td>
            <td>
                <select id="FEA_selection_1" name="ccs1">
                    <option value = "<?php echo isset($ccs1) ? $ccs1 : "None"; ?>">
                        <?php echo isset($ccs1) ? $ccs1 : "Select Option"; ?>
                    </option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_2" type="text" value="<?php echo isset($cca1) ? $cca1 : ''; ?>" name="cca1"></td>
            <td><input id="FEA_date_1" type="date" value="<?php echo isset($ccd1) ? $ccd1 : ''; ?>" name="ccd1"></td>
            <td><input id="FEA_3" type="text" value="<?php echo isset($ccv1) ? $ccv1 : ''; ?>" name="ccv1"></td>
            <td><input id="FEA_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEA_4" type="text" value="<?php echo isset($cc2) ? $cc2 : ''; ?>" name="cc2"></td>
            <td>
                <select id="FEA_selection_2" name="ccs2">
                    <option value = "<?php echo isset($ccs2) ? $ccs2 : "None"; ?>">
                        <?php echo isset($ccs2) ? $ccs2 : "Select Option"; ?>
                    </option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_5" type="text" value="<?php echo isset($cca2) ? $cca2 : ''; ?>" name="cca2"></td>
            <td><input id="FEA_date_2" type="date" value="<?php echo isset($ccd2) ? $ccd2 : ''; ?>" name="ccd2"></td>
            <td><input id="FEA_6" type="text" value="<?php echo isset($ccv2) ? $ccv2 : ''; ?>" name="ccv2"></td>
            <td><input id="FEA_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEA_7" type="text" value="<?php echo isset($cc3) ? $cc3 : ''; ?>" name="cc3"></td>
            <td>
                <select id="FEA_selection_3" name="ccs3">
                    <option value = "<?php echo isset($ccs3) ? $ccs3 : "None"; ?>">
                        <?php echo isset($ccs3) ? $ccs3 : "Select Option"; ?>
                    </option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_8" type="text" value="<?php echo isset($cca3) ? $cca3 : ''; ?>" name="cca3"></td>
            <td><input id="FEA_date_3" type="date" value="<?php echo isset($ccd3) ? $ccd3 : ''; ?>" name="ccd3"></td>
            <td><input id="FEA_9" type="text" value="<?php echo isset($ccv3) ? $ccv3 : ''; ?>" name="ccv3"></td>
            <td><input id="FEA_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>Total:</td>
            <td><input id="FEA_result_total" name="FEA_score" type="text" readonly></td>
            <td>
                <button onclick="calcCriterionC()" type="button">Calculate</button>
            </td>
        </tr>
    </table>

    <Br></Br><Br></Br><Br></Br>

    <h1 class="title">CRITERION D – BONUS INDICATORS FOR NEWLY APPOINTED FACULTY (MAX = 20 POINTS)</h1>
    <h2 class="page_title">1. FOR EVERY YEAR OF FULL-TIME ACADEMIC SERVICE IN AN INSTITUTION OF HIGHER LEARNING AS:</h2>
    <table>
        <tr class="row__des">
            <td>Designation/Position</td>
            <td>Name of HEI/s</td>
            <td>No. of Years</td>
            <td colspan="2">Period Covered</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>START</td>
            <td>END</td>
            <td colspan="1"></td>
        </tr>

        <tr>
            <td>
                <select id="FEY_select_1" name="cd1">
                    <option value = "<?php echo isset($cd1) ? $cd1 : "None"; ?>">
                        <?php echo isset($cd1) ? $cd1 : "Select Option"; ?>
                    </option>
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_1" type="text" value="<?php echo isset($cdn1) ? $cdn1 : ''; ?>" name="cdn1"></td>
            <td><input id="FEY_2" type="text" value="<?php echo isset($cdy1) ? $cdy1 : ''; ?>" name="cdy1"></td>
            <td><input id="FEY_date_1" type="date" value="<?php echo isset($cdps1) ? $cdps1 : ''; ?>" name="cdps1"></td>
            <td><input id="FEY_date_2" type="date" value="<?php echo isset($cdpe1) ? $cdpe1 : ''; ?>" name="cdpe1"></td>
            <td><input id="FEY_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="FEY_select_2" name="cd2">
                    <option value = "<?php echo isset($cd2) ? $cd2 : "None"; ?>">
                        <?php echo isset($cd2) ? $cd2 : "Select Option"; ?>
                    </option>
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_3" type="text" value="<?php echo isset($cdn2) ? $cdn2 : ''; ?>" name="cdn2"></td>
            <td><input id="FEY_4" type="text" value="<?php echo isset($cdy2) ? $cdy2 : ''; ?>" name="cdy2"></td>
            <td><input id="FEY_date_3" type="date" value="<?php echo isset($cdps2) ? $cdps2 : ''; ?>" name="cdps2"></td>
            <td><input id="FEY_date_4" type="date" value="<?php echo isset($cdpe2) ? $cdpe2 : ''; ?>" name="cdpe2"></td>
            <td><input id="FEY_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="FEY_select_3" name="cd3">
                    <option value = "<?php echo isset($cd3) ? $cd3 : "None"; ?>">
                        <?php echo isset($cd3) ? $cd3 : "Select Option"; ?>
                    </option>
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_5" type="text" value="<?php echo isset($cdn3) ? $cdn3 : ''; ?>" name="cdn3"></td>
            <td><input id="FEY_6" type="text" value="<?php echo isset($cdy3) ? $cdy3 : ''; ?>" name="cdy3"></td>
            <td><input id="FEY_date_5" type="date" value="<?php echo isset($cdps3) ? $cdps3 : ''; ?>" name="cdps3"></td>
            <td><input id="FEY_date_6" type="date" value="<?php echo isset($cdpe3) ? $cdpe3 : ''; ?>" name="cdp3"></td>
            <td><input id="FEY_result_3" type="text" readonly></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>Total:</td>
            <td><input id="FEY_result_total" name="FEY_score" type="text" readonly></td>
            <td>
                <button onclick="calcCriterionD_FEY()" type="button">Calculate</button>
            </td>
        </tr>
    </table>

    <h2 class="page_title">2. FOR EVERY YEAR OF INDUSTRY EXPERIENCE (NON-ACADEMIC ORGANIZATION):</h2>
    <table>
        <tr class="row__des">
            <td>Designation/Position</td>
            <td>Designation / Position</td>
            <td>No. of Years</td>
            <td colspan="2">Period Covered</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>START</td>
            <td>END</td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td><input id="FEYO_1" type="text" value="<?php echo isset($cdd1) ? $cdd1 : ''; ?>" name="cdd1"></td>
            <td>
                <select id="FEYO_select_1" name="cdd_1">
                    <option value = "<?php echo isset($cdd_1) ? $cdd_1 : "None"; ?>">
                        <?php echo isset($cdd_1) ? $cdd_1 : "Select Option"; ?>
                    </option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_2" type="text" value="<?php echo isset($cdny1) ? $cdny1 : ''; ?>" name="cdny1"></td>
            <td><input id="FEYO_date_1" type="date" value="<?php echo isset($cdpcs1) ? $cdpcs1 : ''; ?>" name="cdpcs1"></td>
            <td><input id="FEYO_date_2" type="date" value="<?php echo isset($cdpce1) ? $cdpce1 : ''; ?>" name="cdpce1"></td>
            <td><input id="FEYO_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEYO_3" type="text" value="<?php echo isset($cdd2) ? $cdd2 : ''; ?>" name="cdd2"></td>
            <td>
                <select id="FEYO_select_2" name="cdd_2">
                    <option value = "<?php echo isset($cdd_2) ? $cdd_2 : "None"; ?>">
                        <?php echo isset($cdd_2) ? $cdd_2 : "Select Option"; ?>
                    </option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_4" type="text" value="<?php echo isset($cdny2) ? $cdny2 : ''; ?>" name="cdny2"></td>
            <td><input id="FEYO_date_3" type="date" value="<?php echo isset($cdpcs2) ? $cdpcs2 : ''; ?>" name="cdpcs2"></td>
            <td><input id="FEYO_date_4" type="date" value="<?php echo isset($cdpce2) ? $cdpce2 : ''; ?>" name="cdpce2"></td>
            <td><input id="FEYO_result_2" type="text" readonly></td>
        </tr>
        <tr>
            <td><input id="FEYO_5" type="text" value="<?php echo isset($cdd3) ? $cdd3 : ''; ?>" name="cdd3"></td>
            <td>
                <select id="FEYO_select_3" name="cdd_3">
                    <option value = "<?php echo isset($cdd_3) ? $cdd_3 : "None"; ?>">
                        <?php echo isset($cdd_3) ? $cdd_3 : "Select Option"; ?>
                    </option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_6" type="text" value="<?php echo isset($cdny3) ? $cdny3 : ''; ?>" name="cdny3"></td>
            <td><input id="FEYO_date_5" type="date" value="<?php echo isset($cdpcs3) ? $cdpcs3 : ''; ?>" name="cdpcs3"></td>
            <td><input id="FEYO_date_6" type="date" value="<?php echo isset($cdpce3) ? $cdpce3 : ''; ?>" name="cdpce3"></td>
            <td><input id="FEYO_result_3" type="text" readonly></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>Total:</td>
            <td><input id="FEYO_result_total" name="FEYO_score" type="text" readonly></td>
            <td>
                <button onclick="calcCriterionD_FEYO()" type="button">Calculate</button>
            </td>
        </tr>
    </table>
    <br><br><br>

    <div class="form__btns">
        <button name="submit_btn" type="submit">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>
</body>
</html>

<script>
    function calcCriterionC() {

        const FEA_1 = document.getElementById('FEA_1').value
        const FEA_selection_1 = document.getElementById('FEA_selection_1').value
        const FEA_2 = document.getElementById('FEA_2').value
        const FEA_date_1 = document.getElementById('FEA_date_1').value
        const FEA_3 = document.getElementById('FEA_3').value
        const FEA_result_1 = document.getElementById('FEA_result_1')

        if (FEA_1 && FEA_selection_1 && FEA_2 && FEA_date_1 && FEA_3) {
            FEA_result_1.value = FEA_selection_1 === "institutional" ? 2 :
                FEA_selection_1 === "local" ? 3 :
                    FEA_selection_1 === "regional" ? 4 : 0
        } else {
            FEA_result_1.value = 0;
        }

        const FEA_4 = document.getElementById('FEA_4').value
        const FEA_selection_2 = document.getElementById('FEA_selection_2').value
        const FEA_5 = document.getElementById('FEA_5').value
        const FEA_date_2 = document.getElementById('FEA_date_2').value
        const FEA_6 = document.getElementById('FEA_6').value
        const FEA_result_2 = document.getElementById('FEA_result_2')

        if (FEA_4 && FEA_selection_2 && FEA_5 && FEA_date_2 && FEA_6) {
            FEA_result_2.value = FEA_selection_2 === "institutional" ? 2 :
                FEA_selection_2 === "local" ? 3 :
                    FEA_selection_2 === "regional" ? 4 : 0
        } else {
            FEA_result_2.value = 0;
        }

        const FEA_7 = document.getElementById('FEA_7').value
        const FEA_selection_3 = document.getElementById('FEA_selection_3').value
        const FEA_8 = document.getElementById('FEA_8').value
        const FEA_date_3 = document.getElementById('FEA_date_3').value
        const FEA_9 = document.getElementById('FEA_9').value
        const FEA_result_3 = document.getElementById('FEA_result_3')

        if (FEA_7 && FEA_selection_3 && FEA_8 && FEA_date_3 && FEA_9) {
            FEA_result_3.value = FEA_selection_3 === "institutional" ? 2 :
                FEA_selection_3 === "local" ? 3 :
                    FEA_selection_3 === "regional" ? 4 : 0
        } else {
            FEA_result_3.value = 0;
        }

        const FEA_result_total = document.getElementById('FEA_result_total')
        FEA_result_total.value = parseFloat(FEA_result_1.value) + parseFloat(FEA_result_2.value) + parseFloat(FEA_result_3.value);

    }

    function calcCriterionD_FEY() {

        const FEY_select_1 = document.getElementById('FEY_select_1').value
        const FEY_1 = document.getElementById('FEY_1').value
        const FEY_2 = document.getElementById('FEY_2').value
        const FEY_date_1 = document.getElementById('FEY_date_1').value
        const FEY_date_2 = document.getElementById('FEY_date_2').value
        const FEY_result_1 = document.getElementById('FEY_result_1')

        if (FEY_select_1 && FEY_1 && FEY_2 && FEY_date_1 && FEY_date_2) {
            FEY_result_1.value = (FEY_select_1 === "president" ? FEY_2 * 5 :
                    FEY_select_1 === "vice_president" ? FEY_2 * 4 :
                        FEY_select_1 === "department" ? FEY_2 * 3 :
                            FEY_select_1 === "faculty" ? FEY_2 * 2 : 0
            )
        } else {
            FEY_result_1.value = 0;
        }

        const FEY_select_2 = document.getElementById('FEY_select_2').value
        const FEY_3 = document.getElementById('FEY_3').value
        const FEY_4 = document.getElementById('FEY_4').value
        const FEY_date_3 = document.getElementById('FEY_date_3').value
        const FEY_date_4 = document.getElementById('FEY_date_4').value
        const FEY_result_2 = document.getElementById('FEY_result_2')

        if (FEY_select_2 && FEY_3 && FEY_4 && FEY_date_3 && FEY_date_4) {
            FEY_result_2.value = (FEY_select_2 === "president" ? FEY_4 * 5 :
                    FEY_select_2 === "vice_president" ? FEY_4 * 4 :
                        FEY_select_2 === "department" ? FEY_4 * 3 :
                            FEY_select_2 === "faculty" ? FEY_4 * 2 : 0
            )
        } else {
            FEY_result_2.value = 0;
        }

        const FEY_select_3 = document.getElementById('FEY_select_3').value
        const FEY_5 = document.getElementById('FEY_5').value
        const FEY_6 = document.getElementById('FEY_6').value
        const FEY_date_5 = document.getElementById('FEY_date_5').value
        const FEY_date_6 = document.getElementById('FEY_date_6').value
        const FEY_result_3 = document.getElementById('FEY_result_3')

        if (FEY_select_3 && FEY_5 && FEY_6 && FEY_date_5 && FEY_date_6) {
            FEY_result_3.value = (FEY_select_3 === "president" ? FEY_6 * 5 :
                    FEY_select_3 === "vice_president" ? FEY_6 * 4 :
                        FEY_select_3 === "department" ? FEY_6 * 3 :
                            FEY_select_3 === "faculty" ? FEY_6 * 2 : 0
            )
        } else {
            FEY_result_3.value = 0;
        }

        const FEY_result_total = document.getElementById('FEY_result_total')
        FEY_result_total.value = parseFloat(FEY_result_1.value) + parseFloat(FEY_result_2.value) + parseFloat(FEY_result_3.value);
    }

    function calcCriterionD_FEYO() {

        const FEYO_select_1 = document.getElementById('FEYO_select_1').value
        const FEYO_1 = document.getElementById('FEYO_1').value
        const FEYO_2 = document.getElementById('FEYO_2').value
        const FEYO_date_1 = document.getElementById('FEYO_date_1').value
        const FEYO_date_2 = document.getElementById('FEYO_date_2').value
        const FEYO_result_1 = document.getElementById('FEYO_result_1')

        if (FEYO_select_1 && FEYO_1 && FEYO_2 && FEYO_date_1 && FEYO_date_2) {
            FEYO_result_1.value = (
                FEYO_select_1 === "managerial" ? FEYO_2 * 4 :
                    FEYO_select_1 === "technical" ? FEYO_2 * 3 :
                        FEYO_select_1 === "support" ? FEYO_2 * 2 : 0
            )
        } else {
            FEYO_result_1.value = 0;
        }

        const FEYO_select_2 = document.getElementById('FEYO_select_2').value
        const FEYO_3 = document.getElementById('FEYO_3').value
        const FEYO_4 = document.getElementById('FEYO_4').value
        const FEYO_date_3 = document.getElementById('FEYO_date_3').value
        const FEYO_date_4 = document.getElementById('FEYO_date_4').value
        const FEYO_result_2 = document.getElementById('FEYO_result_2')

        if (FEYO_select_2 && FEYO_3 && FEYO_4 && FEYO_date_3 && FEYO_date_4) {
            FEYO_result_2.value = (
                FEYO_select_2 === "managerial" ? FEYO_4 * 4 :
                    FEYO_select_2 === "technical" ? FEYO_4 * 3 :
                        FEYO_select_2 === "support" ? FEYO_4 * 2 : 0
            )
        } else {
            FEYO_result_2.value = 0;
        }

        const FEYO_select_3 = document.getElementById('FEYO_select_3').value
        const FEYO_5 = document.getElementById('FEYO_5').value
        const FEYO_6 = document.getElementById('FEYO_6').value
        const FEYO_date_5 = document.getElementById('FEYO_date_5').value
        const FEYO_date_6 = document.getElementById('FEYO_date_6').value
        const FEYO_result_3 = document.getElementById('FEYO_result_3')

        if (FEYO_select_3 && FEYO_5 && FEYO_6 && FEYO_date_5 && FEYO_date_6) {
            FEYO_result_3.value = (
                FEYO_select_3 === "managerial" ? FEYO_6 * 4 :
                    FEYO_select_3 === "technical" ? FEYO_6 * 3 :
                        FEYO_select_3 === "support" ? FEYO_6 * 2 : 0
            )
        } else {
            FEYO_result_3.value = 0;
        }

        const FEYO_result_total = document.getElementById('FEYO_result_total')
        FEYO_result_total.value = parseFloat(FEYO_result_1.value) + parseFloat(FEYO_result_2.value) + parseFloat(FEYO_result_3.value);
    }
</script>