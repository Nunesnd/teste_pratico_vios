<?php 

function numPalindr($num){

    $strNum = strval($num); 
    $invertStrNum = strrev($strNum); 

    if($strNum == $invertStrNum){
        return true; 
    }else{
        return false; 
    }
}

?>