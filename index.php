<!--
Name: Youngshin CHoi
Date: April.6.2020
-->
<?php
session_start();

?>
<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
         <h1 id ="title"> The Virtual Slot Machine </h1>
         <form action="index.php" method="POST">
            <section id="fruit">
                <?php 
                $num1=rand(1,6);
                $num2=rand(1,6);
                $num3=rand(1,6);
                        
                  ?>
            <div> <img  src=" image/fruit<?=$num1?>.png"></div>
            <div> <img src=" image/fruit<?=$num2?>.png"></div>
            <div> <img src=" image/fruit<?=$num3?>.png"></div>
            <div><input  type="submit" id="submit" value="spin" name="spin"></div>
            </section>
            
            <div id="name">Name: <input type ="text"  name="name" required></div>
            <div id="bet">Your Bet: <input type ="number"  name="bet" min="1" max="100" required></div>
            <div id="clear"></div>
            <div id="credit">Credit: <input type ="text"  name="credit" value ="<?php if(isset($_SESSION['credit'])) {echo $_SESSION['credit'];} else{ echo '100';} ?>" readonly></div>
            <br>
            
        </form>
        
            
            <?php
           
            if(isset($_POST["spin"])){
              
                  
                  $_SESSION["name"]=$_POST["name"];
                  $_SESSION["bet"]=$_POST["bet"];
                  $_SESSION["credit"]=$_POST["credit"];
                          
                
                 if($num1 == $num2 && $num2 == $num3){
                 echo "<div id ='result'>Jackpot!!</div>" ;
          
             
                $_SESSION["credit"] +=$_POST["bet"]*5;
                
              }elseif ($num1==$num2|| $num1==$num3||$num2==$num3){
                    echo "<div id ='result'>Win!</div>" ;
               
                 $_SESSION["credit"] +=$_POST["bet"]*2;
                  
             }  else {
               echo "<div id ='result'>Try again..</div>"; 
              
                $_SESSION["credit"] -= $_POST["bet"]*2;
              
              }
             
          //   echo '<h1 id="comment"> You are super!! </h1>'. $_SESSION["name"];
             
            }
            
                  ?>  
         <h1 id ='comment'> You are super!! <?= $_SESSION["name"]?></h1>
         <p>You're credit is  <?=  $_SESSION["credit"]?></p>
                  
    </body>
</html>
             
             
           