
<?php

    $soma = 0;

    for ($num = 1; $num < 1000; $num++) {

        if ($num % 3 == 0 || $num % 5 == 0) {

            $soma += $num;        

        }

    }

    echo "A soma de todos os múltiplos de 3 ou 5 abaixo de 1000 é: " . $soma;

?>