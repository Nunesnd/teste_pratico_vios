<?php 

function numPrimo($num){

    if($num <= 1 || (($num % 2) == 0) ) {
        return false; 
    }

    for($x = 2; $x <= sqrt($num); $x++) {
        if ($num % $x == 0) {
            return false; 
        }
    }

    return true; 

}

?>