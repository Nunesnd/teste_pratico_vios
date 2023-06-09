<?php

$numQuad = 0;
$numSoma = 0;

for($num = 1 ; $num<=100; $num++){

    $result = $num*$num;

    $numQuad += $result;

    $result = 0;

}

for($num = 1 ; $num<=100; $num++){

    $numSoma += $num;

}

$quadSoma = $numSoma * $numSoma;

echo "\n";
echo "A soma dos quadrados dos primeiros 100 digistos é: " . $quadSoma ."\n";
echo "O quadrado da soma dos 100 primeiros dígitos é: ". $numSoma ."\n";
echo "A diferença encontrada é: " . $quadSoma - $numQuad;

?>