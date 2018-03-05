<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <!-- applying font size and style -->
        
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
        <u><h4>RECEIPT</h4></u>
      
     <!-- displaying variables that were posted from previous pages -->
        <?php
        // Echo session variables that were set on previous page
        echo"Name is " . $_SESSION["fullname"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Email is " . $_SESSION["email"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Address is " . $_SESSION["address"] . ".";
        echo "</br> ";
         echo "</br> ";
          echo "</br> ";
        echo"Total is $" . $_SESSION["total"];
        
        ?>
     </center>    
    <br>
    <br>
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