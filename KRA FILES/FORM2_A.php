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
  <link rel="stylesheet" href="./CSS/Global.css">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <title>FORM2_A</title>
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
  <h1 class="title">CRITERION A - RESEARCH OUTPUTS (MAX = 100 POINTS)</h1>

  <br><br><br>
  <h2 class="">1. FOR EVERY SCHOLARLY RESEARCH PAPER/EDUCATIONAL OR TECHNICAL ARTICLE AND OTHER OUTPUTS PUBLISHED</h2>
  <h2 class="page_title">1.1 SOLE AUTHORSHIP</h2>
<table>
  
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Research Output</td>
    <td>Type of Research Output</td>
    <td>Name of Journal / Publisher</td>
    <td>Reviewer or Its Equivalent</td>
    <td>International Indexing Body</td>
    <td>Date Published</td>
    <td>Faculty Score</td>
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="SA_RO_1">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="SA_FS_1" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="SA_RO_2">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="SA_FS_2" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="SA_RO_3">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="SA_FS_3" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="SA_RO_4">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="SA_FS_4" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="6"></td>
    <td>Total: </td>
    <td><input disabled type="text" name="final_SA" id="final_SA"></td>
    <td><button onclick="calclu_SA_FS()">Calculate</button></td>
  </tr>
</table>

  <br><br><br>

<h2 class="page_title">1.2 Co-authorship</h2>
<table>
  
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Research Output</td>
    <td>Type of Research Output</td>
    <td>Name of Journal / Publisher</td>
    <td>Reviewer or Its Equivalent</td>
    <td>International Indexing Body</td>
    <td>Date Published</td>
    <td>Faculty Score</td>
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="CO_RO_1">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="CA_FS_1" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="CA_RO_2">
        <<option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="CA_FS_2" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="CA_RO_3">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="CO_FS_3" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td>
      <select name="" id="CA_RO_4">
        <option value="None">Select Option</option>
        <option value="Book">Book</option>
        <option value="Journal Article">Journal Article</option>
        <option value="Book Chapter">Book Chapter</option>
        <option value="Monograph">Monograph</option>
        <option value="Others">Other Peer-Reviewed Output</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input id="CA_FS_4" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="6"></td>
    <td>Total: </td>
    <td><input disabled type="text" name="" id="final_CA"></td>
    <td><button onclick="calcu_FS__CA()">Calculate</button></td>
  </tr>
</table>

<br><br><br>

<h2>2. FOR EVERY RESEARCH OUTPUT TRANSLATED INTO PROJECT, POLICY OR PRODUCT AS:</h2>
<h2 class="page_title">2.1 Lead Researcher</h2>
<table>
  
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Research</td>
    <td>Date Completed <br>
      (mm/dd/yyyy)</td>
    <td>Name of Project, Policy 
      <br> or Product</td>
    <td>Funding Source</td>
    <td>Date implemented, adopted or developed <br>
      (mm/dd/yyyy)</td>
    <td>Faculty Score</td>
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input id="LR_1" type="text"></td>
    <td><input id="LR_2" type="date"></td>
    <td><input id="LR_3" type="text"></td>
    <td><input id="LR_4" type="text"></td>
    <td><input id="LR_5" type="date"></td>
    <td><input id="LR_FS_1" id="" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input id="LR_6" type="text"></td>
    <td><input id="LR_7" type="date"></td>
    <td><input id="LR_8" type="text"></td>
    <td><input id="LR_9" type="text"></td>
    <td><input id="LR_10" type="date"></td>
    <td><input id="LR_FS_2" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input id="LR_11" type="text"></td>
    <td><input id="LR_12" type="date"></td>
    <td><input id="LR_13" type="text"></td>
    <td><input id="LR_14" type="text"></td>
    <td><input id="LR_15" type="date"></td>
    <td><input id="LR_FS_3" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input id="LR_16" type="text"></td>
    <td><input id="LR_17" type="date"></td>
    <td><input id="LR_18" type="text"></td>
    <td><input id="LR_19" type="text"></td>
    <td><input id="LR_20" type="date"></td>
    <td><input id="LR_FS_4" disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="5"></td>
    <td>Total: </td>
    <td><input disabled type="text" name="" id="LR_fs_finale"></td>
    <td><button onclick="test()">Calculate</button></td>
  </tr>
</table>

<br><br><br>

<h2 class="page_title">2.2 Contributor</h2>
<table>
  
  <tr class="row__des">
    <td>No.</td>
    <td>Title of Research</td>
    <td>Date Completed <br>
      (mm/dd/yyyy)</td>
    <td>Name of Project, Policy or Product</td>
    <td>Funding Source</td>
    <td>Date implemented, adopted or developed <br>
      (mm/dd/yyyy)</td>
    <td>Faculty Score</td>
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="5"></td>
    <td>Total: </td>
    <td><input disabled type="text" name="" id=""></td>
    <td><button>Calculate</button></td>
  </tr>
</table>

<br><br>
<div class="form__btns">
  <button name="submit_btn">Submit</button>
  <button name="cancel_btn">Cancel</button>
</div>

</body>

<script src="/JS/FORM2_A.js"></script>
</html>