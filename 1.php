<?php
    $numbers = [9, 8, 25, 11, 22];
    $max = $numbers[0];
    foreach( $numbers as $number){
       if ($max < $number){
          $max = $number;
       }
    }
    echo $max ;
    echo "<br>";
    $min = $numbers[0];
    foreach( $numbers as $number){
       if ($min > $number){
          $min = $number;
       }
    }
    echo $min ;
    
    echo "<hr>";



?>