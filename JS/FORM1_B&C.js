// 1st line
const select__IM__SA__1 = document.getElementById("type__IM__SA__1")
const sole_autho_FS__1 = document.querySelector("#SA-FS__1")
select__IM__SA__1.addEventListener("change", () => {
  if (select__IM__SA__1.value.toLowerCase() === "none") {
    sole_autho_FS__1.value = 0;
  }else if (select__IM__SA__1.value.toLowerCase() === "textbook") {
    sole_autho_FS__1.value = 30;
  } else if (select__IM__SA__1.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__1.value = 10;
  } else if (select__IM__SA__1.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__1.value = 16;
  } else if (select__IM__SA__1.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__1.value = 16;
  } else if (select__IM__SA__1.value.toLowerCase() === "testing material") {
    sole_autho_FS__1.value = 10; 
  }
});

// 2nd Line
const select__IM__SA__2 = document.getElementById("type__IM__SA__2")
const sole_autho_FS__2 = document.querySelector("#SA-FS__2")

select__IM__SA__2.addEventListener("change", () => {
  if (select__IM__SA__2.value.toLowerCase() === "none") {
    sole_autho_FS__2.value = 0;
  }else if (select__IM__SA__2.value.toLowerCase() === "textbook") {
    sole_autho_FS__2.value = 30;
  } else if (select__IM__SA__2.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__2.value = 10;
  } else if (select__IM__SA__2.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__2.value = 16;
  } else if (select__IM__SA__2.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__2.value = 16;
  } else if (select__IM__SA__2.value.toLowerCase() === "testing material") {
    sole_autho_FS__2.value = 10; 
  }
});

// 3rd Line
const select__IM__SA__3 = document.getElementById("type__IM__SA__3")
const sole_autho_FS__3 = document.querySelector("#SA-FS__3")

select__IM__SA__3.addEventListener("change", () => {
  if (select__IM__SA__3.value.toLowerCase() === "none") {
    sole_autho_FS__3.value = 0;
  }else if (select__IM__SA__3.value.toLowerCase() === "textbook") {
    sole_autho_FS__3.value = 30;
  } else if (select__IM__SA__3.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__3.value = 10;
  } else if (select__IM__SA__3.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__3.value = 16;
  } else if (select__IM__SA__3.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__3.value = 16;
  } else if (select__IM__SA__3.value.toLowerCase() === "testing material") {
    sole_autho_FS__3.value = 10; 
  }
});

// * Calculate the total score
function total_SA(){
  const finale = document.getElementById("finale_SA")
  const line_1 = parseInt(document.getElementById("SA-FS__1").value)
  const line_2 = parseInt(document.getElementById("SA-FS__2").value)
  const line_3 = parseInt(document.getElementById("SA-FS__3").value)

  // formula
  result = line_1 + line_2 + line_3

  // output after the computation
  finale.value = result;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * Co-authorship down here
// ! THIS SHT AINT DONE
// TODO: FIX this shit

function calc_co__autho()
{
  const type__IM__CA__1 = document.getElementById('type__IM__CA__1');
  const cont = document.getElementById('CA__cont__1')
  if (type__IM__CA__1.value.toLowerCase() === "none") {
    document.getElementById('CA-FS__1').value = 0;
  }else if (type__IM__CA__1.value.toLowerCase() === "textbook") {
    sole_autho_FS__3.value = 30;
  } else if (type__IM__CA__1.value.toLowerCase() === "textbook chapter") {
    sole_autho_FS__3.value = 10;
  } else if (type__IM__CA__1.value.toLowerCase() === "manual/module/workbook") {
    sole_autho_FS__3.value = 16;
  } else if (type__IM__CA__1.value.toLowerCase() === "multimedia teaching material") {
    sole_autho_FS__3.value = 16;
  } else if (type__IM__CA__1.value.toLowerCase() === "testing material") {
    sole_autho_FS__3.value = 10; 
  }
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const select__role__1 = document.getElementById("select__role__1")
const acad__res__1 = document.getElementById("Acad__res__1")

select__role__1.addEventListener("change", () =>{
  if (select__role__1.value.toLowerCase() === "none")
  {
    acad__res__1.value = 0
  }
  else if (select__role__1.value.toLowerCase() === "lead")
  {
    acad__res__1.value = 10.00
  }
  else if (select__role__1.value.toLowerCase() === "contributor")
  { 
    acad__res__1.value = 5.00
  }
})

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const select__role__2 = document.getElementById("select__role__2")
const acad__res__2 = document.getElementById("Acad__res__2")

select__role__2.addEventListener("change", () =>{
  if (select__role__2 .value.toLowerCase() === "none")
  {
    acad__res__2.value = 0
  }
  else if (select__role__2 .value.toLowerCase() === "lead")
  {
    acad__res__2.value = 10.00
  }
  else if (select__role__2 .value.toLowerCase() === "contributor")
  {
    acad__res__2.value = 5.00
  }
})
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

const select__role__3 = document.getElementById("select__role__3")
const acad__res__3 = document.getElementById("Acad__res__3")

select__role__3 .addEventListener("change", () =>{
  if (select__role__3 .value.toLowerCase() === "none")
  {
    acad__res__3.value = 0
  }
  else if (select__role__3 .value.toLowerCase() === "lead")
  {
    acad__res__3.value = 10.00
  }
  else if (select__role__3 .value.toLowerCase() === "contributor")
  {
    acad__res__3.value = 5.00
  }
})

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * Calculate the total score for acads section
function calc__acads(){
  const finale = document.getElementById("finale_acads")
  const num1= parseInt(document.getElementById("Acad__res__1").value)
  const num2= parseInt(document.getElementById("Acad__res__2").value)
  const num3= parseInt(document.getElementById("Acad__res__3").value)

    var res = parseInt(num1 + num2 + num3)
   finale.value = res
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
// * DONE
function calcu__adv() {
  //  	SPECIAL/CAPSTONE PROJECT line
const num1  = parseInt(document.getElementById("SCP__AY1__1").value)
const num2 = parseInt(document.getElementById("SCP__AY2__2").value)
const num3 = parseInt(document.getElementById("SCP__AY3__3").value)
const num4  = parseInt(document.getElementById("SCP__AY4__4").value)
const num5 = document.getElementById("SCP_res")

// 	UNDERGRADUATE THESIS line
const num6 = parseInt(document.getElementById("UG1").value)
const num7 = parseInt(document.getElementById("UG2").value)
const num8 = parseInt(document.getElementById("UG3").value)
const num9 = parseInt(document.getElementById("UG4").value)
const num10 = document.getElementById("UG_res")

// 	MASTER'S THESIS line
const num11 = parseInt(document.getElementById("MT1").value)
const num12 = parseInt(document.getElementById("MT2").value)
const num13 = parseInt(document.getElementById("MT3").value)
const num14 = parseInt(document.getElementById("MT4").value)
const num15 = document.getElementById("MT_res")

// 	DISSERTATION line
const num16 = parseInt(document.getElementById("DT1").value)
const num17= parseInt(document.getElementById("DT2").value)
const num18 = parseInt(document.getElementById("DT3").value)
const num19= parseInt(document.getElementById("DT4").value)
const num20  = document.getElementById("DT_res")

//Formula
var SCP_res = (num1 + num2 + num3 + num4) * 3
num5.value = SCP_res

var UG_res = (num6+ num7+ num8 + num9) * 5
num10.value = UG_res

var MT_res = (num11 + num12 + num13 + num14) * 8
num15.value = MT_res

var DT_res = (num16 + num17 + num18 + num19) * 10
num20.value = DT_res

const le__finale = document.getElementById("crit__C__adviser")
le__finale.value = parseInt(num5.value) + parseFloat(num10.value) + parseInt(num15.value) + parseInt(num20.value)
}
///////////////////////////////////////////////////////////////////////////////////////////////////////
// * DONE

function calcu__panel()
{
  //something here
  const  num1 = parseInt(document.getElementById("SCP_21").value);
  const  num2 = parseInt(document.getElementById("SCP_22").value)
  const  num3 = parseInt(document.getElementById("SCP_23").value)
  const  num4 = parseInt(document.getElementById("SCP_24").value)
  const  res1 = document.getElementById("SCP2__res")

  //something here
  const  num5 = parseInt(document.getElementById("UT2_1").value);
  const  num6 = parseInt(document.getElementById("UT2_2").value);
  const  num7 = parseInt(document.getElementById("UT2_3").value);
  const  num8 = parseInt(document.getElementById("UT2_4").value);
  const  res2 = document.getElementById("UT2__res")

  //something here
  const  num9 = parseInt(document.getElementById("MT2_1").value);
  const  num10 = parseInt(document.getElementById("MT2_2").value);
  const  num11 = parseInt(document.getElementById("MT2_3").value);
  const  num12 = parseInt(document.getElementById("MT2_4").value);
  const  res3 = document.getElementById("MT2__res");

  // something here
  const  num13 = parseInt(document.getElementById("DIS_1").value);
  const  num14 = parseInt(document.getElementById("DIS_2").value);
  const  num15 = parseInt(document.getElementById("DIS_3").value);
  const  num16 = parseInt(document.getElementById("DIS_4").value);
  const  res4 = document.getElementById("DIS__res");

  // formula 
  var scp_res = (num1 + num2 + num3+ num4) * 1
  res1.value = scp_res

  var ut_res = (num5 + num6 + num7+ num8) * 1
  res2.value = ut_res

  var mt_res = (num9 + num10 + num11+ num12) * 2
  res3.value = mt_res

  var dis_res = (num13 + num14 + num15+ num16) * 2
  res4.value = dis_res

  const le__finale = document.getElementById("panel__res")
  le__finale.value = parseInt(ut_res + scp_res + mt_res + dis_res)
}


///////////////////////////////////////////////////////////////////////////////////////////////////////
// ? Bro this is not the algorithm i want


function click_me() {
  if(document.getElementById('ment_inp').value !== null){
    if(document.getElementById('ment_inp1').value !== null){
      if(document.getElementById('ment_inp2').value !== null){
        if(document.getElementById('ment_inp3').value !== null){
          document.getElementById('Mentor_scr1').value = 3;   
        }else{}
      }else{}
    }else{}
  }else{}

  if(document.getElementById('ment_inp4').value !== null){
    if(document.getElementById('ment_inp5').value !== null){
      if(document.getElementById('ment_inp6').value !== null){
        if(document.getElementById('ment_inp7').value !== null){
          document.getElementById('Mentor_scr2').value = 3;   
        }else{}
      }else{}
    }else{}
  }else{}

  if(document.getElementById('ment_inp8').value !== null){
    if(document.getElementById('ment_inp9').value !== null){
      if(document.getElementById('ment_inp10').value !== null){
        if(document.getElementById('ment_inp11').value !== null){
          document.getElementById('Mentor_scr3').value = 3;   
        }else{}
      }else{}
    }else{}
  }else{}

  if(document.getElementById('ment_inp12').textContent !== null){
    document.getElementById('ment_inp12').textContent = 'dik'
    if(document.getElementById('ment_inp13').value !== null){
      if(document.getElementById('ment_inp14').value !== null){
        if(document.getElementById('ment_inp15').value !== null){
          document.getElementById('Mentor_scr4').value = 3;   
        }else{}
      }else{}
    }else{}
  }else{}

  document.getElementById('result').value = 12;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////
//Parsing data from JS front-end to JSON file

