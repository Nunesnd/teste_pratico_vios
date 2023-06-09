<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 9</h1>

    <p class="margemBaixo">Um trigêmeo pitagórico é um conjunto de três números naturais, a < b < c, para o qual, a² + b² = c².</p>
    <p class="margemBaixo">Por exemplo, 3² + 4² = 9 + 16 = 25 = 5².</p>
    <p class="margemBaixo">Existe exatamente um trigêmeo pitagórico para o qual a + b + c = 1000. Encontre o produto abc.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res09.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res09.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
