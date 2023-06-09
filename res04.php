
<?php

require_once("funcoes/numPalindr.php");

$num1 = 999;
$maiorPalin = 0;
 
while ($num1 > 0){

    $num2 = $num1;

    while ($num2 > 0){

        $numPalin = $num1*$num2;

        if(numPalindr($numPalin)){

            if($numPalin > $maiorPalin){

                $maiorPalin = $numPalin;

            }           

        }

        $num2--;
    }

    $num1--;
}

echo $maiorPalin;

?>