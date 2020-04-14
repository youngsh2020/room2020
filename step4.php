<?php
//show the result
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
        <?php
           
             $_SESSION["shipping"]=$_POST["shipping"];
        ?>
        <p id="confirm">Order Confirmation  </p>
        <ul>
            <li>Your name : <?= $_SESSION["fname"]?>   <?= $_SESSION["lname"]?></li>
            <li>Your Email address: <?= $_SESSION["email"] ?></li>
            <li>Your Date of birth : <?= $_SESSION["birth"] ?></li>
            
             <li>Are you a runner?  :   
                <?php
                 if(isset($_SESSION["yes"])){
                  echo " Yes<br>"; 
                  echo " Your favourite terrain : ".$_SESSION["terrain"];
                 }
                  ?> 
                             
                <?php
                 if(isset($_SESSION["no"]))
                     echo "No"; 
                  ?>
            <li>Rate of your shoe : <?= $_SESSION["shoe"] ?></li>
            <li>Street : <?= $_SESSION["street"] ?></li>
            <li>City : <?= $_SESSION["city"] ?></li>
            <li>Province : <?= $_SESSION["province"] ?></li>
            <li>Postal Code : <?= $_SESSION["postal"] ?></li>
            <li>Shipping option: <?=$_SESSION["shipping"]?></li>
        </ul>
       
        <form action="step5.php" method="POST">
             <input type ="submit">
        </form>
    </body>
</html>
