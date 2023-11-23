<?php
require 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

if (isset($_POST['Submit_btn'])) {
    $scoreFCIM = $_POST['FCIM_total'];
    $scoreFDD = $_POST['FDD_total'];
    $scoreAD = $_POST['AD_total'];
    $scoreBFirst = $scoreFDD + $scoreAD;
    $scoreFEP = $_POST['FEP_total'];
    $scoreFEPP = $_POST['FEPP_total'];
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
             WHERE Kra4_ID = 1") or die($conn->error);
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
            <td><input id="FCIM_1" type="text"></td>
            <td><input id="FCIM_2" type="text"></td>
            <td><input id="FCIM_3" type="text"></td>
            <td>
                <select id="FCIM_Selection_1" name="">
                    <option value="none">Select Option</option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_1" type="date"></td>
            <td><input id="FCIM_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_4" type="text"></td>
            <td><input id="FCIM_5" type="text"></td>
            <td><input id="FCIM_6" type="text"></td>
            <td>
                <select id="FCIM_Selection_2" name="">
                    <option value="none">Select Option</option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_2" type="date"></td>
            <td><input id="FCIM_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_7" type="text"></td>
            <td><input id="FCIM_8" type="text"></td>
            <td><input id="FCIM_9" type="text"></td>
            <td>
                <select id="FCIM_Selection_3" name="">
                    <option value="none">Select Option</option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_3" type="date"></td>
            <td><input id="FCIM_result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FCIM_10" type="text"></td>
            <td><input id="FCIM_11" type="text"></td>
            <td><input id="FCIM_12" type="text"></td>
            <td>
                <select id="FCIM_Selection_4" name="">
                    <option value="none">Select Option</option>
                    <option value="board-member">Board Member</option>
                    <option value="officer">Officer</option>
                    <option value="lead_organizer">Lead Organizer</option>
                    <option value="co_organizer">Co-organizer</option>
                    <option value="committee_chair">Committee Chair</option>
                    <option value="committee_member">Committee Member</option>
                    <option value="moderator">Moderator</option>
                </select>
            </td>
            <td><input id="FCIM_date_4" type="date"></td>
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
            <td><input id="FDD_1" type="text"></td>
            <td><input id="FDD_2" type="text"></td>
            <td><input id="FDD_date" type="date"></td>
            <td>
                <select id="FDD_Selection" name="">
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
                <select id="AD_Selection_1" name="">
                    <option value="none">Select Option</option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_1" type="text"></td>
            <td><input id="AD_2" type="text"></td>
            <td><input id="AD_date_1" type="date"></td>
            <td><input id="AD_Result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_2" name="">
                    <option value="none">Select Option</option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_3" type="text"></td>
            <td><input id="AD_4" type="text"></td>
            <td><input id="AD_date_2" type="date"></td>
            <td><input id="AD_Result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_3" name="">
                    <option value="none">Select Option</option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_5" type="text"></td>
            <td><input id="AD_6" type="text"></td>
            <td><input id="AD_date_3" type="date"></td>
            <td><input id="AD_Result_3" type="text" readonly></td>
        </tr>

        <tr>
            <td>
                <select id="AD_Selection_4" name="">
                    <option value="none">Select Option</option>
                    <option value="doctorate">Additional Doctorate Degree</option>
                    <option value="masters">Additional Master's Degree</option>
                    <option value="post_doctorate">Post-Doctorate Diploma/Certificate</option>
                    <option value="post_masters">Post-Masters Diploma/Certificate</option>
                </select>
            </td>
            <td><input id="AD_7" type="text"></td>
            <td><input id="AD_8" type="text"></td>
            <td><input id="AD_date_4" type="date"></td>
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
            <td><input id="FEP_1" type="text"></td>
            <td>
                <select id="FEP_selection_1" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_2" type="text"></td>
            <td><input id="FEP_date_1" type="date"></td>
            <td><input id="FEP_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEP_3" type="text"></td>
            <td>
                <select id="FEP_selection_2" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_4" type="text"></td>
            <td><input id="FEP_date_2" type="date"></td>
            <td><input id="FEP_result_2" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEP_5" type="text"></td>
            <td>
                <select id="FEP_selection_3" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEP_6" type="text"></td>
            <td><input id="FEP_date_3" type="date"></td>
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
            <td><input id="FEPP_1" type="text"></td>
            <td>
                <select id="FEPP_selection_1" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_2" type="text"></td>
            <td><input id="FEPP_3" type="text"></td>
            <td><input id="FEPP_date_1" type="date"></td>
            <td><input id="FEPP_result_1" type="text" readonly></td>
        </tr>

        <tr>
            <td><input id="FEPP_4" type="text"></td>
            <td>
                <select id="FEPP_selection_2" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_5" type="text"></td>
            <td><input id="FEPP_6" type="text"></td>
            <td><input id="FEPP_date_2" type="date"></td>
            <td><input id="FEPP_result_2" type="text" readonly></td>
        </tr>
        <tr>
            <td><input id="FEPP_7" type="text"></td>
            <td>
                <select id="FEPP_selection_3" name="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="international">International</option>
                </select>
            </td>
            <td><input id="FEPP_8" type="text"></td>
            <td><input id="FEPP_9" type="text"></td>
            <td><input id="FEPP_date_3" type="date"></td>
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