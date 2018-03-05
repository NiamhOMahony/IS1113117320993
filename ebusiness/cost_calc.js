/* global $ */

// declaring variables
    var argSubTotal;
    var argVatAmt;
    var argDiscountAmt;
    var argTotalPrice;

// making a function to calculate cost depending on which cloud service is checked
function calcSub(){
    
      if(document.getElementById('salesforce').checked) {
    argSubTotal = 100;
    calcDisVatTotal();
    
} else if(document.getElementById('aws').checked) {
   argSubTotal = 300;
    calcDisVatTotal();
    
} else if(document.getElementById('gmail').checked) {
    argSubTotal = 400;
    calcDisVatTotal();
    
} else {
    argSubTotal = 200;
    
}
calcDisVatTotal();
}

//function to calculate vat discount and total price which was called from the last function
 function calcDisVatTotal(parmSubTotal){
   
    argDiscountAmt = argSubTotal * 0.05;
    argVatAmt = (argSubTotal - argDiscountAmt) * .10;
    argTotalPrice = (argSubTotal - argDiscountAmt) + argVatAmt;
   
display(argSubTotal, argVatAmt, argDiscountAmt, argTotalPrice)
}

// displaying our output
function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("vat").value = parm2;
    document.getElementById("discount").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}
// validating user input
function validateForm() {
    var x = document.forms["myForm"]["fullname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
    var y = document.forms["myForm"]["email"].value;
    if (y == "") {
        alert("Email must be filled out");
        return false;
}
var z = document.forms["myForm"]["address"].value;
    if (z == "") {
        alert("Address must be filled out");
        return false;
}
}
// enabling the proceed to ebus2 page
function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}