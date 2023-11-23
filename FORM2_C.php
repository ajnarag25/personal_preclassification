<?php
include 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

if (isset($_POST['submit_btn'])) {

    $scoreNCPA = $_POST['NCPA_Score'];
    $scoreExhibition = $_POST['Exhibition_Score'];
    $scoreJuried = $_POST['Juried_Score'];
    $scoreLitPub = $_POST['LitPub_Score'];


    if ($scoreNCPA == "" or $scoreExhibition == "" or $scoreJuried == "" or $scoreLitPub == "") {
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
            "UPDATE kra_2 SET 
                 Crit_C_PA = '$scoreNCPA',
                 Crit_C_Exhibition  = '$scoreExhibition',
                 Crit_C_Designs = '$scoreJuried',
                 `Crit_C_Lit-pub` = '$scoreLitPub',
                 Crit_C_total = Crit_C_PA + Crit_C_Exhibition + Crit_C_Designs + `Crit_C_Lit-pub`,
                 Crit_C_Total_allowed = IF(Crit_C_total > 100, 100, Crit_C_total),
                 KRA_2_total = Crit_A_total + Crit_B_Total + Crit_C_total,
                 KRA_2_total_allowed = IF(Crit_A_total_allowed + Crit_B_Total_allowed + Crit_C_Total_allowed > 100, 100, Crit_A_total_allowed + Crit_B_Total_allowed + Crit_C_Total_allowed)
             WHERE KRA2_ID = 1") or die($conn->error);
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
    <title>FORM2_C</title>
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
<form method="POST" action="FORM2_C.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION C - CREATIVE WORKS (MAX = 100 POINTS)</h1>
    <h2 class="page_title">1. For Every Creative Work Created, Performed. Presented, Exhibited And Published</h2>
    <h2 class="page_title">1.1 New Creative Performing Artwork (E.g. Music, Dance And Theatre)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Creative Performing Art</td>
            <td>Type of Performing Art</td>
            <td>Classification</td>
            <td>Date Copyrighted / Date Performed <br>
                (mm/dd/yyyy)
            </td>
            <td>Venue of Performance</td>
            <td>Organizer of the Event <br>
                (or Publisher if applicable)
            </td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="NCPA6" type="text"></td>
            <td>
                <select name="" id="NCPA1">
                    <option value="none">Select option</option>
                    <option value="Song">Song/Music</option>
                    <option value="Choreography">Choreography/Dance</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="NCPA_2">
                    <option value="none">Select option</option>
                    <option value="new">New Creation</option>
                    <option value="own">Own Work</option>
                    <option value="work">Work of Others</option>
                </select>
            </td>
            <td><input id="NCPA_3" type="date"></td>
            <td><input id="NCPA_4" type="text"></td>
            <td><input id="NCPA_5" type="text"></td>
            <td><input id="NCPA_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="NCPA26" type="text"></td>
            <td>
                <select name="" id="NCPA1">
                    <option value="none">Select option</option>
                    <option value="Song">Song/Music</option>
                    <option value="Choreography">Choreography/Dance</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="NCPA_22">
                    <option value="none">Select option</option>
                    <option value="new">New Creation</option>
                    <option value="own">Own Work</option>
                    <option value="work">Work of Others</option>
                </select>
            </td>
            <td><input id="NCPA_23" type="date"></td>
            <td><input id="NCPA_24" type="text"></td>
            <td><input id="NCPA_25" type="text"></td>
            <td><input id="NCPA_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="NCPA36" type="text"></td>
            <td>
                <select name="" id="NCPA31">
                    <option value="none">Select option</option>
                    <option value="Song">Song/Music</option>
                    <option value="Choreography">Choreography/Dance</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="NCPA_32">
                    <option value="none">Select option</option>
                    <option value="new">New Creation</option>
                    <option value="own">Own Work</option>
                    <option value="work">Work of Others</option>
                </select>
            </td>
            <td><input id="NCPA_33" type="date"></td>
            <td><input id="NCPA_34" type="text"></td>
            <td><input id="NCPA_35" type="text"></td>
            <td><input id="NCPA_res3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button onclick="calc_NCPA()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NCPA_Score" id="NCPA_final_res" readonly type="text"></td>
        </tr>

    </table>

    <br><br><br>

    <h2 class="page_title">1.2 Exhibition (E.g. Visual Art, Architecture, Film And Multimedia)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Creative Work</td>
            <td>Type of Creative Work</td>
            <td>Classification</td>
            <td>Exhibition Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Venue of Exhibit</td>
            <td>Organizer of the Event</td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="EXB1" type="text"></td>
            <td>
                <select name="" id="EXB2">
                    <option value="none">Select option</option>
                    <option value="Film">Film/Short Film</option>
                    <option value="Painting">Painting/Drawing</option>
                    <option value="Architectural">Architectural Design</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Photography">Photography</option>
                    <option value="Sculpture">Sculpture</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="EXB3">
                    <option value="none">Select option</option>
                    <option value="Visual">Visual Arts</option>
                    <option value="Arhcitecture">Architecture</option>
                    <option value="Film">Film</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </td>
            <td><input id="EXB4" type="date"></td>
            <td><input id="EXB5" type="text"></td>
            <td><input id="EXB6" type="text"></td>
            <td><input id="EXB_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="EXB21" type="text"></td>
            <td>
                <select name="" id="EXB22">
                    <option value="none">Select option</option>
                    <option value="Film">Film/Short Film</option>
                    <option value="Painting">Painting/Drawing</option>
                    <option value="Architectural">Architectural Design</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Photography">Photography</option>
                    <option value="Sculpture">Sculpture</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="EXB23">
                    <option value="none">Select option</option>
                    <option value="Visual">Visual Arts</option>
                    <option value="Arhcitecture">Architecture</option>
                    <option value="Film">Film</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </td>
            <td><input id="EXB24" type="date"></td>
            <td><input id="EXB25" type="text"></td>
            <td><input id="EXB26" type="text"></td>
            <td><input id="EXB_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="EXB31" type="text"></td>
            <td>
                <select name="" id="EXB32">
                    <option value="none">Select option</option>
                    <option value="Film">Film/Short Film</option>
                    <option value="Painting">Painting/Drawing</option>
                    <option value="Architectural">Architectural Design</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Photography">Photography</option>
                    <option value="Sculpture">Sculpture</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td>
                <select name="" id="EXB33">
                    <option value="none">Select option</option>
                    <option value="Visual">Visual Arts</option>
                    <option value="Arhcitecture">Architecture</option>
                    <option value="Film">Film</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </td>
            <td><input id="EXB34" type="date"></td>
            <td><input id="EXB35" type="text"></td>
            <td><input id="EXB36" type="text"></td>
            <td><input id="EXB_res3" readonly type="text"></td>
        </tr>


        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_exhib()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="Exhibition_Score" id="Exhib_finale_res1" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.3 Juried Or Peer-reviewed Designs (E.g. Architecture, Engineering, Industrial Design)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Design</td>
            <td>Classification</td>
            <td>Reviewer, Evaluator or Its Equivalent</td>
            <td>Activity/Exhibition Date</td>
            <td>Venue of Activity/Exhibit</td>
            <td>Organizer</td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="JR1" type="text"></td>
            <td>
                <select name="" id="JR2">
                    <option value="none">Select option</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input id="JR3" type="text"></td>
            <td><input id="JR4" type="date"></td>
            <td><input id="JR5" type="text"></td>
            <td><input id="JR6" type="text"></td>
            <td><input id="JR_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="JR21" type="text"></td>
            <td>
                <select name="" id="JR22">
                    <option value="none">Select option</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input id="JR23" type="text"></td>
            <td><input id="JR24" type="date"></td>
            <td><input id="JR25" type="text"></td>
            <td><input id="JR26" type="text"></td>
            <td><input id="JR_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="JR31" type="text"></td>
            <td>
                <select name="" id="JR32">
                    <option value="none">Select option</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input id="JR33" type="text"></td>
            <td><input id="JR34" type="date"></td>
            <td><input id="JR35" type="text"></td>
            <td><input id="JR36" type="text"></td>
            <td><input id="JR_res3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_juried()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="Juried_Score" id="JR__finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.4 Literary Publications (E.g. Novel, Short Story, Essay And Poetry)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Title of Creative Performing Art</td>
            <td>Type of Performing Art</td>
            <td>Reviewer, Evaluator or Its Equivalent</td>
            <td>Date Copyrighted / Date Performed <br>
                (mm/dd/yyyy)
            </td>
            <td>Venue of Performance</td>
            <td>Organizer of the Event <br>
                (or Publisher if applicable)
            </td>
            <td>Faculty Points</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="LIT1" type="text"></td>
            <td>
                <select name="" id="LIT2">
                    <option value="none">Select Option</option>
                    <option value="Novel">Novel</option>
                    <option value="Short">Short Story</option>
                    <option value="Essay">Essay</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td><input id="LIT3" type="text"></td>
            <td><input id="LIT4" type="date"></td>
            <td><input id="LIT5" type="text"></td>
            <td><input id="LIT6" type="text"></td>
            <td><input id="Lit_res1" readonly type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="LIT21" type="text"></td>
            <td>
                <select name="" id="LIT22">
                    <option value="none">Select Option</option>
                    <option value="Novel">Novel</option>
                    <option value="Short">Short Story</option>
                    <option value="Essay">Essay</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td><input id="LIT23" type="text"></td>
            <td><input id="LIT24" type="date"></td>
            <td><input id="LIT25" type="text"></td>
            <td><input id="LIT26" type="text"></td>
            <td><input id="Lit_res2" readonly type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="LIT31" type="text"></td>
            <td>
                <select name="" id="LIT32">
                    <option value="none">Select Option</option>
                    <option value="Novel">Novel</option>
                    <option value="Short">Short Story</option>
                    <option value="Essay">Essay</option>
                    <option value="Poetry">Poetry</option>
                    <option value="Others">Others</option>
                </select>
            </td>
            <td><input id="LIT33" type="text"></td>
            <td><input id="LIT34" type="date"></td>
            <td><input id="LIT35" type="text"></td>
            <td><input id="LIT36" type="text"></td>
            <td><input id="Lit_res3" readonly type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button onclick="calcu_Lit_pub()" type="button">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="LitPub_Score" id="pub_finale_fs" readonly type="text"></td>
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
    function calc_NCPA() {
        const var1 = document.getElementById('NCPA1').value
        const var2 = document.getElementById('NCPA_2').value
        const var3 = document.getElementById('NCPA_3').value
        const var4 = document.getElementById('NCPA_4').value
        const var5 = document.getElementById('NCPA_5').value
        const var6 = document.getElementById('NCPA6').value
        const the_Res1 = document.getElementById('NCPA_res1')
        if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "" && var5 !== "" && var6 !== "") {
            if (var2 === 'none') {
                the_Res1.value = 0;
            } else if (var2 === 'new') {
                the_Res1.value = 20;
            } else if (var2 === 'own' || var2 === 'work') {
                the_Res1.value = 10;
            }
        } else {
            the_Res1.value = 0;
        }

        const test21 = document.getElementById('NCPA26').value
        const test22 = document.getElementById('NCPA1').value
        const test23 = document.getElementById('NCPA_22').value
        const test24 = document.getElementById('NCPA_23').value
        const test25 = document.getElementById('NCPA_24').value
        const test26 = document.getElementById('NCPA_25').value
        const the_Res2 = document.getElementById('NCPA_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
            if (test23 === 'none') {
                the_Res2.value = 0;
            } else if (test23 === 'new') {
                the_Res2.value = 20;
            } else if (test23 === 'own' || test23 === 'work') {
                the_Res2.value = 10;
            }
        } else {
            the_Res2.value = 0;
        }


        const fgh31 = document.getElementById('NCPA36').value
        const fgh32 = document.getElementById('NCPA31').value
        const fgh33 = document.getElementById('NCPA_32').value
        const fgh34 = document.getElementById('NCPA_33').value
        const fgh35 = document.getElementById('NCPA_34').value
        const fgh36 = document.getElementById('NCPA_35').value
        const the_Res3 = document.getElementById('NCPA_res3')
        if (fgh31 !== "" && fgh32 !== "" && fgh33 !== "" && fgh34 !== "" && fgh35 !== "" && fgh36 !== "") {
            if (fgh33 === 'none') {
                the_Res3.value = 0;
            } else if (fgh33 === 'new') {
                the_Res3.value = 20;
            } else if (fgh33 === 'own' || fgh33 === 'work') {
                the_Res3.value = 10;
            }

        } else {
            the_Res3.value = 0;
        }
        document.getElementById('NCPA_final_res').value = parseFloat(the_Res2.value) + parseFloat(the_Res3.value) + parseFloat(the_Res1.value)
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calcu_exhib() // * working
    {
        const test1 = document.getElementById('EXB1').value
        const test2 = document.getElementById('EXB2').value
        const test3 = document.getElementById('EXB3').value
        const test4 = document.getElementById('EXB4').value
        const test5 = document.getElementById('EXB5').value
        const test6 = document.getElementById('EXB6').value
        const res1 = document.getElementById('EXB_res1')
        if (test1 !== "" && test2 !== "" && test3 !== "" && test4 !== "" && test5 !== "" && test6 !== "") {
            res1.value = 20
        } else {
            res1.value = 0;
        }

        const test21 = document.getElementById('EXB21').value
        const test22 = document.getElementById('EXB22').value
        const test23 = document.getElementById('EXB23').value
        const test24 = document.getElementById('EXB24').value
        const test25 = document.getElementById('EXB25').value
        const test26 = document.getElementById('EXB26').value
        const res2 = document.getElementById('EXB_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
            res2.value = 20
        } else {
            res2.value = 0;
        }

        const test31 = document.getElementById('EXB31').value
        const test32 = document.getElementById('EXB32').value
        const test33 = document.getElementById('EXB33').value
        const test34 = document.getElementById('EXB34').value
        const test35 = document.getElementById('EXB35').value
        const test36 = document.getElementById('EXB36').value
        const res3 = document.getElementById('EXB_res3')
        if (test31 !== "" && test32 !== "" && test33 !== "" && test34 !== "" && test35 !== "" && test36 !== "") {
            res3.value = 20
        } else {
            res3.value = 0;
        }

        document.getElementById('Exhib_finale_res1').value = parseFloat(res1.value) + parseFloat(res2.value) + parseFloat(res3.value);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calcu_juried() {
        const var1 = document.getElementById('JR1').value
        const var2 = document.getElementById('JR2').value
        const var3 = document.getElementById('JR3').value
        const var4 = document.getElementById('JR4').value
        const var5 = document.getElementById('JR5').value
        const var6 = document.getElementById('JR6').value
        const the_Res1 = document.getElementById('JR_res1')
        if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "" && var5 !== "" && var6 !== "") {
            if (var2 === 'none') {
                the_Res1.value = 0;
            } else {
                the_Res1.value = 20
            }
        } else {
            the_Res1.value = 0;
        }

        const test21 = document.getElementById('JR21').value
        const test22 = document.getElementById('JR22').value
        const test23 = document.getElementById('JR23').value
        const test24 = document.getElementById('JR24').value
        const test25 = document.getElementById('JR25').value
        const test26 = document.getElementById('JR26').value
        const the_Res2 = document.getElementById('JR_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
            if (test22 === 'none') {
                the_Res2.value = 0;
            } else {
                the_Res2.value = 20
            }
        } else {
            the_Res2.value = 0;
        }


        const fgh31 = document.getElementById('JR31').value
        const fgh32 = document.getElementById('JR32').value
        const fgh33 = document.getElementById('JR33').value
        const fgh34 = document.getElementById('JR34').value
        const fgh35 = document.getElementById('JR35').value
        const fgh36 = document.getElementById('JR36').value
        const the_Res3 = document.getElementById('JR_res3')
        if (fgh31 !== "" && fgh32 !== "" && fgh33 !== "" && fgh34 !== "" && fgh35 !== "" && fgh36 !== "") {
            if (fgh32 === 'none') {
                the_Res3.value = 0;
            } else {
                the_Res3.value = 20
            }
        } else {
            the_Res3.value = 0;
        }

        document.getElementById('JR__finale_res').value = parseFloat(the_Res2.value) + parseFloat(the_Res3.value) + parseFloat(the_Res1.value)
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calcu_Lit_pub() {
        const var1 = document.getElementById('LIT1').value
        const var2 = document.getElementById('LIT2').value
        const var3 = document.getElementById('LIT3').value
        const var4 = document.getElementById('LIT4').value
        const var5 = document.getElementById('LIT5').value
        const var6 = document.getElementById('LIT6').value
        const the_Res1 = document.getElementById('Lit_res1')
        if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "" && var5 !== "" && var6 !== "") {
            if (var2 === 'none') {
                the_Res1.value = 0
            } else if (var2 === 'Novel') {
                the_Res1.value = 20;
            } else if (var2 === 'Short' || var2 === 'Essay' || var2 === 'Poetry' || var2 === 'Others') {
                the_Res1.value = 10;
            }
        } else {
            the_Res1.value = 0;
        }

        const test21 = document.getElementById('LIT21').value
        const test22 = document.getElementById('LIT22').value
        const test23 = document.getElementById('LIT23').value
        const test24 = document.getElementById('LIT24').value
        const test25 = document.getElementById('LIT25').value
        const test26 = document.getElementById('LIT26').value
        const the_Res2 = document.getElementById('Lit_res2')
        if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
            if (test22 === 'none') {
                the_Res2.value = 0
            } else if (test22 === 'Novel') {
                the_Res2.value = 20;
            } else if (test22 === 'Short' || test22 === 'Essay' || test22 === 'Poetry' || test22 === 'Others') {
                the_Res2.value = 10;
            }
        } else {
            the_Res2.value = 0;
        }


        const fgh31 = document.getElementById('LIT31').value
        const fgh32 = document.getElementById('LIT32').value
        const fgh33 = document.getElementById('LIT33').value
        const fgh34 = document.getElementById('LIT34').value
        const fgh35 = document.getElementById('LIT35').value
        const fgh36 = document.getElementById('LIT36').value
        const the_Res3 = document.getElementById('Lit_res3')
        if (fgh31 !== "" && fgh32 !== "" && fgh33 !== "" && fgh34 !== "" && fgh35 !== "" && fgh36 !== "") {
            if (fgh32 === 'none') {
                the_Res3.value = 0
            } else if (fgh32 === 'Novel') {
                the_Res3.value = 20;
            } else if (fgh32 === 'Short' || fgh32 === 'Essay' || fgh32 === 'Poetry' || fgh32 === 'Others') {
                the_Res3.value = 10;
            }
        } else {
            the_Res3.value = 0;
        }

        document.getElementById('pub_finale_fs').value = parseFloat(the_Res2.value) + parseFloat(the_Res3.value) + parseFloat(the_Res1.value)
    }


</script>