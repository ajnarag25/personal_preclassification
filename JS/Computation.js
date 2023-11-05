// ! Form_1A_student
function calcu_student() {
  var A1 = parseInt(document.getElementById("A1-1").value);
  var A2 = parseInt(document.getElementById("A1-2").value);
  var A3 = parseInt(document.getElementById("A2-1").value);
  var A4 = parseInt(document.getElementById("A2-2").value);
  var A5 = parseInt(document.getElementById("A3-1").value);
  var A6 = parseInt(document.getElementById("A3-2").value);
  var A7 = parseInt(document.getElementById("A4-1").value);
  var A8 = parseInt(document.getElementById("A4-2").value);

  var result  = (A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8
  var result = result / 100
  var result = result * 36

  alert(result)
  // return result // this disbaled for future use

}


function calcu_faculty() {
  var A1 = parseInt(document.getElementById("B1-1").value);
  var A2 = parseInt(document.getElementById("B1-2").value);
  var A3 = parseInt(document.getElementById("B2-1").value);
  var A4 = parseInt(document.getElementById("B2-2").value);
  var A5 = parseInt(document.getElementById("B3-1").value);
  var A6 = parseInt(document.getElementById("B3-2").value);
  var A7 = parseInt(document.getElementById("B4-1").value);
  var A8 = parseInt(document.getElementById("B4-2").value);

  var result  = (A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8
  var result = result /100
  var result = result * 24
  alert(result) // btw you still need to return this value
}
  
// This code below is for the Sole Authorship part
// Dre pa adi tapos na error la ghap
  const select__IM__SA = document.querySelector("#type__IM__SA")
  const sole_autho_FS = document.querySelector("#SA-FS")

  select__IM__SA.addEventListener("change", () => {
    if (select__IM__SA.value.toLowerCase() === "none") {
      sole_autho_FS.value = 0;
    }else if (select__IM__SA.value.toLowerCase() === "textbook") {
      sole_autho_FS.value = 30;
    } else if (select__IM__SA.value.toLowerCase() === "textbook chapter") {
      sole_autho_FS.value = 10;
    } else if (select__IM__SA.value.toLowerCase() === "manual/module/workbook") {
      sole_autho_FS.value = 16;
    } else if (select__IM__SA.value.toLowerCase() === "multimedia teaching material") {
      sole_autho_FS.value = 16;
    } else if (select__IM__SA.value.toLowerCase() === "testing material") {
      sole_autho_FS.value = 10; 
    }
  });

// TODO: GET FORMULA FOR CO- AUTHOR PART
// ! THIS SHIT NA ERROR AT THE BREAK POINTS
  const select__IM__CA = document.querySelector("#type__IM__CA")
  const co_autho_FS = document.getElementById("CA-FS")
  
  select__IM__CA.addEventListener("change", () => {
  if (select__IM__CA.value.toLowerCase() === "textbook") {
    let temp = 30;
    let CA__cont = document.getElementById("CA__cont").value;
    CA__cont = CA__cont / 100;
    temp * CA__cont;
    co_autho_FS.value = temp;


  } else if (select__IM__CA.value.toLowerCase() === "textbook chapter") {
    let temp = 10;
    let CA__cont = document.getElementById("CA__cont").value;
    CA__cont = CA__cont / 100;
    temp * CA__cont;
    co_autho_FS.value = temp;
  } else if (select__IM__CA.value.toLowerCase() === "manual/module/workbook") {
    let temp = 16;
    let CA__cont = document.getElementById("CA__cont").value;
    CA__cont = CA__cont / 100;
    temp * CA__cont;
    co_autho_FS.value = temp;
  } else if (select__IM__CA.value.toLowerCase() === "multiMedia teaching material") {
    let CA__cont = document.getElementById("CA__cont").value;
    let temp = 16;
    CA__cont = CA__cont / 100;
    temp * CA__cont;
    co_autho_FS.value = temp;
  } else if (select__IM__CA.value.toLowerCase() === "testing material") {
    let temp = 10;
    let CA__cont = document.getElementById("CA__cont").value;
    CA__cont = CA__cont / 100;
    temp * CA__cont;
    co_autho_FS.value = temp;
  }});


function calcu__(){
  //finish getting all the required input from the user
  var A1 = parseInt(document.getElementById("B1-1").value);
  var A2 = parseInt(document.getElementById("B1-2").value);
  var A3 = parseInt(document.getElementById("B2-1").value);
  var A4 = parseInt(document.getElementById("B2-2").value);
  var A5 = parseInt(document.getElementById("B3-1").value);
  var A6 = parseInt(document.getElementById("B3-2").value);
  var A7 = parseInt(document.getElementById("B4-1").value);
  var A8 = parseInt(document.getElementById("B4-2").value);


}

function calcu__C_A(){

}


function calcu__ () {

}