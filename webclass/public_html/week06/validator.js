//Validator.js

function chkName() {

   var myName = document.getElementById ("first_name");
   var myName = document.getElementById ("last_name");

   var pos = myName.value.search(
      /^[A-Z] [a-z]+, ?[A-Z] [a-z]+, ?[A-Z]\.?$/);
   if (pos != 0) {
      alert ( "The name you entered (" + myName.value + ") is not in the correct form. \n" +
      "The correct form is: " + "digit your first-name, \n" + "please go back and fix your name");

      return false;
   }
   else

   return true;
   }
function computeCost() {
   var web = document.getElementById("web").value;
   var cpp = document.getElementById("cpp").value;
   var clean = document.getElementById("clean").value;
   var js = document.getElementById("js").value;

   document.getElementById("cost").value = 
   totalCost = web * 86.00 + cpp * 38.00 + clean * 23.69 + js * 19.99;
   }

function chk.Phone(){
   var  myPhone = document.getElementById("phone");

   var pos = myPhone.value.search (/^\d{3}-\d{3}-\d{4}$/);    
   if (!OK)  {
       window.alert("Enter Telephone number format ###-###-####!");  
   else
       window.alert("Input Telephone is " + OK[0]);  
   }  
 
   }
   
    
