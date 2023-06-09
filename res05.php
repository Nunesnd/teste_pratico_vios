<?php

for($num = 10; true ; $num+=10){

    if(($num % 2) == 0 && ($num % 3) == 0 && ($num % 5) == 0 && ($num % 7) == 0 && ($num % 11) == 0 && ($num % 13) == 0 && ($num % 17) == 0 && ($num % 19) == 0){

        if(($num % 4)==0 && ($num % 8)==0 && ($num % 9)==0 && ($num % 16)==0){

            echo $num;
            break;
        }

        
    }
    
}

?>
