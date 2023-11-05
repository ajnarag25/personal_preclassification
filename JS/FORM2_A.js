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
  else if(RO_1.value.toLowerCase() === "journal article"){
    SA_FS_1.value = 50
  }
  else if(RO_3.value.toLowerCase() === "book chapter"){
    SA_FS_1.value = 35
  }
  else if(RO_1.value.toLowerCase() === 'monograph'){
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

function calclu_SA_FS() {
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
  Final_CA.value = parseInt(parseInt(CA_FS_1) + parseInt(CA_FS_2) + parseInt(CA_FS_3) + parseInt(CA_FS_4))
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//1st tr
const LR1 = document.getElementById('LR_1').value
const LR2 = document.getElementById('LR_2').value
const LR3 = document.getElementById('LR_3').value
const LR4 = document.getElementById('LR_4').value
const LR5 = document.getElementById('LR_5').value
const LR_FS_1 = document.getElementById('LR_FS_1')

//2nd tr
const LR6 = document.getElementById('LR_6').value
const LR7 = document.getElementById('LR_7')
const LR8 = document.getElementById('LR_8')
const LR9 = document.getElementById('LR_9')
const LR10 = document.getElementById('LR_10')
const LR_FS_2 = document.getElementById('LR_FS_2')

//3rd tr
const LR11 = document.getElementById('LR_11').value
const LR12 = document.getElementById('LR_12')
const LR13 = document.getElementById('LR_13')
const LR14 = document.getElementById('LR_14')
const LR15 = document.getElementById('LR_15')
const LR_FS_3 = document.getElementById('LR_FS_3')

//4th tr
const LR16 = document.getElementById('LR_1').value
const LR17 = document.getElementById('LR_2')
const LR18 = document.getElementById('LR_3')
const LR19 = document.getElementById('LR_4')
const LR20 = document.getElementById('LR_5')
const LR_FS_4 = document.getElementById('LR_FS_4')


function test() {
  if(LR1 != null){
    if(LR2 != null){
      if(LR3 != null){
        if(LR4 != null){
          if(LR5 != null){
            LR_FS_1.value = 35
          }else{}
        }else{}
      }else{}
    }else{}
  }else{}
  
  if(LR6 != null){
    if(LR7 != null){
      if(LR8 != null){
        if(LR9 != null){
          if(LR10 != null){
            LR_FS_2.value = 35
          }else{}
        }else{}
      }else{}
    }else{}
  }else{}

  if(LR11 != null){
    if(LR12 != null){
      if(LR13 != null){
        if(LR14 != null){
          if(LR15 != null){
            LR_FS_3.value = 35
          }else{}
        }else{}
      }else{}
    }else{}
  }else{}

  if(LR16 != null){
    if(LR17 != null){
      if(LR18 != null){
        if(LR19 != null){
          if(LR20 != null){
            LR_FS_4.value = 35
          }else{}
        }else{}
      }else{}
    }else{}
  }else{}

   document.getElementById('LR_fs_finale').value = parseInt(parseInt(LR_FS_1.value)+parseInt(LR_FS_2.value)+parseInt(LR_FS_3.value)+parseInt(LR_FS_4.value))
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

