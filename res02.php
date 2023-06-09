
<?php

$prox_termo = 0;
$soma = 0;

$termo1 = 1;
$termo2 = 2;

while (true){

    $prox_termo = $termo1 + $termo2;    
    $termo1 = $termo2;
    $termo2 = $prox_termo;    
    
    if ($prox_termo > 4000000 ){
        break;
    }
    
    $soma += $prox_termo; 
}

echo "A soma dos termos é: " . $soma;

?>