<?php

require 'functions.php';

if (isset($_POST['submit_btn'])) {

    $scoreFTE = $_POST['FTE_final_res'];
    $scoreTIG = $_POST['TIG_finale_res'];
    $scoreSIA = $_POST['SIA_result_total'];
    $scoreSAJ = $_POST['SAJ_result_total'];
    $scoreSAASC = $_POST['SAASC_result_total'];
    $scoreSTM_1 = $_POST['STM_1'];
    $scoreSTM_2 = $_POST['STM_2'];
    $scoreSTM_3 = $_POST['STM_3'];
    $scoreSTM_4 = $_POST['STM_4'];
    $scoreSTM_total = $_POST['STM_total_result'];
    $scoreFOEH = $_POST['FOEH_result_total'];
    $scoreFESOP = $_POST['FESOP_result_total'];


    if (
        empty($scoreFTE) &&
        empty($scoreTIG) &&
        empty($scoreSIA) &&
        empty($scoreSAJ) &&
        empty($scoreSAASC) &&
        empty($scoreSTM_total) &&
        empty($scoreFOEH) &&
        empty($scoreFESOP)

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
            "UPDATE kra_3 SET 
                 Crit_A_LNAP = '$scoreFTE',
                 Crit_A_CTIG = '$scoreTIG',
                 Crit_A_total = Crit_A_LNAP + Crit_A_CTIG,
                 `Crit_B_1.1` = '$scoreSIA',
                 `Crit_B_1.2` = '$scoreSAJ',
                 `Crit_B_1.3` = '$scoreSAASC',
                 `Crit_B_1.4.1` = '$scoreSTM_1',
                 `Crit_B_1.4.2` = '$scoreSTM_2',
                 `Crit_B_1.4.3` = '$scoreSTM_3',
                 `Crit_B_1.4.4` = '$scoreSTM_4',
                 `Crit_B_1.5` = '$scoreFOEH',
                 `Crit_B_2.1` = '$scoreFESOP',
                 Crit_B_total = `Crit_B_1.1` + `Crit_B_1.2` + `Crit_B_1.3` + `Crit_B_1.4.1` + `Crit_B_1.4.2` + `Crit_B_1.4.3` + `Crit_B_1.4.4` + `Crit_B_1.5` + `Crit_B_2.1`,
                 KRA3_total = Crit_A_total + Crit_B_total + Crit_C_total + Crit_D_total
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
    <title>FORM3_A&B</title>
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
<form method="POST" action="FORM3_A&B.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION A - SERVICE TO THE INSTITUTION (MAX = 30 POINTS)</h1>
    <br><br><br>
    <h2 class="page_title">1. For Every Successful Linkage, Networking Or Partnership Activity</h2>
    <table>
        <tr class="row__des">
            <td>Name of Partner</td>
            <td>Nature of Partnership</td>
            <td>Faculty role in the forging of partnership</td>
            <td colspan="2">MOA</td>
            <td>Activities conducted based on MOA</td>
            <td>Date of activity</td>
            <td>Faculty Score</td>
        </tr>

        <tr class="row__des">
            <td colspan="3"></td>
            <td>Start</td>
            <td>End</td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td><input id="FTE1" type="text"></td>
            <td><input id="FTE2" type="text"></td>
            <td>
                <select name="" id="FTE3">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="assis">Assistant Coordinator</option>
                </select>
            </td>
            <td><input id="FTE4" type="date"></td>
            <td><input id="FTE5" type="date"></td>
            <td><input id="FTE6" type="text"></td>
            <td><input id="FTE7" type="date"></td>
            <td><input id="FTE_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="FTE21" type="text"></td>
            <td><input id="FTE22" type="text"></td>
            <td>
                <select name="" id="FTE23">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="assis">Assistant Coordinator</option>
                </select>
            </td>
            <td><input id="FTE24" type="date"></td>
            <td><input id="FTE25" type="date"></td>
            <td><input id="FTE26" type="text"></td>
            <td><input id="FTE27" type="date"></td>
            <td><input id="FTE_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="FTE31" type="text"></td>
            <td><input id="FTE32" type="text"></td>
            <td>
                <select name="" id="FTE33">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="assis">Assistant Coordinator</option>
                </select>
            </td>
            <td><input id="FTE34" type="date"></td>
            <td><input id="FTE35" type="date"></td>
            <td><input id="FTE36" type="text"></td>
            <td><input id="FTE37" type="date"></td>
            <td><input id="FTE_res3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button onclick="Calcu_FTE()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FTE_final_res" name="FTE_final_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2. Total Contribution To Income Generation</h2>
    <table>

        <tr class="row__des">
            <td>Name of the Commercialized Product, <br>
                Funded Project, or Project with Industry
            </td>
            <td>Role</td>
            <td>Coverage Period <br>
                (mm/dd/yyyy to mm/dd/yyyy)
            </td>
            <td>Total Amount</td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td><input id="TIG4" type="text"></td>
            <td>
                <select name="" id="TIG1">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="co-cont">Co-contributor</option>
                </select>
            </td>
            <td><input id="TIG2" type="date"></td>
            <td><input id="TIG3" type="text"></td>
            <td><input id="TIG_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="TIG24" type="text"></td>
            <td>
                <select name="" id="TIG21">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="co-cont">Co-contributor</option>
                </select>
            </td>
            <td><input id="TIG22" type="date"></td>
            <td><input id="TIG23" type="text"></td>
            <td><input id="TIG_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="TIG34" type="text"></td>
            <td>
                <select name="" id="TIG31">
                    <option value="none">Select Option</option>
                    <option value="lead">Lead Coordinator</option>
                    <option value="co-cont">Co-contributor</option>
                </select>
            </td>
            <td><input id="TIG32" type="date"></td>
            <td><input id="TIG33" type="text"></td>
            <td><input id="TIG_res3" readonly type="text"></td>
        </tr>

        <td colspan="2"></td>
        <td>
            <button onclick="calcu_TIG()" type="button">Calculate</button>
        </td>
        <td>Total:</td>
        <td><input id="TIG_finale_res" name="TIG_finale_res" readonly type="text"></td>
        </tr>

    </table>

    <br><br><br><br><br>

    <h1 class="title">CRITERION B - SERVICE TO THE COMMUNITY (MAX = 50 POINTS)</h1>

    <br><br><br>

    <h2 class="page_title">1. Professional/expertise-based Services</h2>
    <h2 class="page_title">1.1 Services In Accreditation, Evaluation, Assessment Works And Other Related Education Qa
        Activities</h2>
    <table>
        <tr class="row__des">
            <td>Name of Agency/Organization</td>
            <td colspan="2">Appointment Period</td>
            <td>QA-related Services Provided</td>
            <td>Scope</td>
            <td>No. of Deployment</td>
            <td>Faculty Points</td>
        </tr>

        <tr class="row__des">
            <td></td>
            <td>Start</td>
            <td>End</td>
            <td colspan="4"></td>
        </tr>

        <tr>
            <td><input id="SIA_1" type="text"></td>
            <td><input id="SIA_2" type="date"></td>
            <td><input id="SIA_3" type="date"></td>
            <td><input id="SIA_4" type="text"></td>
            <td>
                <select name="" id="SIA_5">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="int">International</option>
                </select>
            </td>
            <td><input id="SIA_6" type="text"></td>
            <td><input id="SIA_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SIA_7" type="text"></td>
            <td><input id="SIA_8" type="date"></td>
            <td><input id="SIA_9" type="date"></td>
            <td><input id="SIA_10" type="text"></td>
            <td>
                <select id="SIA_11" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="int">International</option>
                </select>
            </td>
            <td><input id="SIA_12" type="text"></td>
            <td><input id="SIA_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SIA_13" type="text"></td>
            <td><input id="SIA_14" type="date"></td>
            <td><input id="SIA_15" type="date"></td>
            <td><input id="SIA_16" type="text"></td>
            <td>
                <select id="SIA_17" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="int">International</option>
                </select>
            </td>
            <td><input id="SIA_18" type="text"></td>
            <td><input id="SIA_result_3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button onclick="calc_SIA()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="SIA_result_total" name="SIA_result_total" type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.2 Services As Judge Or Examiner For Local/international Research Awards And Academic
        Competitions</h2>
    <table>
        <tr class="row__des">
            <td>Title of the Event/Activity</td>
            <td>Organizer</td>
            <td>Date of Event <br>
                (mm/dd/yyyy)
            </td>
            <td>Nature of the Award</td>
            <td>Venue</td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td><input id="SAJ_1" type="text"></td>
            <td><input id="SAJ_2" type="text"></td>
            <td><input id="SAJ_3" type="date"></td>
            <td><select id="SAJ_selection_1">
                    <option value="none">Select option</option>
                    <option value="academic">Academic Competition</option>
                    <option value="research">Research Award</option>
                </select>
            </td>
            <td><input id="SAJ_5" type="text"></td>
            <td><input id="SAJ_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SAJ_6" type="text"></td>
            <td><input id="SAJ_7" type="text"></td>
            <td><input id="SAJ_8" type="date"></td>
            <td><select id="SAJ_selection_2">
                    <option value="none">Select option</option>
                    <option value="academic">Academic Competition</option>
                    <option value="research">Research Award</option>
                </select>
            </td>
            <td><input id="SAJ_10" type="text"></td>
            <td><input id="SAJ_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SAJ_11" type="text"></td>
            <td><input id="SAJ_12" type="text"></td>
            <td><input id="SAJ_13" type="date"></td>
            <td><select id="SAJ_selection_3">
                    <option value="none">Select option</option>
                    <option value="academic">Academic Competition</option>
                    <option value="research">Research Award</option>
                </select>
            </td>
            <td><input id="SAJ_15" type="text"></td>
            <td><input id="SAJ_result_3" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SAJ_16" type="text"></td>
            <td><input id="SAJ_17" type="text"></td>
            <td><input id="SAJ_18" type="date"></td>
            <td><select id="SAJ_selection_4">
                    <option value="none">Select option</option>
                    <option value="academic">Academic Competition</option>
                    <option value="research">Research Award</option>
                </select>
            </td>
            <td><input id="SAJ_20" type="text"></td>
            <td><input id="SAJ_result_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button onclick="calc_SAJ()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="SAJ_result_total" name="SAJ_result_total" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.3 For Services As A Short-term Consultant/expert</h2>
    <table>
        <tr class="row__des">
            <td>Title of the Project/Consultancy</td>
            <td>Name of Organization</td>
            <td colspan="2">Period of Engagement</td>
            <td>Scope</td>
            <td>Role</td>
            <td>Faculty Points</td>
        </tr>

        <tr class="row__des">
            <td colspan="2"></td>
            <td>Start</td>
            <td>End</td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td><input id="SAASC_1" type="text"></td>
            <td><input id="SAASC_2" type="text"></td>
            <td><input id="SAASC_3" type="text"></td>
            <td><input id="SAASC_4" type="text"></td>
            <td>
                <select name="" id="SAASC_5">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="SAASC_6" type="text"></td>
            <td><input id="SAASC_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SAASC_7" type="text"></td>
            <td><input id="SAASC_8" type="text"></td>
            <td><input id="SAASC_9" type="text"></td>
            <td><input id="SAASC_10" type="text"></td>
            <td>
                <select name="" id="SAASC_11">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="SAASC_12" type="text"></td>
            <td><input id="SAASC_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="SAASC_13" type="text"></td>
            <td><input id="SAASC_14" type="text"></td>
            <td><input id="SAASC_15" type="text"></td>
            <td><input id="SAASC_16" type="text"></td>
            <td>
                <select name="" id="SAASC_17">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="SAASC_18" type="text"></td>
            <td><input id="SAASC_result_3" readonly type="text"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td>
                <button onclick="calc_SAASC()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="SAASC_result_total" name="SAASC_result_total" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.4 Services Through Media As:</h2>
    <table>
        <tr class="row__des">
            <td>Services</td>
            <td>Name of Media</td>
            <td>Title of Newspaper Column or TV/Radio Program</td>
            <td>Period of Engagement <br>
                (mm/dd/yyyy to mm/dd/yyyy)
            </td>
            <td>No. of engagements</td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td>Writer of occasional newspaper column</td>
            <td><input id="STM_1" type="text"></td>
            <td><input id="STM_2" type="text"></td>
            <td><input id="STM_3" type="text"></td>
            <td><input id="STM_4" type="text"></td>
            <td><input id="STM_total_1" name="STM_1" readonly type="text"></td>
        </tr>

        <tr>
            <td>Writer of regular newspaper column</td>
            <td><input id="STM_5" type="text"></td>
            <td><input id="STM_6" type="text"></td>
            <td><input id="STM_7" type="text"></td>
            <td><input id="STM_8" type="text"></td>
            <td><input id="STM_total_2" name="STM_2" readonly type="text"></td>
        </tr>

        <tr>
            <td>Host of TV/Radio Program</td>
            <td><input id="STM_9" type="text"></td>
            <td><input id="STM_10" type="text"></td>
            <td><input id="STM_11" type="text"></td>
            <td><input id="STM_12" type="text"></td>
            <td><input id="STM_total_3" name="STM_3" readonly type="text"></td>
        </tr>

        <tr>
            <td>Guesting as technical expert for TV or radio program/print media/online media</td>
            <td><input id="STM_13" type="text"></td>
            <td><input id="STM_14" type="text"></td>
            <td><input id="STM_15" type="text"></td>
            <td><input id="STM_16" type="text"></td>
            <td><input id="STM_total_4" name="STM_4" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button onclick="calc_STM()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="STM_total_result" name="STM_total_result" readonly type="text"></td>
        </tr>
    </table>
    <br><br><br>

    <h2 class="page_title">1.5 For Every Hour Of Training Course, Seminar, Workshop Conducted As A Resource Person,
        Convenor, Facilitator, Moderator, Keynote/plenary Speaker Or Panelist</h2>
    <table>
        <tr class="row__des">
            <td>Title of the Training</td>
            <td>Type of Participation</td>
            <td>Organizer</td>
            <td colspan="2">Period of Engagement</td>
            <td>Scope</td>
            <td>Total No. of Hours</td>
            <td>Faculty Points</td>
        </tr>

        <tr class="row__des">
            <td colspan="3"></td>
            <td>Start Date</td>
            <td>End Date</td>
            <td colspan="3"></td>
        </tr>

        <tr>
            <td><input id="FOEH_1" type="text"></td>
            <td><input id="FOEH_2" type="text"></td>
            <td><input id="FOEH_3" type="text"></td>
            <td><input id="FOEH_4" type="date" name=""></td>
            <td><input id="FOEH_5" type="date" name=""></td>
            <td>
                <select id="FOEH_6" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FOEH_7" type="text"></td>
            <td><input id="FOEH_result_1" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="FOEH_8" type="text"></td>
            <td><input id="FOEH_9" type="text"></td>
            <td><input id="FOEH_10" type="text"></td>
            <td><input id="FOEH_11" type="date" name=""></td>
            <td><input id="FOEH_12" type="date" name=""></td>
            <td>
                <select id="FOEH_13" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FOEH_14" type="text"></td>
            <td><input id="FOEH_result_2" readonly type="text"></td>
        </tr>

        <tr>
            <td><input id="FOEH_15" type="text"></td>
            <td><input id="FOEH_16" type="text"></td>
            <td><input id="FOEH_17" type="text"></td>
            <td><input id="FOEH_18" type="date" name=""></td>
            <td><input id="FOEH_19" type="date" name=""></td>
            <td>
                <select id="FOEH_20" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FOEH_21" type="text"></td>
            <td><input id="FOEH_result_3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button onclick="calc_FOEH()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FOEH_result_total" name="FOEH_result_total" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2. Institutional Social Responsibility</h2>
    <h2 class="page_title">2.1 For Every Service-oriented Project In The Community Participated, Including Advocacy
        Initiatives</h2>
    <table>
        <tr class="row__des">
            <td>Name of Community Extension Activity</td>
            <td>Name of Community</td>
            <td>No. of Beneficiaries</td>
            <td>Role</td>
            <td>Activity Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td><input id="FESOP_1" type="text"></td>
            <td><input id="FESOP_2" type="text"></td>
            <td><input id="FESOP_3" type="text"></td>
            <td>
                <select id="FESOP_4" name="">
                    <option value="none">Select Option</option>
                    <option value="head">Head</option>
                    <option value="participant">Participant</option>
                </select>
            </td>
            <td><input id="FESOP_5" type="text"></td>
            <td><input id="FESOP_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FESOP_6" type="text"></td>
            <td><input id="FESOP_7" type="text"></td>
            <td><input id="FESOP_8" type="text"></td>
            <td>
                <select id="FESOP_9" name="">
                    <option value="none">Select Option</option>
                    <option value="head">Head</option>
                    <option value="participant">Participant</option>
                </select>
            </td>
            <td><input id="FESOP_10" type="text"></td>
            <td><input id="FESOP_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FESOP_11" type="text"></td>
            <td><input id="FESOP_12" type="text"></td>
            <td><input id="FESOP_13" type="text"></td>
            <td>
                <select id="FESOP_14" name="">
                    <option value="none">Select Option</option>
                    <option value="head">Head</option>
                    <option value="participant">Participant</option>
                </select>
            </td>
            <td><input id="FESOP_15" type="text"></td>
            <td><input id="FESOP_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FESOP_16" type="text"></td>
            <td><input id="FESOP_17" type="text"></td>
            <td><input id="FESOP_18" type="text"></td>
            <td>
                <select id="FESOP_19" name="">
                    <option value="none">Select Option</option>
                    <option value="head">Head</option>
                    <option value="participant">Participant</option>
                </select>
            </td>
            <td><input id="FESOP_20" type="text"></td>
            <td><input id="FESOP_result_4" type="text" readonly></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>
                <button onclick="calc_FESOP()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input id="FESOP_result_total" name="FESOP_result_total" readonly type="text"></td>
        </tr>

    </table>
    <br><br>

    <div class="form__btns">
        <button name="submit_btn" type="submit">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>
</body>
</html>


<script>

    function Calcu_FTE() {
        const var1 = document.getElementById('FTE1').value
        const var2 = document.getElementById('FTE2').value
        const var3 = document.getElementById('FTE3').value
        const var4 = document.getElementById('FTE4').value
        const var5 = document.getElementById('FTE5').value
        const var6 = document.getElementById('FTE6').value
        const var7 = document.getElementById('FTE7').value
        const the_Res1 = document.getElementById('FTE_res1')
        if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "" && var5 !== "" && var6 !== "" && var7 !== "") {
            if (var3 === 'none') {
                the_Res1.value = 0;
            } else if (var3 === 'lead') {
                the_Res1.value = 5;
            } else if (var3 === 'assis') {
                the_Res1.value = 3;
            }
        } else {
            the_Res1.value = 0;
        }

        const test21 = document.getElementById('FTE21').value
        const test22 = document.getElementById('FTE22').value
        const test23 = document.getElementById('FTE23').value
        const test24 = document.getElementById('FTE24').value
        const test25 = document.getElementById('FTE25').value
        const test26 = document.getElementById('FTE26').value
        const test27 = document.getElementById('FTE27').value
        const the_Res2 = document.getElementById('FTE_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "" && test27 !== "") {
            if (test23 === 'none') {
                the_Res2.value = 0;
            } else if (test23 === 'lead') {
                the_Res2.value = 5;
            } else if (test23 === 'assis') {
                the_Res2.value = 3;
            }
        } else {
            the_Res2.value = 0;
        }


        const fgh31 = document.getElementById('FTE31').value
        const fgh32 = document.getElementById('FTE32').value
        const fgh33 = document.getElementById('FTE33').value
        const fgh34 = document.getElementById('FTE34').value
        const fgh35 = document.getElementById('FTE35').value
        const fgh36 = document.getElementById('FTE36').value
        const fgh37 = document.getElementById('FTE37').value
        const the_Res3 = document.getElementById('FTE_res3')
        if (fgh31 !== "" && fgh32 !== "" && fgh33 !== "" && fgh34 !== "" && fgh35 !== "" && fgh36 !== "" && fgh37 !== "") {
            if (fgh33 === 'none') {
                the_Res3.value = 0;
            } else if (fgh33 === 'lead') {
                the_Res3.value = 5;
            } else if (fgh33 === 'assis') {
                the_Res3.value = 3;
            }
        } else {
            the_Res3.value = 0;
        }

        document.getElementById('FTE_final_res').value = parseFloat(the_Res2.value) + parseFloat(the_Res3.value) + parseFloat(the_Res1.value)
    }


    function calcu_TIG() {
        const var1 = document.getElementById('TIG1').value
        const var2 = document.getElementById('TIG2').value
        const var3 = document.getElementById('TIG3').value
        const var4 = document.getElementById('TIG4').value
        const the_Res1 = document.getElementById('TIG_res1')
        if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "") {
            if (var1 === 'none') {
                the_Res1.value = 0;
            } else if (var1 === 'lead') {
                if (var3 <= 6000000) {
                    the_Res1.value = 6;
                } else if (var3 <= 12000000) {
                    the_Res1.value = 12;
                } else {
                    the_Res1.value = 18;
                }
            } else if (var1 === 'co-cont') {
                if (var3 <= 6000000) {
                    the_Res1.value = 3;
                } else if (var3 <= 12000000) {
                    the_Res1.value = 6;
                } else {
                    the_Res1.value = 9;
                }
            }
        } else {
            the_Res1.value = 0;
        }

        const test21 = document.getElementById('TIG24').value
        const test22 = document.getElementById('TIG21').value
        const test23 = document.getElementById('TIG23').value
        const test24 = document.getElementById('TIG22').value
        const the_Res2 = document.getElementById('TIG_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "") {
            if (test22 === 'none') {
                the_Res2.value = 0;
            } else if (test22 === 'lead') {
                if (test23 <= 6000000) {
                    the_Res2.value = 6;
                } else if (test23 <= 12000000) {
                    the_Res2.value = 12;
                } else {
                    the_Res2.value = 18;
                }
            } else if (test22 === 'co-cont') {
                if (test23 <= 6000000) {
                    the_Res2.value = 3;
                } else if (test23 <= 12000000) {
                    the_Res2.value = 6;
                } else {
                    the_Res2.value = 9;
                }
            }
        } else {
            the_Res2.value = 0;
        }


        const fgh31 = document.getElementById('TIG31').value
        const fgh32 = document.getElementById('TIG32').value
        const fgh33 = document.getElementById('TIG33').value
        const fgh34 = document.getElementById('TIG34').value
        const the_Res3 = document.getElementById('TIG_res3')
        if (fgh31 !== "" && fgh32 !== "" && fgh33 !== "" && fgh34 !== "") {
            if (fgh31 === 'none') {
                the_Res3.value = 0;
            } else if (fgh31 === 'lead') {
                if (fgh33 <= 6000000) {
                    the_Res3.value = 6;
                } else if (fgh33 <= 12000000) {
                    the_Res3.value = 12;
                } else {
                    the_Res3.value = 18;
                }
            } else if (fgh31 === 'co-cont') {
                if (fgh33 <= 6000000) {
                    the_Res3.value = 3;
                } else if (fgh33 <= 12000000) {
                    the_Res3.value = 6;
                } else {
                    the_Res3.value = 9;
                }
            }

        } else {
            the_Res3.value = 0;
        }

        document.getElementById('TIG_finale_res').value = parseFloat(the_Res2.value) + parseFloat(the_Res3.value) + parseFloat(the_Res1.value)
    }

    function calc_SIA() {
        const SIA_1 = document.getElementById('SIA_1').value
        const SIA_2 = document.getElementById('SIA_2').value
        const SIA_3 = document.getElementById('SIA_3').value
        const SIA_4 = document.getElementById('SIA_4').value
        const SIA_5 = document.getElementById('SIA_5').value
        const SIA_6 = document.getElementById('SIA_6').value
        const SIA_result_1 = document.getElementById('SIA_result_1')

        if (SIA_1 !== "" && SIA_2 !== "" && SIA_3 !== "" && SIA_4 !== "" && SIA_5 !== "" && SIA_6 !== "") {
            if (SIA_5 === 'none') {
                SIA_result_1.value = 0;
            } else if (SIA_5 === 'local') {
                SIA_result_1.value = 8;
            } else if (SIA_5 === 'int') {
                SIA_result_1.value = 10;
            }
        } else {
            SIA_result_1.value = 0;
        }

        const SIA_7 = document.getElementById('SIA_7').value
        const SIA_8 = document.getElementById('SIA_8').value
        const SIA_9 = document.getElementById('SIA_9').value
        const SIA_10 = document.getElementById('SIA_10').value
        const SIA_11 = document.getElementById('SIA_11').value
        const SIA_12 = document.getElementById('SIA_12').value
        const SIA_result_2 = document.getElementById('SIA_result_2')

        if (SIA_7 !== "" && SIA_8 !== "" && SIA_9 !== "" && SIA_10 !== "" && SIA_11 !== "" && SIA_12 !== "") {
            if (SIA_11 === 'none') {
                SIA_result_2.value = 0;
            } else if (SIA_11 === 'local') {
                SIA_result_2.value = 8;
            } else if (SIA_11 === 'int') {
                SIA_result_2.value = 10;
            }
        } else {
            SIA_result_2.value = 0;
        }

        const SIA_13 = document.getElementById('SIA_13').value
        const SIA_14 = document.getElementById('SIA_14').value
        const SIA_15 = document.getElementById('SIA_15').value
        const SIA_16 = document.getElementById('SIA_16').value
        const SIA_17 = document.getElementById('SIA_17').value
        const SIA_18 = document.getElementById('SIA_18').value
        const SIA_result_3 = document.getElementById('SIA_result_3')

        if (SIA_13 !== "" && SIA_14 !== "" && SIA_15 !== "" && SIA_16 !== "" && SIA_17 !== "" && SIA_18 !== "") {
            if (SIA_17 === 'none') {
                SIA_result_3.value = 0;
            } else if (SIA_17 === 'local') {
                SIA_result_3.value = 8;
            } else if (SIA_17 === 'int') {
                SIA_result_3.value = 10;
            }
        } else {
            SIA_result_3.value = 0;
        }

        document.getElementById('SIA_result_total').value = parseFloat(SIA_result_1.value) + parseFloat(SIA_result_2.value) + parseFloat(SIA_result_3.value);
    }

    function calc_SAJ() {
        const SAJ_1 = document.getElementById('SAJ_1').value
        const SAJ_2 = document.getElementById('SAJ_2').value
        const SAJ_3 = document.getElementById('SAJ_3').value
        const SAJ_selection_1 = document.getElementById('SAJ_selection_1').value
        const SAJ_5 = document.getElementById('SAJ_5').value
        const SAJ_result_1 = document.getElementById('SAJ_result_1')

        if (SAJ_1 !== "" && SAJ_2 !== "" && SAJ_3 !== "" && SAJ_selection_1 !== "" && SAJ_5 !== "") {
            if (SAJ_selection_1 === 'none') {
                SAJ_result_1.value = 0;
            } else if (SAJ_selection_1 === 'research') {
                SAJ_result_1.value = 2;
            } else if (SAJ_selection_1 === 'academic') {
                SAJ_result_1.value = 1;
            }
        } else {
            SAJ_result_1.value = 0;
        }

        const SAJ_6 = document.getElementById('SAJ_6').value
        const SAJ_7 = document.getElementById('SAJ_7').value
        const SAJ_8 = document.getElementById('SAJ_8').value
        const SAJ_selection_2 = document.getElementById('SAJ_selection_2').value
        const SAJ_10 = document.getElementById('SAJ_10').value
        const SAJ_result_2 = document.getElementById('SAJ_result_2')

        if (SAJ_6 !== "" && SAJ_7 !== "" && SAJ_8 !== "" && SAJ_selection_2 !== "" && SAJ_10 !== "") {
            if (SAJ_selection_2 === 'none') {
                SAJ_result_2.value = 0;
            } else if (SAJ_selection_2 === 'research') {
                SAJ_result_2.value = 2;
            } else if (SAJ_selection_2 === 'academic') {
                SAJ_result_2.value = 1;
            }
        } else {
            SAJ_result_2.value = 0;
        }

        const SAJ_11 = document.getElementById('SAJ_11').value
        const SAJ_12 = document.getElementById('SAJ_12').value
        const SAJ_13 = document.getElementById('SAJ_13').value
        const SAJ_selection_3 = document.getElementById('SAJ_selection_3').value
        const SAJ_15 = document.getElementById('SAJ_15').value
        const SAJ_result_3 = document.getElementById('SAJ_result_3')

        if (SAJ_11 !== "" && SAJ_12 !== "" && SAJ_13 !== "" && SAJ_selection_3 !== "" && SAJ_15 !== "") {
            if (SAJ_selection_3 === 'none') {
                SAJ_result_3.value = 0;
            } else if (SAJ_selection_3 === 'research') {
                SAJ_result_3.value = 2;
            } else if (SAJ_selection_3 === 'academic') {
                SAJ_result_3.value = 1;
            }
        } else {
            SAJ_result_3.value = 0;
        }

        const SAJ_16 = document.getElementById('SAJ_16').value
        const SAJ_17 = document.getElementById('SAJ_17').value
        const SAJ_18 = document.getElementById('SAJ_18').value
        const SAJ_selection_4 = document.getElementById('SAJ_selection_4').value
        const SAJ_20 = document.getElementById('SAJ_20').value
        const SAJ_result_4 = document.getElementById('SAJ_result_4')

        if (SAJ_16 !== "" && SAJ_17 !== "" && SAJ_18 !== "" && SAJ_selection_4 !== "" && SAJ_20 !== "") {
            if (SAJ_selection_4 === 'none') {
                SAJ_result_4.value = 0;
            } else if (SAJ_selection_4 === 'research') {
                SAJ_result_4.value = 2;
            } else if (SAJ_selection_4 === 'academic') {
                SAJ_result_4.value = 1;
            }
        } else {
            SAJ_result_4.value = 0;
        }

        document.getElementById('SAJ_result_total').value = parseFloat(SAJ_result_1.value) + parseFloat(SAJ_result_2.value) + parseFloat(SAJ_result_3.value) + parseFloat(SAJ_result_4.value);
    }

    function calc_SAASC() {
        const SAASC_1 = document.getElementById('SAASC_1').value
        const SAASC_2 = document.getElementById('SAASC_2').value
        const SAASC_3 = document.getElementById('SAASC_3').value
        const SAASC_4 = document.getElementById('SAASC_4').value
        const SAASC_5 = document.getElementById('SAASC_5').value
        const SAASC_6 = document.getElementById('SAASC_6').value
        const SAASC_result_1 = document.getElementById('SAASC_result_1')

        if (SAASC_1 !== "" && SAASC_2 !== "" && SAASC_3 !== "" && SAASC_4 !== "" && SAASC_5 !== "" && SAASC_6 !== "") {
            if (SAASC_5 === 'none') {
                SAASC_result_1.value = 0;
            } else if (SAASC_5 === 'local') {
                SAASC_result_1.value = 8;
            } else if (SAASC_5 === 'international') {
                SAASC_result_1.value = 10;
            }
        } else {
            SAASC_result_1.value = 0;
        }

        const SAASC_7 = document.getElementById('SAASC_7').value
        const SAASC_8 = document.getElementById('SAASC_8').value
        const SAASC_9 = document.getElementById('SAASC_9').value
        const SAASC_10 = document.getElementById('SAASC_10').value
        const SAASC_11 = document.getElementById('SAASC_11').value
        const SAASC_12 = document.getElementById('SAASC_12').value
        const SAASC_result_2 = document.getElementById('SAASC_result_2')

        if (SAASC_7 !== "" && SAASC_8 !== "" && SAASC_9 !== "" && SAASC_10 !== "" && SAASC_11 !== "" && SAASC_12 !== "") {
            if (SAASC_11 === 'none') {
                SAASC_result_2.value = 0;
            } else if (SAASC_11 === 'local') {
                SAASC_result_2.value = 8;
            } else if (SAASC_11 === 'international') {
                SAASC_result_2.value = 10;
            }
        } else {
            SAASC_result_2.value = 0;
        }

        const SAASC_13 = document.getElementById('SAASC_13').value
        const SAASC_14 = document.getElementById('SAASC_14').value
        const SAASC_15 = document.getElementById('SAASC_15').value
        const SAASC_16 = document.getElementById('SAASC_16').value
        const SAASC_17 = document.getElementById('SAASC_17').value
        const SAASC_18 = document.getElementById('SAASC_18').value
        const SAASC_result_3 = document.getElementById('SAASC_result_3')

        if (SAASC_13 !== "" && SAASC_14 !== "" && SAASC_15 !== "" && SAASC_16 !== "" && SAASC_17 !== "" && SAASC_18 !== "") {
            if (SAASC_17 === 'none') {
                SAASC_result_3.value = 0;
            } else if (SAASC_17 === 'local') {
                SAASC_result_3.value = 8;
            } else if (SAASC_17 === 'international') {
                SAASC_result_3.value = 10;
            }
        } else {
            SAASC_result_3.value = 0;
        }

        document.getElementById('SAASC_result_total').value = parseFloat(SAASC_result_1.value) + parseFloat(SAASC_result_2.value) + parseFloat(SAASC_result_3.value)

    }

    function calc_STM() {

        const STM_1 = document.getElementById('STM_1').value
        const STM_2 = document.getElementById('STM_2').value
        const STM_3 = document.getElementById('STM_3').value
        const STM_4 = document.getElementById('STM_4').value
        const STM_total_1 = document.getElementById('STM_total_1')

        if (STM_1 && STM_2 && STM_3 && STM_4) {
            STM_total_1.value = STM_4 * 2;
        } else {
            STM_total_1.value = 0;
        }

        const STM_5 = document.getElementById('STM_5').value
        const STM_6 = document.getElementById('STM_6').value
        const STM_7 = document.getElementById('STM_7').value
        const STM_8 = document.getElementById('STM_8').value
        const STM_total_2 = document.getElementById('STM_total_2')

        if (STM_5 && STM_6 && STM_7 && STM_8) {
            STM_total_2.value = STM_8 * 2;
        } else {
            STM_total_2.value = 0;
        }

        const STM_9 = document.getElementById('STM_9').value
        const STM_10 = document.getElementById('STM_10').value
        const STM_11 = document.getElementById('STM_11').value
        const STM_12 = document.getElementById('STM_12').value
        const STM_total_3 = document.getElementById('STM_total_3')

        if (STM_9 && STM_10 && STM_11 && STM_12) {
            STM_total_3.value = STM_12 * 2;
        } else {
            STM_total_3.value = 0;
        }

        const STM_13 = document.getElementById('STM_13').value
        const STM_14 = document.getElementById('STM_14').value
        const STM_15 = document.getElementById('STM_15').value
        const STM_16 = document.getElementById('STM_16').value
        const STM_total_4 = document.getElementById('STM_total_4')

        if (STM_13 && STM_14 && STM_15 && STM_16) {
            STM_total_4.value = STM_16 * 2;
        } else {
            STM_total_4.value = 0;
        }

        const STM_total_result = document.getElementById('STM_total_result')
        STM_total_result.value = parseFloat(STM_total_1.value) + parseFloat(STM_total_2.value) + parseFloat(STM_total_3.value) + parseFloat(STM_total_4.value);

    }

    function calc_FOEH() {
        const FOEH_1 = document.getElementById('FOEH_1').value
        const FOEH_2 = document.getElementById('FOEH_2').value
        const FOEH_3 = document.getElementById('FOEH_3').value
        const FOEH_4 = document.getElementById('FOEH_4').value
        const FOEH_5 = document.getElementById('FOEH_5').value
        const FOEH_6 = document.getElementById('FOEH_6').value
        const FOEH_7 = document.getElementById('FOEH_7').value
        const FOEH_result_1 = document.getElementById('FOEH_result_1')

        if (FOEH_1 !== "" &&
            FOEH_2 !== "" &&
            FOEH_3 !== "" &&
            FOEH_4 !== "" &&
            FOEH_5 !== "" &&
            FOEH_6 !== "" &&
            FOEH_7 !== "") {
            if (FOEH_6 === 'none') {
                FOEH_result_1.value = 0;
            } else if (FOEH_6 === 'local') {
                FOEH_result_1.value = 2 * FOEH_7;
            } else if (FOEH_6 === 'international') {
                FOEH_result_1.value = 3 * FOEH_7;
            }
        } else {
            FOEH_result_1.value = 0;
        }

        const FOEH_8 = document.getElementById('FOEH_8').value
        const FOEH_9 = document.getElementById('FOEH_9').value
        const FOEH_10 = document.getElementById('FOEH_10').value
        const FOEH_11 = document.getElementById('FOEH_11').value
        const FOEH_12 = document.getElementById('FOEH_12').value
        const FOEH_13 = document.getElementById('FOEH_13').value
        const FOEH_14 = document.getElementById('FOEH_14').value
        const FOEH_result_2 = document.getElementById('FOEH_result_2')

        if (FOEH_8 !== "" &&
            FOEH_9 !== "" &&
            FOEH_10 !== "" &&
            FOEH_11 !== "" &&
            FOEH_12 !== "" &&
            FOEH_13 !== "" &&
            FOEH_14 !== "") {
            if (FOEH_13 === 'none') {
                FOEH_result_2.value = 0;
            } else if (FOEH_13 === 'local') {
                FOEH_result_2.value = 2 * FOEH_14;
            } else if (FOEH_13 === 'international') {
                FOEH_result_2.value = 3 * FOEH_14;
            }
        } else {
            FOEH_result_2.value = 0;
        }

        const FOEH_15 = document.getElementById('FOEH_15').value
        const FOEH_16 = document.getElementById('FOEH_16').value
        const FOEH_17 = document.getElementById('FOEH_17').value
        const FOEH_18 = document.getElementById('FOEH_18').value
        const FOEH_19 = document.getElementById('FOEH_19').value
        const FOEH_20 = document.getElementById('FOEH_20').value
        const FOEH_21 = document.getElementById('FOEH_21').value
        const FOEH_result_3 = document.getElementById('FOEH_result_3')

        if (FOEH_15 !== "" &&
            FOEH_16 !== "" &&
            FOEH_17 !== "" &&
            FOEH_18 !== "" &&
            FOEH_19 !== "" &&
            FOEH_20 !== "" &&
            FOEH_21 !== "") {
            if (FOEH_20 === 'none') {
                FOEH_result_3.value = 0;
            } else if (FOEH_20 === 'local') {
                FOEH_result_3.value = 2 * FOEH_21;
            } else if (FOEH_20 === 'international') {
                FOEH_result_3.value = 3 * FOEH_21;
            }
        } else {
            FOEH_result_3.value = 0;
        }

        document.getElementById('FOEH_result_total').value = parseFloat(FOEH_result_1.value) + parseFloat(FOEH_result_2.value) + parseFloat(FOEH_result_3.value);

    }

    function calc_FESOP() {
        const FESOP_1 = document.getElementById('FESOP_1').value
        const FESOP_2 = document.getElementById('FESOP_2').value
        const FESOP_3 = document.getElementById('FESOP_3').value
        const FESOP_4 = document.getElementById('FESOP_4').value
        const FESOP_5 = document.getElementById('FESOP_5').value
        const FESOP_result_1 = document.getElementById('FESOP_result_1')

        if (FESOP_1 !== "" &&
            FESOP_2 !== "" &&
            FESOP_3 !== "" &&
            FESOP_4 !== "" &&
            FESOP_5 !== "") {
            if (FESOP_4 === 'none') {
                FESOP_result_1.value = 0;
            } else if (FESOP_4 === 'head') {
                FESOP_result_1.value = 5;
            } else if (FESOP_4 === 'participant') {
                FESOP_result_1.value = 2;
            }

        } else {
            FESOP_result_1.value = 0;
        }

        const FESOP_6 = document.getElementById('FESOP_6').value
        const FESOP_7 = document.getElementById('FESOP_7').value
        const FESOP_8 = document.getElementById('FESOP_8').value
        const FESOP_9 = document.getElementById('FESOP_9').value
        const FESOP_10 = document.getElementById('FESOP_10').value
        const FESOP_result_2 = document.getElementById('FESOP_result_2')

        if (FESOP_6 !== "" &&
            FESOP_7 !== "" &&
            FESOP_8 !== "" &&
            FESOP_9 !== "" &&
            FESOP_10 !== "") {
            if (FESOP_9 === 'none') {
                FESOP_result_2.value = 0;
            } else if (FESOP_9 === 'head') {
                FESOP_result_2.value = 5;
            } else if (FESOP_9 === 'participant') {
                FESOP_result_2.value = 2;
            }

        } else {
            FESOP_result_2.value = 0;
        }

        const FESOP_11 = document.getElementById('FESOP_11').value
        const FESOP_12 = document.getElementById('FESOP_12').value
        const FESOP_13 = document.getElementById('FESOP_13').value
        const FESOP_14 = document.getElementById('FESOP_14').value
        const FESOP_15 = document.getElementById('FESOP_15').value
        const FESOP_result_3 = document.getElementById('FESOP_result_3')

        if (FESOP_11 !== "" &&
            FESOP_12 !== "" &&
            FESOP_13 !== "" &&
            FESOP_14 !== "" &&
            FESOP_15 !== "") {
            if (FESOP_14 === 'none') {
                FESOP_result_3.value = 0;
            } else if (FESOP_14 === 'head') {
                FESOP_result_3.value = 5;
            } else if (FESOP_14 === 'participant') {
                FESOP_result_3.value = 2;
            }

        } else {
            FESOP_result_3.value = 0;
        }

        const FESOP_16 = document.getElementById('FESOP_16').value
        const FESOP_17 = document.getElementById('FESOP_17').value
        const FESOP_18 = document.getElementById('FESOP_18').value
        const FESOP_19 = document.getElementById('FESOP_19').value
        const FESOP_20 = document.getElementById('FESOP_20').value
        const FESOP_result_4 = document.getElementById('FESOP_result_4')

        if (FESOP_16 !== "" &&
            FESOP_17 !== "" &&
            FESOP_18 !== "" &&
            FESOP_19 !== "" &&
            FESOP_20 !== "") {
            if (FESOP_19 === 'none') {
                FESOP_result_4.value = 0;
            } else if (FESOP_19 === 'head') {
                FESOP_result_4.value = 5;
            } else if (FESOP_19 === 'participant') {
                FESOP_result_4.value = 2;
            }

        } else {
            FESOP_result_4.value = 0;
        }

        document.getElementById('FESOP_result_total').value = parseFloat(FESOP_result_1.value) + parseFloat(FESOP_result_2.value) + parseFloat(FESOP_result_3.value) + parseFloat(FESOP_result_4.value);

    }

</script>