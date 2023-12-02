<?php
require 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

if (isset($_POST['submit_btn'])) {
    $id = $_SESSION['user']['user_id'];
    $scoreFEA = $_POST['FEA_score'];
    $scoreFEY = $_POST['FEY_score'];
    $scoreFEYO = $_POST['FEYO_score'];
    $scoreDTotal = $scoreFEY + $scoreFEYO;
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
                    title: 'Please provide the required faculty score',
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

    body {
        background: url('./Assets/KRA_files_bg.jpg');
        background-size: cover;
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
            <td><input id="FEA_1" type="text"></td>
            <td>
                <select id="FEA_selection_1" name="">
                    <option value="none">Select Option</option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_2" type="text"></td>
            <td><input id="FEA_date_1" type="date"></td>
            <td><input id="FEA_3" type="text"></td>
            <td><input id="FEA_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEA_4" type="text"></td>
            <td>
                <select id="FEA_selection_2" name="">
                    <option value="none">Select Option</option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_5" type="text"></td>
            <td><input id="FEA_date_2" type="date"></td>
            <td><input id="FEA_6" type="text"></td>
            <td><input id="FEA_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEA_7" type="text"></td>
            <td>
                <select id="FEA_selection_3" name="">
                    <option value="none">Select Option</option>
                    <option value="institutional">Institutional</option>
                    <option value="regional">Regional</option>
                    <option value="local">Local</option>
                </select>
            </td>
            <td><input id="FEA_8" type="text"></td>
            <td><input id="FEA_date_3" type="date"></td>
            <td><input id="FEA_9" type="text"></td>
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
                <select id="FEY_select_1" name="">
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_1" type="text"></td>
            <td><input id="FEY_2" type="text"></td>
            <td><input id="FEY_date_1" type="date"></td>
            <td><input id="FEY_date_2" type="date"></td>
            <td><input id="FEY_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="FEY_select_2" name="">
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_3" type="text"></td>
            <td><input id="FEY_4" type="text"></td>
            <td><input id="FEY_date_3" type="date"></td>
            <td><input id="FEY_date_4" type="date"></td>
            <td><input id="FEY_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="FEY_select_3" name="">
                    <option value="president">President</option>
                    <option value="vice_president">Vice-President</option>
                    <option value="department">Department</option>
                    <option value="faculty">Faculty Member</option>
                </select>
            </td>
            <td><input id="FEY_5" type="text"></td>
            <td><input id="FEY_6" type="text"></td>
            <td><input id="FEY_date_5" type="date"></td>
            <td><input id="FEY_date_6" type="date"></td>
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
            <td><input id="FEYO_1" type="text"></td>
            <td>
                <select id="FEYO_select_1" name="">
                    <option value="none">Select Option</option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_2" type="text"></td>
            <td><input id="FEYO_date_1" type="date"></td>
            <td><input id="FEYO_date_2" type="date"></td>
            <td><input id="FEYO_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEYO_3" type="text"></td>
            <td>
                <select id="FEYO_select_2" name="">
                    <option value="none">Select Option</option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_4" type="text"></td>
            <td><input id="FEYO_date_3" type="date"></td>
            <td><input id="FEYO_date_4" type="date"></td>
            <td><input id="FEYO_result_2" type="text" readonly></td>
        </tr>
        <tr>
            <td><input id="FEYO_5" type="text"></td>
            <td>
                <select id="FEYO_select_3" name="">
                    <option value="none">Select Option</option>
                    <option value="managerial">Managerial/Supervisory</option>
                    <option value="technical">Technical/Skilled</option>
                    <option value="support">Support/Administrative</option>
                </select>
            </td>
            <td><input id="FEYO_6" type="text"></td>
            <td><input id="FEYO_date_5" type="date"></td>
            <td><input id="FEYO_date_6" type="date"></td>
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