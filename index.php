<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmPodt5vh1lKwmlGvOSj3xeXqUp_TokegUQV_5WxVqgw&s">
  <link rel="stylesheet" href="./CSS/style.css">
  <title>Main Page</title>
</head>

<style>
@font-face{
  font-family: Anton;
  src: url(./Fonts/Anton-Regular.ttf);
}
@font-face{
  font-family: League-Spartan;
  src: url(./Fonts/LeagueSpartan-VariableFont_wght.ttf);
}
/*@font-face{*/
/*  font-family: Inter;*/
/*    src: url(./Fonts/Inter-VariableFont_slnt,wght.ttf);*/
/*}*/
@font-face{
  font-family: Trebuchet;
  src: url(./Fonts/Trebuchet-MS-Italic.ttf);
}
#bg_all{
  background-image: url(./Assets/BG_all.png);
  background-size: cover;
  background-repeat: no-repeat;
}

#index-main{
  height: 100%;
}

.index-title h2 span{
    font-size: 75px;
    margin: 5px 5px 5px 5px;
    font-family: Anton;
}

#index-btns{
    display: grid;
    margin: 50px;
    font-size: 55px;
    align-items: center;
    justify-items: center;
}

#index-btns a{
    text-align: center;
    width: 215px;
    
    text-decoration: none;
    color: white;
    font-style: Inter;
}

.span-last{
    font-family: League-Spartan !important;
    color: #f59a00;
} 

.index-btns-signup{
    background-color: #545454;
    padding: 15px;
    margin: 10px;
    border-radius: 35px;  
}
.index-btns-login{
    background-color: #7d0201;
    padding: 15px;
    margin: 10px;
    border-radius: 35px;
}
</style>

<!-- Header file here -->

<?php require_once 'header.php' ?>


<body id="bg_all">
  <div id="index-main">
    <div class="index-title">
      <h2>
        <span>PERSONAL</span>
        <br>
        <span>PRECLASSIFICATION</span>
        <br>
        <span class="span-last">Web Portal</span>
      </h2>
    </div>

    <div id="index-btns">
      <a href="registration.php" class="index-btns-signup" >SIGN UP</a>
      <br>
      <br>
      <a href="login.php" class="index-btns-login">LOG IN</a>
    </div>
  </div>
</body>
</html>

<script src="./JS/Date.js"></script>

