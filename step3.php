<?php
//    save the data from previous form and get more information
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/style.css">
        <title>Shipping page</title>
    </head>
    <body>
        <?php
            $_SESSION["street"] = $_POST["street"];
            $_SESSION["city"] = $_POST["city"];
            $_SESSION["province"]=$_POST["province"];
            $_SESSION["postal"]=$_POST["postal"]; 
             
        ?>
         <h1>Welcome,  <?= $_SESSION["fname"] ?></h1>
       
         <form action="step4.php" method="POST">
             <p>Choose your shipping option</p>
            <select name="shipping">
                <option value ="Canadapost">Canada Post</option>
                <option value="Fedex">FedEx</option>
                <option value="Ups">UPS</option>
            </select>
           
            <input type="submit">
        </form>
    </body>
</html>
