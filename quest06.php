<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 6</h1>

    <p class="margemBaixo">A soma dos quadrados dos dez primeiros números naturais é, </p>

    <p class="margemBaixo centralizarTexto"><b>1² + 2² + ... + 10² = 385</b>.</p>

    <p class="margemBaixo">O quadrado da soma dos dez primeiros números naturais é, </p>

    <p class="margemBaixo centralizarTexto"><b>(1 + 2 + ... + 10)² = 55² = 3025</b>.</p>

    <p class="margemBaixo">Assim, a diferença entre a soma dos quadrados dos dez primeiros números naturais e o quadrado da soma é de</p>

    <p class="margemBaixo centralizarTexto"><b>3025 - 385 = 2640</b>.</p>

    <p class="margemBaixo">Encontre a diferença entre a soma dos quadrados dos primeiros cem números naturais e o quadrado da soma.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res06.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res06.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
