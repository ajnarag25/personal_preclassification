<?php
include 'functions.php';
if (isset($_POST['submit_btn'])) {

    $scoreIP_SI = $_POST['SI_FS'];
    $scoreIP_MI = $_POST['IP_MI'];
    $scoreUMID_SI = $_POST['UMID_SI'];
    $scoreUMID_MI = $_POST['UMID_MI'];
    $scoreCPP_L = $_POST['CPP_L'];
    $scoreCPP_I = $_POST['CPP_I'];
    $scoreNSP_SD = $_POST['NSP_SD'];
    $scoreNSP_MD = $_POST['NSP_MD'];
    $scoreUSP_SCD = $_POST['USP_SCD'];
    $scoreNPV_SCD = $_POST['NPV_SCD'];
    $scoreNPV_MD = $_POST['NPV_MD'];

    if ($scoreIP_SI == "" or $scoreIP_MI == "" or $scoreUMID_SI == "" or $scoreUMID_MI == ""
    or $scoreCPP_L == "" or $scoreCPP_I == "" or $scoreNSP_SD == ""or $scoreNSP_MD == ""or $scoreUSP_SCD == ""
        or $scoreNPV_SCD == "" or $scoreNPV_MD == "") {
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
                 Crit_B_PI_SI = '$scoreIP_SI', 
                 Crit_B_PI_CI  = '$scoreIP_MI', 
                 Crit_B_UMID_SI = '$scoreUMID_SI',
                 Crit_B_UMID_CI = '$scoreUMID_MI', 
                 Crit_B_CPP_Local = '$scoreCPP_L', 
                 Crit_B_CPP_Local_allowed = IF(Crit_B_CPP_Local > 20, 20 , Crit_B_CPP_Local),
                 Crit_B_CPP_International = '$scoreCPP_I',
                 Crit_B_CPP_International_allowed = IF(Crit_B_CPP_International > 30, 30 , Crit_B_CPP_International),
                 Crit_B_NPI_SI = '$scoreNSP_SD', 
                 Crit_B_NPI_CI = '$scoreNSP_MD', 
                 Crit_B_NPI_USP ='$scoreUSP_SCD',
                 Crit_B_NPVA_SD ='$scoreNPV_SCD', 
                 Crit_B_NPVA_CD = '$scoreNPV_MD',
                 Crit_B_Total = Crit_B_PI_SI + Crit_B_PI_CI + Crit_B_UMID_SI + Crit_B_UMID_CI + Crit_B_CPP_Local + Crit_B_CPP_International + Crit_B_NPI_SI + Crit_B_NPI_CI + Crit_B_NPI_USP + Crit_B_NPVA_SD + Crit_B_NPVA_CD,
                 Crit_B_Total_allowed = IF(Crit_B_Total > 100, 100, Crit_B_Total),
                 KRA_2_total = Crit_A_total + Crit_B_Total + Crit_C_total,
                 KRA_2_total_allowed = Crit_A_total_allowed + Crit_B_Total_allowed + Crit_C_Total_allowed
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
    <title>FORM2_B</title>
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
<form method="POST" action="FORM2_B.php" onkeydown="return event.key != 'Enter';">
    <h1 class="title">CRITERION B - INVENTIONS (MAX = 100 POINTS)</h1>
    <br><br><br>
    <h2 class="page_title">1. For Every Patented Invention</h2>
    <h2 class="page_title">1.1 Patentable Inventions, Utility Models And Industrial Designs</h2>
    <h2 class="page_title">1.1.1 Invention Patents</h2>
    <h2 class="title">Sole Inventor</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="SI_PTA__1">
                    <option value="none">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="SA__res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="SI_PTA__2">
                    <option value="none">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="SA__res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="SI_PTA__3">
                    <option value="none">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="SA__res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="SI_PTA__4">
                    <option value="none">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="SA__res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calc_si()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="SI_FS" id="SI_FS" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">Multiple Inventors</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="MI_PTA__1">
                    <option value="None">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="MI_I_1"></td>
            <td><input id="MI__res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="MI_PTA__2">
                    <option value="None">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="MI_I_2"></td>
            <td><input id="MI__res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="MI_PTA__3">
                    <option value="None">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="MI_I_3"></td>
            <td><input id="MI__res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="MI_PTA__4">
                    <option value="None">Select option</option>
                    <option value="Accepted">Accepted</option>
                    <option value="Published">Published</option>
                    <option value="Granted">Granted</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="MI_I_4"></td>
            <td><input id="MI__res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcIPMIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="IP_MI" id="MI_final" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">1.1.2 Utility Models And Industrial Designs</h2>
    <h2 class="title">Sole Inventor</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_SI__1">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="UMID_SI_FS_1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_SI__2">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="UMID_SI_FS_2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_SI__3">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="UMID_SI_FS_3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_SI__4">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input id="UMID_SI_FS_4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calcUMIDSIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="UMID_SI" id="UMID_final_FS" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">Multiple Inventors</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Invention</td>
            <td>Application Date <br>
                (mm/dd/yyyy)
            </td>
            <td>Patent Application Stage</td>
            <td>Date Accepted, Published or Granted <br>
                (mm/dd/yyyy)
            </td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>


        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_MI__1">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="UMID_MI_CONTRIBUTION1"></td>
            <td><input id="UMID_MI_FS_1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_MI__2">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="UMID_MI_CONTRIBUTION2"></td>
            <td><input id="UMID_MI_FS_2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_MI__3">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="UMID_MI_CONTRIBUTION3"></td>
            <td><input id="UMID_MI_FS_3" readonly type="text" value="0"></td>
        </tr>
        </tr>

        <tr>
            <td>4</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="UMID_MI__4">
                    <option value="none">Select option</option>
                    <option value="Utility">Utility Model</option>
                    <option value="Industrial">Industrial Design</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text" id="UMID_MI_CONTRIBUTION4"></td>
            <td><input id="UMID_MI_FS_4" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcUMIDMIFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="UMID_MI" id="UMID_MI_FS_Final" readonly type="text"></td>
        </tr>
    </table>

    <h2 class="page_title">1.2 Commercialized Patented Products</h2>
    <h2 class="page_title">1.2.1 Local (Max = 20 Points)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Patented Product</td>
            <td>Type of Product</td>
            <td>Date Patented</td>
            <td>Date Product was first Commercialized</td>
            <td>Area/Place Commercialized</td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input id="CPP1" type="text"></td>
            <td><input id="CPP2" type="text"></td>
            <td><input id="CPP3" type="date"></td>
            <td><input id="CPP4" type="date"></td>
            <td><input id="CPP5" type="text"></td>
            <td><input id="CPP_res1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="CPP6" type="text"></td>
            <td><input id="CPP7" type="text"></td>
            <td><input id="CPP8" type="date"></td>
            <td><input id="CPP9" type="date"></td>
            <td><input id="CPP10" type="text"></td>
            <td><input id="CPP_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="CPP11" type="text"></td>
            <td><input id="CPP12" type="text"></td>
            <td><input id="CPP13" type="date"></td>
            <td><input id="CPP14" type="date"></td>
            <td><input id="CPP15" type="text"></td>
            <td><input id="CPP_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="CPP16" type="text"></td>
            <td><input id="CPP17" type="text"></td>
            <td><input id="CPP18" type="date"></td>
            <td><input id="CPP19" type="date"></td>
            <td><input id="CPP20" type="text"></td>
            <td><input id="CPP_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_cpp_local()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="CPP_L" id="cpp_local_finale" readonly type="text"></td>
        </tr>
    </table>

    <h2 class="page_title">1.2.2 International (Max = 30 Points)</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Patented Product</td>
            <td>Type of Product</td>
            <td>Date Patented</td>
            <td>Date Product was first Commercialized</td>
            <td>Area/Place Commercialized</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="CPP_i1" type="text"></td>
            <td><input id="CPP_i2" type="text"></td>
            <td><input id="CPP_i3" type="date"></td>
            <td><input id="CPP_i4" type="date"></td>
            <td><input id="CPP_i5" type="text"></td>
            <td><input id="CPP_res_i1" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="CPP_i6" type="text"></td>
            <td><input id="CPP_i7" type="text"></td>
            <td><input id="CPP_i8" type="date"></td>
            <td><input id="CPP_i9" type="date"></td>
            <td><input id="CPP_i10" type="text"></td>
            <td><input id="CPP_res_i2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="CPP_i11" type="text"></td>
            <td><input id="CPP_i12" type="text"></td>
            <td><input id="CPP_i13" type="date"></td>
            <td><input id="CPP_i14" type="date"></td>
            <td><input id="CPP_i15" type="text"></td>
            <td><input id="CPP_res_i3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="CPP_i16" type="text"></td>
            <td><input id="CPP_i17" type="text"></td>
            <td><input id="CPP_i18" type="date"></td>
            <td><input id="CPP_i19" type="date"></td>
            <td><input id="CPP_i20" type="text"></td>
            <td><input id="CPP_res_i4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_cpp_International()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="CPP_I" id="cpp_international_finale" readonly type="text"></td>
        </tr>
    </table>


    <h2 class="page_title">2. For Every Non-patentable Invention </h2>
    <h2 class="page_title">2.1 Copyrighted And Utilized Software Products</h2>
    <h2 class="page_title">2.1.1 New Software Products (Computer Program)</h2>
    <h2 class="title">Sole Developer</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Name of End User/s</td>
            <td>Faculty Score</td>
        </tr>

        <tr>
            <td>1</td>
            <td><input id="NSP_SD-1" type="text"></td>
            <td><input id="NSP_SD-2" type="date"></td>
            <td><input id="NSP_SD-3" type="date"></td>
            <td><input id="NSP_SD-4" type="text"></td>
            <td><input id="NSP_SD_res1" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input id="NSP_SD-5" type="text"></td>
            <td><input id="NSP_SD-6" type="date"></td>
            <td><input id="NSP_SD-7" type="date"></td>
            <td><input id="NSP_SD-8" type="text"></td>
            <td><input id="NSP_SD_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="NSP_SD-9" type="text"></td>
            <td><input id="NSP_SD-10" type="date"></td>
            <td><input id="NSP_SD-11" type="date"></td>
            <td><input id="NSP_SD-12" type="text"></td>
            <td><input id="NSP_SD_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="NSP_SD-13" type="text"></td>
            <td><input id="NSP_SD-14" type="date"></td>
            <td><input id="NSP_SD-15" type="date"></td>
            <td><input id="NSP_SD-16" type="text"></td>
            <td><input id="NSP_SD_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="3"></td>
            <td>
                <button type="button" onclick="calc_NSP_SD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NSP_SD" id="NSP_SD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="title">With Multiple Developers</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Name of End User/s</td>
            <td>Contribution</td>
            <td>Faculty Score</td>

        </tr>

        <tr>
            <td>1</td>
            <td><input id="NSP_MD-1" type="text"></td>
            <td><input id="NSP_MD-2" type="date"></td>
            <td><input id="NSP_MD-3" type="date"></td>
            <td><input id="NSP_MD-4" type="text"></td>
            <td><input id="NSP_contribution_1" type="text"></td>
            <td><input id="NSP_MD_res1" readonly type="text" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input id="NSP_MD-5" type="text"></td>
            <td><input id="NSP_MD-6" type="date"></td>
            <td><input id="NSP_MD-7" type="date"></td>
            <td><input id="NSP_MD-8" type="text"></td>
            <td><input id="NSP_contribution_2" type="text"></td>
            <td><input id="NSP_MD_res2" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="NSP_MD-9" type="text"></td>
            <td><input id="NSP_MD-10" type="date"></td>
            <td><input id="NSP_MD-11" type="date"></td>
            <td><input id="NSP_MD-12" type="text"></td>
            <td><input id="NSP_contribution_3" type="text"></td>
            <td><input id="NSP_MD_res3" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="NSP_MD-13" type="text"></td>
            <td><input id="NSP_MD-14" type="date"></td>
            <td><input id="NSP_MD-15" type="date"></td>
            <td><input id="NSP_MD-16" type="text"></td>
            <td><input id="NSP_contribution_4" type="text"></td>
            <td><input id="NSP_MD_res4" readonly type="text" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calc_NSP_MD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NSP_MD" id="NSP_MD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2.1.2 Updated Software Products</h2>
    <h2 class="title">SOLE/CO-DEVELOPER</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of the Software</td>
            <td>Date Copyrighted</td>
            <td>Date Utilized</td>
            <td>Contribution</td>
            <td>Specify New Features</td>
            <td>Name of End user/s</td>
            <td>Faculty Score</td>

        </tr>
        <tr>
            <td>1</td>
            <td><input id="" type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="USP_cont_1">
                    <option value="none">Select Option</option>
                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs1" value="0"></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="date"></td>
            <td><input type="date"></td>
            <td>
                <select name="" id="USP_cont_2">
                    <option value="none">Select Option</option>
                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="USP_cont_3">
                    <option value="none">Select Option</option>
                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs3" value="0"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input type="text"></td>
            <td><input type="date" name="" id=""></td>
            <td><input type="date" name="" id=""></td>
            <td>
                <select name="" id="USP_cont_4">
                    <option value="none">Select Option</option>
                    <option value="Sole">Sole Developer</option>
                    <option value="Co-developer">Co-developer</option>
                </select>
            </td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input readonly type="number" name="" id="USP_fs4" value="0"></td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcUPSSoleCodevFinalScore()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input readonly type="text" name="USP_SCD" id="USP_SCD_finale_res"></td>
        </tr>
    </table>

    <br><br><br>

    <h2 class="page_title">2.2 New Plant Variety Or Animal Breeds Developed/new Microbial Strains Isolated That Are
        Propagated Or Reproduced</h2>
    <h2 class="title">SOLE/CO-DEVELOPER</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Plant Variety, Animal Breed, <br>
                or Microbial Strain
            </td>
            <td>Type of Plant/Animal or Microbe</td>
            <td>Date Completed</td>
            <td>Date Registered</td>
            <td>Date of Propagation based on Certification</td>
            <td>Faculty Score</td>
        </tr>
        <tr>
            <td>1</td>
            <td><input id="SCDP_1" type="text"></td>
            <td><input id="SCDP_2" type="text" name="" id=""></td>
            <td><input id="SCDP_3" type="date" name="" id=""></td>
            <td><input id="SCDP_4" type="date" name="" id=""></td>
            <td><input id="SCDP_5" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_1" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input id="SCDP_6" type="text"></td>
            <td><input id="SCDP_7" type="text" name="" id=""></td>
            <td><input id="SCDP_8" type="date" name="" id=""></td>
            <td><input id="SCDP_9" type="date" name="" id=""></td>
            <td><input id="SCDP_10" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="SCDP_11" type="text"></td>
            <td><input id="SCDP_12" type="text" name="" id=""></td>
            <td><input id="SCDP_13" type="date" name="" id=""></td>
            <td><input id="SCDP_14" type="date" name="" id=""></td>
            <td><input id="SCDP_15" type="date"></td>
            <td><input readonly type="number" name="" id="SCDPres_3" value="0"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td>
                <button type="button" onclick="calcu_scd()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NPV_SCD" id="scdp_final_res" readonly type="text"></td>

        </tr>
    </table>

    <br><br><br>

    <h2 class="title">WITH MULTIPLE DEVELOPERS</h2>
    <table>
        <tr class="row__des">
            <td>No.</td>
            <td>Name of Plant Variety, Animal Breed, <br>
                or Microbial Strain
            </td>
            <td>Type of Plant/Animal or Microbe</td>
            <td>Date Completed</td>
            <td>Date Registered</td>
            <td>Date of Propagation based on Certification</td>
            <td>% Contribution</td>
            <td>Faculty Score</td>

        </tr>
        <tr>
            <td>1</td>
            <td><input type="text"></td>
            <td><input type="text" name="" id="WMD_1"></td>
            <td><input type="date" name="" id="WMD_2"></td>
            <td><input type="date" name="" id="WMD_3"></td>
            <td><input type="date" id="WMD_4"></td>
            <td><input type="text" id="WMD_5"></td>
            <td><input readonly type="number" name="" id="WMD_res1" value="0"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><input type="text"></td>
            <td><input type="text" name="" id="WMD_6"></td>
            <td><input type="date" name="" id="WMD_7"></td>
            <td><input type="date" name="" id="WMD_8"></td>
            <td><input type="date" id="WMD_9"></td>
            <td><input type="text" id="WMD_10"></td>
            <td><input readonly type="number" name="" id="WMD_res2" value="0"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input type="text"></td>
            <td><input type="text" name="" id="WMD_11"></td>
            <td><input type="date" name="" id="WMD_12"></td>
            <td><input type="date" name="" id="WMD_13"></td>
            <td><input type="date" id="WMD_14"></td>
            <td><input type="text" id="WMD_15"></td>
            <td><input readonly type="number" name="" id="WMD_res3" value="0"></td>
        </tr>

        <tr>
            <td colspan="5"></td>
            <td>
                <button type="button" onclick="calcu_WMD()">Calculate</button>
            </td>
            <td>Total:</td>
            <td><input name="NPV_MD" id="WMD_finale_res" readonly type="text"></td>
        </tr>
    </table>

    <br><br>

    <div class="form__btns">
        <button name="submit_btn" type="submit">Submit</button>
        <a class="cancel_btn" href="dashboard.php">Cancel</a>
    </div>
</form>


</body>
<script>
    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    //! sole inventor
    const pta_1 = document.getElementById('SI_PTA__1')
    const sa_res_1 = document.getElementById('SA__res1')

    pta_1.addEventListener("change", () => {
        if (pta_1.value.toLowerCase() === "none") {
            sa_res_1.value = 0;
        } else if (pta_1.value.toLowerCase() === "accepted") {
            sa_res_1.value = 10;
        } else if (pta_1.value.toLowerCase() === "published") {
            sa_res_1.value = 20;
        } else if (pta_1.value.toLowerCase() === "granted") {
            sa_res_1.value = 80;
        }
    });

    const pta_2 = document.getElementById('SI_PTA__2')
    const sa_res_2 = document.getElementById('SA__res2')

    pta_2.addEventListener("change", () => {
        if (pta_2.value.toLowerCase() === "none") {
            sa_res_2.value = 0;
        } else if (pta_2.value.toLowerCase() === "accepted") {
            sa_res_2.value = 10;
        } else if (pta_2.value.toLowerCase() === "published") {
            sa_res_2.value = 20;
        } else if (pta_1.value.toLowerCase() === "granted") {
            sa_res_2.value = 80;
        }
    });

    const pta_3 = document.getElementById('SI_PTA__3')
    const sa_res_3 = document.getElementById('SA__res3')

    pta_3.addEventListener("change", () => {
        if (pta_3.value.toLowerCase() === "none") {
            sa_res_3.value = 0;
        } else if (pta_3.value.toLowerCase() === "accepted") {
            sa_res_3.value = 10;
        } else if (pta_3.value.toLowerCase() === "published") {
            sa_res_3.value = 20;
        } else if (pta_3.value.toLowerCase() === "granted") {
            sa_res_3.value = 80;
        }
    });

    const pta_4 = document.getElementById('SI_PTA__4')
    const sa_res_4 = document.getElementById('SA__res4')

    pta_4.addEventListener("change", () => {
        if (pta_4.value.toLowerCase() === "none") {
            sa_res_4.value = 0;
        } else if (pta_4.value.toLowerCase() === "accepted") {
            sa_res_4.value = 10;
        } else if (pta_4.value.toLowerCase() === "published") {
            sa_res_4.value = 20;
        } else if (pta_4.value.toLowerCase() === "granted") {
            sa_res_4.value = 80;
        }
    });

    function calc_si() {
        document.getElementById('SI_FS').value = parseFloat(sa_res_4.value) + parseFloat(sa_res_3.value) + parseFloat(sa_res_2.value) + parseFloat(sa_res_1.value)
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////
    const IP_MI_Stage1 = document.getElementById('MI_PTA__1')
    const IP_MI_Contribution_1 = document.getElementById('MI_I_1')
    const IP_MI_Score1 = document.getElementById('MI__res1')

    IP_MI_Contribution_1.addEventListener("change", () => {
        if (IP_MI_Contribution_1.value === 0) {
            IP_MI_Score1.value = 0;
        } else {
            if (IP_MI_Stage1.value.toLowerCase() === "none") {
                IP_MI_Score1.value = 0;
            } else if (IP_MI_Stage1.value.toLowerCase() === "accepted") {
                IP_MI_Score1.value = (10 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "published") {
                IP_MI_Score1.value = (20 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "granted") {
                IP_MI_Score1.value = (80 * IP_MI_Contribution_1.value) / 100;
            }
        }

    })

    IP_MI_Stage1.addEventListener("change", () => {
        if (IP_MI_Contribution_1.value === 0) {
            IP_MI_Score1.value = 0;
        } else {
            if (IP_MI_Stage1.value.toLowerCase() === "none") {
                IP_MI_Score1.value = 0;
            } else if (IP_MI_Stage1.value.toLowerCase() === "accepted") {
                IP_MI_Score1.value = (10 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "published") {
                IP_MI_Score1.value = (20 * IP_MI_Contribution_1.value) / 100;
            } else if (IP_MI_Stage1.value.toLowerCase() === "granted") {
                IP_MI_Score1.value = (80 * IP_MI_Contribution_1.value) / 100;
            }
        }

    })


    const IP_MI_Stage2 = document.getElementById('MI_PTA__2')
    const IP_MI_Contribution_2 = document.getElementById('MI_I_2')
    const IP_MI_Score2 = document.getElementById('MI__res2')

    IP_MI_Contribution_2.addEventListener("change", () => {
        if (IP_MI_Contribution_2.value === 0) {
            IP_MI_Score2.value = 0;
        } else {
            if (IP_MI_Stage2.value.toLowerCase() === "none") {
                IP_MI_Score2.value = 0;
            } else if (IP_MI_Stage2.value.toLowerCase() === "accepted") {
                IP_MI_Score2.value = (10 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "published") {
                IP_MI_Score2.value = (20 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "granted") {
                IP_MI_Score2.value = (80 * IP_MI_Contribution_2.value) / 100;
            }

        }

    })

    IP_MI_Stage2.addEventListener("change", () => {
        if (IP_MI_Contribution_2.value === 0) {
            IP_MI_Score2.value = 0;
        } else {
            if (IP_MI_Stage2.value.toLowerCase() === "none") {
                IP_MI_Score2.value = 0;
            } else if (IP_MI_Stage2.value.toLowerCase() === "accepted") {
                IP_MI_Score2.value = (10 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "published") {
                IP_MI_Score2.value = (20 * IP_MI_Contribution_2.value) / 100;
            } else if (IP_MI_Stage2.value.toLowerCase() === "granted") {
                IP_MI_Score2.value = (80 * IP_MI_Contribution_2.value) / 100;
            }

        }

    });

    const IP_MI_Stage3 = document.getElementById('MI_PTA__3')
    const IP_MI_Contribution_3 = document.getElementById('MI_I_3')
    const IP_MI_Score3 = document.getElementById('MI__res3')

    IP_MI_Contribution_3.addEventListener("change", () => {
        if (IP_MI_Contribution_3.value === 0) {
            IP_MI_Score3.value = 0;
        } else {
            if (IP_MI_Stage3.value.toLowerCase() === "none") {
                IP_MI_Score3.value = 0;
            } else if (IP_MI_Stage3.value.toLowerCase() === "accepted") {
                IP_MI_Score3.value = (10 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "published") {
                IP_MI_Score3.value = (20 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "granted") {
                IP_MI_Score3.value = (80 * IP_MI_Contribution_3.value) / 100;
            }

        }
    });

    IP_MI_Stage3.addEventListener("change", () => {
        if (IP_MI_Contribution_3.value === 0) {
            IP_MI_Score3.value = 0;
        } else {
            if (IP_MI_Stage3.value.toLowerCase() === "none") {
                IP_MI_Score3.value = 0;
            } else if (IP_MI_Stage3.value.toLowerCase() === "accepted") {
                IP_MI_Score3.value = (10 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "published") {
                IP_MI_Score3.value = (20 * IP_MI_Contribution_3.value) / 100;
            } else if (IP_MI_Stage3.value.toLowerCase() === "granted") {
                IP_MI_Score3.value = (80 * IP_MI_Contribution_3.value) / 100;
            }

        }
    });

    const IP_MI_Stage4 = document.getElementById('MI_PTA__4')
    const IP_MI_Contribution_4 = document.getElementById('MI_I_4')
    const IP_MI_Score4 = document.getElementById('MI__res4')

    IP_MI_Contribution_4.addEventListener("change", () => {
        console.log("IP_MI_PTA_4 value: " + IP_MI_Stage4.value);
        console.log("IP_MI_Contribution_4 value: " + IP_MI_Contribution_4.value);

        if (IP_MI_Contribution_4.value === 0) {
            IP_MI_Score4.value = 0;
        } else {
            if (IP_MI_Stage4.value.toLowerCase() === "none") {
                IP_MI_Score4.value = 0;
            } else if (IP_MI_Stage4.value.toLowerCase() === "accepted") {
                IP_MI_Score4.value = (10 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "published") {
                IP_MI_Score4.value = (20 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "granted") {
                IP_MI_Score4.value = (80 * IP_MI_Contribution_4.value) / 100;
            }
        }
    });


    IP_MI_Stage4.addEventListener("change", () => {
        if (IP_MI_Contribution_4.value === 0) {
            IP_MI_Score4.value = 0;
        } else {
            if (IP_MI_Stage4.value.toLowerCase() === "none") {
                IP_MI_Score4.value = 0;
            } else if (IP_MI_Stage4.value.toLowerCase() === "accepted") {
                IP_MI_Score4.value = (10 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "published") {
                IP_MI_Score4.value = (20 * IP_MI_Contribution_4.value) / 100;
            } else if (IP_MI_Stage4.value.toLowerCase() === "granted") {
                IP_MI_Score4.value = (80 * IP_MI_Contribution_4.value) / 100;
            }
        }
    });


    function calcIPMIFinalScore() {
        document.getElementById('MI_final').value = (IP_MI_Score1.value * 10 + IP_MI_Score2.value * 10 + IP_MI_Score3.value * 10 + IP_MI_Score4.value * 10) / 10;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const UMID_SI_STAGE1 = document.getElementById('UMID_SI__1')
    const UMID_SI_SCORE1 = document.getElementById('UMID_SI_FS_1')
    UMID_SI_STAGE1.addEventListener("change", () => {
        if (UMID_SI_STAGE1.value.toLowerCase() === "none") {
            UMID_SI_SCORE1.value = 0;
        } else if (UMID_SI_STAGE1.value.toLowerCase() === "utility") {
            UMID_SI_SCORE1.value = 10;
        } else if (UMID_SI_STAGE1.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE1.value = 5;
        }
    });

    const UMID_SI_STAGE2 = document.getElementById('UMID_SI__2')
    const UMID_SI_SCORE2 = document.getElementById('UMID_SI_FS_2')
    UMID_SI_STAGE2.addEventListener("change", () => {
        if (UMID_SI_STAGE2.value.toLowerCase() === "none") {
            UMID_SI_SCORE2.value = 0;
        } else if (UMID_SI_STAGE2.value.toLowerCase() === "utility") {
            UMID_SI_SCORE2.value = 10;
        } else if (UMID_SI_STAGE2.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE2.value = 5;
        }
    });

    const UMID_SI_STAGE3 = document.getElementById('UMID_SI__3')
    const UMID_SI_SCORE3 = document.getElementById('UMID_SI_FS_3')
    UMID_SI_STAGE3.addEventListener("change", () => {
        if (UMID_SI_STAGE3.value.toLowerCase() === "none") {
            UMID_SI_SCORE3.value = 0;
        } else if (UMID_SI_STAGE3.value.toLowerCase() === "utility") {
            UMID_SI_SCORE3.value = 10;
        } else if (UMID_SI_STAGE3.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE3.value = 5;
        }
    });

    const UMID_SI_STAGE4 = document.getElementById('UMID_SI__4')
    const UMID_SI_SCORE4 = document.getElementById('UMID_SI_FS_4')
    UMID_SI_STAGE4.addEventListener("change", () => {
        if (UMID_SI_STAGE4.value.toLowerCase() === "none") {
            UMID_SI_SCORE4.value = 0;
        } else if (UMID_SI_STAGE4.value.toLowerCase() === "utility") {
            UMID_SI_SCORE4.value = 10;
        } else if (UMID_SI_STAGE4.value.toLowerCase() === "industrial") {
            UMID_SI_SCORE4.value = 5;
        }
    });

    function calcUMIDSIFinalScore() {
        document.getElementById('UMID_final_FS').value =
            parseFloat(UMID_SI_SCORE1.value) + parseFloat(UMID_SI_SCORE2.value) + parseFloat(UMID_SI_SCORE3.value) + parseFloat(UMID_SI_SCORE4.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const UMID_MI_STAGE1 = document.getElementById('UMID_MI__1')
    const UMID_MI_CONTRIBUTION1 = document.getElementById('UMID_MI_CONTRIBUTION1')
    const UMID_MI_SCORE1 = document.getElementById('UMID_MI_FS_1')

    UMID_MI_STAGE1.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION1.value === 0) {
            UMID_MI_SCORE1.value = 0;
        } else {
            if (UMID_MI_STAGE1.value === "none") {
                UMID_MI_SCORE1.value = 0;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "utility") {
                UMID_MI_SCORE1.value = (10 * UMID_MI_CONTRIBUTION1.value) / 100;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE1.value = (5 * UMID_MI_CONTRIBUTION1.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION1.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION1.value === 0) {
            UMID_MI_SCORE1.value = 0;
        } else {
            if (UMID_MI_STAGE1.value === "none") {
                UMID_MI_SCORE1.value = 0;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "utility") {
                UMID_MI_SCORE1.value = (10 * UMID_MI_CONTRIBUTION1.value) / 100;
            } else if (UMID_MI_STAGE1.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE1.value = (5 * UMID_MI_CONTRIBUTION1.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE2 = document.getElementById('UMID_MI__2')
    const UMID_MI_CONTRIBUTION2 = document.getElementById('UMID_MI_CONTRIBUTION2')
    const UMID_MI_SCORE2 = document.getElementById('UMID_MI_FS_2')

    UMID_MI_STAGE2.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION2.value === 0) {
            UMID_MI_SCORE2.value = 0;
        } else {
            if (UMID_MI_STAGE2.value === "none") {
                UMID_MI_SCORE2.value = 0;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "utility") {
                UMID_MI_SCORE2.value = (10 * UMID_MI_CONTRIBUTION2.value) / 100;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE2.value = (5 * UMID_MI_CONTRIBUTION2.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION2.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION2.value === 0) {
            UMID_MI_SCORE2.value = 0;
        } else {
            if (UMID_MI_STAGE2.value === "none") {
                UMID_MI_SCORE2.value = 0;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "utility") {
                UMID_MI_SCORE2.value = (10 * UMID_MI_CONTRIBUTION2.value) / 100;
            } else if (UMID_MI_STAGE2.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE2.value = (5 * UMID_MI_CONTRIBUTION2.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE3 = document.getElementById('UMID_MI__3')
    const UMID_MI_CONTRIBUTION3 = document.getElementById('UMID_MI_CONTRIBUTION3')
    const UMID_MI_SCORE3 = document.getElementById('UMID_MI_FS_3')

    UMID_MI_STAGE3.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION3.value === 0) {
            UMID_MI_SCORE3.value = 0;
        } else {
            if (UMID_MI_STAGE3.value === "none") {
                UMID_MI_SCORE3.value = 0;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "utility") {
                UMID_MI_SCORE3.value = (10 * UMID_MI_CONTRIBUTION3.value) / 100;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE3.value = (5 * UMID_MI_CONTRIBUTION3.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION3.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION3.value === 0) {
            UMID_MI_SCORE3.value = 0;
        } else {
            if (UMID_MI_STAGE3.value === "none") {
                UMID_MI_SCORE3.value = 0;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "utility") {
                UMID_MI_SCORE3.value = (10 * UMID_MI_CONTRIBUTION3.value) / 100;
            } else if (UMID_MI_STAGE3.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE3.value = (5 * UMID_MI_CONTRIBUTION3.value) / 100;
            }
        }
    })

    const UMID_MI_STAGE4 = document.getElementById('UMID_MI__4')
    const UMID_MI_CONTRIBUTION4 = document.getElementById('UMID_MI_CONTRIBUTION4')
    const UMID_MI_SCORE4 = document.getElementById('UMID_MI_FS_4')

    UMID_MI_STAGE4.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION4.value === 0) {
            UMID_MI_SCORE4.value = 0;
        } else {
            if (UMID_MI_STAGE4.value === "none") {
                UMID_MI_SCORE4.value = 0;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "utility") {
                UMID_MI_SCORE4.value = (10 * UMID_MI_CONTRIBUTION4.value) / 100;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE4.value = (5 * UMID_MI_CONTRIBUTION4.value) / 100;
            }
        }
    })

    UMID_MI_CONTRIBUTION4.addEventListener("change", () => {
        if (UMID_MI_CONTRIBUTION4.value === 0) {
            UMID_MI_SCORE4.value = 0;
        } else {
            if (UMID_MI_STAGE4.value === "none") {
                UMID_MI_SCORE4.value = 0;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "utility") {
                UMID_MI_SCORE4.value = (10 * UMID_MI_CONTRIBUTION4.value) / 100;
            } else if (UMID_MI_STAGE4.value.toLowerCase() === "industrial") {
                UMID_MI_SCORE4.value = (5 * UMID_MI_CONTRIBUTION4.value) / 100;
            }
        }
    })

    function calcUMIDMIFinalScore() {
        document.getElementById('UMID_MI_FS_Final').value = (UMID_MI_SCORE1.value * 10 + UMID_MI_SCORE2.value * 10 + UMID_MI_SCORE3.value * 10 + UMID_MI_SCORE4.value * 10) / 10;
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_cpp_local() {
        const NSP1 = document.getElementById('CPP1').value
        const NSP2 = document.getElementById('CPP2').value
        const NSP3 = document.getElementById('CPP3').value
        const NSP4 = document.getElementById('CPP4').value
        const NSP5 = document.getElementById('CPP5').value
        const ress1 = document.getElementById('CPP_res1')

        if (NSP1 !== "" && NSP2 !== "" && NSP3 !== "" && NSP4 !== "" && NSP5 !== "") {
            ress1.value = 5;
        } else {
            ress1.value = 0
        }

        const NSP6 = document.getElementById('CPP6').value
        const NSP7 = document.getElementById('CPP7').value
        const NSP8 = document.getElementById('CPP8').value
        const NSP9 = document.getElementById('CPP9').value
        const NSP10 = document.getElementById('CPP10').value
        const ress2 = document.getElementById('CPP_res2')
        if (NSP6 !== "" && NSP7 !== "" && NSP8 !== "" && NSP9 !== "" && NSP10 !== "") {
            ress2.value = 5;
        } else {
            ress2.value = 0
        }


        const NSP11 = document.getElementById('CPP11').value
        const NSP12 = document.getElementById('CPP12').value
        const NSP13 = document.getElementById('CPP13').value
        const NSP14 = document.getElementById('CPP14').value
        const NSP15 = document.getElementById('CPP15').value
        const ress3 = document.getElementById('CPP_res3')
        if (NSP11 !== "" && NSP12 !== "" && NSP13 !== "" && NSP14 !== "" && NSP15 !== "") {
            ress3.value = 5;
        } else {
            ress3.value = 0
        }


        const NSP16 = document.getElementById('CPP16').value
        const NSP17 = document.getElementById('CPP17').value
        const NSP18 = document.getElementById('CPP18').value
        const NSP19 = document.getElementById('CPP19').value
        const NSP20 = document.getElementById('CPP20').value
        const ress4 = document.getElementById('CPP_res4')
        if (NSP16 !== "" && NSP17 !== "" && NSP18 !== "" && NSP19 !== "" && NSP20 !== "") {
            ress4.value = 5;
        } else {
            ress4.value = 0
        }

        document.getElementById('cpp_local_finale').value = parseFloat(ress1.value) + parseFloat(ress2.value) + parseFloat(ress3.value) + parseFloat(ress4.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_cpp_International() {
        const NSP1 = document.getElementById('CPP_i1').value
        const NSP2 = document.getElementById('CPP_i2').value
        const NSP3 = document.getElementById('CPP_i3').value
        const NSP4 = document.getElementById('CPP_i4').value
        const NSP5 = document.getElementById('CPP_i5').value
        const ress1 = document.getElementById('CPP_res_i1')

        if (NSP1 !== "" && NSP2 !== "" && NSP3 !== "" && NSP4 !== "" && NSP5 !== "") {
            ress1.value = 10;
        } else {
            ress1.value = 0
        }

        const NSP6 = document.getElementById('CPP_i6').value
        const NSP7 = document.getElementById('CPP_i7').value
        const NSP8 = document.getElementById('CPP_i8').value
        const NSP9 = document.getElementById('CPP_i9').value
        const NSP10 = document.getElementById('CPP_i10').value
        const ress2 = document.getElementById('CPP_res_i2')
        if (NSP6 !== "" && NSP7 !== "" && NSP8 !== "" && NSP9 !== "" && NSP10 !== "") {
            ress2.value = 10;
        } else {
            ress2.value = 0
        }


        const NSP11 = document.getElementById('CPP_i11').value
        const NSP12 = document.getElementById('CPP_i12').value
        const NSP13 = document.getElementById('CPP_i13').value
        const NSP14 = document.getElementById('CPP_i14').value
        const NSP15 = document.getElementById('CPP_i15').value
        const ress3 = document.getElementById('CPP_res_i3')
        if (NSP11 !== "" && NSP12 !== "" && NSP13 !== "" && NSP14 !== "" && NSP15 !== "") {
            ress3.value = 10;
        } else {
            ress3.value = 0
        }


        const NSP16 = document.getElementById('CPP_i16').value
        const NSP17 = document.getElementById('CPP_i17').value
        const NSP18 = document.getElementById('CPP_i18').value
        const NSP19 = document.getElementById('CPP_i19').value
        const NSP20 = document.getElementById('CPP_i20').value
        const ress4 = document.getElementById('CPP_res_i4')
        if (NSP16 !== "" && NSP17 !== "" && NSP18 !== "" && NSP19 !== "" && NSP20 !== "") {
            ress4.value = 10;
        } else {
            ress4.value = 0
        }

        document.getElementById('cpp_international_finale').value = parseFloat(ress1.value) + parseFloat(ress2.value) + parseFloat(ress3.value) + parseFloat(ress4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_NSP_SD() { //! 2.1.1 NSP Sole-dev
        const SD1 = document.getElementById('NSP_SD-1').value
        const SD2 = document.getElementById('NSP_SD-2').value
        const SD3 = document.getElementById('NSP_SD-3').value
        const SD4 = document.getElementById('NSP_SD-4').value
        const SD_res1 = document.getElementById('NSP_SD_res1');

        if (SD1 !== "" && SD2 !== "" && SD3 !== "" && SD4 !== "") {
            SD_res1.value = 10
        } else {
            SD_res1.value = 0
        }

        const SD5 = document.getElementById('NSP_SD-5').value
        const SD6 = document.getElementById('NSP_SD-6').value
        const SD7 = document.getElementById('NSP_SD-7').value
        const SD8 = document.getElementById('NSP_SD-8').value
        const SD_res2 = document.getElementById('NSP_SD_res2');

        if (SD5 !== "" && SD6 !== "" && SD7 !== "" && SD8 !== "") {
            SD_res2.value = 10
        } else {
            SD_res2.value = 0
        }

        const SD9 = document.getElementById('NSP_SD-9').value
        const SD10 = document.getElementById('NSP_SD-10').value
        const SD11 = document.getElementById('NSP_SD-11').value
        const SD12 = document.getElementById('NSP_SD-12').value
        const SD_res3 = document.getElementById('NSP_SD_res3');

        if (SD9 !== "" && SD10 !== "" && SD11 !== "" && SD12 !== "") {
            SD_res3.value = 10
        } else {
            SD_res3.value = 0
        }

        const SD13 = document.getElementById('NSP_SD-13').value
        const SD14 = document.getElementById('NSP_SD-14').value
        const SD15 = document.getElementById('NSP_SD-15').value
        const SD16 = document.getElementById('NSP_SD-16').value
        const SD_res4 = document.getElementById('NSP_SD_res4');

        if (SD13 !== "" && SD14 !== "" && SD15 !== "" && SD16 !== "") {
            SD_res4.value = 10
        } else {
            SD_res4.value = 0
        }

        document.getElementById('NSP_SD_finale_res').value = parseFloat(SD_res1.value) + parseFloat(SD_res2.value) + parseFloat(SD_res3.value) + parseFloat(SD_res4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calc_NSP_MD() { // * 2.1.1 NSP Multiple developers
        const SD1 = document.getElementById('NSP_MD-1').value
        const SD2 = document.getElementById('NSP_MD-2').value
        const SD3 = document.getElementById('NSP_MD-3').value
        const SD4 = document.getElementById('NSP_MD-4').value
        const SD_contribution_1 = document.getElementById('NSP_contribution_1').value
        const SD_res1 = document.getElementById('NSP_MD_res1');

        if (SD1 !== "" && SD2 !== "" && SD3 !== "" && SD4 !== "" && SD_contribution_1 !== "") {
            SD_res1.value = (10 * SD_contribution_1) / 100;
        } else {
            SD_res1.value = 0
        }

        const SD5 = document.getElementById('NSP_MD-5').value
        const SD6 = document.getElementById('NSP_MD-6').value
        const SD7 = document.getElementById('NSP_MD-7').value
        const SD8 = document.getElementById('NSP_MD-8').value
        const SD_contribution_2 = document.getElementById('NSP_contribution_2').value
        const SD_res2 = document.getElementById('NSP_MD_res2');

        if (SD5 !== "" && SD6 !== "" && SD7 !== "" && SD8 !== "" && SD_contribution_2 !== "") {
            SD_res2.value = (10 * SD_contribution_2) / 100;
        } else {
            SD_res2.value = 0
        }

        const SD9 = document.getElementById('NSP_MD-9').value
        const SD10 = document.getElementById('NSP_MD-10').value
        const SD11 = document.getElementById('NSP_MD-11').value
        const SD12 = document.getElementById('NSP_MD-12').value
        const SD_contribution_3 = document.getElementById('NSP_contribution_3').value
        const SD_res3 = document.getElementById('NSP_MD_res3');

        if (SD9 !== "" && SD10 !== "" && SD11 !== "" && SD12 !== "" && SD_contribution_3 !== "") {
            SD_res3.value = (10 * SD_contribution_3) / 100;
        } else {
            SD_res3.value = 0
        }

        const SD13 = document.getElementById('NSP_MD-13').value
        const SD14 = document.getElementById('NSP_MD-14').value
        const SD15 = document.getElementById('NSP_MD-15').value
        const SD16 = document.getElementById('NSP_MD-16').value
        const SD_contribution_4 = document.getElementById('NSP_contribution_4').value
        const MD_res4 = document.getElementById('NSP_MD_res4');

        if (SD13 !== "" && SD14 !== "" && SD15 !== "" && SD16 !== "" && SD_contribution_4 !== "") {
            MD_res4.value = (10 * SD_contribution_4) / 100;
        } else {
            MD_res4.value = 0
        }

        document.getElementById('NSP_MD_finale_res').value = parseFloat(SD_res1.value) + parseFloat(SD_res2.value) + parseFloat(SD_res3.value) + parseFloat(MD_res4.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    const usp1 = document.getElementById('USP_cont_1')
    const usp2 = document.getElementById('USP_fs1')

    usp1.addEventListener("change", () => {
        if (usp1.value.toLowerCase() === "none") {
            usp2.value = 0;
        } else if (usp1.value.toLowerCase() === "sole") {
            usp2.value = 4;
        } else if (usp1.value.toLowerCase() === "co-developer") {
            usp2.value = 2;
        }
    });

    const usp3 = document.getElementById('USP_cont_2')
    const usp4 = document.getElementById('USP_fs2')

    usp3.addEventListener("change", () => {
        if (usp3.value.toLowerCase() === "none") {
            usp4.value = 0;
        } else if (usp3.value.toLowerCase() === "sole") {
            usp4.value = 4;
        } else if (usp3.value.toLowerCase() === "co-developer") {
            usp4.value = 2;
        }
    });

    const usp5 = document.getElementById('USP_cont_3')
    const usp6 = document.getElementById('USP_fs3')

    usp5.addEventListener("change", () => {
        if (usp5.value.toLowerCase() === "none") {
            usp6.value = 0;
        } else if (usp5.value.toLowerCase() === "sole") {
            usp6.value = 4;
        } else if (usp5.value.toLowerCase() === "co-developer") {
            usp6.value = 2;
        }
    });

    const usp7 = document.getElementById('USP_cont_4')
    const usp8 = document.getElementById('USP_fs4')

    usp7.addEventListener("change", () => {
        if (usp7.value.toLowerCase() === "none") {
            usp8.value = 0;
        } else if (usp7.value.toLowerCase() === "sole") {
            usp8.value = 4;
        } else if (usp7.value.toLowerCase() === "co-developer") {
            usp8.value = 2;
        }
    });

    function calcUPSSoleCodevFinalScore() {
        document.getElementById('USP_SCD_finale_res').value = parseFloat(usp2.value) + parseFloat(usp4.value) + parseFloat(usp6.value) + parseFloat(usp8.value);
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function calcu_scd() {
        const ha_vard_1 = document.getElementById('SCDP_1').value
        const ha_vard_2 = document.getElementById('SCDP_2').value
        const ha_vard_3 = document.getElementById('SCDP_3').value
        const ha_vard_4 = document.getElementById('SCDP_4').value
        const ha_vard_5 = document.getElementById('SCDP_5').value
        const scd_res1 = document.getElementById('SCDPres_1')
        if (ha_vard_1 !== "" && ha_vard_2 !== "" && ha_vard_3 !== "" && ha_vard_4 !== "" && ha_vard_5 !== "") {
            scd_res1.value = 10;
        } else {
            scd_res1.value = 0;
        }

        const ha_vard_6 = document.getElementById('SCDP_6').value
        const ha_vard_7 = document.getElementById('SCDP_7').value
        const ha_vard_8 = document.getElementById('SCDP_8').value
        const ha_vard_9 = document.getElementById('SCDP_9').value
        const ha_vard_10 = document.getElementById('SCDP_10').value
        const scd_res2 = document.getElementById('SCDPres_2')
        if (ha_vard_6 !== "" && ha_vard_7 !== "" && ha_vard_8 !== "" && ha_vard_9 !== "" && ha_vard_10 !== "") {
            scd_res2.value = 10;
        } else {
            scd_res2.value = 0;
        }

        const ha_vard_11 = document.getElementById('SCDP_11').value
        const ha_vard_12 = document.getElementById('SCDP_12').value
        const ha_vard_13 = document.getElementById('SCDP_13').value
        const ha_vard_14 = document.getElementById('SCDP_14').value
        const ha_vard_15 = document.getElementById('SCDP_15').value
        const scd_res3 = document.getElementById('SCDPres_3')
        if (ha_vard_11 !== "" && ha_vard_12 !== "" && ha_vard_13 !== "" && ha_vard_14 !== "" && ha_vard_15 !== "") {
            scd_res3.value = 10;
        } else {
            scd_res3.value = 0;
        }

        document.getElementById('scdp_final_res').value = parseFloat(scd_res3.value) + parseFloat(scd_res2.value) + parseFloat(scd_res1.value)
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    function calcu_WMD() {
        const ha_vard_1 = document.getElementById('WMD_1').value
        const ha_vard_2 = document.getElementById('WMD_2').value
        const ha_vard_3 = document.getElementById('WMD_3').value
        const ha_vard_4 = document.getElementById('WMD_4').value
        const contribution_1 = document.getElementById('WMD_5').value
        const scd_res1 = document.getElementById('WMD_res1')

        if (ha_vard_1 !== "" && ha_vard_2 !== "" && ha_vard_3 !== "" && ha_vard_4 !== "" && contribution_1 !== "") {
            scd_res1.value = (10 * contribution_1) / 100;
        } else {
            scd_res1.value = 0;
        }

        const ha_vard_121 = document.getElementById('WMD_6').value
        const ha_vard_122 = document.getElementById('WMD_7').value
        const ha_vard_123 = document.getElementById('WMD_8').value
        const ha_vard_124 = document.getElementById('WMD_9').value
        const contribution_2 = document.getElementById('WMD_10').value
        const scd_res2 = document.getElementById('WMD_res2')

        if (ha_vard_121 !== "" && ha_vard_122 !== "" && ha_vard_123 !== "" && ha_vard_124 !== "" && contribution_2 !== "") {
            scd_res2.value = (10 * contribution_2) / 100;
        } else {
            scd_res2.value = 0;
        }

        const ha_vard_11 = document.getElementById('WMD_11').value
        const ha_vard_12 = document.getElementById('WMD_12').value
        const ha_vard_13 = document.getElementById('WMD_13').value
        const ha_vard_14 = document.getElementById('WMD_14').value
        const contribution_3 = document.getElementById('WMD_15').value
        const scd_res3 = document.getElementById('WMD_res3')

        if (ha_vard_11 !== "" && ha_vard_12 !== "" && ha_vard_13 !== "" && ha_vard_14 !== "" && contribution_3 !== "") {
            scd_res3.value = (10 * contribution_3) / 100;
        } else {
            scd_res3.value = 0;
        }

        document.getElementById('WMD_finale_res').value = (scd_res3.value * 10 + scd_res2.value * 10 + scd_res1.value * 10) / 10
    }

</script>

</html>