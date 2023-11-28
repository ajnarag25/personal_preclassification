<?php 
    include('functions.php');
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    }
    if (isset($_POST['Log-out'])) { 
      header('location: logout.php');
      }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./CSS/dashboard.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Dashboard</title>
</head>

<style>
  @font-face{
  font-family: Inter;
  src: url(./Fonts/Inter-VariableFont_slnt,wght.ttf);
  }
  * {
  margin: 0;
  padding: 0;
  font-family: Inter;
  text-decoration: none;
}


.Center-Main_div {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.sec_div {
  display: flex;
  flex-direction: column;
  flex: 1; /* Adjust the flex width of .sec_div */
}

#Title {
  border: solid blue;
  flex: 1; /* Adjust the flex width of #Title */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

#input_creds {  
  margin-top: 50px;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: solid darkcyan;
}

#login_logo_cont img {
  height: 100px;
  width: 100px;
}

.login_creds {
  border: solid black;
}


/* |||||||||||||||||||||||||||| */
/*  DASHBOARD CSS ||||||| */
/* |||||||||||||||||||||||||||| */

header{
  /* PLANNING PHASE */
  background: darkred;
}

#whole-dashboard {
  display: flex;
  height: 100vh;
}

#side-nav {
  background-color: #edae43;
  height: 100%; 
  width: 0px; /* Initial width */
  z-index: 1;
  transition: 0.5s;
  overflow-x: hidden; /* Disable horizontal scroll */
}

#dashboard-content{
  height: 100%;
  width: 100%;
  text-align: center;
}

#content-container{
  display: flexbox;
  justify-content: center;
  width: 100%;
} 

/*#system-title{*/
/*  font-size: 2.1em;*/
/*  height: 8vh;*/
/*  display: flex;*/
/*  background-color: blue;*/

/*}*/

#system-title h2{
  color: white;
  margin-left: 50px;
}

#system-title span{
  margin-left: 45px;
  font-size: 2.6rem;
}

#menu_icon{
  font-size: 36px;
  margin-left: 135px;
}
 .menu li a{
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  display: block;
  transition: 0.3s;
  list-style-type: none;
  border-bottom: solid  black;
  color: black;
}

img{
  margin-left: 2px;
  margin-top: 5px;
  height: 25px;
  width: 25px;
}

form button{
  margin-top: 20px;
  padding: 10px;
  text-decoration: none;
  font-size: 15px;
  color: white;
  border-radius: 25px;
  border: none;
  background-color: #8b0000;
}

.widgets{
  border-radius: 25px;
  display: flex;
  justify-content: space-evenly;
  margin-top: 5%;
  display: flex;
  gap: 5%;
  justify-items: center;
}

.widgets .widget{
  padding: 35px 60px 35px 60px;
}

.widgets2{
  margin-top: 5%;
  display: flex;
  gap: 20%;
  justify-content: center;
}

.widgets2 .widget{
  height: 80px;
  width: 170px
}

.widget{
  margin: 5px;
  padding: 35px 60px 35px 60px;;
  border-radius: 25px;
  color: white;
  background-color: #7d0201;
  align-self: center;
}


.widget p{
  padding-top: 10px;
}


.widgets h2, .widgets2 h2{
  border-bottom: solid white 2px;
  justify-self: center;
  align-self: center;
}

.img__cont img{
  float: left;
  height: 50px;
  width: 50px;
  padding: 5px;
}


/* CSS CODE BELOW IS FOR THE OVERLAY */

.border{
  border: solid black 1px;
  width: 190px;
  margin-left: 50px;
}

#overlay1, #overlay2,#overlay3,#overlay4{
  width: 300px;
  height: auto;
  position: fixed;
  top: 40%;
  left: 50%;
  margin-top: -100px;
  margin-left: -150px;
  background-color: #dbd7d7;
  text-align: center;
  z-index: 11;
}

.overlay_clse_btn {
  padding: 3px;
  font-size: 20px;
  border-radius: 10px;
  margin: 15px;
  color: white;
  border: none;
  background-color: #7d0201;
}

#overlay1 a,#overlay2 a,#overlay3 a,#overlay4 a{
  border-radius: 0px;
  color: white;
  background-color: #7d0201;
  margin: 30px;
  padding: 10px 30px 10px 30px
}

#hidden{
  display: none;
}

.hidden{
  display: none;
}

</style>

<body>
 <section id="whole-dashboard"> 
  
  <div id="side-nav">   
    <div id="menu_icon" onclick="closeNav()">X</div>
    <ul class="menu">
      <li><a href="dashboard.php">   <span>Dashboard</span> </a></li>
      <!-- <li> <a href="request_form.php">   <span>Request Form</span></a></li>
      <li> <a href="ISS_File.php">   <span>Individual Summary Sheet</span></a></li> -->
      <li> <a href="Analytics.php">   <span>Analytics</span></a></li>
      <form  id="Log-out" method="post"> <button name="Log-out">Log Out</button></form>
    </ul>
  </div>

    <div id="content-container">
      <div id="system-title">    
        <span onclick="openNav()">&#9776;</span>  <h2> Dashboard </h2>
      </div>

      <div id="dashboard-content">      
        <div class="widgets"> 
          <div class="widget" id="kra_i">
            <h2>KRA I </h2>
            <p>Form 1 - A B C</p>
          </div>

          <div class="widget" id="kra_ii">
            <h2>KRA II </h2>
            <p>Form 2 - A B C</p>
          </div>
      </div>

      <div class="widgets2">
          <div class="widget" id="kra_iii">
            <h2>KRA III </h2>
            <p>Form 3 - A B C D</p>
          </div>

          <div class="widget" id="kra_iv">
            <h2>KRA IV </h2>
            <p>Form 4 - A B C D</p>
          </div>
      </div>

      <!--                             KRA 1 Overlay                               -->
      <div id="overlay1" class="hidden">
        <br>  <br>
        <form action="">
          <a href="./FORM1_A.php"><span>Form 1-A</span></a>
        </form>  
        <br><div class="border"></div> <br>
        <a href="./FORM1_B&C.php"><span>Form 1-B&C</span></a> 
          <br><br><div class="border"></div> <br>
        <a href="./KRA_1.php"><span>KRA I-Summary of Points</span></a>
          <br> <br><div class="border"></div>
        <button onclick="close__option()" class="overlay_clse_btn">Close</button>
      </div>

      <!--                          * KRA 2 Overlay                              -->
      <div id="overlay2" class="hidden">
        <br>  <br>
        <div>
          <a href="./FORM2_A.php"><span>Form 2-A</span></a>
        </div>  
        <br><div class="border"></div> <br>
        <a href="./FORM2_B.php"><span>Form 2-B</span></a> 
          <br><br><div class="border"></div> <br>
        <a href="./FORM2_C.php"><span>Form 2-C</span></a> 
          <br><br><div class="border"></div> <br>
        <a href="./KRA_2.php"><span>KRA II-Summary of Points</span></a>
          <br> <br><div class="border"></div>
        <button onclick="close__option()" class="overlay_clse_btn">Close</button>
     </div>

      <!--                             * FORM 3                                  -->
      <div id="overlay3" class="hidden">
        <br>  <br>
        <div>
          <a href="./FORM3_A&B.php"><span>Form 3-A&B</span></a>
        </div>  
        <br><div class="border"></div> <br>
        <a href="./FORM3_C&D.php"><span>Form 3-C&D</span></a> 
          <br><br><div class="border"></div> <br>
        <a href="./KRA_3.php"><span>KRA III-Summary of Points</span></a>
          <br> <br><div class="border"></div>
        <button onclick="close__option()" class="overlay_clse_btn">Close</button>
      </div>



      <!--                           * FORM 4                                   -->
      <div id="overlay4" class="hidden">
        <br>  <br>
        <div>
          <a href="./FORM4_A&B.php"><span>Form 4-A&B</span></a>
        </div>  
        <br><div class="border"></div> <br>
        <a href="./FORM4_C&D.php"><span>Form 4-C&D</span></a> 
          <br><br><div class="border"></div> <br>
        <a href="./KRA_4.php"><span>KRA IV-Summary of Points</span></a>
          <br> <br><div class="border"></div>
        <button onclick="close__option()" class="overlay_clse_btn">Close</button>
      </div>
    </div>
  </section>

<script>
 
/* TODO: create an overlay animation here when a div is clicked */

  const kra1 = document.getElementById('kra_i') // kra1 file variable
  const kra2 = document.getElementById('kra_ii') // kra2 file variable
  const kra3 = document.getElementById('kra_iii') // kra3 file variable
  const kra4 = document.getElementById('kra_iv') // kra4 file variable

  const triggerDiv= document.querySelector('.widget');
  const overlay1 = document.getElementById('overlay1');
  const overlay2 = document.getElementById('overlay2');
  const overlay3 = document.getElementById('overlay3');
  const overlay4 = document.getElementById('overlay4');
  const close_Overlay = document.getElementsByClassName('overlay_clse_btn')


  function close__option()
  {
    overlay1.style.display = 'none'
    overlay1.classList.add('hidden')
    overlay2.style.display = 'none'
    overlay2.classList.add('hidden')
    overlay3.style.display = 'none'
    overlay3.classList.add('hidden')
    overlay4.style.display = 'none'
    overlay4.classList.add('hidden')
    document.querySelector(".widgets").style.display = 'flex' ;
    document.querySelector(".widgets2").style.display = 'flex' ;
  }


  // ! DO NOT TOUCH THE CODE
  function openNav() {
  document.getElementById("side-nav").style.width = "210px";
  document.getElementById("menu_icon").style.marginLeft = null;
  }
  
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
  document.getElementById("side-nav").style.width = "0px";
  document.getElementById("content-container").style.marginLeft = "0";
  }


  kra1.addEventListener('click', (/*open__option.function is here*/) => {
    document.querySelector(".widgets").style.display = 'none' ;
    document.querySelector(".widgets2").style.display = 'none' ;
    overlay1.style.display = 'block'
  }) 

  kra2.addEventListener('click', (/*function__here*/) =>{
    document.querySelector(".widgets").style.display = 'none' ;
    document.querySelector(".widgets2").style.display = 'none' ;
    overlay2.style.display = 'block'
  })
  kra3.addEventListener('click', (/*function__here*/) =>{
    document.querySelector(".widgets").style.display = 'none' ;
    document.querySelector(".widgets2").style.display = 'none' ;
    overlay3.style.display = 'block'
  });
  kra4.addEventListener('click', (/*function__here*/)=>{
    document.querySelector(".widgets").style.display = 'none' ;
    document.querySelector(".widgets2").style.display = 'none' ;
    overlay4.style.display = 'block'
  });

</script>
</body>
</html>