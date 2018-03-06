<?php
session_start();
?>
<!DCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        
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
        
        
    </body>
    
    
    
</html>