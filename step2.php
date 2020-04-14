<?php
//Address form
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <link rel="stylesheet" href="css/style.css">
        <title>Address Form</title>
    </head>
    <body>
        
<!--        get data from the previous page and save to global associative array-->
        <?php
          
            $_SESSION["fname"] = $_POST["fname"];
            $_SESSION["lname"] = $_POST["lname"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["birth"] = $_POST["birth"]; 
            $_SESSION["run"]= $_POST["run"];
            $_SESSION["yes"] = $_POST["yes"];  
             $_SESSION["no"] = $_POST["no"]; 
            $_SESSION["terrain"] = $_POST["terrain"];
            $_SESSION["shoe"]=$_POST["shoe"];
        ?>
        
<!--        require other personal information-->
        <h1>Welcome,  <?= $_SESSION["fname"] ?></h1>
       
        <form action="step3.php" method="POST">
             <label>Street </label>
             <input type="text" name="street" maxlength="100" required ><br>
             <label>City </label>
             <input type="text" name="city" maxlength="20" required ><br>
             <label>Province</label>
              <select name="province">
                 <option value="ON">ON</option>
                 <option value="QC">QC</option>
                 <option value="BC">BC</option>
                 <option value="NS">NS</option>
                 <option value="NB">NB</option>   
                 <option value="AB">AB</option>
              </select><br>
             <label>Postal Code</label>
             <input type="text" name="postal" pattern ="[a-zA-Z][1-9][a-zA-Z][1-9][a-zA-Z][1-9]" title="format:f1f1f1" required>           
            <input type="submit">
        </form>
    </body> 
</html>
