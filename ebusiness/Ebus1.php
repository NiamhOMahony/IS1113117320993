<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        <!--jQuery-->
        <script scr="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    <body>
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
                AWS @ $300
            </lable>
            
            </br>
            </br>
            
            <lable for="subtotal">
                SubTotal
                <input type="Text" id="subtotal" name="subtotal" value="0.00" readonly/>
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
        <button onClick="calcsub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
        <a href="Ebus2.php" class="btn btn-dark">Pin Details</a>
    </body>
</html>