<?php

    $x = 3 ; 
    $y=$x++; //post increment (which return the value first and then add happen), so $y = 3 and $x = 4
    $y+= ++$x; //pre increment (which the add happen "$x=5" and then added this $x=5 to $y=3), then the new $y=8
     
    if ($y == 7) {
         $x++;
         echo $x ."<br>";
     }
    else if ($y == 8){
         $x--;
         echo $x ."<br>";  //The final echo of $x will be 4 because $y=8 and in this case $x-- ($x=5)
        }
    else if ($y == 9) {
        $x+=2;
        echo $x ."<br>";
    }
    else { 
        $x= 0;
        echo $x ."<br>"; }
    
    echo "<hr>";
    
?>