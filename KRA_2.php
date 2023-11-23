<?php

require 'functions.php';
session_start();
if(!isset($_SESSION['user'])){
  header('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/CSS/KRA.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>KRA II</title>
</head>
<style>
    @font-face {
        font-family: Inter;
        src: url(./Fonts/Inter-VariableFont_slnt,wght.ttf);
    }


    body {
        background: url('./Assets/KRA_files_bg.jpg');
        background-size: cover;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Inter;
        text-decoration: none;
        align-items: center;
    }


    td {
        background-color: #dbd7d7;
    }

    input {
        text-align: center;
    }

    .title {
        text-align: center;
        font-size: 50px;
    }

    .row__des td {
        padding: 10px;
        color: white;
        background-color: #7d0201;
        text-align: center;
    }

    .hidden {
        background-color: none;
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

    table {
        font-size: 20px;
        margin-left: auto;
        margin-right: auto;
        min-width: 1000px;
    }

</style>

<body>

<?php

$query = "SELECT * FROM kra_2 WHERE KRA2_ID = 1";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    ?>

    <h1 class="title">KRA II</h1>

    <br><br>
    <br><br><br>

    <?php
    $soleAuthorship = $row['Crit_A_SA'];
    $coAuthorship = $row['Crit_A_CA'];
    $total_1 = $soleAuthorship + $coAuthorship;

    $leadResearcher = $row['Crit_A_LR'];
    $contributor = $row['Crit_A_Contrib'];
    $total_2 = $leadResearcher + $contributor;

    $local = $row['Crit_A_Local'];
    $local_Allowed = $row['Crit_A_Local_Allowed'];
    $international = $row['Crit_A_International'];
    $international_Allowed = $row['Crit_A_International_Allowed'];
    $total_3 = $local + $international;

    $total_A = $row['Crit_A_total'];
    $total_A_allowed = $row['Crit_A_total_allowed'];
    ?>

    <table>

        <tr class="row__des">
            <td colspan="3"><h2>CRITERION A - RESEARCH OUTPUTS (MAX = 100 POINTS)</h2></td>
        </tr>

        <tr><br></tr>

        <tr class="row__des">
            <td>SCHOLARLY RESEARCH PAPERS PUBLISHED</td>
            <td>Points</td>
            <td>Allowable Points</td>
        </tr>


        <tr>
            <td>Sole Authorship</td>
            <td><input type="text" value="<?= $soleAuthorship ?>" disabled></td>
            <td></td>
        </tr>

        <tr>
            <td>Co-Authorship</td>
            <td><input type="text" value="<?= $coAuthorship ?>" disabled></td>
            <td></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS: </b></td>
            <td><input disabled value="<?= $total_1 ?>" type="text"></td>
            <td></td>
        </tr>

        <tr class="row__des">
            <td>RESEARCH OUTPUT TRANSLATED INTO PROJECT, POLICY OR PRODUCT</td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td>Lead Researcher</td>
            <td><input type="text" value="<?= $leadResearcher ?>" disabled></td>
            <td></td>
        </tr>

        <tr>
            <td>Contributor</td>
            <td><input type="text" value="<?= $contributor ?> " disabled></td>
            <td></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS: </b></td>
            <td><input value="<?= $total_2 ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr class="row__des">
            <td>RESEARCH PUBLICATION CITED</td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td>Local (MAX = 40 POINTS)</td>
            <td><input type="text" value="<?= $local ?>" disabled></td>
            <TD><input type="text" value="<?= $local_Allowed ?>" disabled></TD>
        </tr>

        <tr>
            <td>International (MAX = 60 POINTS)</td>
            <td><input type="text" value="<?= $international ?>" disabled></td>
            <td><input type="text" value="<?= $international_Allowed ?>" disabled></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS: </b></td>
            <td><input value="<?= $total_3 ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS FOR CRITERION A: </b></td>
            <td><input type="text" value="<?= $total_A ?>" disabled></td>
            <td><input type="text" value="<?= $total_A_allowed ?>" disabled></td>
        </tr>
    </table>
    <table>
        <tr class="row__des">
            <td colspan="3"><h2>CRITERION B - INVENTIONS (MAX = 100 POINTS)</h2></td>
        </tr>

        <?php

        $PI_SI = $row['Crit_B_PI_SI'];
        $PI_CI = $row['Crit_B_PI_CI'];
        $UMID_SI = $row['Crit_B_UMID_SI'];
        $UMID_CI = $row['Crit_B_UMID_CI'];
        $CPP_L = $row['Crit_B_CPP_Local'];
        $CPP_L_allowed = $row['Crit_B_CPP_Local_allowed'];
        $CPP_I = $row['Crit_B_CPP_International'];
        $CPP_I_allowed = $row['Crit_B_CPP_International_allowed'];
        $NPI_SI = $row['Crit_B_NPI_SI'];
        $NPI_CI = $row['Crit_B_NPI_CI'];
        $NPI_USP = $row['Crit_B_NPI_USP'];
        $NPVA_SD = $row['Crit_B_NPVA_SD'];
        $NPVA_CD = $row['Crit_B_NPVA_CD'];
        $total_B = $row['Crit_B_Total'];
        $total_B_total_allowed = $row['Crit_B_Total_allowed'];
        $PA = $row['Crit_C_PA'];
        $Exhib = $row['Crit_C_Exhibition'];
        $Designs = $row['Crit_C_Designs'];
        $Lit_pub = $row['Crit_C_Lit-pub'];
        $total_C = $row['Crit_C_total'];
        $total_C_allowed = $row['Crit_C_Total_allowed'];
        $totalKRA2 = $row['KRA_2_total'];
        $totalKRA2_allowed = $row['KRA_2_total_allowed'];
        ?>

        <tr class="row__des">
            <td>PATENTED INVENTIONS</td>
            <td>Points</td>
            <td>Allowable Points</td>
        </tr>

        <tr class="row__des">
            <td>Patentable Inventions</td>
            <td colspan="2"></td>
        </tr>

        <!-- <tr class="row__des">
          <td>Invention Patient</td>
          <td></td>
          <td></td>
        </tr> -->

        <tr>
            <td>- Sole Inventor</td>
            <td><input value="<?= $PI_SI ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr>
            <td>- Co-Inventor</td>
            <td><input value="<?= $PI_CI ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr class="row__des">
            <td>Utility Model and Industrial Design</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>- Sole Inventor</td>
            <td><input value="<?= $UMID_SI ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr>
            <td>- Co-Inventor</td>
            <td><input value="<?= $UMID_CI ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr class="row__des">
            <td>Commercialized Patented Product</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Local (MAX = 20 POINTS)</td>
            <td><input value="<?= $CPP_L ?>" disabled type="text"></td>
            <td><input value="<?= $CPP_L_allowed ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr>
            <td>International (MAX = 30 POINTS)</td>
            <td><input value="<?= $CPP_I ?>" disabled type="text"></td>
            <td><input value="<?= $CPP_I_allowed ?>" disabled type="text"></td>
            <td></td>
        </tr>
        <tr class="row__des">
            <td>NON-PATENTABLE INVENTIONS</td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td>Copyrighted and Utilized Software Products</td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td>New Software Products</td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td>- Sole Inventor</td>
            <td><input value="<?= $NPI_SI?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>- Co-Inventor</td>
            <td><input value="<?= $NPI_CI?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>Updated Software Products</td>
            <td><input value="<?= $NPI_USP?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr class="row__des">
            <td>New Plant Variety, Animal Breed, New Microbial Strain</td>
            <td colspan="2"></td>
        </tr>

        <tr>
            <td>Sole Developer</td>
            <td><input value="<?= $NPVA_SD ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>Co-Developer</td>
            <td><input value="<?= $NPVA_CD ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS FOR CRITERION B: </b></td>
            <td><input value="<?= $total_B ?>" disabled type="text"></td>
            <td><input value="<?= $total_B ?>" disabled type="text"></td>
        </tr>
    </table>

    <br><br><br>

    <table>
        <tr class="row__des">
            <td colspan="3"><h2>CRITERION C - CREATIVE WORKS (MAX = 100 POINTS)</h2></td>
        </tr>
        <tr class="row__des">
            <td>CREATIVE WORKS PERFORMED, EXHIBITED, DESIGNED & PUBLISHED</td>
            <td>Points</td>
            <td>Allowable Points</td>
        </tr>

        <tr>
            <td>Performing Arts</td>
            <td><input value="<?= $PA ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>Exhibitions</td>
            <td><input value="<?= $Exhib ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>Designs</td>
            <td><input value="<?= $Designs ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td>Literary Publication</td>
            <td><input value="<?= $Lit_pub ?>" disabled type="text"></td>
            <td></td>
        </tr>

        <tr>
            <td><b>TOTAL POINTS FOR CRITERION C (MAX - 100 points)</b></td>
            <td><input value="<?= $total_C ?>" disabled type="text"></td>
            <td><input value="<?= $total_C_allowed ?>" disabled type="text"></td>
        </tr>

        <tr>
            <td><b><h2>GRAND TOTAL POINTS FOR KRA II (MAX - 100 points)</h2></b></td>
            <td><input value="<?= $totalKRA2 ?>" disabled type="text"></td>
            <td><input value="<?= $totalKRA2_allowed ?>" disabled type="text"></td>
        </tr>
    </table>
<?php } ?>
</body>
</html>