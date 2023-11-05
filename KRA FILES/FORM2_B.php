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
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
  <td>Link to Evidence from Google Drive</td>
</tr>

<tr>
  <td>1</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>2</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>3</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>4</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td colspan="5"></td>
  <td>Total: </td>
  <td><input disabled type="text"></td>
  <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td>
      <select name="" id="">
        <option value="">Select option</option>
        <option value="">Accepted</option>
        <option value="">Published </option>
        <option value="">Granted</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
  <td>Link to Evidence from Google Drive</td>
</tr>


<tr>
  <td>1</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>2</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>3</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>4</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input type="text"></td>
</tr>
<tr>
  <td colspan="5"></td>
  <td>Total: </td>
  <td><input disabled type="text"></td>
  <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input disabled type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="5"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
  </tr>
</table>

<h2 class="page_title">1.2.2 International (Max = 30 Points)</h2>
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
  <td>Link to Evidence from Google Drive</td>
</tr>

<tr>
  <td>1</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>2</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>3</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td>4</td>
  <td><input type="text"></td>
  <td><input type="date"></td>
  <td>
    <select name="" id="">
      <option value="">Select option</option>
      <option value="">Accepted</option>
      <option value="">Published </option>
      <option value="">Granted</option>
    </select>
  </td>
  <td><input type="text"></td>
  <td><input type="text"></td>
  <td><input disabled type="text"></td>
  <td><input type="text"></td>
</tr>

<tr>
  <td colspan="5"></td>
  <td>Total: </td>
  <td><input disabled type="text"></td>
  <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>    
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>

  <tr>
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>    
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date"></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td colspan="4"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>
  <tr>  
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
    <td></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>  
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td>
      <select name="" id="">
        <option value="none">Select Option</option>
        <option value="Sole">Sole Developer</option>
        <option value="Co-developer">Co-developer</option>
      </select>
    </td>
    <td><input type="text"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td></tr>
  <tr>
    <td colspan="6  "></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>
  <tr>  
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>  
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
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
    <td>Link to Evidence from Google Drive</td>
  </tr>
  <tr>  
    <td>1</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td>2</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>
    <td>3</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>

  <tr>  
    <td>4</td>
    <td><input type="text"></td>
    <td><input type="text" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date" name="" id=""></td>
    <td><input type="date"></td>
    <td><input type="text"></td>
    <td><input type="number" name="" id=""></td>
    <td><input type="text"></td>
  </tr>
  <tr>
    <td colspan="6  "></td>
    <td>Total: </td>
    <td><input disabled type="text"></td>
    <td><button>Calculate</button></td>
  </tr>
</table>

<br><br>
<div class="form__btns">
  <button name="submit_btn">Submit</button>
  <button name="cancel_btn">Cancel</button>
</div>

</body>
<script>


</script>
</html>