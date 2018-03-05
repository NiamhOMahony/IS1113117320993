/* global $ */

    var argSubTotal;
    var argVat;
    var argDiscount;
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
    argDiscount = 100 * 0.05;
    argVat = (100 - argDiscount) * 0.10;
    argTotalPrice = ((100 -argDiscount) + argVat);
    
 } else if(document.getElementById('aws').checked) { 
    argDiscount = 300 * 0.05;
    argVat = (300 - argDiscount) * 0.10;
    argTotalPrice = ((300 - argDiscount) + argVat);
    
 } else if(document.getElementById('gmail').checked) {
    argDiscount = 400 * 0.05;
    argVat = (400 - argDiscount) * 0.10;
    argTotalPrice = ((400 - argDiscount) + argVat);
 } else {  
    argDiscount = 200 * 0.05;
    argVat = (200 - argDiscount) * 0.10;
    argTotalPrice = ((200 - argDiscount) + argVat);
 }
display(argSubTotal, argVat, argDiscount, argTotalPrice)
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