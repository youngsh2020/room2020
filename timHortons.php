<!DOCTYPE html>
<!--
name: Youngshin Choi(No.991585731)
date: March 28. 2020
App of ordering coffee for TimHortons(server)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>TimHortons Result</title>
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
        <!-- The main ordering page-->
        
        <?php
        
        //get the variables from html
        $number= $_POST["number"];
        $size = $_POST["size"];
        $creams = $_POST["creams"];
        $sugars = $_POST["sugars"];
        $price;
        $choice = $_POST["coffee"];
                 
        $tax= 1.13;
        
        //get the input from the user and show the results
        echo "<p id='title'>";
       
        echo "Thanks for your order. Here it is:";
             echo "</p>";
            for ($i=0; $i<$number; $i++){
                echo "<div id='part'>";
           
           if( $size=="small"){
           echo "<img src= 'image/cup.jpg' height='200'>";
               $price=1.50;
           }elseif( $size=="medium"){
                echo "<img src= 'image/cup.jpg'  height='250'>";
                 $price=1.90;
           }elseif( $size=="large"){
                echo "<img src= 'image/cup.jpg'  height='310'>";
                $price=2.50;
           }elseif( $size=="X-Large"){
                echo "<img src= 'image/cup.jpg' height='400'>";
                $price=2.90;
           }
           
           //shows the images of creams and sugars
           if($creams >= 1 && $sugars>= 1){
                echo "<img src= 'image/plus.jpg'>";
             for ($j=0; $j<$creams; $j++){
            echo "<img src= 'image/cream.jpg'>";
             }
           echo "<img src= 'image/plus.jpg'>";
            for ($k=0; $k<$sugars; $k++){
            echo "<img src= 'image/sugar.jpg'>";
             }
           }elseif($creams>=1 && $sugars == 0){
                echo "<img src= 'image/plus.jpg'>";
                  for ($j=0; $j<$creams; $j++){
            echo "<img src= 'image/cream.jpg'>";
             }
           }elseif($creams==0 && $sugars >=1){
                 echo "<img src= 'image/plus.jpg'>";
                  for ($k=0; $k<$sugars; $k++){
            echo "<img src= 'image/sugar.jpg'>";
             }
           }
           
           
            
         //show the slang ordering page
           
             //regular coffee
            if($choice=="regular"){
                 echo "<img src= 'image/plus.jpg'>";
                 for ($l=0; $l<1; $l++){
            echo "<img src= 'image/cream.jpg'>";
             }
           echo "<img src= 'image/plus.jpg'>";
            for ($m=0; $m<1; $m++){
            echo "<img src= 'image/sugar.jpg'>";
             }
            }
            //double double
             if($choice=="double"){
                  echo "<img src= 'image/plus.jpg'>";
                 for ($l=0; $l<2; $l++){
            echo "<img src= 'image/cream.jpg'>";
             }
           echo "<img src= 'image/plus.jpg'>";
            for ($m=0; $m<2; $m++){
            echo "<img src= 'image/sugar.jpg'>";
             }
            }
            
            //triple triple
            if($choice=="triple"){
                 echo "<img src= 'image/plus.jpg'>";
                 for ($l=0; $l<3; $l++){
            echo "<img src= 'image/cream.jpg'>";
             }
           echo "<img src= 'image/plus.jpg'>";
            for ($m=0; $m<3; $m++){
            echo "<img src= 'image/sugar.jpg'>";
             }
            }
            
            // black
            if($choice=="black"){
            }
            
            //black with 1sugar
            if($choice=="black1"){
                 echo "<img src= 'image/plus.jpg'>";
              echo "<img src= 'image/sugar.jpg'>";
             
            }
            
            //black with 2 sugars
            if($choice=="black2"){
               echo "<img src= 'image/plus.jpg'>";
            for ($m=0; $m<2; $m++){
            echo "<img src= 'image/sugar.jpg'>";
            }
            }
            
            //black with 3 sugars
            if($choice=="black3"){
                 echo "<img src= 'image/plus.jpg'>";
            for ($m=0; $m<3; $m++){
            echo "<img src= 'image/sugar.jpg'>";
            }
            }
             
            echo "</div>";
         }   
           
         //show the total price
           echo "Cost: $". $price ."*". $number ."+ tax =  $".$price*$number*$tax; 
           
                 
        ?>
        
        
    </body>
</html>
