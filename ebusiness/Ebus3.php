<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
        <link rel="stylesheet" href="mystylesheet4.css" type="text/css"/>
        
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
        .details{
            font-size:20px;
            text-align:center;
        }
        .nav{
        height:80px;
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
        button{
            text-align: center;
            border: 1px solid white;
            color:white;
            text-decoration: none;
            margin:5px;
            font-size:18px;
            background-color:pink;
        }
        .container{
            display:inline;
        }
        .container1{
             top:0%;
          width:100%;
          height:250%;
        }
        /* Centered text */
        .centered {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-style: sans-serif;
        }
  </style>
     </head>
    <body>
        
        
      <div class="nav">
            <ul class="main-nav">
                <li><a href="clodhome.html">Home</a></li>
                <li><a href="about.html">About Us</a> </li>
                <li><a href="products.html">Products</a></li>
                <li class="active"><a href="Ebus1.php">Buy Now</a></li>
                <li><a href="..//homepage.html">IS1113 Project</a></li>
            </ul>
        </div>>
        
        <center>
            <Stong><h1>Receipt</h1></Stong></center>
        
        <div class="details">
             <?php
            //Echo session varaibles that were set to the previous page
        echo("<strong>Name: </strong>". $name);
        echo("<br><strong>Email: </strong>". $email);
        echo "<br><strong>Total: $</strong>" .$_SESSION["total"] ;
        ?>
        </div>
        
        </div>
        </center>
        
        </br>
        </br>
        <center>
        <!-- a button that alllows us to print by calling a function -->
        <a href="" onclick="Print()" class="btn-home">Print Receipt</a></center>
        </center>

        <script>
        function Print() {
        window.print();
        }
        </script>

        <!-- button to homepage -->
        <center> <a href="../homepage.html" class="btn-home">Return to the HomePage</a></center>
        
    </body>
    </html>