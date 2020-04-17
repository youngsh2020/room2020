<?php 

  session_start();
  
?>
<!--Youngshin Choi
    display a sorted list of world database-->
<!DOCTYPE html>
<html>
    <head>
        <title>Database Connection Example</title>
           <link rel="stylesheet" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
         header('Content-Type:text/html; charset=iso-8859-1');
         ?>
    </head>
    <body>
		<?php 
               
                  //input form
                     echo '<form action="index2.php" method="GET">';
                     echo " <label>Enter the minimum number</label>";
                     echo '<input id ="min" type="number" name="min"><br><br>';
                     echo " <label>Enter the maximum number</label>";
                     echo '<input id ="max" type="number" name="max" ><br><br>';
                     echo "<input type='submit' name='submit'><br>";
                     echo'</form>';
                 
        ?>
    </body>
</html>