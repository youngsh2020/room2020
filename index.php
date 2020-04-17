<?php 

  require("connect.php");
    
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
               
                try{
                    $dbConn = new PDO("mysql:host=localhost;dbname=chyoungs_Lesson11",$user,  $passwd);
                    $command="SELECT * FROM City WHERE population>? AND population<? ORDER BY Population"  ;
                    $stmt = $dbConn->prepare($command);
                    $userParams = array("1000000","1050000");
                    $execok = $stmt->execute($userParams);
                
                    echo " <h1>Cities Selected </h1>"."<br>";
                   // echo "<b>City Name       Country        Population</b> "."<br>";
                      echo "<table>";
                            echo "<tr>";
                            echo "<th> City Name</th>";
                            echo "<th> Country</th>";
                            echo "<th>Population</th>";
                            echo "</tr>";
                           // echo "</table>";
                    if($execok){
                      while($row=$stmt->fetch()){
                        
                          // echo "<table>";
                            echo "<tr>
                            <td>" . $row[Name]."</td>
                            <td>" . $row[CountryCode]."</td>
                            <td>". $row[Population]. "</td>   
                            </tr>";
                                                  
                          
                        // echo  $row[Name] ." ".$row[CountryCode]."".$row[Population] ."<br>" ;
                      } echo "</table>" ;  
                      
                    }else{
                      
                      echo "There are zero records";                   
                  
                    }
                } catch (PDOException $e) {
                    echo 'Connection error:' .$e->getMessage();

                }
         
        ?>
    </body>
</html>