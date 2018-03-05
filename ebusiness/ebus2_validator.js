/* global $ */

function validateDetails(){
    
    var pin;
    var number;
    
    pin = document.getElementById("user_number").value;
    pin = document.getElementById("user_pin").value;
    
    if (pin==""){
        alert("Please enter your PIN");
        }
    else if (String(pin).length<4){
        alert("Please make sure your PIN is accurate");
        }
    else{
        enablebtnPurchase();
        }
        if (number==""){
        alert("Please enter your Card number");
        }
    else if (String(pin).length<16){
        alert("");
        }
    else{
        enablebtnPurchase();
        }
}

function validateName(){
 var name;
    
    name = document.getElementById("name").value;
    
    if (name==""){
        alert("Please enter your name");
        }
    else if (String(name).length<2){
        alert("Please make sure your Name is accurate");
        }
    else{
        enablebtnPurchase();
        }
}
function validateLast(){
 var lastname;
    
    lastname = document.getElementById("last_name").value;
    
    if (lastname==""){
        alert("Please enter your last name");
        }
    else if (String(lastname).length<2){
        alert("Please make sure your Name is accurate");
        }
    else{
        enablebtnPurchase();
        }
}

function enablebtnPurchase(){
     $('#btnPurchase').prop('disabled',false);
}

function disablebtnPurchase(){
     $('#btnPurchase').prop('disabled',true);
}