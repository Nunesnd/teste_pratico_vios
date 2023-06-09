
<?php

$numero = 5000;
$primos = array(2,3,5,7);
$num=8;

while (count($primos) < $numero ){

    $sim = $nao = 0;
    foreach ($primos as $item) {
        
        if(($num % $item)==0){
            $sim++;

        }else{
            $nao++;            
            $arr = count($primos);

            if($nao == $arr){
                array_push($primos, $num);
            }
        }    

    }
    $num++;

}

$fim = end($primos);
echo $fim;

?>