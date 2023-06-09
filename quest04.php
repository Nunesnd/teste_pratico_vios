<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 4</h1>

    <p class="margemBaixo">Um número palindrômico lê o mesmo nos dois sentidos. O maior palíndromo feito a partir do produto de dois números de 2 dígitos é 9009 = 91 x 99. Encontre o maior palíndromo feito a partir do produto de dois números de 3 dígitos.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res04.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res04.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
