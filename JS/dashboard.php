<?php
if (isset($_POST['Log-out'])) { 
header('location: logout.php');
}
// else if() {

// }else if() {

// }else if() {

// }else if() {

// }else(){

// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
    <title>Dashboard</title>
</head>

<style>
  @font-face{
  font-family: Inter;
  src: url(./fonts/Inter-VariableFont_slnt,wght.ttf);
}

</style>

<body>
 <section id="whole-dashboard"> 
  
  <div id="side-nav">   
    <div id="menu_icon" onclick="closeNav()">X</div>
    <ul class="menu">
      <li><a href="dashboard.php">   <span>Dashboard</span> </a></li>
      <li> <a href="request_form.php">   <span>Request Form</span></a></li>
      <li> <a href="ISS_File.php">   <span>Individual Summary Sheet</span></a></li>
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
          
          <div class="widget" id="kra_iii">
            <h2>KRA III </h2>
            <p>Form 3 - A B C D</p>
          </div>

          <div class="widget" id="kra_iv">
            <h2>KRA IV </h2>
            <p>Form 4 - A B C D</p>
          </div>
      </div>

      <div class="widgets2">
          <div class="widget">
            <div class="img__cont">
              <img src="./Assets/clipboard.png">
            </div>
            <div>
              <h2>REQUEST</h2>
              <h2>FORM</h2>
            </div>
          </div>

          <div class="widget">
            <div class="img__cont">
             <img src="./Assets/files.png">
            </div>
            <div>
              <h2>INDIVIDUAL</h2>
              <h2>SUMMARY</h2>
              <h2>SHEET</h2>
            </div>
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