<?php
//final confirmation and go back to the first page
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/style.css">
        <title>Confirmation</title>
    </head>
    <body>
        <p id="final">Order successfully placed</p>
        <p id ="final">Thank you for your order</p>
        <p id ="final">Press Home Page if want to go to the first page</p>
        
        <a href="step1.html"> Home Page</a>
         
         <?php
            //close the session
            session_destroy();
        ?>
        
    </body>
</html>
