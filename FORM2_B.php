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
  <title>FORM2_B</title>
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
  <h1 class="title">CRITERION B - INVENTIONS (MAX = 100 POINTS)</h1>
  <br><br><br>
<h2 class="page_title">1. For Every Patended Invention</h2>
<h2 class="page_title">1.1 Patentable Inventions, Utility Models And Industrial Designs</h2>
<h2 class="page_title">1.1.1 Invention Patents</h2>
<h2 class="title">Sole Inventor</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Invention</td>
    <td>Application Date <br>
      (mm/dd/yyyy)</td>
    <td>Patent Application Stage</td>
    <td>Date Accepted, Published or Granted <br>
      (mm/dd/yyyy)</td>
    <td>Faculty Score</td>
    
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="SI_PTA__1">
        <option value="none">Select option</option>
        <option value="Accepted">Accepted</option>
        <option value="Published">Published </option>
        <option value="Granted">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="SA__res1" disabled type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="SI_PTA__2">
      <option value="none">Select option</option>
        <option value="Accepted">Accepted</option>
        <option value="Published">Published </option>
        <option value="Granted">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="SA__res2" disabled type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="SI_PTA__3">
      <option value="none">Select option</option>
        <option value="Accepted">Accepted</option>
        <option value="Published">Published </option>
        <option value="Granted">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="SA__res3" disabled type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="SI_PTA__4">
      <option value="none">Select option</option>
        <option value="Accepted">Accepted</option>
        <option value="Published">Published </option>
        <option value="Granted">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="SA__res4" disabled type="text"></td>
  </tr>

  <tr>
    <td colspan="3"></td>
    <td><button onclick="calc_si()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="SI_FS" disabled type="text"></td>
  </tr>
</table>

  <br><br><br>

<h2 class="title">Multiple Inventors</h2>
<table>
<tr class="row__des">
  <td>No.</td>
  <td>Name of the Invention</td>
  <td>Application Date <br>
    (mm/dd/yyyy)</td>
  <td>Patent Application Stage</td>
  <td>Date Accepted, Published or Granted <br>
    (mm/dd/yyyy)</td>
  <td>% Contribution</td>
  <td>Faculty Score</td>
  
</tr>

<tr>
  <td>1</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="MI_PTA__1">
      <option value="None">Select option</option>
      <option value="Accepted">Accepted</option>
      <option value="Published">Published </option>
      <option value="Granted">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="MI__res1" disabled type="text"></td>
</tr>

<tr>
  <td>2</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="MI_PTA__2">
     <option value="None">Select option</option>
      <option value="Accepted">Accepted</option>
      <option value="Published">Published </option>
      <option value="Granted">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="MI__res2" disabled type="text"></td>
</tr>

<tr>
  <td>3</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="MI_PTA__3">
    <option value="None">Select option</option>
      <option value="Accepted">Accepted</option>
      <option value="Published">Published </option>
      <option value="Granted">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="MI__res3" disabled type="text"></td>
</tr>

<tr>
  <td>4</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="MI_PTA__4">
    <option value="None">Select option</option>
      <option value="Accepted">Accepted</option>
      <option value="Published">Published </option>
      <option value="Granted">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="MI__res4" disabled type="text"></td>
</tr>

<tr>
  <td colspan="4"></td>
  <td><button onclick="function_name__here()">Calculate</button></td>
  <td>Total: </td>
  <td><input id="MI_final" disabled type="text"></td>
</tr>
</table>

<br><br><br>

<h2 class="page_title">1.1.2 Utility Models And Industrial Designs</h2>
<h2 class="title">Sole Inventor</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Invention</td>
    <td>Application Date <br>
      (mm/dd/yyyy)</td>
    <td>Patent Application Stage</td>
    <td>Date Accepted, Published or Granted <br>
      (mm/dd/yyyy)</td>
    <td>Faculty Score</td>
    
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="UMID_SI__1">
        <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="UMID_SI_FS_1" disabled type="text"></td>  
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="UMID_SI__2">
        <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="UMID_SI_FS_2" disabled type="text"></td>  
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="UMID_SI__3">
        <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="UMID_SI_FS_3" disabled type="text"></td>  
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="UMID_SI__4">
        <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input id="UMID_SI_FS_4" disabled type="text"></td>  
  </tr>

  <tr>
    <td colspan="3"></td>
    <td><button onclick="da_func()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="UMID_final_FS" disabled type="text"></td>
  </tr>
</table>

<br><br><br>

<h2 class="title">Multiple Inventors</h2>
<table>
<tr class="row__des">
  <td>No.</td>
  <td>Name of the Invention</td>
  <td>Application Date <br>
    (mm/dd/yyyy)</td>
  <td>Patent Application Stage</td>
  <td>Date Accepted, Published or Granted <br>
    (mm/dd/yyyy)</td>
  <td>% Contribution</td>
  <td>Faculty Score</td>
  
</tr>


<tr>
  <td>1</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="UMID_MI__1">
      <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="UMID_MI_FS_1" disabled type="text"></td>
</tr>

<tr>
  <td>2</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="UMID_MI__2">
      <option value="none">Select option</option>
      <option value="Utility">Utility Model</option>
      <option value="Industrial">Industrial Design </option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="UMID_MI_FS_2" disabled type="text"></td>
</tr>

<tr>
  <td>3</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="UMID_MI__3">
      <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="UMID_MI_FS_3" disabled type="text"></td>
</tr>
</tr>

<tr>
  <td>4</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="UMID_MI__4">
      <option value="none">Select option</option>
        <option value="Utility">Utility Model</option>
        <option value="Industrial">Industrial Design </option>
      </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input id="UMID_MI_FS_4" disabled type="text"></td>
</tr>
<tr>
  <td colspan="4"></td>
  <td><button onclick="">Calculate</button></td>
  <td>Total: </td>
  <td><input id="UMID_MI_FS_Final" disabled type="text"></td>
</tr>
</table>

<h2 class="page_title">1.2 Commercialized Patented Products</h2>
<h2 class="page_title">1.2.1 Local (Max = 20 Points)</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of Patented Product</td>
    <td>Type of Product</td>
    <td>Date Patented</td>
    <td>Date Accepted, Published or Granted Date Product was first Commercialized</td>
    <td>Area/Place Commercialized</td>
    <td>Faculty Score</td>
    
  </tr>

  <tr>
    <td>1</td>
    <td><input id="CPP1" type="text"></td>
    <td><input id="CPP2" type="text"></td>
    <td><input id="CPP3" type="date"></td>
    <td><input id="CPP4" type="date"></td>
    <td><input id="CPP5" type="text"></td>
    <td><input id="CPP_res1" disabled type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input id="CPP6" type="text"></td>
    <td><input id="CPP7" type="text"></td>
    <td><input id="CPP8" type="date"></td>
    <td><input id="CPP9" type="date"></td>
    <td><input id="CPP10" type="text"></td>
    <td><input id="CPP_res2" disabled type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input id="CPP11" type="text"></td>
    <td><input id="CPP12" type="text"></td>
    <td><input id="CPP13" type="date"></td>
    <td><input id="CPP14" type="date"></td>
    <td><input id="CPP15" type="text"></td>
    <td><input id="CPP_res3" disabled type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input id="CPP16" type="text"></td>
    <td><input id="CPP17" type="text"></td>
    <td><input id="CPP18" type="date"></td>
    <td><input id="CPP19" type="date"></td>
    <td><input id="CPP20" type="text"></td>
    <td><input id="CPP_res4" disabled type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td><button onclick="calc_cpp_local()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="cpp_local_finale" disabled type="text"></td>
  </tr>
</table>

<h2 class="page_title">1.2.2 International (Max = 30 Points)</h2>
<table>
<tr class="row__des">
    <td>No.</td>
    <td>Name of Patented Product</td>
    <td>Type of Product</td>
    <td>Date Patented</td>
    <td>Date Accepted, Published or Granted Date Product was first Commercialized</td>
    <td>Area/Place Commercialized</td>
    <td>Faculty Score</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input id="CPP_i1" type="text"></td>
    <td><input id="CPP_i2" type="text"></td>
    <td><input id="CPP_i3" type="date"></td>
    <td><input id="CPP_i4" type="date"></td>
    <td><input id="CPP_i5" type="text"></td>
    <td><input id="CPP_res_i1" disabled type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input id="CPP_i6" type="text"></td>
    <td><input id="CPP_i7" type="text"></td>
    <td><input id="CPP_i8" type="date"></td>
    <td><input id="CPP_i9" type="date"></td>
    <td><input id="CPP_i10" type="text"></td>
    <td><input id="CPP_res_i2" disabled type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input id="CPP_i11" type="text"></td>
    <td><input id="CPP_i12" type="text"></td>
    <td><input id="CPP_i13" type="date"></td>
    <td><input id="CPP_i14" type="date"></td>
    <td><input id="CPP_i15" type="text"></td>
    <td><input id="CPP_res_i3" disabled type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input id="CPP_i16" type="text"></td>
    <td><input id="CPP_i17" type="text"></td>
    <td><input id="CPP_i18" type="date"></td>
    <td><input id="CPP_i19" type="date"></td>
    <td><input id="CPP_i20" type="text"></td>
    <td><input id="CPP_res_i4" disabled type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td><button onclick="calc_cpp_International()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="cpp_international_finale" disabled type="text"></td>
  </tr>
</table>


<h2 class="page_title">2. For Every Non-patentable Invention </h2>
<h2 class="page_title">2.1 Copyrighted And Utilized Software Products</h2>
<h2 class="page_title">2.1.1 New Software Products (Computer Program)</h2>
<h2 class="title">Sole Developer</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Software</td>
    <td>Date Copyrighted</td>
    <td>Date Utilized</td>
    <td>Name of End User/s</td>
    <td>Faculty Score</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input id="NSP_SD-1" type="text"></td>
    <td><input id="NSP_SD-2" type="date"></td>
    <td><input id="NSP_SD-3" type="date"></td>
    <td><input id="NSP_SD-4" type="text"></td>
    <td><input id="NSP_SD_res1" disabled type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input id="NSP_SD-5" type="text"></td>
    <td><input id="NSP_SD-6" type="date"></td>
    <td><input id="NSP_SD-7" type="date"></td>
    <td><input id="NSP_SD-8" type="text"></td>
    <td><input id="NSP_SD_res2" disabled type="text"></td>
  </tr>

  <tr>    
    <td>3</td>
    <td><input id="NSP_SD-9"  type="text"></td>
    <td><input id="NSP_SD-10" type="date"></td>
    <td><input id="NSP_SD-11" type="date"></td>
    <td><input id="NSP_SD-12" type="text"></td>
    <td><input id="NSP_SD_res3" disabled type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input id="NSP_SD-13" type="text"></td>
    <td><input id="NSP_SD-14" type="date"></td>
    <td><input id="NSP_SD-15" type="date"></td>
    <td><input id="NSP_SD-16" type="text"></td>
    <td><input id="NSP_SD_res4" disabled type="text"></td>
  </tr>

  <tr>
    <td colspan="3"></td>
    <td><button onclick="caclu_NSP_SD()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="NSP_SD_finale_res" disabled type="text"></td>
  </tr>
</table>

<br><br><br>

<h2 class="title">With Multiple Developers</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Software</td>
    <td>Date Copyrighted</td>
    <td>Date Utilized</td>
    <td>Name of End User/s</td>
    <td>Faculty Score</td>
    
  </tr>

  <tr>
    <td>1</td>
    <td><input id="NSP_MD-1" type="text"></td>
    <td><input id="NSP_MD-2" type="date"></td>
    <td><input id="NSP_MD-3" type="date"></td>
    <td><input id="NSP_MD-4" type="text"></td>
    <td><input id="NSP_MD_res1" disabled type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input id="NSP_MD-5" type="text"></td>
    <td><input id="NSP_MD-6" type="date"></td>
    <td><input id="NSP_MD-7" type="date"></td>
    <td><input id="NSP_MD-8" type="text"></td>
    <td><input id="NSP_MD_res2" disabled type="text"></td>
  </tr>

  <tr>    
    <td>3</td>
    <td><input id="NSP_MD-9"  type="text"></td>
    <td><input id="NSP_MD-10" type="date"></td>
    <td><input id="NSP_MD-11" type="date"></td>
    <td><input id="NSP_MD-12" type="text"></td>
    <td><input id="NSP_MD_res3" disabled type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input id="NSP_MD-13" type="text"></td>
    <td><input id="NSP_MD-14" type="date"></td>
    <td><input id="NSP_MD-15" type="date"></td>
    <td><input id="NSP_MD-16" type="text"></td>
    <td><input id="NSP_MD_res4" disabled type="text"></td>
  </tr>

  <tr>
    <td colspan="3"></td>
    <td><button onclick="caclu_NSP_MD()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="NSP_MD_finale_res" disabled type="text"></td>
  </tr>
</table>

<br><br><br>

<h2 class="page_title">2.1.2 Updated Software Products</h2>
<h2 class="title">SOLE/CO-DEVELOPER</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of the Software</td>
    <td>Date Copyrighted</td>
    <td>Date Utilized</td>
    <td>Contribution</td>
    <td>Specify New Features</td>
    <td>Name of End user/s</td>
    <td>Faculty Score</td>
    
  </tr>
  <tr>  
    <td>1</td>
    <td><input id="" type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="USP_cont_1">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input disabled type="number" name="" id="USP_fs1"></td>
    <td></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="USP_cont_2">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input disabled type="number" name="" id="USP_fs2"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="USP_cont_3">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input disabled type="number" name="" id="USP_fs3"></td>
  </tr>

  <tr>  
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="USP_cont_4">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input disabled type="number" name="" id="USP_fs4"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td><button>Calculate</button></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
  </tr>
</table>

<br><br><br>

<h2 class="page_title">2.2 New Plant Variety Or Animal Breeds Developed/new Microbial Strains Isolated That Are Propagated Or Reproduced</h2>
<h2 class="title">SOLE/CO-DEVELOPER</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of Plant Variety, Animal Breed, <br>
      or Microbial Strain</td>
    <td>Type of Plant/Animal or Microbe</td>
    <td>Date Completed</td>
    <td>Date Registered</td>
    <td>Date of Propagation based on Certification </td>
    <td>Faculty Score</td>
  </tr>
  <tr>  
    <td>1</td>
    <td><input id="SCDP_1" type="text"></td>
    <td><input id="SCDP_2" type="text" name="" id=""></td>
    <td><input id="SCDP_3" type="date" name="" id=""></td>
    <td><input id="SCDP_4" type="date" name="" id=""></td>
    <td><input id="SCDP_5" type="date"></td>
    <td><input disabled type="number" name="" id="SCDPres_1"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input id="SCDP_6" type="text"></td>
    <td><input id="SCDP_7" type="text" name="" id=""></td>
    <td><input id="SCDP_8" type="date" name="" id=""></td>
    <td><input id="SCDP_9" type="date" name="" id=""></td>
    <td><input id="SCDP_10" type="date"></td>
    <td><input disabled type="number" name="" id="SCDPres_2"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input id="SCDP_11" type="text"></td>
    <td><input id="SCDP_12" type="text" name="" id=""></td>
    <td><input id="SCDP_13" type="date" name="" id=""></td>
    <td><input id="SCDP_14" type="date" name="" id=""></td>
    <td><input id="SCDP_15" type="date"></td>
    <td><input disabled type="number" name="" id="SCDPres_3"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td><button onclick="calcu_scd()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="scdp_final_res" disabled type="text"></td>

  </tr>
</table>

<br><br><br>

<h2 class="title">WITH MULTIPLE DEVELOPERS</h2>
<table>
  <tr class="row__des">
    <td>No.</td>
    <td>Name of Plant Variety, Animal Breed, <br>
      or Microbial Strain</td>
    <td>Type of Plant/Animal or Microbe</td>
    <td>Date Completed</td>
    <td>Date Registered</td>
    <td>Date of Propagation based on Certification </td>
    <td>% Contribution</td>
    <td>Faculty Score</td>
    
  </tr>
  <tr>  
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id="WMD_1"></td>
    <td><input type="date" name="" id="WMD_2"></td>
    <td><input type="date" name="" id="WMD_3"></td>
    <td><input type="date" id="WMD_4"></td>
    <td><input type="text" id="WMD_5"></td>
    <td><input disabled type="number" name="" id="WMD_res1"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id="WMD_6"></td>
    <td><input type="date" name="" id="WMD_7"></td>
    <td><input type="date" name="" id="WMD_8"></td>
    <td><input type="date" id="WMD_9"></td>
    <td><input type="text" id="WMD_10"></td>
    <td><input disabled type="number" name="" id="WMD_res2"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id="WMD_11"></td>
    <td><input type="date" name="" id="WMD_12"></td>
    <td><input type="date" name="" id="WMD_13"></td>
    <td><input type="date" id="WMD_14"></td>
    <td><input type="text" id="WMD_15"></td>
    <td><input disabled type="number" name="" id="WMD_res3"></td>
  </tr>

  <tr>
    <td colspan="5"></td>
    <td><button onclick="calcu_WMD()">Calculate</button></td>
    <td>Total: </td>
    <td><input id="WMD_finale_res" disabled type="text"></td>
  </tr>
</table>

<br><br>
<form method="post" class="form__btns">
  <button name="submit_btn">Submit</button>
  <button name="cancel_btn">Cancel</button>
</form>

</body>
<script>
///////////////////////////////////////////////////////////////////////////////////////////////////////
//! sole inventor
const pta_1 = document.getElementById('SI_PTA__1')
const sa_res_1 = document.getElementById('SA__res1')

pta_1.addEventListener("change", () =>{
 if (pta_1.value.toLowerCase() === "none")
 {
  sa_res_1.value = 0;
 }
 else if(pta_1.value.toLowerCase() === "accepted")
 {
  sa_res_1.value = 10;
 }
 else if(pta_1.value.toLowerCase() === "published"){
  sa_res_1.value = 20;
 }
 else if(pta_1.value.toLowerCase() === "granted"){
  sa_res_1.value = 80;
 }
});

const pta_2 = document.getElementById('SI_PTA__2')
const sa_res_2 = document.getElementById('SA__res2')

pta_2.addEventListener("change", () =>{
 if (pta_2.value.toLowerCase() === "none")
 {
  sa_res_2.value = 0;
 }
 else if(pta_2.value.toLowerCase() === "accepted")
 {
  sa_res_2.value = 10;
 }
 else if(pta_2.value.toLowerCase() === "published"){
  sa_res_2.value = 20;
 }
 else if(pta_1.value.toLowerCase() === "granted"){
  sa_res_2.value = 80;
 }
});

const pta_3 = document.getElementById('SI_PTA__3')
const sa_res_3 = document.getElementById('SA__res3')

pta_3.addEventListener("change", () =>{
 if (pta_3.value.toLowerCase() === "none")
 {
  sa_res_3.value = 0;
 }
 else if(pta_3.value.toLowerCase() === "accepted")
 {
  sa_res_3.value = 10;
 }
 else if(pta_3.value.toLowerCase() === "published"){
  sa_res_3.value = 20;
 }
 else if(pta_3.value.toLowerCase() === "granted"){
  sa_res_3.value = 80;
 }
});

const pta_4 = document.getElementById('SI_PTA__3')
const sa_res_4 = document.getElementById('SA__res3')

pta_4.addEventListener("change", () =>{
 if (pta_4.value.toLowerCase() === "none")
 {
  sa_res_4.value = 0;
 }
 else if(pta_4.value.toLowerCase() === "accepted")
 {
  sa_res_4.value = 10;
 }
 else if(pta_4.value.toLowerCase() === "published"){
  sa_res_4.value = 20;
 }
 else if(pta_4.value.toLowerCase() === "granted"){
  sa_res_4.value = 80;
 }
});

function calc_si()
{
 document.getElementById('SI_FS').value = parseInt(sa_res_4.value) + parseInt(sa_res_3.value) + parseInt(sa_res_2.value) + parseInt(sa_res_1.value) 
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
const davar1 = document.getElementById('MI_PTA__1')
const davar2 = document.getElementById('MI__res1')

davar1.addEventListener("change", () =>{
 if (davar1.value.toLowerCase() === "none")
 {
  davar2.value = 0;
 }
 else if(davar1.value.toLowerCase() === "accepted")
 {
  davar2.value = 10;
 }
 else if(davar1.value.toLowerCase() === "published"){
  davar2.value = 20;
 }
 else if(davar1.value.toLowerCase() === "granted"){
  davar2.value = 80;
 }
});


const davar3 = document.getElementById('MI_PTA__2')
const davar4 = document.getElementById('MI__res2')

davar3.addEventListener("change", () =>{
 if (davar3.value.toLowerCase() === "none")
 {
  davar4.value = 0;
 }
 else if(davar3.value.toLowerCase() === "accepted")
 {
  davar4.value = 10;
 }
 else if(davar3.value.toLowerCase() === "published"){
  davar4.value = 20;
 }
 else if(davar3.value.toLowerCase() === "granted"){
  davar4.value = 80;
 }
});

const davar5 = document.getElementById('MI_PTA__3')
const davar6 = document.getElementById('MI__res3')

davar5.addEventListener("change", () =>{
 if (davar5.value.toLowerCase() === "none")
 {
  davar6.value = 0;
 }
 else if(davar5.value.toLowerCase() === "accepted")
 {
  davar6.value = 10;
 }
 else if(davar5.value.toLowerCase() === "published"){
  davar6.value = 20;
 }
 else if(davar5.value.toLowerCase() === "granted"){
  davar6.value = 80;
 }
});

const davar7 = document.getElementById('MI_PTA__4')
const davar8 = document.getElementById('MI__res4')

davar7.addEventListener("change", () =>{
 if (davar7.value.toLowerCase() === "none")
 {
  davar8.value = 0;
 }
 else if(davar7.value.toLowerCase() === "accepted")
 {
  davar8.value = 10;
 }
 else if(davar7.value.toLowerCase() === "published"){
  davar8.value = 20;
 }
 else if(davar7.value.toLowerCase() === "granted"){
  davar8.value = 80;
 }
});
 function function_name__here()
 {
  document.getElementById('MI_final').value = parseInt(davar2.value) + parseInt(davar4.value) + parseInt(davar6.value) + parseInt(davar8.value)
 }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

const varnamehere_1 = document.getElementById('UMID_SI__1')
const varnamehere_2 = document.getElementById('UMID_SI_FS_1')
varnamehere_1.addEventListener("change", () =>{
 if (varnamehere_1.value.toLowerCase() === "none")
 {
  varnamehere_2.value = 0;
 }
 else if(varnamehere_1.value.toLowerCase() === "utility")
 {
  varnamehere_2.value = 10;
 }
 else if(varnamehere_1.value.toLowerCase() === "industrial"){
  varnamehere_2.value = 5;  }});

const varnamehere_3 = document.getElementById('UMID_SI__2')
const varnamehere_4 = document.getElementById('UMID_SI_FS_2')
varnamehere_3.addEventListener("change", () =>{
 if (varnamehere_3.value.toLowerCase() === "none")
 {
  varnamehere_4.value = 0;
 }
 else if(varnamehere_3.value.toLowerCase() === "utility")
 {
  varnamehere_4.value = 10;
 }
 else if(varnamehere_3.value.toLowerCase() === "industrial"){
  varnamehere_4.value = 5;  }});

const varnamehere_5 = document.getElementById('UMID_SI__3')
const varnamehere_6 = document.getElementById('UMID_SI_FS_3')
varnamehere_5.addEventListener("change", () =>{
 if (varnamehere_5.value.toLowerCase() === "none")
 {
  varnamehere_6.value = 0;
 }
 else if(varnamehere_5.value.toLowerCase() === "utility")
 {
  varnamehere_6.value = 10;
 }
 else if(varnamehere_5.value.toLowerCase() === "industrial"){
  varnamehere_6.value = 5;  }});

const varnamehere_7 = document.getElementById('UMID_SI__4')
const varnamehere_8 = document.getElementById('UMID_SI_FS_4')
varnamehere_7.addEventListener("change", () =>{
 if (varnamehere_7.value.toLowerCase() === "none")
 {
  varnamehere_8.value = 0;
 }
 else if(varnamehere_7.value.toLowerCase() === "utility")
 {
  varnamehere_8.value = 10;
 }
 else if(varnamehere_7.value.toLowerCase() === "industrial"){
  varnamehere_8.value = 5;  }});

function da_func(){
 document.getElementById('UMID_final_FS').value = parseInt(varnamehere_2.value) +parseInt(varnamehere_4.value) +parseInt(varnamehere_6.value) +parseInt(varnamehere_8.value);
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const yahvar_1 = document.getElementById('UMID_MI__1')
const yahvar_2 = document.getElementById('UMID_MI_FS_1')
yahvar_1.addEventListener("change", () =>{
 if (yahvar_2.value.toLowerCase() === "none")
 {
  yahvar_2.value = 0;
 }
 else if(yahvar_1.value.toLowerCase() === "utility")
 {
  yahvar_2.value = 10;
 }
 else if(yahvar_1.value.toLowerCase() === "industrial"){
  yahvar_2.value = 5;  }});

const yahvar_3 = document.getElementById('UMID_MI__2') 
const yahvar_4 = document.getElementById('UMID_MI_FS_2')
yahvar_3.addEventListener("change", () =>{
 if (yahvar_3.value.toLowerCase() === "none")
 {
  yahvar_4.value = 0;
 }
 else if(yahvar_3.value.toLowerCase() === "utility")
 {
  yahvar_4.value = 10;
 }
 else if(varnayahvar_3mehere_7.value.toLowerCase() === "industrial"){
  yahvar_4.value = 5;  }});

const yahvar_5 = document.getElementById('UMID_MI__3')
const yahvar_6 = document.getElementById('UMID_MI_FS_3')
yahvar_5.addEventListener("change", () =>{
 if (yahvar_5.value.toLowerCase() === "none")
 {
  yahvar_6.value = 0;
 }
 else if(yahvar_5.value.toLowerCase() === "utility")
 {
  yahvar_6.value = 10;
 }
 else if(yahvar_5.value.toLowerCase() === "industrial"){
  yahvar_6.value = 5;  }});

const yahvar_7 = document.getElementById('UMID_MI__4')
const yahvar_8 = document.getElementById('UMID_MI_FS_4')
varnamehere_7.addEventListener("change", () =>{
 if (varnamehere_7.value.toLowerCase() === "none")
 {
  varnamehere_8.value = 0;
 }
 else if(varnamehere_7.value.toLowerCase() === "utility")
 {
  varnamehere_8.value = 10;
 }
 else if(varnamehere_7.value.toLowerCase() === "industrial"){
  varnamehere_8.value = 5;  }});

function calcu_idk()
{
  document.getElementById('UMID_MI_FS_Final').value = parseInt(varnamehere_8.value)+parseInt(varnamehere_6.value)+parseInt(varnamehere_4.value)+parseInt(varnamehere_2.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function calc_cpp_local()
{
  const NSP1 = document.getElementById('CPP1').value
  const NSP2 = document.getElementById('CPP2').value 
  const NSP3 = document.getElementById('CPP3').value
  const NSP4 = document.getElementById('CPP4').value
  const NSP5 = document.getElementById('CPP5').value
  const ress1 = document.getElementById('CPP_res1')

  if(NSP1!= "" && NSP2!= "" && NSP3!= "" && NSP4!= "" && NSP5!= ""){   
    ress1.value = 5;
  }else{ ress1.value = 0}

  const NSP6 = document.getElementById('CPP6').value
  const NSP7 = document.getElementById('CPP7').value
  const NSP8 = document.getElementById('CPP8').value
  const NSP9 = document.getElementById('CPP9').value
  const NSP10 = document.getElementById('CPP10').value
  const ress2 = document.getElementById('CPP_res2')
  if(NSP6!= "" && NSP7!= "" && NSP8!= "" && NSP9!= "" && NSP10!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP11 = document.getElementById('CPP11').value
  const NSP12 = document.getElementById('CPP12').value
  const NSP13 = document.getElementById('CPP13').value
  const NSP14 = document.getElementById('CPP14').value
  const NSP15 = document.getElementById('CPP15').value
  const ress3 = document.getElementById('CPP_res3')
  if(NSP11!= "" && NSP12!= "" && NSP13!= "" && NSP14!= "" && NSP15!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP16 = document.getElementById('CPP16').value
  const NSP17 = document.getElementById('CPP17').value
  const NSP18 = document.getElementById('CPP18').value
  const NSP19 = document.getElementById('CPP19').value
  const NSP20 = document.getElementById('CPP20').value
  const ress4 = document.getElementById('CPP_res4')
  if(NSP16!= "" && NSP17!= "" && NSP18!= "" && NSP19!= "" && NSP20!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  document.getElementById('cpp_local_finale').value = parseInt(ress1.value)+parseInt(ress2.value)+parseInt(ress3.value)+parseInt(ress4.value)
}
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function calc_cpp_International()
{
  const NSP1 = document.getElementById('CPP_i1').value
  const NSP2 = document.getElementById('CPP_i2').value
  const NSP3 = document.getElementById('CPP_i3').value
  const NSP4 = document.getElementById('CPP_i4').value
  const NSP5 = document.getElementById('CPP_i5').value
  const ress1 = document.getElementById('CPP_res_i1')

  if(NSP1!= "" && NSP2!= "" && NSP3!= "" && NSP4!= "" && NSP5!= ""){   
    ress1.value = 5;
  }else{ ress1.value = 0}

  const NSP6 = document.getElementById('CPP_i6').value
  const NSP7 = document.getElementById('CPP_i7').value
  const NSP8 = document.getElementById('CPP_i8').value
  const NSP9 = document.getElementById('CPP_i9').value
  const NSP10 = document.getElementById('CPP_i10').value
  const ress2 = document.getElementById('CPP_res_i2')
  if(NSP6!= "" && NSP7!= "" && NSP8!= "" && NSP9!= "" && NSP10!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP11 = document.getElementById('CPP_i11').value
  const NSP12 = document.getElementById('CPP_i12').value
  const NSP13 = document.getElementById('CPP_i13').value
  const NSP14 = document.getElementById('CPP_i14').value
  const NSP15 = document.getElementById('CPP_i15').value
  const ress3 = document.getElementById('CPP_res_i3')
  if(NSP11!= "" && NSP12!= "" && NSP13!= "" && NSP14!= "" && NSP15!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP16 = document.getElementById('CPP_i16').value
  const NSP17 = document.getElementById('CPP_i17').value
  const NSP18 = document.getElementById('CPP_i18').value
  const NSP19 = document.getElementById('CPP_i19').value
  const NSP20 = document.getElementById('CPP_i20').value
  const ress4 = document.getElementById('CPP_res_i4')
  if(NSP16!= "" && NSP17!= "" && NSP18!= "" && NSP19!= "" && NSP20!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  document.getElementById('cpp_international_finale').value = parseInt(ress1.value)+parseInt(ress2.value)+parseInt(ress3.value)+parseInt(ress4.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function caclu_NSP_SD(){ // 2.1.1 NSP Sole-dev
const SD1 = document.getElementById('NSP_SD-1').value
const SD2 = document.getElementById('NSP_SD-2').value
const SD3 = document.getElementById('NSP_SD-3').value
const SD4 = document.getElementById('NSP_SD-4').value
const SD_res1 = document.getElementById('NSP_SD_res1');

if(SD1 != "" && SD2 != "" && SD3 != "" && SD4 != ""){ SD_res1.value =10}
else { SD_res1.value = 0}

const SD5 = document.getElementById('NSP_SD-5').value
const SD6 = document.getElementById('NSP_SD-6').value
const SD7 = document.getElementById('NSP_SD-7').value
const SD8 = document.getElementById('NSP_SD-8').value
const SD_res2 = document.getElementById('NSP_SD_res2');

if(SD5 != "" && SD6 != "" && SD7 != "" && SD8 != ""){ SD_res2.value =10}
else { SD_res2.value = 0}

const SD9 = document.getElementById('NSP_SD-9').value
const SD10 = document.getElementById('NSP_SD-10').value
const SD11 = document.getElementById('NSP_SD-11').value
const SD12 = document.getElementById('NSP_SD-12').value
const SD_res3 = document.getElementById('NSP_SD_res3');

if(SD9 != "" && SD10 != "" && SD11 != "" && SD12 != ""){ SD_res3.value =10}
else { SD_res3.value = 0}

const SD13 = document.getElementById('NSP_SD-13').value
const SD14 = document.getElementById('NSP_SD-14').value
const SD15 = document.getElementById('NSP_SD-15').value
const SD16 = document.getElementById('NSP_SD-16').value
const SD_res4 = document.getElementById('NSP_SD_res4');

if(SD13 != "" && SD14 != "" && SD15 != "" && SD16 != ""){ SD_res4.value =10}
else { SD_res4.value = 0}

document.getElementById('NSP_SD_finale_res').value = parseInt(SD_res1.value)+parseInt(SD_res2.value)+parseInt(SD_res3.value)+parseInt(SD_res4.value)
};
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function idk_Im_sleepy()
{
  const NSP1 = document.getElementById('CPP_i1').value
  const NSP2 = document.getElementById('CPP_i2').value
  const NSP3 = document.getElementById('CPP_i3').value
  const NSP4 = document.getElementById('CPP_i4').value
  const NSP5 = document.getElementById('CPP_i5').value
  const ress1 = document.getElementById('CPP_res_i1')

  if(NSP1!= "" && NSP2!= "" && NSP3!= "" && NSP4!= "" && NSP5!= ""){   
    ress1.value = 5;
  }else{ ress1.value = 0}

  const NSP6 = document.getElementById('CPP_i6').value
  const NSP7 = document.getElementById('CPP_i7').value
  const NSP8 = document.getElementById('CPP_i8').value
  const NSP9 = document.getElementById('CPP_i9').value
  const NSP10 = document.getElementById('CPP_i10').value
  const ress2 = document.getElementById('CPP_res_i2')
  if(NSP6!= "" && NSP7!= "" && NSP8!= "" && NSP9!= "" && NSP10!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP11 = document.getElementById('CPP_i11').value
  const NSP12 = document.getElementById('CPP_i12').value
  const NSP13 = document.getElementById('CPP_i13').value
  const NSP14 = document.getElementById('CPP_i14').value
  const NSP15 = document.getElementById('CPP_i15').value
  const ress3 = document.getElementById('CPP_res_i3')
  if(NSP11!= "" && NSP12!= "" && NSP13!= "" && NSP14!= "" && NSP15!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  
  const NSP16 = document.getElementById('CPP_i16').value
  const NSP17 = document.getElementById('CPP_i17').value
  const NSP18 = document.getElementById('CPP_i18').value
  const NSP19 = document.getElementById('CPP_i19').value
  const NSP20 = document.getElementById('CPP_i20').value
  const ress4 = document.getElementById('CPP_res_i4')
  if(NSP16!= "" && NSP17!= "" && NSP18!= "" && NSP19!= "" && NSP20!= ""){   
    ress2.value = 5;
  }else{ ress2.value = 0}

  document.getElementById('cpp_international_finale').value = parseInt(ress1.value)+parseInt(ress2.value)+parseInt(ress3.value)+parseInt(ress4.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function caclu_NSP_SD(){ //! 2.1.1 NSP Sole-dev
const SD1 = document.getElementById('NSP_SD-1').value
const SD2 = document.getElementById('NSP_SD-2').value
const SD3 = document.getElementById('NSP_SD-3').value
const SD4 = document.getElementById('NSP_SD-4').value
const SD_res1 = document.getElementById('NSP_SD_res1');

if(SD1 != "" && SD2 != "" && SD3 != "" && SD4 != ""){ SD_res1.value =10}
else { SD_res1.value = 0}

const SD5 = document.getElementById('NSP_SD-5').value
const SD6 = document.getElementById('NSP_SD-6').value
const SD7 = document.getElementById('NSP_SD-7').value
const SD8 = document.getElementById('NSP_SD-8').value
const SD_res2 = document.getElementById('NSP_SD_res2');

if(SD5 != "" && SD6 != "" && SD7 != "" && SD8 != ""){ SD_res2.value =10}
else { SD_res2.value = 0}

const SD9 = document.getElementById('NSP_SD-9').value
const SD10 = document.getElementById('NSP_SD-10').value
const SD11 = document.getElementById('NSP_SD-11').value
const SD12 = document.getElementById('NSP_SD-12').value
const SD_res3 = document.getElementById('NSP_SD_res3');

if(SD9 != "" && SD10 != "" && SD11 != "" && SD12 != ""){ SD_res3.value =10}
else { SD_res3.value = 0}

const SD13 = document.getElementById('NSP_SD-13').value
const SD14 = document.getElementById('NSP_SD-14').value
const SD15 = document.getElementById('NSP_SD-15').value
const SD16 = document.getElementById('NSP_SD-16').value
const SD_res4 = document.getElementById('NSP_SD_res4');

if(SD13 != "" && SD14 != "" && SD15 != "" && SD16 != ""){ SD_res4.value =10}
else { SD_res4.value = 0}

document.getElementById('NSP_SD_finale_res').value = parseInt(SD_res1.value)+parseInt(SD_res2.value)+parseInt(SD_res3.value)+parseInt(SD_res4.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function caclu_NSP_MD(){ // * 2.1.1 NSP Sole-dev
const SD1 = document.getElementById('NSP_MD-1').value
const SD2 = document.getElementById('NSP_MD-2').value
const SD3 = document.getElementById('NSP_MD-3').value
const SD4 = document.getElementById('NSP_MD-4').value
const SD_res1 = document.getElementById('NSP_MD_res1');

if(SD1 != "" && SD2 != "" && SD3 != "" && SD4 != ""){ SD_res1.value =10}
else { SD_res1.value = 0}

const SD5 = document.getElementById('NSP_MD-5').value
const SD6 = document.getElementById('NSP_MD-6').value
const SD7 = document.getElementById('NSP_MD-7').value
const SD8 = document.getElementById('NSP_MD-8').value
const SD_res2 = document.getElementById('NSP_MD_res2');

if(SD5 != "" && SD6 != "" && SD7 != "" && SD8 != ""){ SD_res2.value =10}
else { SD_res2.value = 0}

const SD9 = document.getElementById('NSP_MD-9').value
const SD10 = document.getElementById('NSP_MD-10').value
const SD11 = document.getElementById('NSP_MD-11').value
const SD12 = document.getElementById('NSP_MD-12').value
const SD_res3 = document.getElementById('NSP_MD_res3');

if(SD9 != "" && SD10 != "" && SD11 != "" && SD12 != ""){ SD_res3.value =10}
else { SD_res3.value = 0}

const SD13 = document.getElementById('NSP_MD-13').value
const SD14 = document.getElementById('NSP_MD-14').value
const SD15 = document.getElementById('NSP_MD-15').value
const SD16 = document.getElementById('NSP_MD-16').value
const MD_res4 = document.getElementById('NSP_MD_res4');

if(SD13 != "" && SD14 != "" && SD15 != "" && SD16 != ""){ MD_res4.value =10}
else { MD_res4.value = 0}

document.getElementById('NSP_MD_finale_res').value = parseInt(SD_res1.value)+parseInt(SD_res2.value)+parseInt(SD_res3.value)+parseInt(MD_res4.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const usp1 = document.getElementById('USP_cont_1')
const usp2 = document.getElementById('USP_fs1')

usp1.addEventListener("change", () =>{
  if(usp1.value.toLowerCase() === "none"){
    usp2.value = 0;
  }else if(usp1.value.toLowerCase() === "sole"){
    usp2.value = 4;
  }else if(usp1.value.toLowerCase() === "Co-developer"){
    usp2.value = 2;
  }
});

const usp3 = document.getElementById('USP_cont_2')
const usp4 = document.getElementById('USP_fs2')

usp3.addEventListener("change", () =>{
  if(usp3.value.toLowerCase() === "none"){
    usp4.value = 0;
  }else if(usp3.value.toLowerCase() === "sole"){
    usp4.value = 4;
  }else if(usp3.value.toLowerCase() === "Co-developer"){
    usp4.value = 2;
  }
});


const usp5 = document.getElementById('USP_cont_3')
const usp6 = document.getElementById('USP_fs3')

usp5.addEventListener("change", () =>{
  if(usp5.value.toLowerCase() === "none"){
    usp6.value = 0;
  }else if(usp5.value.toLowerCase() === "sole"){
    usp6.value = 4;
  }else if(usp5.value.toLowerCase() === "Co-developer"){
    usp6.value = 2;
  }
});


const usp7= document.getElementById('USP_cont_4')
const usp8 = document.getElementById('USP_fs4')

usp7.addEventListener("change", () =>{
  if(usp7.value.toLowerCase() === "none"){
    usp8.value = 0;
  }else if(usp7.value.toLowerCase() === "sole"){
    usp8.value = 4;
  }else if(usp7.value.toLowerCase() === "Co-developer"){
    usp8.value = 2;
  }
});
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function calcu_scd()
{
    const ha_vard_1 = document.getElementById('SCDP_1').value
    const ha_vard_2 = document.getElementById('SCDP_2').value
    const ha_vard_3 = document.getElementById('SCDP_3').value
    const ha_vard_4 = document.getElementById('SCDP_4').value
    const ha_vard_5 = document.getElementById('SCDP_5').value
    const scd_res1 = document.getElementById('SCDPres_1')
    if(ha_vard_1 != "" && ha_vard_2 != "" &&ha_vard_3 != "" &&ha_vard_4 != "" &&ha_vard_5 != ""){
      scd_res1.value = 10; }else{ scd_res1.value = 0;}

    const ha_vard_6 = document.getElementById('SCDP_6').value
    const ha_vard_7 = document.getElementById('SCDP_7').value
    const ha_vard_8 = document.getElementById('SCDP_8').value
    const ha_vard_9 = document.getElementById('SCDP_9').value
    const ha_vard_10 = document.getElementById('SCDP_10').value
    const scd_res2 = document.getElementById('SCDPres_2')
    if(ha_vard_6 != "" && ha_vard_7 != "" &&ha_vard_8 != "" &&ha_vard_9 != "" &&ha_vard_10 != ""){
      scd_res2.value = 10; }else{ scd_res2.value = 0;}

    const ha_vard_11 = document.getElementById('SCDP_11').value
    const ha_vard_12 = document.getElementById('SCDP_12').value
    const ha_vard_13 = document.getElementById('SCDP_13').value
    const ha_vard_14 = document.getElementById('SCDP_14').value
    const ha_vard_15 = document.getElementById('SCDP_15').value
    const scd_res3 = document.getElementById('SCDPres_3')
    if(ha_vard_11 != "" && ha_vard_12 != "" &&ha_vard_13 != "" &&ha_vard_14 != "" &&ha_vard_15 != ""){
      scd_res3.value = 10; }else{ scd_res3.value = 0;}

    document.getElementById('scdp_final_res').value = parseInt(scd_res3.value )+parseInt(scd_res2.value )+parseInt(scd_res1.value )
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function calcu_WMD()
{
  const ha_vard_1 = document.getElementById('WMD_1').value
  const ha_vard_2 = document.getElementById('WMD_2').value
  const ha_vard_3 = document.getElementById('WMD_3').value
  const ha_vard_4 = document.getElementById('WMD_4').value
  const ha_vard_5 = document.getElementById('WMD_5').value
  const scd_res1 = document.getElementById('WMD_res1')

  if(ha_vard_1 != "" && ha_vard_2 != "" &&ha_vard_3 != "" &&ha_vard_4 != "" &&ha_vard_5 != ""){
    scd_res1.value = 10; }else{ scd_res1.value = 0;}

  
  const ha_vard_121 = document.getElementById('WMD_6').value
  const ha_vard_122 = document.getElementById('WMD_7').value
  const ha_vard_123 = document.getElementById('WMD_8').value
  const ha_vard_124 = document.getElementById('WMD_9').value
  const ha_vard_125 = document.getElementById('WMD_10').value
  const scd_res2 = document.getElementById('WMD_res2')

  if(ha_vard_121 != "" && ha_vard_122 != "" &&ha_vard_123 != "" &&ha_vard_124 != "" &&ha_vard_125 != ""){
    scd_res2.value = 10; }else{ scd_res2.value = 0;}



  const ha_vard_11 = document.getElementById('WMD_11').value
  const ha_vard_12 = document.getElementById('WMD_12').value
  const ha_vard_13 = document.getElementById('WMD_13').value
  const ha_vard_14 = document.getElementById('WMD_14').value
  const ha_vard_15 = document.getElementById('WMD_15').value
  const scd_res3 = document.getElementById('WMD_res3')

  if(ha_vard_11 != "" && ha_vard_12 != "" &&ha_vard_13 != "" &&ha_vard_14 != "" &&ha_vard_15 != ""){
    scd_res3.value = 10; }else{ scd_res3.value = 0;}

    document.getElementById('WMD_finale_res').value = parseInt(scd_res3.value )+parseInt(scd_res2.value )+parseInt(scd_res1.value )
}
</script>
</html>