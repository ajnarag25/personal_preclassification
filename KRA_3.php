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
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>KRA III</title>
</head>

<style>
  @font-face{
  font-family: Inter;
      src: url(./Fonts/Inter-VariableFont_slnt,wght.ttf);
}

body{
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
}

* {
  margin: 0;
  padding: 0;
  font-family: Inter;
  text-decoration: none;
  align-items:  center;
}

td{
 background-color:#dbd7d7;
}

input{
  text-align: center;
}

.title{
  text-align: center;
  font-size: 50px;
}

.row__des td{
  padding: 10px;
  color: white;
  background-color: #7d0201;
  text-align: center;
}

.hidden{
  background-color: none;
}

.form__btns{
  text-align: center;
}

.form__btns button{
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
$id = $_SESSION['user']['user_id'];
$query = "SELECT * FROM kra_3 WHERE KRA3_ID = $id";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
?>

  <h1 class="title">KRA III</h1>

  <br><br><br>

    <?php

    $A_LNAP = $row['Crit_A_LNAP'];
    $A_CTIG = $row['Crit_A_CTIG'];
    $A_total = $row['Crit_A_total'];
    $A_total_allowed = $row['Crit_A_total_allowed'];
    $B_1_1 = $row['Crit_B_1.1'];
    $B_1_2 = $row['Crit_B_1.2'];
    $B_1_3 = $row['Crit_B_1.3'];
    $B_1_4_1 = $row['Crit_B_1.4.1'];
    $B_1_4_1_allowed = $row['Crit_B_1.4.1_allowed'];
    $B_1_4_2 = $row['Crit_B_1.4.2'];
    $B_1_4_3 = $row['Crit_B_1.4.3'];
    $B_1_4_4 = $row['Crit_B_1.4.4'];
    $B_1_4_4_allowed = $row['Crit_B_1.4.4_allowed'];
    $B_1_5 = $row['Crit_B_1.5'];
    $B_2_1 = $row['Crit_B_2.1'];
    $B_2_1_allowed = $row['Crit_B_2.1_allowed'];
    $B_total = $row['Crit_B_total'];
    $B_total_allowed = $row['Crit_B_total_allowed'];
    $C_1 = $row['Crit_C_1'];
    $C_total = $row['Crit_C_total'];
    $C_total_allowed = $row['Crit_C_total_allowed'];
    $D_1 = $row['Crit_D_1'];
    $D_total = $row['Crit_D_total'];
    $D_total_allowed = $row['Crit_D_total_allowed'];
    $KRA3_total = $row['KRA3_total'];
    $KRA3_total_allowed = $row['KRA3_total_allowed'];

    ?>


  <table>
      <tr class="row__des">
        <td colspan="3">CRITERION A - SERVICE TO THE INSTITUTION (MAX = 30 POINTS)</td>
      </tr>
      <tr class="row__des">
        <td></td>
        <td>Faculty Score</td>
        <td>Allowable Points</td>
      </tr>
      <tr>
        <td>LINKAGES, NETWORKING AND PARTNESHIP</td>
        <td><input value="<?= $A_LNAP ?>" disabled type="text"></td>
        <td></td>
      </tr>
      <tr>
        <td>CONTRIBUTION TO INCOME GENERATION</td>
        <td><input value="<?= $A_CTIG ?>" disabled type="text"></td>
        <td></td>
      </tr>
      <tr>
        <td><b>TOTAL POINTS FOR CRITERION A: </b></td>
        <td><input value="<?= $A_total ?>" disabled type="text"></td>
        <td><input value="<?= $A_total_allowed ?>" disabled type="text"></td>
      </tr>
  </table>
<br><br><br>
  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION B - SERVICE TO THE COMMUNITY (MAX = 50 POINTS)</td>
    </tr>

    <tr class="row__des">
      <td>1. PROFEESIONAL EXPERTISE-BASED SERVICES</td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>

    <tr>
      <td>1.1 Accreditation, evaluation, assessment & other related educational QA activities.</td>
      <td><input value="<?= $B_1_1 ?>" disabled type="text"></td>
      <td></td>
    </tr>

    <tr>
      <td>1.2 Judge/Examiner for local/international research awards and academic competitions</td>
      <td><input value="<?= $B_1_2 ?>" disabled type="text"></td>
      <td></td>
    </tr>

    <tr>
      <td>1.3 For services rendered as a short-term consultant/expert </td>
      <td><input value="<?= $B_1_3 ?>" disabled type="text"></td>
      <td></td>
    </tr>

    <tr class="row__des">
      <td>1.4 Services  through media</td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td>1.4.1  Writer of occasional newspaper column (MAX = 10 POINTS)</td>
      <td><input value="<?= $B_1_4_1 ?>" disabled type="text"></td>
      <td><input value="<?= $B_1_4_1_allowed ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td>1.4.2  Writer of regular newspaper column</td>
      <td><input value="<?= $B_1_4_2 ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td>1.4.3  Host of TV/Radio Program</td>
      <td><input value="<?= $B_1_4_3 ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td>1.4.4  Guesting as technical expert for TV/radio program/print/online media (MAX = 10 POINTS)</td>
      <td><input value="<?= $B_1_4_4 ?>" disabled type="text"></td>
      <td><input value="<?= $B_1_4_4_allowed ?>" disabled type="text"></td>
    </tr>
      <tr class="row__des">
          <td>1.5 For every hour of training course, seminar, workshop</td>
          <td></td>
          <td></td>
      </tr>
    <tr>
      <td><b>Conducted as a resource person, convenor, facilitator, moderator, keynote, plenary speaker or panelist</b></td>
      <td><input value="<?= $B_1_5 ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr class="row__des">
        <td>2. INSTITUTIONAL RESPONSIBILITY (MAX = 30 POINTS)</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
      <td>2.1 For every service-oriented project in the community (including advocacy initiatives)</td>
      <td><input value="<?= $B_2_1 ?>" disabled type="text"></td>
      <td><input value="<?= $B_2_1_allowed ?>" disabled type="text"></td>
    </tr>
    <tr class="">
      <td><b>TOTAL POINTS FOR CRITERION B: </b></td>
      <td><input value="<?= $B_total ?>" disabled type="text"></td>
      <td><input value="<?= $B_total_allowed ?>" disabled type="text"></td>
    </tr>
  </table>

<br><br><br>

  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION C - QUALITY OF EXTENSION (MAX = 20 POINTS)</td>
    </tr>

    <tr class="row__des">
      <td></td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>

    <tr>
      <td>1. CLIENT SATISFACTION RATING FOR OUTREACH AND EXTENSION ACTIVITIES</td>
      <td><input value="<?= $C_1 ?>" disabled type="text"></td>
      <td></td>
    </tr>

    <tr>
      <td><b>TOTAL POINTS FOR CRITERION C (MAX = 20 points)</b></td>
      <td><input value="<?= $C_total ?>" disabled type="text"></td>
      <td><input value="<?= $C_total_allowed ?>" disabled type="text"></td>
    </tr>
  </table>

  <br><br><br>

  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION D - BONUS CRITERION (MAX = 20 POINTS)</td>
    </tr>
    <tr class="row__des">
      <td></td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>
    <tr>
      <td>1. ADMINISTRATIVE DESIGNATION</td>
      <td><input value="<?= $D_1 ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td><b>TOTAL POINTS FOR CRITERION C (MAX = 20 POINTS)</b></td>
      <td><input value="<?= $D_total ?>" disabled type="text"></td>
      <td><input value="<?= $D_total_allowed ?>" disabled type="text"></td>
    </tr>

    <tr class=" ">
      <td><h2><b>GRAND TOTAL POINTS FOR KRA III (MAX - 100 points)</b></h2></td>
      <td><input value="<?= $KRA3_total ?>" disabled type="text"></td>
      <td><input value="<?= $KRA3_total_allowed ?>" disabled type="text"></td>
    </tr>
  </table>
<?php
}
?>
</body>
</html>