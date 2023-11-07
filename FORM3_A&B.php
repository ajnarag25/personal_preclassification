<?php

if (isset($_POST['submit_btn'])) {
    // insert function here
} else {
    if (isset($_POST['cancel_btn'])) {
        header('location: dashboard.php');
    } else {
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
            <td><input id="FTE_final_res" readonly type="text"></td>
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
        <td><input id="TIG_finale_res" readonly type="text"></td>
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
            <td><input id="" type="text"></td>
            <td><input id="" type="date"></td>
            <td><input id="" type="date"></td>
            <td><input id="" type="text"></td>
            <td>
                <select name="" id="">
                    <option value="none">Select Option</option>
                    <option value="local">Local</option>
                    <option value="Int">International</option>
                </select>
            </td>
            <td><input id="" type="text"></td>
            <td><input id="" disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td>
                <select name="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td>
                <select name="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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
            <td>No. of engagements</td>  <!-- TODO: Missing HTML for faculty points -->
        </tr>

        <tr>
            <td>Writer of occasional newspaper column</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td>Writer of regular newspaper column</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td>Host of TV/Radio Program</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td>Guesting as technical expert for TV or radio program/print media/online media</td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="2"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Local</option>
                    <option value="">International</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Head</option>
                    <option value="">Participant</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" disabled></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Head</option>
                    <option value="">Participant</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" disabled></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Head</option>
                    <option value="">Participant</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" disabled></td>
        </tr>

        <tr>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td>
                <select name="" id="">
                    <option value="">Select Option</option>
                    <option value="">Head</option>
                    <option value="">Participant</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" disabled></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td>
                <button>Calculate</button>
            </td>
            <td>Total:</td>
            <td><input disabled type="text"></td>
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

    //TODO: Criterion B

    // function () {
    //     const var1 = document.getElementById('').value
    //     const var2 = document.getElementById('').value
    //     const var3 = document.getElementById('').value
    //     const var4 = document.getElementById('').value
    //     const var5 = document.getElementById('').value
    //     const var6 = document.getElementById('').value
    //     const var7 = document.getElementById('').value
    //     const the_Res1 = document.getElementById('')
    //     if (var1 !== "" && var2 !== "" && var3 !== "" && var4 !== "" && var5 !== "" && var6 !== "") {
    //         the_Res1.value = 20
    //     } else {
    //         the_Res1.value = 0;
    //     }
    //
    //     const test21 = document.getElementById('').value
    //     const test22 = document.getElementById('').value
    //     const test23 = document.getElementById('').value
    //     const test24 = document.getElementById('').value
    //     const test25 = document.getElementById('').value
    //     const test26 = document.getElementById('').value
    //     const the_Res2 = document.getElementById('')
    //     if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
    //         the_Res2.value = 20
    //     } else {
    //         the_Res2.value = 0;
    //     }
    //
    //
    //     const fgh31 = document.getElementById('').value
    //     const fgh32 = document.getElementById('').value
    //     const fgh33 = document.getElementById('').value
    //     const fgh34 = document.getElementById('').value
    //     const fgh35 = document.getElementById('').value
    //     const fgh36 = document.getElementById('').value
    //     const the_Res3 = document.getElementById('')
    //     if (test21 !== "" && test22 !== "" && test23 !== "" && test24 !== "" && test25 !== "" && test26 !== "") {
    //         the_Res3.value = 20
    //     } else {
    //         the_Res3.value = 0;
    //     }
    //
    //     document.getElementById('').value = parseInt(the_Res2.value) + parseInt(the_Res3.value) + parseInt(the_Res1.value)
    // }

</script>