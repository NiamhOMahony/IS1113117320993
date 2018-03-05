<?php
//start the session
session_start();
?>
    
<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
        body{
            background-image:url(stars.jpg);
            z-index: 1;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        .nav{
        height:100px;
        max-width: 100%;
        background-color: rgba(0,0,0,0.5);
        margin:auto;
            
        }
        .main-nav{
            float: right;
            list-style: none;
            margin-top: 20px;
            
        }
        .main-nav li{
            display: inline-block;
            margin:10px 5px;
        }
        .main-nav li a{
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            font-family: sans-serif;
            font-size: 15px;
            letter-spacing:2px;
            border-bottom: 1px solid white;
        }
        .main-nav .active a {
            border: 1px solid white;
        }
        .main-nav li a:hover {
            border:1px solid white;
        }
        h4{
            font-size:40px;
            text-align:center;
        }
        form{
            font-size: 30px;
        }
        button{
            text-align: center;
            border: 1px solid white;
            color:white;
            text-decoration: none;
            margin:5px;
            font-size:18px;
            background-color: pink;
        }
        .buttons{
            text-align:center;
        }
        label{
            display:inline-block;
            width:90px;
            margin-right:10px;
            text-align:right;
        }
        fieldset{
            border:none;
            width:500px;
            margin:0px auto;
        }
            
        </style>
        
    </head>
    <body>
        
        <div class="nav">
            <ul class="main-nav">
                <li><a href="..//clodhome.html">Home</a></li>
                <li><a href="about.html">About Cloud</a> </li>
                <li><a href="a">Products</a></li>
                <liclass="active"><a href="Ebus1.php">Buy Now</a></li>
                <li><a href="..//homepage/homepage.html">IS1113 Project</a></li>
            </ul>
        </div>
        
        <center>
        
        <h4>Please enter your payment details.</h4>
        
            <br/>
             <!-- creating a form -->
            
            <form method = "POST" action = "Ebus3.php">
                
               </br>
                <!-- applying placeholders and maxlengths -->
                
                <label for="user_card">
                    Card Number
                </label>
                
                <input type="text" id="user_card" placeholder="Card Number" maxlength="16">
                
                <br>
                
                <label for="user_cvv">
                    Card CVV
                </label>
                
                <input type="text" id="user_cvv" placeholder="CVV" maxlength="3">
                
                
                
                </br>
                
                <label for="user_pin">
                    Card PIN 
                </label>
                
                <input type="password" id="user_pin" placeholder="Card Pin" maxlength="4">
                
                </br>
                </br>
                <button type="Submit" id="btnPurchase" disabled> 
                    Proceed with Purchase 
                </button>
               
            </form>
            
            <br/>
            
             <!-- button that calls on the function calidateDetails() -->
             
            <button onClick="validateDetails()"> Validate </button>
            <div align="center">
                 <!-- footer -->
            <div class="footer">
            <center> <a href="../homepage.html" onClick="Alert()" class="btn-cancel">Cancel Payment</a></center>
            <br>
            <br>
        </div>
        </div>
            
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        </center>
        
        <?php
        // Set session variables
        $_SESSION["fullname"] = $_POST["fullname"];
        $_SESSION["total"] = $_POST["total"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["address"] = $_POST["address"];
       
        
        ?>
         <!-- alert function that was called on the cancel payment button -->
       <script>
       
  function Alert() {
    alert("Your purchase has been cancelled");
}
</script>

    
    </body>
           
    
</html>   