
<?php

for ($catA = 1; $catA < 1000; $catA++) {

    for ($catB = $catA + 1; $catB < 1000; $catB++) {
        
        $hipot = 1000 - $catA - $catB;
        
        if ($hipot > 0 && ($catA**2 + $catB**2 == $hipot**2)) {

            $produto = $catA * $catB * $hipot;

            echo "Trigêmeo pitagórico encontrado: a = " . $catA . ", b = " . $catB . ", c = " . $hipot . "\n<br>";
            echo "Produto abc: " . $produto;

            break;

        }

    }   

}

?>