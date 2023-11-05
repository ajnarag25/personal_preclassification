<?php
include 'functions.php';
if(isset($_POST['submit_btn'])){
  // insert_data__KRA1A();
}
elseif(isset($_POST['cancel_btn'])){
  header('location: dashboard.php');
} 
else{
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="./CSS/FORM1.css"> -->
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>Form 1A</title>
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
}

body{
  background: url('./Assets/KRA_files_bg.jpg');
  background-size: cover;
}

.title{
  text-align: center;
}

.page_title{
  margin-left: 90px;
  
}


.Form1_A h2, #Form1_A_Faculty h2{
  padding: 9px;
  font-style: italic;
  display: grid;
}

button{
  border: none;
  background-color: #dbd7d7;
  font-size: 20px;
}

input{
  background-color: #dbd7d7;
  font-size: 20px;
}

table{
  font-size: 20px;
  margin-left: auto;
  margin-right: auto;
}

td{
  background-color: #dbd7d7;
  gap: 25px;
  padding: 5px;
}

.row__des td{
  padding: 10px;
  color: white;
  background-color: #7d0201;
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
}

.hidden, #hidden{
  display: none;
}
</style>

<body>

  <h1 class="title">CRITERION A - TEACHING EFFECTIVENESS (MAX = 60 POINTS)</h1> 
  
  <div class="Form1_A">
    <br><br><br>
    <h2>1.   Faculty Performance</h2>
    <h2>1.1 Student Evaluation (60%)</h2>
    <div id="Form1_A_student">
      <h2 class="page_title">AVERAGE STUDENT EVALUATION RATING PER SEMESTER</h2>
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
        <tr class="row__des">
          <td colspan="2">OVERALL AVERAGE RATING</td>
          <td><input id="OAR__stud" type="number" disabled></td>
        </tr>
        <tr class="row__des">
          <td colspan="2">FACULTY SCORE</td>
          <td><input id="FS__stud" type="number" disabled></td>
        </tr>
        <tr>
          <td> <button onclick="calcu_student()">Calculate</button></td>
          <td> <button type="reset">Reset</button></td>
        </tr>
      </table>
    </div>
  
  </div>
  <br><br><br><br><br>

  <div id="Form1_A_Faculty">
    <table>
      <tr>
        <h2>1.2 Faculty Evaluation (40%)</h2>
        <h2 class="page_title">SUPERVISOR RATING PER SEMESTER</h2>
      </tr>
      <tr class="row__des">
        <td>Evaluation Period</td>
        <td>1st Semester</td>
        <td>2nd Semester</td>
      </tr>
      <tr>
        <td>AY 2019-2020</td>
        <td><input type="number" id="B1-1" required min="0" max="100"></td>
        <td><input type="number" id="B1-2" required min="0" max="100"></td>
      </tr>
      <tr>
        <td>AY 2020-2021</td>
        <td><input type="number" id="B2-1" required min="0" max="100"></td>
        <td><input type="number" id="B2-2" required min="0" max="100"></td>
      </tr>
      <tr>
        <td>AY 2021-2022</td>
        <td><input type="number" id="B3-1" required min="0" max="100"></td>
        <td><input type="number" id="B3-2" required min="0" max="100"></td>
      </tr>
      <tr>
        <td>AY 2022-2023</td>
        <td><input type="number" id="B4-1" required min="0" max="100"></td>
        <td><input type="number" id="B4-2" required min="0" max="100"></td>
      </tr>
      <tr class="row__des">
        <td colspan="2">OVERALL AVERAGE RATING</td>
        <td><input id="OAS__fac" type="number" disabled></td>
      </tr>
      <tr class="row__des">
        <td colspan="2">FACULTY SCORE</td>
        <td><input id="FS__fac" type="number" disabled></td>
      </tr>
      <tr>
        <td> <button onclick="calcu_faculty()">Calculate</button></td>
        <td> <button type="reset" value="Reset">Reset</button></td>
      </tr>
    </table>
    <br>

    <form method="post" class="form__btns">
      <button name="submit_btn">Submit</button>
      <button name="cancel_btn">Cancel</button>
    </form>

  </div>
</div>  
</body>

<!-- *                      JS Down Below                   -->
<script>
function calcu_student() {
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
  document.getElementById('OAR__stud').value = result
  document.getElementById('FS__stud').value = parseFloat((result /100)*36)

}


function calcu_faculty() {
  var A1 = parseInt(document.getElementById("B1-1").value);
  var A2 = parseInt(document.getElementById("B1-2").value);
  var A3 = parseInt(document.getElementById("B2-1").value);
  var A4 = parseInt(document.getElementById("B2-2").value);
  var A5 = parseInt(document.getElementById("B3-1").value);
  var A6 = parseInt(document.getElementById("B3-2").value);
  var A7 = parseInt(document.getElementById("B4-1").value);
  var A8 = parseInt(document.getElementById("B4-2").value);

  var result  = parseFloat((A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8)
  document.getElementById('OAS__fac').value = result
  document.getElementById('FS__fac').value = parseFloat((result/100)*24)
}
  
</script>
</html>