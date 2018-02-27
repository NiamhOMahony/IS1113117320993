/* global $ */

    var argSubTotal;
    var argVatAmt;
    var argDiscountAmt;
    var argTotalPrice;

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

 function calcDisVatTotal(parmSubTotal){
   
    
     if(document.getElementById('salesforce').checked) {
    argDiscountAmt = 100 * 0.05;
    argVatAmt = (100 - argDiscountAmt) * 0.10;
    argTotalPrice = ((100 -argDiscountAmt) + argVatAmt);
    
 } else if(document.getElementById('aws').checked) { 
    argDiscountAmt = 300 * 0.05;
    argVatAmt = (300 - argDiscountAmt) * 0.10;
    argTotalPrice = ((300 - argDiscountAmt) + argVatAmt);
    
 } else if(document.getElementById('gmail').checked) {
    argDiscountAmt = 400 * 0.05;
    argVatAmt = (400 - argDiscountAmt) * 0.10;
    argTotalPrice = ((400 - argDiscountAmt) + argVatAmt);
 } else {  
    argDiscountAmt = 200 * 0.05;
    argVatAmt = (200 - argDiscountAmt) * 0.10;
    argTotalPrice = ((200 - argDiscountAmt) + argVatAmt);
 }
display(argSubTotal, argVatAmt, argDiscountAmt, argTotalPrice)
}

function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("vat").value = parm2;
    document.getElementById("discount").value = parm3;
    document.getElementById("total").value = parm4;
    
    enablebtnProceed();
}
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

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}
function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}