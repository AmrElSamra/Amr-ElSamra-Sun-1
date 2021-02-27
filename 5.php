<?php
    $myArray = [1, 4, 2, 1, 6, 4, 9, 7, 2, 9];
    $resultArray = [];
    
    foreach($myArray as $myArrayItem) {
        foreach($resultArray as $resultArrayItem) { //foreach dont enter empty array
    
            if($myArrayItem == $resultArrayItem) {
                continue 2;  //If you have a switch inside a loop and wish to continue to the next iteration of the outer loop, use continue 2.
            }
        }
        $resultArray[] = $myArrayItem;
    }
    print_r($resultArray);
    echo "<hr>";
    
?>