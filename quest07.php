<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 7</h1>

    <p class="margemBaixo">Ao listar os seis primeiros números primos: 2, 3, 5, 7, 11 e 13, podemos ver que o primo de 6 é 13. Qual é o número primo de 10001?</p>

    <p class="aviso margemBaixo">
        <b>AVISO!</b><br>
        Por questões de processamento o número alvo precisou ser abruptamente reduzido para constatação de funcionamento do algoritmo. É seguro informar que a lógica demonstrou-se funcional, bastando, para caso desejar o fator como acima mencionado, alterar  no arquivo res07.php a linha com o valor pertinente na variável.
    </p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res07.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res07.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
