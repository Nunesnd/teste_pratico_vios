
<?php

$limite = 2000000;
$soma = 0;

// Criar um array para marcar os números compostos
$marcados = array_fill(2, $limite - 1, false);

// Percorrer os números a partir de 2
for ($i = 2; $i <= sqrt($limite); $i++) {
    // Se o número não foi marcado como composto, então é primo
    if (!$marcados[$i]) {
        // Marcar todos os múltiplos do número como compostos
        for ($j = $i * $i; $j <= $limite; $j += $i) {
            $marcados[$j] = true;
        }
    }
}

// Imprimir os números primos
for ($i = 2; $i <= $limite; $i++) {
    if (!$marcados[$i]) {
        // echo $i . " \n<br>";
        $soma+=$i;
    }
}

echo $soma;

?>