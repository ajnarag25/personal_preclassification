function calcu_student() {
  var A1 = parseInt(document.getElementById("A1-1").value);
  var A2 = parseInt(document.getElementById("A1-2").value);
  var A3 = parseInt(document.getElementById("A2-1").value);
  var A4 = parseInt(document.getElementById("A2-2").value);
  var A5 = parseInt(document.getElementById("A3-1").value);
  var A6 = parseInt(document.getElementById("A3-2").value);
  var A7 = parseInt(document.getElementById("A4-1").value);
  var A8 = parseInt(document.getElementById("A4-2").value);


  // TODO: Recreate the formula here
  var result  = parseFloat((A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8)
  document.getElementById('OAR__stud').value = result
  document.getElementById('FS__stud').value = parseFloat((result /100)*36)

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

  var result  = parseFloat((A1 + A2 + A3 + A4 + A5 +A6 + A7 + A8) /8)
  document.getElementById('OAS__fac').value = result
  document.getElementById('FS__fac').value = parseFloat((result/100)*24)
}
  