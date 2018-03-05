<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <!--jQuery-->
        <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc_jack.js"></script>
        
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
            margin-left:500px;
            font-size: 20px;
        }
        .buttons{
            text-align: center;
            border: 1px solid white;
            padding:10px 30px;
            color:white;
            text-decoration: none;
            margin:5px;
            font-size:18px;
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
        
        <h4>Select a Product</h4>
        
        </br>
        
        <form method="POST" action="EBus2.php">
            <lable for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick ="disablebtnProceed()"/>
                salesforce @ $100
            </lable>
            
            </br>
            
            <lable for="aws">
                <input type="radio" id="aws" name="product" onClick ="disablebtnProceed()"/>
                Amazom Wed Services (AWS) @ $300
            </lable>
            
            </br>
            
            <lable for="Cloud 9">
                <input type="radio" id="Cloud9" name="product" onClick ="disablebtnProceed()"/>
                Cloud 9 @ $200
            </lable>
            
            </br>
            
            <lable for="Gmail">
                <input type="radio" id="gmail" name="product" onClick ="disablebtnProceed()"/>
                Gmail @ $400
            </lable>
            
            </br>
            </br>
            
            <lable for="subtotal">
                SubTotal
                <input type="Text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </lable>
            
            </br>
            
            <lable for="discount">
                Discount @5%
                <input type="Text" id="discount" name="discount" value="0.00" readonly/>
            </lable>
            
            </br>
            
            <lable for="vat">
                VAT @10%
                <input type="Text" id="VAT" name="VAT" value="0.00" readonly/>
            </lable>
            
            </br>
        
            <lable for="total">
                Total
                <input type="Text" id="total"name="total" value="0.00" readonly/>
            </lable>
            
            </br>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        </form>
        
        </br>
        
        <div class="buttons">
            <button onClick="calcsub()">Calculate Cost</button>
            <a role="button" href="Ebus1.php">Clear Choice</a>
        </div>
    </body>
</html>