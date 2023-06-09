<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 10</h1>

    <p class="margemBaixo">A soma dos primos abaixo de 10 é 2 + 3 + 5 + 7 = 17. Encontre a soma de todos os primos abaixo de dois milhões.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res10.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res10.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
