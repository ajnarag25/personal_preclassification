<?php
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
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
  background-repeat: no-repeat;
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
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td>Supervisor's Evaluation (40%)</td>
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION A: </b></td>
    <td><input disabled type="text"></td>
    <td><input disabled type="text"></td>
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
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td>Co-Authorship</td>
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td>ACADEMIC PROGRAM DEVELOPED/REVISED AND IMPLEMENTED</td>
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION B: </b></td>
    <td><input disabled type="text" colspan="4"></td>
    <td><input disabled type="text"></td>
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
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td>Panel</td>
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td>Mentor</td>
    <td><input disabled type="text"></td>
    <td></td>
  </tr>

  <tr>
    <td><b>TOTAL POINTS FOR CRITERION C:</b></td>
    <td><input disabled type="text"></td>
    <td><input disabled type="number"></td>
  </tr>

  <tr>
    <td>GRAND TOTAL POINTS FOR KRA 1 (MAX - 100 points)</td>
    <td><input disabled type="text" disabled></td>
    <td><input disabled type="text" disabled></td>
  </tr>
</table>

<br><br>


</body>
</html>