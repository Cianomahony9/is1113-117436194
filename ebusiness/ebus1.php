
    <!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--JQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_cal.js"></script>
        
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
        
    </head>
    
    <body class="ebustext">
        
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method="POST" action="ebus2.php">
            
            <label for "gmail">
             <input type="radio" id="gmail" name="product" onclick="disablebtnProceed()"/>
             gmail @ $400
            </label>
            
            <br/>
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onclick="disablebtnProceed()"/>
                salesforce @ $100
            </label>
            
            <br/>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" onclick="disablebtnProceed()"/>
                AWS @ 300$
            </label>
            
            <br/> 
            
            <label for="cloud 9">
                <input type="radio" id="cloud 9" name="product" onclick="disablebtnProceed()"/>
                cloud 9 @ $200
            </label>
                
                
            
            
            
            <br/>
            
             <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" name="discount" value="0.00" readonly/>
              </label>
              
              <br/>
              
              <label for="vat">
                Vat @ 10%
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
              </label>
              
              <br/>
            
            
            
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
             
             <br/>
             
             <label for="total">
                 Total
                 <input type="text" id="total" name="total" value="0.00" readonly/>
             </label>
             
        <br/>
             
            <button type="submit" id="btnProceed" disabled> Add to Shopping Cart</button>
             
        </form>
        
       <br/>
       
        <button onclick="calcSub()">Calculate Cost</button>
        <a role="button" href="ebus1.php">Clear Choice</a>
      
        </body>
    
    
</html>
    
