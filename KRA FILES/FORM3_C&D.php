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
          <td><input type="text" disabled id="" name=""></td>
          <td><button onclick="">Calculate</button></td>
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
      <td>Link to Evidence  <br>
        from Google Drive</td>
    </tr>

    <tr>
      <td>
        <select name="" id="">
          <option value="">Select Option</option>
          <option value="">President</option>
          <option value="">Vice-President</option>
          <option value="">Chancellor</option>
          <option value="">Vice-Chancellor</option>
          <option value="">Campus Director</option>
          <option value="">Faculty Regent</option>
          <option value="">Office Director</option>
          <option value="">University/College Secretary</option>
          <option value="">Project Head</option>
          <option value="">Institution-level Committee Chair</option>
          <option value="">Institution-level Committee Member</option>
          <option value="">Dean</option>
          <option value="">Associate Dean</option>
          <option value="">College Secretary</option>
          <option value="">Department Head</option>
          <option value="">Program Chair/Project Head</option>
          <option value="">Department-level Committee Chair</option>
          <option value="">Department-level Committee Member</option>
        </select>
      </td>
      <td><input type="date"></td>
      <td><input type="text" disabled></td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td colspan="2">Total: </td>
      <td><input type="text" disabled id="" name=""></td>
      <td><button onclick="">Calculate</button></td>
    </tr>
  </table>

  <br><br><br>
  <div class="form__btns">
    <button name="Submit_btn" onclick="calcu_student()">Submit</button>
    <button name="Cancel_btn">Cancel</button>
  </div>

</body>
</html>