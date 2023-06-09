<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 5</h1>

    <p class="margemBaixo">2520 é o menor número que pode ser dividido por cada um dos números de 1 a 10 sem nenhum restante. Qual é o menor número positivo que é uniformemente divisível (sem resto) por todos os números de 1 a 20?</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res05.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res05.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
