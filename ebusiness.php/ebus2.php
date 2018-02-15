<?php
// Start the Session
session_start();
?>
<!DOCTYPE HTML>



<html>
    <head>
        <title>Enter Details</title>
        
         <!--jquery-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         </head>
    <body>
        <h4>Please Enter your Payment Details</h4>
        
        <form action="ebus3.php" method="POST">
            
             <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase </button>
            
            </form>
        
        <br/>
        <button onclick="validateDetails()">Validate</button>
        
        
        <?php
        //Start the Session
        $__SESSION["total"] = $_POST["total"];
        ?>
        
        
        <script type="text/javascript"src="ebus2_validator.js"></script>
    </body>
</html>