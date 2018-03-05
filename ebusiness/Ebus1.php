<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <!--jQuery-->
        <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
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
            text-align:center;
        }
        form{
            margin-left:500px;
            font-size: 20px;
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
        
        <form name="myForm" method="POST" onsubmit="return validateForm()" action="Ebus2.php">
            <h3>Enter your personal details</h3>
                <label for="fullname">
                F.Name
                <input type="text" id="fullname" name="fullname" placeholder="FullName"/>
            </label>
            </br>
              <label for="email">
                     E-mail 
                <input type="email" name="email" placeholder="Email">
                </label>
                </br>
                 <label for="address">
                    Address
                <input type="text" name="address" placeholder="Address">
                </label>
            
            </br>
            </br>
            <h4>Select a product</h4>
            
           
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SalesForce @ $100
            </label>
            
            <br/>
            
             <label for="cloud">
                <input type="radio" id="cloud" name="product" onclick="disablebtnProceed()"/>
                Cloud9 @ $200
            </label>
            
            </br>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            
            </br>
            
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
                Gmail @ $250
            </label>
            
            <br/>
            <br/>
            
             <!-- readonly textboxes -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
             <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
            </label>
            
              </br>
              
            <label for="vat">
                V.A.T @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            </br>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            
            </br>
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
         <!-- buttons including a button that when clicked calls a function calcSub() -->
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        </center>
        
    </body>
</html>