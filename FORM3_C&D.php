<?php
require 'functions.php';
if (isset($_POST['Submit_btn'])) {
    $scoreStudent = $_POST['score_student'];
    $scoreAdmin = $_POST['score_admin'];
    if ($scoreStudent == "" or $scoreAdmin == "") {
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
            "UPDATE kra_3 SET 
                 Crit_C_1 = '$scoreStudent',
                 Crit_C_total = '$scoreStudent',
                 Crit_C_total_allowed = IF(Crit_C_total > 20, 20, Crit_C_total),
                 Crit_D_1  = '$scoreAdmin',
                 Crit_D_total = '$scoreAdmin',
                 Crit_D_total_allowed = IF(Crit_D_total > 20, 20, Crit_D_total),
                 KRA3_total = Crit_A_total + Crit_B_total + Crit_C_total + Crit_D_total,
                 KRA3_total_allowed = IF(KRA3_total > 100, 100, KRA3_total)
             WHERE KRA3_ID = 1") or die($conn->error);
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
    <title>FORM3_C&D</title>
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
<form method="POST" action="FORM3_C&D.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION C - QUALITY OF EXTENSION SERVICES (MAX = 20 POINTS)</h1>
    <h2 class="page_title">1. CLIENT SATISFACTION RATING FOR OUTREACH AND EXTENSION PROJECTS</h2>
    <div class="Form1_A">
        <div id="Form1_A_student">
            <table>
                <tr class="row__des">
                    <td>Deductible</td>
                    <td>Value</td>
                </tr>
                <tr>
                    <td>Number of semesters to be deducted from the divisor</td>
                    <td>
                        <select id="semesters">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Reason for deducting the divisor</td>
                    <td>
                        <select id="reason">
                            <option value="none">Select Option</option>
                            <option value="not_applicable">Not Applicable</option>
                            <option value="study_leave">On Approved Study Leave</option>
                            <option value="sabbatical_leave">On Approved Sabbatical Leave</option>
                            <option value="maternity_leave">On Approved Maternity Leave</option>
                        </select>
                    </td>
                </tr>
            </table>

            <table>
                <tr class="row__des">
                    <td>Evaluation Period</td>
                    <td>1st Semester</td>
                    <td>2nd Semester</td>
                </tr>
                <tr>
                    <td>AY 2019-2020</td>
                    <td><input type="number" id="A1-1" required min="0" max="100"></td>
                    <td><input type="number" id="A1-2" required min="0" max="100"></td>
                </tr>
                <tr>
                    <td>AY 2020-2021</td>
                    <td><input type="number" id="A2-1" required min="0" max="100"></td>
                    <td><input type="number" id="A2-2" required min="0" max="100"></td>
                </tr>
                <tr>
                    <td>AY 2021-2022</td>
                    <td><input type="number" id="A3-1" required min="0" max="100"></td>
                    <td><input type="number" id="A3-2" required min="0" max="100"></td>
                </tr>
                <tr>
                    <td>AY 2022-2023</td>
                    <td><input type="number" id="A4-1" required min="0" max="100"></td>
                    <td><input type="number" id="A4-2" required min="0" max="100"></td>
                </tr>
                <tr>
                    <td colspan="1">Faculty Score:</td>
                    <td><input type="text" readonly id="FS__stud" name="score_student"></td>
                    <td>
                        <button onclick="calcu_client()" type="button">Calculate</button>
                    </td>
                </tr>
            </table>
            <br>
        </div>

    </div>

    <br><br><br>
    <h1 class="title">CRITERION D - BONUS CRITERION (MAX = 20 POINTS)</h1>
    <h2 class="page_title">1. FOR ADMINISTRATIVE DESIGNATION</h2>
    <h2 class="page_title">1.1 HIGHEST ADMINISTRATIVE DESIGNATION HELD FOR AT LEAST ONE YEAR WITH THE EVALUATION
        PERIOD</h2>
    <table>
        <tr class="row__des">
            <td>Designation</td>
            <td>Effectivity Period <br>
                (mm/dd/yyyy to mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>
                <select name="" id="AM1">
                    <option value="none">Select Option</option>
                    <option value="President">President</option>
                    <option value="Vice_president">Vice-President</option>
                    <option value="Chancellor">Chancellor</option>
                    <option value="Vice_chancellor">Vice-Chancellor</option>
                    <option value="Campus_director">Campus Director</option>
                    <option value="Faculty_regent">Faculty Regent</option>
                    <option value="Office_director">Office Director</option>
                    <option value="University_secretary">University/College Secretary</option>
                    <option value="Project_head">Project Head</option>
                    <option value="Institution_chair">Institution-level Committee Chair</option>
                    <option value="Institution_member">Institution-level Committee Member</option>
                    <option value="Dean">Dean</option>
                    <option value="Associate_dean">Associate Dean</option>
                    <option value="College_secretary">College Secretary</option>
                    <option value="Department_head">Department Head</option>
                    <option value="Program_chair">Program Chair/Project Head</option>
                    <option value="Department_chair">Department-level Committee Chair</option>
                    <option value="Department_member">Department-level Committee Member</option>
                </select>
            </td>
            <td><input id="AM2" type="date"></td>
            <td><input id="AM_res" name="score_admin" type="text" readonly></td>
        </tr>
        <!--    <tr>-->
        <!--        <td>-->
        <!--            <button onclick="calcu_admin()">Calculate</button>-->
        <!--        </td>-->
        <!--        <td colspan="">Total:</td>-->
        <!--        <td><input type="text" readonly id="AM_res1" name=""></td>-->
        <!--    </tr>-->
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
    const AM1 = document.getElementById('AM1')
    const AM2 = document.getElementById('AM2')
    const AMResult = document.getElementById('AM_res')
    AM1.addEventListener("change", () => {
        if (AM1.value !== '' && AM2.value !== '') {
            AMResult.value = (
                AM1.value === "President" ? 20 :
                    AM1.value === "Vice_president" ? 15 :
                        AM1.value === "Chancellor" ? 10 :
                            AM1.value === "Vice_chancellor" || AM1.value === "Campus_director" || AM1.value === "Faculty_regent" ? 8 :
                                AM1.value === "Office_director" || AM1.value === "University_secretary" || AM1.value === "Dean" ? 6 :
                                    AM1.value === "Project_head" || AM1.value === "Department_head" ? 4 :
                                        AM1.value === "Institution_chair" || AM1.value === "College_secretary" || AM1.value === "Program_chair" ? 3 :
                                            AM1.value === "Institution_member" || AM1.value === "Department_chair" ? 2 :
                                                AM1.value === "Associate_dean" ? 5 :
                                                    AM1.value === "Department_member" ? 1 : 0

            )

        } else {
            AMResult.value = 0;
        }
    });

    AM2.addEventListener("change", () => {
        if (AM1.value !== '' && AM2.value !== '') {
            AMResult.value = (
                AM1.value === "President" ? 20 :
                    AM1.value === "Vice_president" ? 15 :
                        AM1.value === "Chancellor" ? 10 :
                            AM1.value === "Vice_chancellor" || AM1.value === "Campus_director" || AM1.value === "Faculty_regent" ? 8 :
                                AM1.value === "Office_director" || AM1.value === "University_secretary" || AM1.value === "Dean" ? 6 :
                                    AM1.value === "Project_head" || AM1.value === "Department_head" ? 4 :
                                        AM1.value === "Institution_chair" || AM1.value === "College_secretary" || AM1.value === "Program_chair" ? 3 :
                                            AM1.value === "Institution_member" || AM1.value === "Department_chair" ? 2 :
                                                AM1.value === "Associate_dean" ? 5 :
                                                    AM1.value === "Department_member" ? 1 : 0
            )

        } else {
            AMResult.value = 0;
        }
    });

    function calcu_client() {
        const A1 = parseFloat(document.getElementById("A1-1").value);
        const A2 = parseFloat(document.getElementById("A1-2").value);
        const A3 = parseFloat(document.getElementById("A2-1").value);
        const A4 = parseFloat(document.getElementById("A2-2").value);
        const A5 = parseFloat(document.getElementById("A3-1").value);
        const A6 = parseFloat(document.getElementById("A3-2").value);
        const A7 = parseFloat(document.getElementById("A4-1").value);
        const A8 = parseFloat(document.getElementById("A4-2").value);
        const sem1Sum = A1 + A3 + A5 + A7;
        const sem2Sum = A2 + A4 + A6 + A8;
        const sem1Avg = sem1Sum / 4;
        const sem2Avg = sem2Sum / 4;
        const overallSemAvg = (sem1Avg + sem2Avg) / 2;
        const semesters = document.getElementById('semesters').value;
        const reason = document.getElementById('reason').value;
        const clientSatisfactionRatingScore = document.getElementById('FS__stud');

        if (reason === 'none' || reason === 'not_applicable') {
            clientSatisfactionRatingScore.value = (overallSemAvg / 100) * 20;
        } else if (reason === 'study_leave' || reason === 'sabbatical_leave' || reason === 'maternity_leave') {
            clientSatisfactionRatingScore.value = (((sem1Sum + sem2Sum) / (8 - semesters)) / 100 * 20).toFixed(2);
        }
    }
</script>