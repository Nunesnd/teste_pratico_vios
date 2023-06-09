
<?php

    require_once("funcoes/numPrimos.php");

//$dividendo = 600851475143;
$dividendo = 475143;

$num = $dividendo;

while(true){

    if(numPrimo($num)){

        if(($dividendo % $num)==0){

            echo "O maior fator primo é " . $num;
            break;

        }

    }

    $num--;
}

?>