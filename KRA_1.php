<?php
include 'functions.php';
error_reporting(0);
// if(isset($_POST[''])){

// }

// else if() {

// }
// else{
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/CSS/KRA.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>KRA 1</title>
</head>

<style>
@font-face{
  font-family: Inter;
  src: url(./fonts/Inter-VariableFont_slnt,wght.ttf);
}

* {
  margin: 0;
  padding: 0;
  font-family: Inter;
  text-decoration: none;
  align-items:  center;
}

body{
  background: url(./Assets/KRA_files_bg.jpg);
  background-size: cover;
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
  <h1 class="title">KRA I</h1>

  <br><br><br>
  <?php 
      $query = "SELECT * FROM kra_1 WHERE id = 1";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
  ?>
<table>
  <tr class="row__des">
    <td colspan="3">CRITERION A - INSTRUCTION (MAX = 60 POINTS)</td>
  </tr>
  <tr class="row__des">
    <td>Faculty Performance </td>
    <td>Faculty Score</td>
    <td>Allowable Points</td>
  </tr>

  <tr>
    <td>Student Evaluation (60%)</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_A_student_eval'] ?> "></td>
    <td></td>
  </tr>

  <tr>
    <td>Supervisor's Evaluation (40%)</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_A_supervisor_eval'] ?> "></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION A: </b></td>
    <td>
    <?php 
      $aa = $row['Crit_A_student_eval'];
      $bb = $row['Crit_A_supervisor_eval'];

      $result = $aa + $bb;
    ?>
    <input disabled type="text" value="<?php echo $result ?>">
    </td>
    <td><input disabled type="text" value="<?php echo $result ?>"></td>
  </tr>
</table>

<br><br><br>

<table>
  <tr class="row__des">
    <td colspan="3">CRITERION B - CURRICULUM AND INSTRUCTIONAL MATERIALS DEVELOPMENT (MAX = 30 POINTS)</td>
  </tr>

  <tr class="row__des">
    <td class=""></td>
    <td>Faculty Score</td>
    <td>Allowable Points</td>
  </tr>

  <tr class="row__des">
    <td> INSTRUCTIONAL MATERIALS DEVELOPED AND APPROVED</td>
    <td></td>
    <td></td>
  </tr>

  <tr>
    <td>Sole-Authorship</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_B_sole_autho'] ?>"></td>
    <td></td>
  </tr>

  <tr>
    <td>Co-Authorship</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_B_co_autho'] ?>"></td>
    <td></td>
  </tr>

  <tr>
    <td>ACADEMIC PROGRAM DEVELOPED/REVISED AND IMPLEMENTED</td>
    <td><input disabled type="text" value="5"></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION B: </b></td>
    <?php 
      $aa = $row['Crit_B_sole_autho'];
      $bb = $row['Crit_B_co_autho'];

      $result2 = $aa + $bb + 5;
    ?>
    <td><input disabled type="text" colspan="4" value="<?php echo $result2 ?>"></td>
    <td><input disabled type="text" value="30"></td>
  </tr>
</table>
<br><br><br>

<table>

  <tr class="row__des">
    <td colspan="3">CRITERION C - THESIS, DISSERTATION AND  MENTORSHIP SERVICES (MAX = 10 POINTS)</td>
  </tr>

  <tr class="row__des">
    <td>SERVICES RENDERED AS ADVISER, PANEL OR MENTOR</td>
    <td>Faculty Score</td>
    <td>Allowable Points</td>
  </tr>

  <tr>
    <td> Adviser</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_C_Adviser'] ?>"></td>
    <td></td>
  </tr>

  <tr>
    <td>Panel</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_C_Panel'] ?>"></td>
    <td></td>
  </tr>

  <tr>
    <td>Mentor</td>
    <td><input disabled type="text" value="<?php echo $row['Crit_C_Mentor'] ?>"></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION C:</b></td>
    <?php 
      $aa = $row['Crit_C_Adviser'];
      $bb = $row['Crit_C_Panel'];
      $cc = $row['Crit_C_Mentor'];

      $result3 = $aa + $bb + $cc;
    ?>
    <td><input disabled type="text" value="<?php echo $result3; ?>"></td>
    <td><input disabled type="number" value="10"></td>
  </tr>

  <tr>
    <td>GRAND TOTAL POINTS FOR KRA 1 (MAX - 100 points)</td>
    <?php 
      $aa = $result;
      $bb = $result2;
      $cc = $result3;

      $result4 = $aa + $bb + $cc;
    ?>
    <td><input disabled type="text" disabled value="<?php echo $result4 ?>"></td>
    <?php 
      $aa = $result;

      $result5 = $aa + 30 + 10;
    ?>
    <td><input disabled type="text" disabled value="<?php echo $result5 ?>"></td>
  </tr>
</table>
<?php } ?>
<br><br>


</body>
</html>