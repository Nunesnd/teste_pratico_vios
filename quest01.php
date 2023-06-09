<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 1</h1>

    <p class="margemBaixo">Se listarmos todos os números naturais abaixo 10 que são múltiplos de 3 ou 5, nós temos 3, 5, 6 e 9. A soma desses múltiplos é 23. Encontre a soma de todos os múltiplos de 3 ou 5 abaixo 1000.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res01.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res01.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
    
</div>