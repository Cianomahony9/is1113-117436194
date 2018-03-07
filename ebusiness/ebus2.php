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
            <script ="text/javascript" src="ebus2_validator.js"></script>
            
            <link rel="stylesheet" href="ebus.css" type="text/css"/>
         </head>
    <body background ="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/cloud-circle-blue-512.png">
        <div class="ebustext">
        <h4>Please Enter your Payment Details</h4>
        
        <form action="ebus3.php" method="POST">
            
            
            
            <!--textboxes for customer to enter details to be shown on receipt page-->
        
        <h4>Please enter your payment details.</h4>
        
            <br />
            
            <form method = "POST" action = "Ebus3.php">
                
                <label for="Name">Full Name: </label>
                    <br/>
                    <input type="text" name="firstname" id="user_name" maxlength="20" placeholder="Firstname" class="name">
                    <input type="text" name="lastname" id="last_name" maxlength="20" placeholder="Surname" class="name">
                    <br/>
                    <br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input type="text" name="email" id="user_Email" maxlength="30" placeholder="Your Email..">
                    <br/>
                    <br/>
            
            
            
             <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase </button>
            
            </form>
        
        <br/>
        <button onclick="validateDetails()">Validate</button>
        
    
        <?php
        //Start the Session
        $_SESSION["total"] = $_POST["total"];
        ?>
        
        </div>
       
    </body>
</html>