<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="ebus.css" type="text/css"/>
    </head>
    <body background ="https://cdn0.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/cloud-circle-blue-512.png">
        <div class="ebustext">
        <h4>RECEIPT</h4>
        
       
        
        <p><strong>Thank you for your shopping with Cloudworld LTD</strong><p>
            <?php  
            
           
             //Displaying details that were inputed on previous page
            echo "Name: ". $_POST["firstname"];
            
            echo " " . $_POST["surname"] .  "<br/>"; 
            
            echo "Email: " . $_POST["email"] . "<br/>";
            
            echo "total is: $" . $_SESSION["total"] . ".";
            ?>
        </br>
        
        
        <a href ="../homepage.html">Home</a>
        
        </div>
    </body>
    
    
    
</html>