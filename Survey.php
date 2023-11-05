<!-- ! BACKEND PROCESS HERE!!! -->
<?php
include_once ('functions.php');
session_start();
$user_id = $_SESSION['id'];
if (isset($_POST['Submit-survey']))
{
  insert_data__employee($_POST['rank'],$_POST['mde_apptmnt'],$_POST['date_pptmnt'],$_POST['name_suc'],$_POST['campus'],$_POST['address'],$user_id,$user_id);
  insert_data__personal_info($_POST['f_name'],$_POST['l_name'],$_POST['m_name'],$_POST['degree'],$_POST['year'],$user_id,$user_id);
}
elseif (isset($_POST['rqst-DL']))
{
  header('location: test.php');
}
elseif (isset($_POST['logout']))
{
  session_destroy();
  header('location: index.php');
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/survey.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/test.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Survey</title>
</head>
<header>
  <div id="header_div">
    <div id="evsu_logo">
        <img src="./assets/evsu-logo-removebg-preview.png" alt="">  
    </div>

    <h2>Eastern Visayas State University</h2>
    <div class="content_header">
        <div class="content_header_text"><p>Philippine Standard Time: </p></div>
        <div class="content_header_text"> <p> <span id="time_date"> </span> </p> </div>
    </div>
</div>
</header>
<body>
 <section id="whole-dashboard"> <!--* whole container -->
  
  <div id="side-nav">   <!--! fixing this side nav bar -->
    <div id="menu_icon" onclick="closeNav()">X</div>
    <ul class="menu">
      <li><img src="./assets/dashboard.png"><a href="dashboard.html">   <span>Dashboard</span> </a></li>
      <li><img src="./assets/files.png"><a href=" ">   <span>KRA File</span></a></li>
      <form  name="logut"method="post"> <button>Log Out</button></form>
    </ul>
  </div>

    <div id="content-container">
      <div id="system-title">    <!--* the below header design -->
        <span onclick="openNav()">&#9776;</span>  <h2> <img src="./assets/dean.png" id="dean_pic"> Personal Reclassification </h2>
      </div>
      <form  method="post">
      <div id="dashboard-content">       <!-- ! dashboard content --> 
        
          <div id="Personal-info">
            <label> PERSONAL INFORMATION</label>
            <br>
            <input name="f_name" type="text" placeholder="FIRST NAME">
            <br>
            <input name="m_name" type="text" placeholder="MIDDLE NAME">
            <br>
            <input name="l_name" type="text" placeholder="LAST NAME">

          </div>
            <br>
          <div id="edu-attainment">
            <label >HIGHEST EDUCATIONAL ATTAINMENT</label>
            <br>
            <input name="degree" type="text" placeholder="DEGREE NAME">
            <br>
            <input name="hei_name" type="text" placeholder="NAME OF HEI">
            <br>
            <input name="year" type="text" placeholder="YEAR GRADUATED">
          </div>
            <br>
          <div id="employ-stat">
            <label>CURRENT EMPLOYMENT STATUS</label>
            <br>
            <label for="">FACULTY RANK: </label>
            <select id="rank" name="rank">
              <option value="INSTRUCTOR I">INSTRUCTOR I</option>
              <option value="INSTRUCTOR II">INSTRUCTOR II</option>
              <option value="INSTRUCTOR III">INSTRUCTOR III</option>
              <option value="ASSISTANT PROFESSOR I">ASSISTANT PROFESSOR I</option>
              <option value="ASSISTANT PROFESSOR II">ASSISTANT PROFESSOR II</option>
              <option value="ASSISTANT PROFESSOR III">ASSISTANT PROFESSOR III</option>
              <option value="ASSISTANT PROFESSOR IV">ASSISTANT PROFESSOR IV</option>
            </select>
            <br>
            <input name="mde_apptmnt" type="text" placeholder="MODE OF APPOINTMENT"> 
            <br>
            <input name="date_pptmnt" type="text" placeholder="DATE OF APPOINTMENT">
            <br>
            <input name="name_suc"  type="text" placeholder="NAME OF SUC">
            <br>
            <input name="campus" type="text" placeholder="CAMPUS">
            <br>
            <input name="address" type="text" placeholder="ADDRESS">
            <br>
            <input name="fac_dept" type="text" placeholder="Department">
          </div>

          <div id="survey-button">
            <button name="Submit-survey">Submit</button>
            <br>
            <button name="rqst-DL">Download Request form</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- ! Javascript here -->
  <script>

  
  function openNav() {
  document.getElementById("side-nav").style.width = "175px";
  document.getElementById("menu_icon").style.marginLeft = null;
  document.getElementById("")
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
  // document.getElementsByClassName("menu-icon").style.marginLeft = "0"
  document.getElementById("side-nav").style.width = "0px";
  document.getElementById("content-container").style.marginLeft = "0";
 
  }

  </script>
</body>
</html>


<script src="./Js/Date.js"></script>