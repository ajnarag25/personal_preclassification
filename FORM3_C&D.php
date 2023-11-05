<?php

if(isset($_POST['Submit_btn']))
{
  // insert function here
}
else if(isset($_POST['Cancel_btn']))
{
 header('location: dashboard.php');
}
else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/CSS/Global.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>FORM3_C&D</title>
</head>

<style>
  @font-face{
  font-family: Inter;
  src: url(./fonts/Inter-VariableFont_slnt\,wght.ttf);
}

* {
  margin: 0;
  padding: 0;
  font-family: Inter;
  text-decoration: none;
  align-items:  center;
}

table{
  margin: auto;
}

td{
  text-align: center; 
  background-color: #dbd7d7;
}

input{
  width: auto;
  height: auto;
}

body{
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
}

.row__des td{
  padding: 10px;
  color: white;
  background-color: #7d0201;
  text-align: center;
}

.title{
  text-align: center;
}

.page_title{
  margin-left: 90px;
  padding: 15px;
  font-style: italic;
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
</style>
<body>
  <h1 class="title">CRITERION C - QUALITY OF EXTENSION SERVICES (MAX = 20 POINTS)</h1>
  <h2 class="page_title">1. CLIENT SATISFACTION RATING FOR OUTREACH AND EXTENSION PROJECTS</h2>
  <div class="Form1_A">
    <div id="Form1_A_student">
      <table>
        <tr class="row__des">
          <td>Evaluation Period</td>
          <td>1st Semester</td>
          <td>2nd Semester</td>
        </tr>
        <tr>  
          <td>AY 2019-2020</td>
          <td> <input type="number" id="A1-1" required min="0" max="100"></td>
          <td> <input type="number" id="A1-2" required min="0" max="100"></td>
        </tr>
        <tr>
          <td>AY 2020-2021</td>
          <td><input type="number" id="A2-1" required min="0" max="100"></td>
          <td><input type="number" id="A2-2" required min="0" max="100"></td>
        </tr>
        <tr>
          <td>AY 2021-2022</td>
          <td><input type="number" id="A3-1" required min="0" max="100"></td>
          <td><input type="number" id="A3-2" required min="0" max="100"></td>
        </tr>
        <tr>
          <td>AY 2022-2023</td>
          <td><input type="number" id="A4-1" required min="0" max="100"></td>
          <td><input type="number" id="A4-2" required min="0" max="100"></td>
        </tr>
        <tr>
          <td colspan="1">Total: </td>
          <td><input type="text" disabled id="FS__stud" name=""></td>
          <td><button onclick="calcu_client()">Calculate</button></td>
        </tr>
      </table>
      <br>
    </div>
  
  </div>

  <br><br><br>
  <h1 class="title">CRITERION D - BONUS CRITERION (MAX = 20 POINTS)</h1>
  <h2 class="page_title">1. FOR ADMINISTRATIVE DESIGNATION</h2>
  <h2 class="page_title">1.1 HIGHEST ADMINISTRATIVE DESIGNATION HELD FOR AT LEAST ONE YEAR WITH THE EVALUATION PERIOD</h2>
  <table>
    <tr class="row__des">
      <td>Designation</td>
      <td>Effectivity Period <br>
        (mm/dd/yyyy to mm/dd/yyyy)</td>
      <td>Faculty Score</td>
    </tr>

    <tr>
      <td>
        <select name="" id="AM1">
          <option value="none">Select Option</option>
          <option value="President">President</option>
          <option value="Vice-President">Vice-President</option>
          <option value="Chancellor">Chancellor</option>
          <option value="Vice">Vice-Chancellor</option>
          <option value="Campus">Campus Director</option>
          <option value="Faculty">Faculty Regent</option>
          <option value="Office">Office Director</option>
          <option value="University">University/College Secretary</option>
          <option value="Project">Project Head</option>
          <option value="Institution">Institution-level Committee Chair</option>
          <option value="Institution">Institution-level Committee Member</option>
          <option value="Dean">Dean</option>
          <option value="Associate">Associate Dean</option>
          <option value="College">College Secretary</option>
          <option value="Department">Department Head</option>
          <option value="Program">Program Chair/Project Head</option>
          <option value="Department">Department-level Committee Chair</option>
          <option value="Department">Department-level Committee Member</option>
        </select>
      </td>
      <td><input id="AM2" type="date"></td>
      <td><input id="AM_res" type="text" disabled></td>
    </tr>
    <tr>
    <td><button onclick="calcu_admin()">Calculate</button></td>
      <td colspan="">Total: </td>
      <td><input type="text" disabled id="AM_res1" name=""></td>
    </tr>
  </table>

  <br><br><br>
  <form method="post" class="form__btns">
    <button name="Submit_btn" >Submit</button>
    <button name="Cancel_btn">Cancel</button>
  </form>

</body>
</html>

<script>

function calcu_client() {
  var A1 = parseInt(document.getElementById("A1-1").value);
  var A2 = parseInt(document.getElementById("A1-2").value);
  var A3 = parseInt(document.getElementById("A2-1").value);
  var A4 = parseInt(document.getElementById("A2-2").value);
  var A5 = parseInt(document.getElementById("A3-1").value);
  var A6 = parseInt(document.getElementById("A3-2").value);
  var A7 = parseInt(document.getElementById("A4-1").value);
  var A8 = parseInt(document.getElementById("A4-2").value);


  // TODO: Recreate the formula here
  var result  = parseFloat((A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8)
  // document.getElementById('OAR__stud').value = result
  document.getElementById('FS__stud').value = parseFloat((result /100)*36)
}

function calcu_admin() {
  // var A1 = parseInt(document.getElementById("AM1").value);
  // var A2 = parseInt(document.getElementById("AM2").value);
  var fed_fr = document.getElementById('AM_res')
  var fed_fr1 = document.getElementById('AM_res1')


  fed_fr.value = 30;
  fed_fr1.value = 30;
}
</script>