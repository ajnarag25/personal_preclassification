<?php
if(isset($_POST['submit_btn']))
{
  // insert function here
}
else if(isset($_POST['cancel_btn']))
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
  <title>FORM4_C&D</title>
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
}
</style>

<body>

  <h1 class="title">CRITERION C – AWARDS AND RECOGNITION (MAX = 20 POINTS)</h1>
  <h2 class="page_title">1. FOR EVERY AWARD OF DISTINCTION RECEIVED IN RECOGNITION OF ACHIEVEMENT IN RELEVANT AREAS OF SPECIALIZATION, PROFESSION AND/OR ASSIGNMENT OF THE FACULTY CONCERNED.</h2>
  <table>
    <tr class="row__des">
      <td>Name of the Award</td>
      <td>Scope of the Award</td>
      <td>Award-Giving Body/Organization</td>
      <td>Date the Award was Given <br>
        (mm/dd/yyyy)</td>
      <td>Venue of the Award Ceremony</td>
      <td>Faculty Score</td>
    </tr>
    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Institutional</option>
          <option value="">Regional</option>
          <option value="">Local</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="text"></td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Institutional</option>
          <option value="">Regional</option>
          <option value="">Local</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="text"></td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Institutional</option>
          <option value="">Regional</option>
          <option value="">Local</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="text"></td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td colspan="3"></td>
      <td>Total: </td>
      <td><input type="text" disabled></td>
      <td><button>Calculate</button></td>
    </tr>
  </table>

    <Br></Br><Br></Br><Br></Br>

  <h1 class="title">CRITERION D – BONUS INDICATORS FOR NEWLY APPOINTED FACULTY (MAX = 20 POINTS)</h1>
  <h2 class="page_title">1. FOR EVERY YEAR OF FULL-TIME ACADEMIC SERVICE IN AN INSTITUTION OF HIGHER LEARNING AS:</h2>
  <table>
    <tr class="row__des">
      <td>Designation/Position</td>
      <td>Name of HEI/s</td>
      <td>No. of Years</td>
      <td colspan="2">Period Covered</td>
      <td>Faculty Score</td>
    </tr>

    <tr>
      <td colspan="3"></td>
      <td>START</td>
      <td>END</td>
      <td colspan="1"></td>
    </tr>

    <tr>
      <td>
        <select name="" id="">
          <option value="">President</option>
          <option value="">Vice-President</option>
          <option value="">Department</option>
          <option value="">Faculty Member</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"> </td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td>
        <select name="" id="">
          <option value="">President</option>
          <option value="">Vice-President</option>
          <option value="">Department</option>
          <option value="">Faculty Member</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td>
        <select name="" id="">
          <option value="">President</option>
          <option value="">Vice-President</option>
          <option value="">Department</option>
          <option value="">Faculty Member</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td>Total: </td>
      <td><input type="text" disabled></td>
      <td><button>Calculate</button></td>
    </tr>
  </table>

  <h2 class="page_title">2. FOR EVERY YEAR OF INDUSTRY EXPERIENCE (NON-ACADEMIC ORGANIZATION):</h2>
  <table>
    <tr class="row__des">
      <td>Designation/Position</td>
      <td>Designation / Position</td>
      <td>No. of Years</td>
      <td colspan="2">Period Covered</td>
      <td>Faculty Score</td>
    </tr>

    <tr>
      <td colspan="3"></td>
      <td>START</td>
      <td>END</td>
      <td colspan="2"></td>
    </tr>

    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Managerial/Supervisory</option>
          <option value="">Techincal/Skilled</option>
          <option value="">Support/Administrive</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
    </tr>

    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Managerial/Supervisory</option>
          <option value="">Techincal/Skilled</option>
          <option value="">Support/Administrive</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
    </tr>
    <tr>
      <td><input type="text"></td>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">Managerial/Supervisory</option>
          <option value="">Techincal/Skilled</option>
          <option value="">Support/Administrive</option>
        </select>
      </td>
      <td><input type="text"></td>
      <td><input type="date"></td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
    </tr>
    <tr>
      <td colspan="3"></td>
      <td>Total: </td>
      <td><input type="text" disabled></td>
      <td><button>Calculate</button></td>
    </tr>
  </table>
<br><br><br>
  <form method="post" class="form__btns">
  <button name="submit_btn">Submit</button>
  <button name="cancel_btn">Cancel</button>
</form>
</body>
</html>