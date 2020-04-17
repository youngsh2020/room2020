<?php 

  require("connect.php");
    
?>
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
                //get the information from the previous page
                    $_SESSION["min"]=$_GET["min"];
                     $_SESSION["max"]=$_GET["max"];
               
                try{
                    
                   if(isset($_GET["submit"])){
                    
                       //When there is no parameter
                    if($_SESSION["min"]==0 && $_SESSION["max"]==0){
                      
                     echo " <h1>Cities Selected </h1>"."<br>";
                     echo "<table>";
                     echo "<tr>";
                     echo "<th> City Name</th>";
                     echo "<th> Country</th>";
                     echo "<th>Population</th>";
                     echo "</tr>";
                     echo "</table><br>";
                     echo "Need GET parameters min and max";
                    }
                    
                    //When the parameters are input
                    else{
                    
                     echo " <h1>Cities Selected </h1>"."<br>";
                     echo "<table>";
                     echo "<tr>";
                     echo "<th> City Name</th>";
                     echo "<th> Country</th>";
                     echo "<th>Population</th>";
                     echo "</tr>";
                    
                     //connect to the server
                    $dbConn = new PDO("mysql:host=localhost;dbname=chyoungs_Lesson11",$user,  $passwd);
                    $command="SELECT * FROM City WHERE population>? AND population<? ORDER BY Population"  ;
                    $stmt = $dbConn->prepare($command);                  
                    $userParams = array($_SESSION["min"],$_SESSION["max"]);
                    $execok = $stmt->execute($userParams);
                    
                    
                    if($execok){
                      while($row=$stmt->fetch()){
                    
                            echo "<tr>
                            <td>" . $row[Name]."</td>
                            <td>" . $row[CountryCode]."</td>
                            <td>". $row[Population]. "</td>   
                            </tr>";
               
                      } echo "</table>" ;  
                      
                    }else{
                      
                      echo "There are zero records";                   
                  
                    }
                    
                    }  
                   }
                } catch (PDOException $e) {
                    echo 'Connection error:' .$e->getMessage();

                }
         
        ?>
    </body>
</html>



