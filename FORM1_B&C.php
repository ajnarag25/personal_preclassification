<?php
include 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

if (isset($_POST['Submit_btn'])) {
    $id = $_SESSION['user']['user_id'];
    $sole_author = $_POST['sole_author'];
    $co_author = $_POST['co_author'];
    $acad_prog = $_POST['acad_prog'];
    $adviser = $_POST['adviser'];
    $panel = $_POST['panel'];
    $mentor = $_POST['mentor'];

    if ($sole_author == "" AND $co_author == "" AND $acad_prog == "" AND $adviser == "" AND $panel == "" AND $mentor == "") {
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
        $conn->query("UPDATE kra_1 SET Crit_B_sole_autho = '$sole_author', 
                 Crit_B_co_autho = '$co_author', 
                 Crit_B_academe = '$acad_prog', 
                 Crit_B_total = Crit_B_co_autho + Crit_B_sole_autho + Crit_B_academe,
                 Crit_B_total_allowed = 
                     IF(Crit_B_total > 30, 30, Crit_B_total), 
                 Crit_C_Adviser = '$adviser', 
                 Crit_C_Panel = '$panel', 
                 Crit_C_Mentor = '$mentor',
                 Crit_C_total = Crit_C_Adviser + Crit_C_Panel + Crit_C_Mentor,
                 Crit_C_total_allowed = IF(Crit_C_total > 30, 30, Crit_C_total) ,
                 Total_kra_1 =  Crit_A_total + Crit_B_total + Crit_C_total,
                 Total_kra_1_allowed = IF(Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed > 100, 100, Crit_A_total_allowed + Crit_B_total_allowed + Crit_C_total_allowed)
             WHERE id = $id") or die($conn->error);
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
    <link rel="stylesheet" href="./CSS/FORM1_B&C.css">
    <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>FORM1_B&C</title>
</head>

<style>
    @font-face {
        font-family: Inter;
        src: url(./fonts/Inter-VariableFont_slnt,wght.ttf);
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Inter;
        text-decoration: none;
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

    table {
        margin: auto;
    }

    .title {
        text-align: center;
    }

    .page_title {
        margin-left: 90px;
        font-style: italic;
    }


    .row__des td {
        padding: 3px;
        color: white;
        background-color: #7d0201;
    }

    h2 {
        padding: 6px;
    }

    button {
        border: none;
        background-color: #dbd7d7;
        font-size: 20px;
    }

    td, input, select, option {
        background-color: #dbd7d7;
    }

    tr {
        text-align: center;
    }

    .hidden {
        display: none;
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
    }

</style>
<body>
<form action="FORM1_B&C.php" method="post">
    <h1 class="title">CRITERION B - CURRICULUM AND INSTRUCTIONAL MATERIALS DEVELOPMENT (MAX = 30 POINTS) </h1>

    <br> <br>

    <h2>1. FOR EVERY INSTRUCTIONAL MATERIAL DEVELOPED AND APPROVED FOR USE</h2>
    <h2 class="page_title">1.1 Sole Authorship</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Instructional Material</td>
            <td>Type of Instructional Material</td>
            <td>Reviewer or Its Equivalent</td>
            <td>Publisher/ Repository</td>
            <td>Date Published (mm/dd/yyyy)</td>
            <td>Date Approved for Use (mm/dd/yyyy)</td>
            <td>Faculty Score</td>
        </tr>


        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__SA__1">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="SA-FS__1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__SA__2">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="SA-FS__2" readonly type="text"></td>
        </tr>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__SA__3">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="SA-FS__3" readonly type="text"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" onclick="total_SA()">Calculate</button>
            </td>
            <td><b> TOTAL: </b></td>
            <td><input type="text" name="sole_author" id="finale_SA" readonly></td>
        </tr>
    </table>

    <br><br><br>


    <h2 class="page_title">1.2 Co-authorship</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Instructional Material</td>
            <td>Type of Instructional Material</td>
            <td>Reviewer or Its Equivalent</td>
            <td>Publisher/ Repository</td>
            <td>Date Published (mm/dd/yyyy)</td>
            <td>Date Approved for Use (mm/dd/yyyy)</td>
            <td>% Contribution</td>
            <td>Faculty Score</td>
        </tr>


        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__CA__1">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="CA__cont__1" type="text"></td>
            <td><input id="CA-FS__1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__CA__2">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="CA__cont__2" type="text"></td>
            <td><input id="CA-FS__2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="type__IM__CA__3">
                    <option value="None">Select Option</option>
                    <option value="Textbook">Textbook</option>
                    <option value="Textbook Chapter">Textbook Chapter</option>
                    <option value="Manual/Module/Workbook">Manual/Module/Workbook</option>
                    <option value="MultiMedia Teaching Material">MultiMedia Teaching Material</option>
                    <option value="Testing Material">Testing Material</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input id="CA__cont__3" type="text"></td>
            <td><input id="CA-FS__3" readonly type="text"></td>
        </tr>
        <tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" onclick="CoAuthor()">Calculate</button>
            </td>
            <td><b> TOTAL: </b></td>
            <td><input type="text" name="co_author" id="resultCoAuthor" readonly></td>
        </tr>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2. Academic Programs Developed/Revised and Implemented</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Academic Degree Program</td>
            <td>Type of Program</td>
            <td>Board Approval <br>
                (Board Reso. No.)
            </td>
            <td>Academic Year <br>
                Implemented
            </td>
            <td>Role</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">New Program</option>
                    <option value="">Revised Program</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">2019-2020</option>
                    <option value="">2020-2021</option>
                    <option value="">2021-2022</option>
                    <option value="">2022-2023</option>
                </select>
            </td>
            <td>
                <select name="" id="select__role__1">
                    <option value="none">Select Option</option>
                    <option value="Lead">Lead</option>
                    <option value="Contributor">Contributor</option>
                </select>
            </td>
            <td><input type="text" id="Acad__res__1" readonly></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">New Program</option>
                    <option value="">Revised Program</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">2019-2020</option>
                    <option value="">2020-2021</option>
                    <option value="">2021-2022</option>
                    <option value="">2022-2023</option>
                </select>
            </td>
            <td>
                <select name="" id="select__role__2">
                    <option value="none">Select Option</option>
                    <option value="Lead">Lead</option>
                    <option value="Contributor">Contributor</option>
                </select>
            </td>
            <td><input type="text" id="Acad__res__2" readonly></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">New Program</option>
                    <option value="">Revised Program</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">2019-2020</option>
                    <option value="">2020-2021</option>
                    <option value="">2021-2022</option>
                    <option value="">2022-2023</option>
                </select>
            </td>
            <td>
                <select name="" id="select__role__3">
                    <option value="none">Select Option</option>
                    <option value="Lead">Lead</option>
                    <option value="Contributor">Contributor</option>
                </select>
            </td>
            <td><input type="text" id="Acad__res__3" readonly></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc__acads()">Calculate</button>
            </td>
            <td><b> TOTAL: </b></td>
            <td><input id="finale_acads" name="acad_prog" type="text" readonly></td>
        </tr>
    </table>
    <br>

    <br><br><br><br><br>

    <h1 class="title">CRITERION C - THESIS, DISSERTATION AND MENTORSHIP SERVICES (MAX = 10 POINTS)</h1>

    <br><br><br>
    <h2 class="page_title">1.1 For Services Rendered To Students As: (Adviser)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Requirement(s)</td>
            <td colspan="4">No. Of Student Advisee</td>
            <td>Faculty Score</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>AY 2019-2020</td>
            <td>AY 2020-2021</td>
            <td>AY 2021-2022</td>
            <td>AY 2022-2023</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>SPECIAL/CAPSTONE PROJECT</td>
            <td><input type="text" id="SCP__AY1__1"></td>
            <td><input type="text" id="SCP__AY2__2"></td>
            <td><input type="text" id="SCP__AY3__3"></td>
            <td><input type="text" id="SCP__AY4__4"></td>
            <td><input type="text" readonly id="SCP_res"></td>
        </tr>

        <tr>
            <td>2</td>
            <td>UNDERGRADUATE THESIS</td>
            <td><input type="text" id="UG1"></td>
            <td><input type="text" id="UG2"></td>
            <td><input type="text" id="UG3"></td>
            <td><input type="text" id="UG4"></td>
            <td><input type="text" readonly id="UG_res"></td>
        </tr>

        <tr>
            <td>3</td>
            <td>MASTER'S THESIS</td>
            <td><input type="text" name="" id="MT1"></td>
            <td><input type="text" name="" id="MT2"></td>
            <td><input type="text" name="" id="MT3"></td>
            <td><input type="text" name="" id="MT4"></td>
            <td><input type="text" id="MT_res" readonly></td>
        </tr>

        <tr>
            <td>4</td>
            <td>DISSERTATION</td>
            <td><input type="text" name="" id="DT1"></td>
            <td><input type="text" name="" id="DT2"></td>
            <td><input type="text" name="" id="DT3"></td>
            <td><input type="text" name="" id="DT4"></td>
            <td><input type="text" id="DT_res" readonly></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcu__adv()">Calculate</button>
            </td>
            <td><b>TOTAL: </b></td>
            <td><input id="crit__C__adviser" name="adviser" type="text" readonly></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.2 For Services Rendered To Students As: (Panel)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Requirement(s)</td>
            <td colspan="4">No. Of Student Advisee</td>
            <td>Faculty Score</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>AY 2019-2020</td>
            <td>AY 2020-2021</td>
            <td>AY 2021-2022</td>
            <td>AY 2022-2023</td>
            <td></td>
        </tr>
        <tr>
            <td>1</td>
            <td>SPECIAL/CAPSTONE PROJECT</td>
            <td><input type="text" id="SCP_21"></td>
            <td><input type="text" id="SCP_22"></td>
            <td><input type="text" id="SCP_23"></td>
            <td><input type="text" id="SCP_24"></td>
            <td><input readonly type="text" id="SCP2__res"></td>
        </tr>

        <tr>
            <td>2</td>
            <td>UNDERGRADUATE THESIS</td>
            <td><input type="text" id="UT2_1"></td>
            <td><input type="text" id="UT2_2"></td>
            <td><input type="text" id="UT2_3"></td>
            <td><input type="text" id="UT2_4"></td>
            <td><input readonly type="text" id="UT2__res"></td>
        </tr>

        <tr>
            <td>3</td>
            <td>MASTER'S THESIS</td>
            <td><input reuired type="text" id="MT2_1"></td>
            <td><input type="text" id="MT2_2"></td>
            <td><input type="text" id="MT2_3"></td>
            <td><input type="text" id="MT2_4"></td>
            <td><input readonly type="text" id="MT2__res"></td>
        </tr>

        <tr>
            <td>4</td>
            <td>DISSERTATION</td>
            <td><input type="text" id="DIS_1"></td>
            <td><input type="text" id="DIS_2"></td>
            <td><input type="text" id="DIS_3"></td>
            <td><input type="text" id="DIS_4"></td>
            <td><input readonly type="text" id="DIS__res"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button type="button" onclick="calcu__panel()">Calculate</button>
            </td>
            <td><b> TOTAL: </b></td>
            <td><input type="text" name="panel" id="panel__res" readonly></td>
        </tr>
    </table>
    <br>


    <br><br><br>

    <h2 class="page_title">2. For Services as Mentor</h2>

    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Academic Competition</td>
            <td>Name of Sponsor Organization</td>
            <td>Award Recieved</td>
            <td>Date Awarded</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input type="text" id="ment_inp"></td>
            <td><input type="text" id="ment_inp1"></td>
            <td><input type="text" id="ment_inp2"></td>
            <td><input type="date" id="ment_inp3"></td>
            <td><input type="text" id="Mentor_scr1" readonly></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text" id="ment_inp4"></td>
            <td><input type="text" id="ment_inp5"></td>
            <td><input type="text" id="ment_inp6"></td>
            <td><input type="date" id="ment_inp7"></td>
            <td><input type="text" id="Mentor_scr2" readonly></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text" id="ment_inp8"></td>
            <td><input type="text" id="ment_inp9"></td>
            <td><input type="text" id="ment_inp10"></td>
            <td><input type="date" id="ment_inp11"></td>
            <td><input type="text" id="Mentor_scr3" readonly></td>
        </tr>
        <tr>
            <td>4</td>
            <td><input type="text" id="ment_inp12"></td>
            <td><input type="text" id="ment_inp13"></td>
            <td><input type="text" id="ment_inp14"></td>
            <td><input type="date" id="ment_inp15"></td>
            <td><input type="text" id="Mentor_scr4" readonly></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" id="calculateButton" onclick="calc_SAM()">Calculate</button>
            </td>
            <td><b> TOTAL: </b></td>
            <td><input id="result" name="mentor" type="text" readonly></td>
        </tr>
    </table>
    <br><br>

    <div class="form__btns">
        <button name="Submit_btn">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>

</body>

<script>
    // 1st line
    const select__IM__SA__1 = document.getElementById("type__IM__SA__1")
    const sole_autho_FS__1 = document.querySelector("#SA-FS__1")
    select__IM__SA__1.addEventListener("change", () => {
        if (select__IM__SA__1.value.toLowerCase() === "none") {
            sole_autho_FS__1.value = 0;
        } else if (select__IM__SA__1.value.toLowerCase() === "textbook") {
            sole_autho_FS__1.value = 30;
        } else if (select__IM__SA__1.value.toLowerCase() === "textbook chapter") {
            sole_autho_FS__1.value = 10;
        } else if (select__IM__SA__1.value.toLowerCase() === "manual/module/workbook") {
            sole_autho_FS__1.value = 16;
        } else if (select__IM__SA__1.value.toLowerCase() === "multimedia teaching material") {
            sole_autho_FS__1.value = 16;
        } else if (select__IM__SA__1.value.toLowerCase() === "testing material") {
            sole_autho_FS__1.value = 10;
        }
    });

    // 2nd Line
    const select__IM__SA__2 = document.getElementById("type__IM__SA__2")
    const sole_autho_FS__2 = document.querySelector("#SA-FS__2")

    select__IM__SA__2.addEventListener("change", () => {
        if (select__IM__SA__2.value.toLowerCase() === "none") {
            sole_autho_FS__2.value = 0;
        } else if (select__IM__SA__2.value.toLowerCase() === "textbook") {
            sole_autho_FS__2.value = 30;
        } else if (select__IM__SA__2.value.toLowerCase() === "textbook chapter") {
            sole_autho_FS__2.value = 10;
        } else if (select__IM__SA__2.value.toLowerCase() === "manual/module/workbook") {
            sole_autho_FS__2.value = 16;
        } else if (select__IM__SA__2.value.toLowerCase() === "multimedia teaching material") {
            sole_autho_FS__2.value = 16;
        } else if (select__IM__SA__2.value.toLowerCase() === "testing material") {
            sole_autho_FS__2.value = 10;
        }
    });

    // 3rd Line
    const select__IM__SA__3 = document.getElementById("type__IM__SA__3")
    const sole_autho_FS__3 = document.querySelector("#SA-FS__3")

    select__IM__SA__3.addEventListener("change", () => {
        if (select__IM__SA__3.value.toLowerCase() === "none") {
            sole_autho_FS__3.value = 0;
        } else if (select__IM__SA__3.value.toLowerCase() === "textbook") {
            sole_autho_FS__3.value = 30;
        } else if (select__IM__SA__3.value.toLowerCase() === "textbook chapter") {
            sole_autho_FS__3.value = 10;
        } else if (select__IM__SA__3.value.toLowerCase() === "manual/module/workbook") {
            sole_autho_FS__3.value = 16;
        } else if (select__IM__SA__3.value.toLowerCase() === "multimedia teaching material") {
            sole_autho_FS__3.value = 16;
        } else if (select__IM__SA__3.value.toLowerCase() === "testing material") {
            sole_autho_FS__3.value = 10;
        }
    });

    // * Calculate the total score
    function total_SA() {

        if (select__IM__SA__1.value === 'None') {
            sole_autho_FS__1.value = 0;
        }

        if (select__IM__SA__2.value === 'None') {
            sole_autho_FS__2.value = 0;
        }

        if (select__IM__SA__3.value === 'None') {
            sole_autho_FS__3.value = 0;
        }

        const finale = document.getElementById("finale_SA")
        const line_1 = document.getElementById("SA-FS__1").value
        const line_2 = document.getElementById("SA-FS__2").value
        const line_3 = document.getElementById("SA-FS__3").value

        // finale.value = parseFloat(line_1) + parseFloat(line_2) + parseFloat(line_3);
        if (line_1 && line_2 && line_3) {
            finale.value = parseFloat(line_1) + parseFloat(line_2) + parseFloat(line_3);
        } else {
            finale.value = 0;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // * Co-authorship down here


    const select__IM__CA__1 = document.getElementById("type__IM__CA__1");
    const contribution = document.getElementById("CA__cont__1");
    const co_autho_FS__1 = document.querySelector("#CA-FS__1");

    select__IM__CA__1.addEventListener("change", () => {
        updateCoAuthoFS();
    });

    contribution.addEventListener("input", () => {
        updateCoAuthoFS();
    });

    function updateCoAuthoFS() {
        const contributionValue = parseFloat(contribution.value);

        if (isNaN(contributionValue) || select__IM__CA__1.value.toLowerCase() === "none") {
            co_autho_FS__1.value = "0";
            return;
        }

        if (select__IM__CA__1.value.toLowerCase() === "textbook") {
            const set_val1 = (30 * contributionValue) / 100;
            co_autho_FS__1.value = set_val1;
        } else if (select__IM__CA__1.value.toLowerCase() === "textbook chapter") {
            const set_val1 = (10 * contributionValue) / 100;
            co_autho_FS__1.value = set_val1;
        } else if (select__IM__CA__1.value.toLowerCase() === "manual/module/workbook") {
            const set_val1 = (16 * contributionValue) / 100;
            co_autho_FS__1.value = set_val1;
        } else if (select__IM__CA__1.value.toLowerCase() === "multimedia teaching material") {
            const set_val1 = (16 * contributionValue) / 100;
            co_autho_FS__1.value = set_val1;
        } else if (select__IM__CA__1.value.toLowerCase() === "testing material") {
            const set_val1 = (10 * contributionValue) / 100;
            co_autho_FS__1.value = set_val1;
        }
    }

    const select__IM__CA__2 = document.getElementById("type__IM__CA__2");
    const contribution2 = document.getElementById("CA__cont__2");
    const co_autho_FS__2 = document.querySelector("#CA-FS__2");

    select__IM__CA__2.addEventListener("change", () => {
        updateCoAuthoFS2();
    });

    contribution2.addEventListener("input", () => {
        updateCoAuthoFS2();
    });

    function updateCoAuthoFS2() {
        const contributionValue2 = parseFloat(contribution2.value);

        if (isNaN(contributionValue2) || select__IM__CA__2.value.toLowerCase() === "none") {
            co_autho_FS__2.value = "";
            return;
        }

        if (select__IM__CA__2.value.toLowerCase() === "textbook") {
            const set_val2 = (30 * contributionValue2) / 100;
            co_autho_FS__2.value = set_val2;
        } else if (select__IM__CA__2.value.toLowerCase() === "textbook chapter") {
            const set_val2 = (10 * contributionValue2) / 100;
            co_autho_FS__2.value = set_val2;
        } else if (select__IM__CA__2.value.toLowerCase() === "manual/module/workbook") {
            const set_val2 = (16 * contributionValue2) / 100;
            co_autho_FS__2.value = set_val2;
        } else if (select__IM__CA__2.value.toLowerCase() === "multimedia teaching material") {
            const set_val2 = (16 * contributionValue2) / 100;
            co_autho_FS__2.value = set_val2;
        } else if (select__IM__CA__2.value.toLowerCase() === "testing material") {
            const set_val2 = (10 * contributionValue2) / 100;
            co_autho_FS__2.value = set_val2;
        }
    }

    const select__IM__CA__3 = document.getElementById("type__IM__CA__3");
    const contribution3 = document.getElementById("CA__cont__3");
    const co_autho_FS__3 = document.querySelector("#CA-FS__3");

    select__IM__CA__3.addEventListener("change", () => {
        updateCoAuthoFS3();
    });

    contribution3.addEventListener("input", () => {
        updateCoAuthoFS3();
    });

    function updateCoAuthoFS3() {
        const contributionValue3 = parseFloat(contribution3.value);

        if (isNaN(contributionValue3) || select__IM__CA__3.value.toLowerCase() === "none") {
            co_autho_FS__3.value = "";
            return;
        }

        if (select__IM__CA__3.value.toLowerCase() === "textbook") {
            const set_val3 = (30 * contributionValue3) / 100;
            co_autho_FS__3.value = set_val3;
        } else if (select__IM__CA__3.value.toLowerCase() === "textbook chapter") {
            const set_val3 = (10 * contributionValue3) / 100;
            co_autho_FS__3.value = set_val3;
        } else if (select__IM__CA__3.value.toLowerCase() === "manual/module/workbook") {
            const set_val3 = (16 * contributionValue3) / 100;
            co_autho_FS__3.value = set_val3;
        } else if (select__IM__CA__3.value.toLowerCase() === "multimedia teaching material") {
            const set_val3 = (16 * contributionValue3) / 100;
            co_autho_FS__3.value = set_val3;
        } else if (select__IM__CA__3.value.toLowerCase() === "testing material") {
            const set_val3 = (10 * contributionValue3) / 100;
            co_autho_FS__3.value = set_val3;
        }
    }

    function CoAuthor() {
        if (select__IM__CA__1.value === 'None') {
            co_autho_FS__1.value = 0;
        }

        if (select__IM__CA__2.value === 'None') {
            co_autho_FS__2.value = 0;
        }

        if (select__IM__CA__3.value === 'None') {
            co_autho_FS__3.value = 0;
        }

        const finale = document.getElementById("resultCoAuthor")
        const line_1 = document.getElementById("CA-FS__1").value
        const line_2 = document.getElementById("CA-FS__2").value
        const line_3 = document.getElementById("CA-FS__3").value

        if (line_1 && line_2 && line_3) {
            finale.value = parseFloat(line_1) + parseFloat(line_2) + parseFloat(line_3);
        } else {
            finale.value = 0;
        }
    }

    // const type__IM__CA__2 = document.getElementById('type__IM__CA__2');
    //   // const cont = document.getElementById('CA__cont__1') //@param myparam ????
    //   const CO_FS__2 = document.getElementById('CA-FS__2')
    //   type__IM__CA__1.addEventListener("change", () => {
    //   if (type__IM__CA__1.value.toLowerCase() === "none") {
    //     CO_FS__1.value = 30;
    //   }else if (type__IM__CA__1.value.toLowerCase() === "textbook") {
    //     CO_FS__1.value = 30;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "textbook chapter") {
    //     CO_FS__1.value = 10;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "manual/module/workbook") {
    //     CO_FS__1.value = 16;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "multimedia teaching material") {
    //     CO_FS__1.value = 16;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "testing material") {
    //     CO_FS__1.value = 10;
    //   }
    // });

    // const type__IM__CA__1 = document.getElementById('type__IM__CA__1');
    //   // const cont = document.getElementById('CA__cont__1') //@param myparam ????
    //   const CO_FS__1 = document.getElementById('CA-FS__1')
    //   type__IM__CA__1.addEventListener("change", () => {
    //   if (type__IM__CA__1.value.toLowerCase() === "none") {
    //     CO_FS__1.value = 30;
    //   }else if (type__IM__CA__1.value.toLowerCase() === "textbook") {
    //     CO_FS__1.value = 30;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "textbook chapter") {
    //     CO_FS__1.value = 10;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "manual/module/workbook") {
    //     CO_FS__1.value = 16;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "multimedia teaching material") {
    //     CO_FS__1.value = 16;
    //   } else if (type__IM__CA__1.value.toLowerCase() === "testing material") {
    //     CO_FS__1.value = 10;
    //   }
    // });


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    const select__role__1 = document.getElementById("select__role__1")
    const acad__res__1 = document.getElementById("Acad__res__1")

    select__role__1.addEventListener("change", () => {
        if (select__role__1.value.toLowerCase() === "none") {
            acad__res__1.value = 0
        } else if (select__role__1.value.toLowerCase() === "lead") {
            acad__res__1.value = 10.00
        } else if (select__role__1.value.toLowerCase() === "contributor") {
            acad__res__1.value = 5.00
        }
    })


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    const select__role__2 = document.getElementById("select__role__2")
    const acad__res__2 = document.getElementById("Acad__res__2")

    select__role__2.addEventListener("change", () => {
        if (select__role__2.value.toLowerCase() === "none") {
            acad__res__2.value = 0
        } else if (select__role__2.value.toLowerCase() === "lead") {
            acad__res__2.value = 10.00
        } else if (select__role__2.value.toLowerCase() === "contributor") {
            acad__res__2.value = 5.00
        }
    })
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const select__role__3 = document.getElementById("select__role__3")
    const acad__res__3 = document.getElementById("Acad__res__3")

    select__role__3.addEventListener("change", () => {
        if (select__role__3.value.toLowerCase() === "none") {
            acad__res__3.value = 0
        } else if (select__role__3.value.toLowerCase() === "lead") {
            acad__res__3.value = 10.00
        } else if (select__role__3.value.toLowerCase() === "contributor") {
            acad__res__3.value = 5.00
        }
    })

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // * Calculate the total score for acads section
    function calc__acads() {

        if (select__role__1.value === 'none') {
            acad__res__1.value = 0;
        }

        if (select__role__2.value === 'none') {
            acad__res__2.value = 0;
        }

        if (select__role__3.value === 'none') {
            acad__res__3.value = 0;
        }

        const finale = document.getElementById("finale_acads")
        const num1 = document.getElementById("Acad__res__1").value
        const num2 = document.getElementById("Acad__res__2").value
        const num3 = document.getElementById("Acad__res__3").value


        if (num1 && num2 && num3) {
            finale.value = parseFloat(num1) + parseFloat(num2) + parseFloat(num3)
        } else {
            finale.value = 0;
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // * DONE
    function calcu__adv() {
        //  	SPECIAL/CAPSTONE PROJECT line
        let num1 = document.getElementById("SCP__AY1__1").value
        let num2 = document.getElementById("SCP__AY2__2").value
        let num3 = document.getElementById("SCP__AY3__3").value
        let num4 = document.getElementById("SCP__AY4__4").value
        let num5 = document.getElementById("SCP_res")

        if (num1 === '') {
            num1 = 0;
        }
        if (num2 === '') {
            num2 = 0;
        }
        if (num3 === '') {
            num3 = 0;
        }
        if (num4 === '') {
            num4 = 0;
        }

        num5.value = (parseFloat(num1) + parseFloat(num2) + parseFloat(num3) + parseFloat(num4)) * 3;

// 	UNDERGRADUATE THESIS line
        let num6 = document.getElementById("UG1").value
        let num7 = document.getElementById("UG2").value
        let num8 = document.getElementById("UG3").value
        let num9 = document.getElementById("UG4").value
        let num10 = document.getElementById("UG_res")

        if (num6 === '') {
            num6 = 0;
        }
        if (num7 === '') {
            num7 = 0;
        }
        if (num8 === '') {
            num8 = 0;
        }
        if (num9 === '') {
            num9 = 0;
        }

        num10.value = (parseFloat(num6) + parseFloat(num7) + parseFloat(num8) + parseFloat(num9)) * 5;

// 	MASTER'S THESIS line
        let num11 = document.getElementById("MT1").value
        let num12 = document.getElementById("MT2").value
        let num13 = document.getElementById("MT3").value
        let num14 = document.getElementById("MT4").value
        let num15 = document.getElementById("MT_res")

        if (num11 === '') {
            num11 = 0;
        }
        if (num12 === '') {
            num12 = 0;
        }
        if (num13 === '') {
            num13 = 0;
        }
        if (num14 === '') {
            num14 = 0;
        }

        num15.value = (parseFloat(num11) + parseFloat(num12) + parseFloat(num13) + parseFloat(num14)) * 8;

// 	DISSERTATION line
        let num16 = document.getElementById("DT1").value
        let num17 = document.getElementById("DT2").value
        let num18 = document.getElementById("DT3").value
        let num19 = document.getElementById("DT4").value
        let num20 = document.getElementById("DT_res")

        if (num16 === '') {
            num16 = 0;
        }
        if (num17 === '') {
            num17 = 0;
        }
        if (num18 === '') {
            num18 = 0;
        }
        if (num19 === '') {
            num19 = 0;
        }

        num20.value = (parseFloat(num16) + parseFloat(num17) + parseFloat(num18) + parseFloat(num19)) * 10;

//Formula
//         var SCP_res = (num1 + num2 + num3 + num4) * 3
//         num5.value = SCP_res
//
//         var UG_res = (num6 + num7 + num8 + num9) * 5
//         num10.value = UG_res
//
//         var MT_res = (num11 + num12 + num13 + num14) * 8
//         num15.value = MT_res
//
//         var DT_res = (num16 + num17 + num18 + num19) * 10
//         num20.value = DT_res

        const le__finale = document.getElementById("crit__C__adviser")
        le__finale.value = parseFloat(num5.value) + parseFloat(num10.value) + parseFloat(num15.value) + parseFloat(num20.value)
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // * DONE

    function calcu__panel() {
        //something here
        let num1 = document.getElementById("SCP_21").value
        let num2 = document.getElementById("SCP_22").value
        let num3 = document.getElementById("SCP_23").value
        let num4 = document.getElementById("SCP_24").value
        let res1 = document.getElementById("SCP2__res")

        if (num1 === '') {
            num1 = 0;
        }
        if (num2 === '') {
            num2 = 0;
        }
        if (num3 === '') {
            num3 = 0;
        }
        if (num4 === '') {
            num4 = 0;
        }

        res1.value = parseFloat(num1) + parseFloat(num2) + parseFloat(num3) + parseFloat(num4);

        let num5 = document.getElementById("UT2_1").value
        let num6 = document.getElementById("UT2_2").value
        let num7 = document.getElementById("UT2_3").value
        let num8 = document.getElementById("UT2_4").value
        let res2 = document.getElementById("UT2__res")

        if (num5 === '') {
            num5 = 0;
        }
        if (num6 === '') {
            num6 = 0;
        }
        if (num7 === '') {
            num7 = 0;
        }
        if (num8 === '') {
            num8 = 0;
        }

        res2.value = parseFloat(num5) + parseFloat(num6) + parseFloat(num7) + parseFloat(num8);

        let num9 = document.getElementById("MT2_1").value
        let num10 = document.getElementById("MT2_2").value
        let num11 = document.getElementById("MT2_3").value
        let num12 = document.getElementById("MT2_4").value
        let res3 = document.getElementById("MT2__res");

        if (num9 === '') {
            num9 = 0;
        }
        if (num10 === '') {
            num10 = 0;
        }
        if (num11 === '') {
            num11 = 0;
        }
        if (num12 === '') {
            num12 = 0;
        }

        res3.value = (parseFloat(num9) + parseFloat(num10) + parseFloat(num11) + parseFloat(num12)) * 2;

        let num13 = document.getElementById("DIS_1").value
        let num14 = document.getElementById("DIS_2").value
        let num15 = document.getElementById("DIS_3").value
        let num16 = document.getElementById("DIS_4").value
        let res4 = document.getElementById("DIS__res");

        if (num13 === '') {
            num13 = 0;
        }
        if (num14 === '') {
            num14 = 0;
        }
        if (num15 === '') {
            num15 = 0;
        }
        if (num16 === '') {
            num16 = 0;
        }

        res4.value = (parseFloat(num13) + parseFloat(num14) + parseFloat(num15) + parseFloat(num16)) * 2;

        const le__finale = document.getElementById("panel__res")
        le__finale.value = parseFloat(res1.value) + parseFloat(res2.value) + parseFloat(res3.value) + parseFloat(res4.value)
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    // ? Bro this is not the algorithm i want


    function calc_SAM() {
        const ment_inp = document.getElementById('ment_inp').value
        const ment_inp1 = document.getElementById('ment_inp1').value
        const ment_inp2 = document.getElementById('ment_inp2').value
        const ment_inp3 = document.getElementById('ment_inp3').value
        const res1 = document.getElementById('Mentor_scr1')
        if (ment_inp !== "" && ment_inp1 !== "" && ment_inp2 !== "" && ment_inp3 !== "") {
            res1.value = 3;
        } else {
            res1.value = 0;
        }

        const ment_inp4 = document.getElementById('ment_inp4').value
        const ment_inp5 = document.getElementById('ment_inp5').value
        const ment_inp6 = document.getElementById('ment_inp6').value
        const ment_inp7 = document.getElementById('ment_inp7').value
        const res2 = document.getElementById('Mentor_scr2');

        if (ment_inp4 !== "" && ment_inp5 !== "" && ment_inp6 !== "" && ment_inp7 !== "") {
            res2.value = 3;
        } else {
            res2.value = 0;
        }

        const ment_inp8 = document.getElementById('ment_inp8').value
        const ment_inp9 = document.getElementById('ment_inp9').value
        const ment_inp10 = document.getElementById('ment_inp10').value
        const ment_inp11 = document.getElementById('ment_inp11').value
        const res3 = document.getElementById('Mentor_scr3');
        if (ment_inp8 !== "" && ment_inp9 !== "" && ment_inp10 !== "" && ment_inp11 !== "") {
            res3.value = 3;
        } else {
            res3.value = 0;
        }

        const ment_inp12 = document.getElementById('ment_inp12').value
        const ment_inp13 = document.getElementById('ment_inp13').value
        const ment_inp14 = document.getElementById('ment_inp14').value
        const ment_inp15 = document.getElementById('ment_inp15').value
        const res4 = document.getElementById('Mentor_scr4');

        if (ment_inp12 !== "" && ment_inp13 !== "" && ment_inp14 !== "" && ment_inp15 !== "") {
            res4.value = 3;
        } else {
            res4.value = 0;
        }
        document.getElementById('result').value = parseFloat(res1.value) + parseFloat(res2.value) + parseFloat(res3.value) + parseFloat(res4.value)
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    //Parsing data from JS front-end to JSON file


</script>
</html>
