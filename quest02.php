<?php 

require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 2</h1>

    <p>Cada novo termo na sequência de Fibonacci é gerado pela adição dos dois termos anteriores.  Começando com 1 e 2, os primeiros 10 termos serão: 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, … </p>
    <p class="margemBaixo">Ao considerar os termos na sequência de Fibonacci cujos valores não excedam quatro milhões, encontre a soma dos termos de valor uniforme.</p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res02.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res02.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
