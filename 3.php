<?php
    $firstContainer = "";
    for($i=0; $i<5; $i++){
       $firstContainer .= "*";
       echo "$firstContainer <br>" ;
    }
    $secondContainer = "*";
    for ($i=5; $i>0; $i--){
    
      for ($j=$i; $j>0; $j--){
         echo $secondContainer;
      }
      echo "<br>";
      
    }
    echo "<hr>";


?>