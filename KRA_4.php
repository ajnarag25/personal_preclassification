<?php

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/CSS/KRA.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>KRA IV</title>
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

$query = "SELECT * FROM kra_4 WHERE Kra4_ID = 1";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
?>
  
<h1 class="title">KRA IV</h1>

    <?php

    $A_1st = $row['Crit_A_1st'];
    $A_total = $row['Crit_A_total'];
    $B_1st = $row['Crit_B_1st'];
    $B_2nd = $row['Crit_B_2nd'];
    $B_3rd = $row['Crit_B_3rd'];
    $B_total = $row['Crit_B_total'];
    $C_1st = $row['Crit_C_1st'];
    $C_total = $row['Crit_C_total'];
    $D_1st = $row['Crit_D_1st'];
    $D_2nd = $row['Crit_D_2nd'];
    $D_total = $row['Crit_D_total'];
    $KRA4_total = $row['KRA4_total'];


    ?>

<br><br><br>
  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION A – INVOLVEMENT IN PROFESSIONAL ORGANIZATIONS (MAX = 20 POINTS)</td>
    </tr>
    <tr class="row__des">
      <td>INDICATORS</td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>
    <tr>
      <td>MEMBERSHIP AND ROLE/CONTRIBUTION IN ORGANIZATIONS, SCIENTIFIC SOCIETY, ETC.</td>
      <td><input value="<?= $A_1st ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td><b>TOTAL POINTS FOR CRITERION A:</b></td>
      <td><input value="<?= $A_total ?>" disabled type="text"></td>
      <td><input value="<?= $A_total ?>" disabled type="text"></td>
    </tr>
  </table>

  <br><br><br>

  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION B - CONTINUING DEVELOPMENT (MAX = 60 POINTS)</td>
    </tr>
    <tr class="row__des">
      <td>INDICATORS</td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>
    <tr>
      <td>EDUCATIONAL QUALIFICATION (MAX - 40 POINTS)</td>
      <td><input value="<?= $B_1st ?>" disabled type="text"></td>
      <td><input value="<?= $B_1st ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td>PARTICIPATION IN CONFERENCES, SEMINARS, WORKSHOPS, IMMERSIONS (Max = 10 PTS)</td>
      <td><input value="<?= $B_2nd ?>" disabled type="text"></td>
      <td><input value="<?= $B_2nd ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td>PAPER PRESENTATION IN CENFERENCES (Max = 10 POINTS)</td>
      <td><input value="<?= $B_3rd ?>" disabled type="text"></td>
      <td><input value="<?= $B_3rd ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td><b>TOTAL POINTS FOR CRITERION B</b></td>
      <td><input value="<?= $B_total ?>" disabled type="text"></td>
      <td><input value="<?= $B_total ?>" disabled type="text"></td>
    </tr>
  </table>
  <br><br><br>

  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION C - AWARDS AND RECOGNITION (MAX = 20 POINTS)</td>
    </tr>
    <tr class="row__des">
      <td>INDICATORS</td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>
    <tr>
      <td>AWARDS AND DISTINCTIONS RECEIVED</td>
      <td><input value="<?= $C_1st ?>" disabled type="text"></td>
      <td><input value="<?= $C_1st ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td><b>TOTAL POINTS FOR CRITERION C</b></td>
      <td><input value="<?= $C_total ?>" disabled type="text"></td>
      <td><input value="<?= $C_total ?>" disabled type="text"></td>
    </tr>
  </table>
  <br><br><br>
  <table>
    <tr class="row__des">
      <td colspan="3">CRITERION D - BONUS INDICATOR FOR NEWLY HIRED FACULTY (MAX = 20 POINTS)</td>
    </tr>
    <tr class="row__des">
      <td>INDICATORS</td>
      <td>Faculty Score</td>
      <td>Allowable Points</td>
    </tr>
    <tr>
      <td>ACADEMIC SERVICE IN HIGHER EDUCATION</td>
      <td><input value="<?= $D_1st ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td>INDUSTRY SERVICES (NON-ACADEMIC ORGANIZATIONS)</td>
      <td><input value="<?= $D_2nd ?>" disabled type="text"></td>
      <td></td>
    </tr>
    <tr>
      <td><b>TOTAL POINTS FOR CRITERION D</b></td>
      <td><input value="<?= $D_total ?>" disabled type="text"></td>
      <td><input value="<?= $D_total ?>" disabled type="text"></td>
    </tr>
    <tr>
      <td><b>GRAND TOTAL POINTS FOR KRA IV (MAX - 100 points)</b></td>
      <td><input value="<?= $KRA4_total ?>" disabled type="text"></td>
      <td><input value="<?= $KRA4_total ?>" disabled type="text"></td>
    </tr>
  </table>

<?php
}
?>

</body>
</html>