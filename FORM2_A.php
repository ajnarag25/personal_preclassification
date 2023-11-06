<?php
include 'functions.php';
if(isset($_POST['submit_btn'])){

    $scoreSA = $_POST['score_SA'];
    $scoreCA = $_POST['score_CA'];
    $scoreLR = $_POST['score_LR'];
    $scoreC = $_POST['score_C'];

    if ($scoreSA == "" OR $scoreCA == "" or $scoreLR == "" or $scoreC == ""){
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Please provide the required faculty score',
                    text: 'Something went wrong!',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                })

            })

        </script>
        <?php
    }else{
        $conn->query("UPDATE kra_2 SET Crit_A_SA = '$scoreSA', Crit_A_CA  = '$scoreCA', Crit_A_LR = '$scoreLR', Crit_A_Contrib = '$scoreC' WHERE KRA2_ID = 1") or die($conn->error);
        ?>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                    icon: 'success',
                    title: 'Successfully saved!',
                    text: 'Inserted into database',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "dashboard.php";
                    }
                })

            })
        </script>
        <?php

    }
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
<form method="POST" action="FORM2_A.php">
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
        </tr>

        <tr>
            <td colspan="5"></td>
            <td><button type="button" onclick="calcu_SA_FS()">Calculate</button></td>
            <td>Total: </td>
            <td><input readonly type="text" name="score_SA" id="final_SA"></td>
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
        </tr>

        <tr>
            <td colspan="5"></td>
            <td><button type="button" onclick="calcu_FS__CA()">Calculate</button></td>
            <td>Total: </td>
            <td><input readonly type="text" name="score_CA" id="final_CA"></td>
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
        </tr>

        <tr>
            <td>1</td>
            <td><input id="LR_1" type="text"></td>
            <td><input id="LR_2" type="date"></td>
            <td><input id="LR_3" type="text"></td>
            <td><input id="LR_4" type="text"></td>
            <td><input id="LR_5" type="date"></td>
            <td><input id="LR_FS_1" id="" disabled type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="LR_6" type="text"></td>
            <td><input id="LR_7" type="date"></td>
            <td><input id="LR_8" type="text"></td>
            <td><input id="LR_9" type="text"></td>
            <td><input id="LR_10" type="date"></td>
            <td><input id="LR_FS_2" disabled type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="LR_11" type="text"></td>
            <td><input id="LR_12" type="date"></td>
            <td><input id="LR_13" type="text"></td>
            <td><input id="LR_14" type="text"></td>
            <td><input id="LR_15" type="date"></td>
            <td><input id="LR_FS_3" disabled type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="LR_16" type="text"></td>
            <td><input id="LR_17" type="date"></td>
            <td><input id="LR_18" type="text"></td>
            <td><input id="LR_19" type="text"></td>
            <td><input id="LR_20" type="date"></td>
            <td><input id="LR_FS_4" disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td><button type="button" onclick="test()">Calculate</button></td>
            <td>Total: </td>
            <td><input readonly type="text" name="score_LR" id="LR_fs_finale"></td>
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
        </tr>

        <tr>
            <td>1</td>
            <td><input id="cont1" type="text"></td>
            <td><input id="cont2" type="date"></td>
            <td><input id="cont3" type="text"></td>
            <td><input id="cont4" type="text"></td>
            <td><input id="cont5" type="date"></td>
            <td><input id="cont_res__1" disabled type="text"></td>
        </tr>

        <tr>
            <td>2</td>
            <td><input id="cont6" type="text"></td>
            <td><input id="cont7" type="date"></td>
            <td><input id="cont8" type="text"></td>
            <td><input id="cont9" type="text"></td>
            <td><input id="cont10" type="date"></td>
            <td><input id="cont_res__2" disabled type="text"></td>
        </tr>

        <tr>
            <td>3</td>
            <td><input id="cont11" type="text"></td>
            <td><input id="cont12" type="date"></td>
            <td><input id="cont13" type="text"></td>
            <td><input id="cont14" type="text"></td>
            <td><input id="cont15" type="date"></td>
            <td><input id="cont_res__3" disabled type="text"></td>
        </tr>

        <tr>
            <td>4</td>
            <td><input id="cont16" type="text"></td>
            <td><input id="cont17" type="date"></td>
            <td><input id="cont18" type="text"></td>
            <td><input id="cont19" type="text"></td>
            <td><input id="cont20" type="date"></td>
            <td><input id="cont_res__4" disabled type="text"></td>
        </tr>

        <tr>
            <td colspan="4"></td>
            <td><button type="button" onclick="cont_asdasd()">Calculate</button></td>
            <td>Total: </td>
            <td><input readonly type="text" name="score_C" id="cont_final_res"></td>
        </tr>
    </table>

    <br><br>
    <div class="form__btns">
        <button name="submit_btn" type="submit">Submit</button>
        <a name="cancel_btn" href="dashboard.php">Cancel</a>
    </div>


</form>
</body>

<script>
///////////////////////////////////////////////////////////////////////////////////////////////////////
//* Sole-authorship here below
const RO_1 = document.getElementById('SA_RO_1')
const SA_FS_1 = document.querySelector('#SA_FS_1')

RO_1.addEventListener("change", () => {
  if(RO_1.value.toLowerCase() === "none"){
    SA_FS_1.value = 0
  }
  else if(RO_1.value.toLowerCase() === "book"){
    SA_FS_1.value = 100
  }
  else if(RO_1.value.toLowerCase() === "journal article"){
    SA_FS_1.value = 50
  }
  else if(RO_1.value.toLowerCase() === "book chapter"){
    SA_FS_1.value = 35
  }
  else if(RO_1.value.toLowerCase() === 'monograph'){
    SA_FS_1.value = 100
  }
  else if(RO_1.value.toLowerCase() === "others"){
    SA_FS_1.value = 10
  }
})

const RO_2 = document.getElementById('SA_RO_2')
const SA_FS_2= document.querySelector('#SA_FS_2')

RO_2.addEventListener("change", () => {
  if(RO_2.value.toLowerCase() === "none"){

    SA_FS_2.value = 0
  }
  else if(RO_2.value.toLowerCase() === "book"){
    SA_FS_2.value = 100
  }
  else if(RO_2.value.toLowerCase() === "journal article"){
    SA_FS_2.value = 50
  }
  else if(RO_2.value.toLowerCase() === "book chapter"){
    SA_FS_2.value = 35
  }
  else if(RO_2.value.toLowerCase() === 'monograph'){
    SA_FS_2.value = 100
  }
  else if(RO_2.value.toLowerCase() === "others"){
    SA_FS_2.value = 10
  }
})

const RO_3 = document.getElementById('SA_RO_3')
const SA_FS_3 = document.querySelector('#SA_FS_3')

RO_3.addEventListener("change", () => {
  if(RO_3.value.toLowerCase() === "none"){
    SA_FS_3.value = 0
  }
  else if(RO_3.value.toLowerCase() === "book"){
    SA_FS_3.value = 100
  }
  else if(RO_3.value.toLowerCase() === "journal article"){
    SA_FS_3.value = 50
  }
  else if(RO_3.value.toLowerCase() === "book chapter"){
    SA_FS_3.value = 35
  }
  else if(RO_3.value.toLowerCase() === 'monograph'){
    SA_FS_3.value = 100
  }
  else if(RO_3.value.toLowerCase() === "others"){
    SA_FS_3.value = 10
  }
})

const RO_4 = document.getElementById('SA_RO_4')
const SA_FS_4 = document.querySelector('#SA_FS_4')

RO_4.addEventListener("change", () => {
  if(RO_4.value.toLowerCase() === "none"){
    SA_FS_4.value = 0
  }
  else if(RO_4.value.toLowerCase() === "book"){
    SA_FS_4.value = 100
  }
  else if(RO_4.value.toLowerCase() === "journal article"){
    SA_FS_4.value = 50
  }
  else if(RO_4.value.toLowerCase() === "book chapter"){
    SA_FS_4.value = 35
  }
  else if(RO_4.value.toLowerCase() === 'monograph'){
    SA_FS_4.value = 100
  }
  else if(RO_4.value.toLowerCase() === "others"){
    SA_FS_4.value = 10
  }
})

function calcu_SA_FS() {
  const SA_FS_total = document.getElementById('final_SA')
  SA_FS_total.value =  parseInt(parseInt(SA_FS_1.value) + parseInt(SA_FS_2.value) + parseInt(SA_FS_3.value) + parseInt(SA_FS_4.value))
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * Co-authorship here below

const CO_RO_1 = document.getElementById('CO_RO_1')
const CA_FS_1 = document.getElementById('CA_FS_1')

CO_RO_1.addEventListener("change", () => {
  if(CO_RO_1.value.toLowerCase() === "none"){

    CA_FS_1.value = 0
  }
  else if(CO_RO_1.value.toLowerCase() === "book"){
    CA_FS_1.value = 100
  }
  else if(CO_RO_1.value.toLowerCase() === "journal article"){
    CA_FS_1.value = 50
  }
  else if(CO_RO_1.value.toLowerCase() === "book chapter"){
    CA_FS_1.value = 35
  }
  else if(CO_RO_1.value.toLowerCase() === 'monograph'){
    CA_FS_1.value = 100
  }
  else if(CO_RO_1.value.toLowerCase() === "others"){
    CA_FS_1.value = 10
  }
});

const CA_RO_2 = document.getElementById('CA_RO_2')
const CA_FS_2 = document.getElementById('CA_FS_2')

CA_RO_2.addEventListener("change", () => {
  if(CA_RO_2.value.toLowerCase() === "none"){
    CA_FS_2.value = 0
  }
  else if(CA_RO_2.value.toLowerCase() === "book"){
    CA_FS_2.value = 100
  }
  else if(CA_RO_2.value.toLowerCase() === "journal article"){
    CA_FS_2.value = 50
  }
  else if(CA_RO_2.value.toLowerCase() === "book chapter"){
    CA_FS_2.value = 35
  }
  else if(CA_RO_2.value.toLowerCase() === 'monograph'){
    CA_FS_2.value = 100
  }
  else if(CA_RO_2.value.toLowerCase() === "others"){
    CA_FS_2.value = 10
  }
})

const CO_RO_3 = document.getElementById('CA_RO_3')
const CA_FS_3 = document.getElementById('CO_FS_3')

CO_RO_3.addEventListener("change", () => {
  if(CO_RO_3.value.toLowerCase() === "none"){
    CA_FS_3.value = 0
  }
  else if(CO_RO_3.value.toLowerCase() === "book"){
    CA_FS_3.value = 100
  }
  else if(CO_RO_3.value.toLowerCase() === "journal article"){
    CA_FS_3.value = 50
  }
  else if(CO_RO_3.value.toLowerCase() === "book chapter"){
    CA_FS_3.value = 35
  }
  else if(CO_RO_3.value.toLowerCase() === 'monograph'){
    CA_FS_3.value = 100
  }
  else if(CO_RO_3.value.toLowerCase() === "others"){
    CA_FS_3.value = 10
  }
})

const CA_RO_4 = document.getElementById('CA_RO_4')
const CA_FS_4 = document.getElementById('CA_FS_4')

CA_RO_4.addEventListener("change", () => {
  if(CA_RO_4.value.toLowerCase() === "none"){
    CA_FS_4.value = 0
  }
  else if(CA_RO_4.value.toLowerCase() === "book"){
    CA_FS_4.value = 100
  }
  else if(CA_RO_4.value.toLowerCase() === "journal article"){
    CA_FS_4.value = 50
  }
  else if(CA_RO_4.value.toLowerCase() === "book chapter"){
    CA_FS_4.value = 35
  }
  else if(CA_RO_4.value.toLowerCase() === 'monograph'){
    CA_FS_4.value = 100
  }
  else if(CA_RO_4.value.toLowerCase() === "others"){
    CA_FS_4.value = 10
  }
})

function calcu_FS__CA()
{
  const Final_CA = document.getElementById('final_CA')
  Final_CA.value = parseInt(parseInt(CA_FS_1.value) + parseInt(CA_FS_2.value) + parseInt(CA_FS_3.value) + parseInt(CA_FS_4.value))
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function test() {
//1st tr
const LR1 = document.getElementById('LR_1').value
const LR2 = document.getElementById('LR_2').value
const LR3 = document.getElementById('LR_3').value
const LR4 = document.getElementById('LR_4').value
const LR5 = document.getElementById('LR_5').value
const LR_FS_1 = document.getElementById('LR_FS_1')

if(LR1 !== "" && LR2 !== "" && LR3 !== "" && LR4 !== "" && LR5 !== "")
{LR_FS_1.value = 35}
else
{{LR_FS_1.value = 0}}

//2nd tr
const LR6 = document.getElementById('LR_6').value
const LR7 = document.getElementById('LR_7').value
const LR8 = document.getElementById('LR_8').value
const LR9 = document.getElementById('LR_9').value
const LR10 = document.getElementById('LR_10').value
const LR_FS_2 = document.getElementById('LR_FS_2')

if(LR6 !== "" && LR7 !== "" && LR8 !== "" && LR9 !== "" && LR10 !== "")
{LR_FS_2.value = 35}
else
{{LR_FS_2.value = 0}}

//3rd tr
const LR11 = document.getElementById('LR_11').value
const LR12 = document.getElementById('LR_12').value
const LR13 = document.getElementById('LR_13').value
const LR14 = document.getElementById('LR_14').value
const LR15 = document.getElementById('LR_15').value
const LR_FS_3 = document.getElementById('LR_FS_3')

if(LR11 !== "" && LR12 !== "" && LR13 !== "" && LR14 !== "" && LR15 !== "")
{LR_FS_3.value = 35}
else
{{LR_FS_3.value = 0}}

//4th tr
const LR16 = document.getElementById('LR_16').value
const LR17 = document.getElementById('LR_17').value
const LR18 = document.getElementById('LR_18').value
const LR19 = document.getElementById('LR_19').value
const LR20 = document.getElementById('LR_20').value
const LR_FS_4 = document.getElementById('LR_FS_4')
if(LR16 !== "" && LR17 !== "" && LR18 !== "" && LR19 !== "" && LR20 !== "")
{LR_FS_4.value = 35}
else
{{LR_FS_4.value = 0}}
   document.getElementById('LR_fs_finale').value = parseInt(parseInt(LR_FS_1.value)+parseInt(LR_FS_2.value)+parseInt(LR_FS_3.value)+parseInt(LR_FS_4.value))
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function cont_asdasd()
{
  const cont1 = document.getElementById('cont1').value;
  const cont2 = document.getElementById('cont2').value;
  const cont3 = document.getElementById('cont3').value;
  const cont4 = document.getElementById('cont4').value;
  const cont5 = document.getElementById('cont5').value;
  const cont_res1 = document.getElementById('cont_res__1');
  if(cont1 !== "" && cont2 !== "" && cont3 !== "" && cont4 !== "" && cont5 !== "")
  {cont_res1.value = 35}
  else
  {cont_res1.value = 0}

  const cont6 = document.getElementById('cont6').value;
  const cont7 = document.getElementById('cont7').value;
  const cont8 = document.getElementById('cont8').value;
  const cont9 = document.getElementById('cont9').value;
  const cont10 = document.getElementById('cont10').value;
  const cont_res2 = document.getElementById('cont_res__2')
  if(cont6 !== "" && cont7 !== "" && cont8 !== "" && cont9 !== "" && cont10 !== "")
  {cont_res2.value = 35}
  else
  {cont_res2.value = 0}

  const cont11 = document.getElementById('cont11').value;
  const cont12 = document.getElementById('cont12').value;
  const cont13 = document.getElementById('cont13').value;
  const cont14 = document.getElementById('cont14').value;
  const cont15 = document.getElementById('cont15').value;
  const cont_res3 = document.getElementById('cont_res__3')
  if(cont11 !== "" && cont12 !== "" && cont13 !== "" && cont14 !== "" && cont15 !== "")
  {cont_res3.value = 35}
  else
  {cont_res3.value = 0}

  const cont16 = document.getElementById('cont16').value;
  const cont17 = document.getElementById('cont17').value;
  const cont18 = document.getElementById('cont18').value;
  const cont19 = document.getElementById('cont19').value;
  const cont20 = document.getElementById('cont20').value;
  const cont_res4 = document.getElementById('cont_res__4')

  if(cont16 !== "" && cont17 !== "" && cont18 !== "" && cont19 !== "" && cont20 !== "")
  {cont_res4.value = 35}
  else
  {cont_res4.value = 0}

  document.getElementById('cont_final_res').value = cont_res1.value + cont_res2.value + cont_res3.value + cont_res4.value;
}


</script>
</html>