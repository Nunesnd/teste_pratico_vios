<?php 

    require_once("template/header.php");

?>

<div class="container">
    <h1 class="margemBaixo">Questão 3</h1>

    <p class="margemBaixo">Os principais fatores de 13195 são 5, 7, 13 e 29. Qual é o maior fator primo do número 600851475143?</p>

    <p class="aviso margemBaixo">
        <b>AVISO!</b><br>
        Por questões de processamento o número alvo precisou ser abruptamente reduzido para constatação de funcionamento do algoritmo. É seguro informar que a lógica demonstrou-se funcional, bastando, para caso desejar o fator como acima mencionado, descomentar no arquivo res03.php a linha com o valor pertinente na variável.
    </p>

    <pre class="margemBaixo">
        <code>
            <?php

                $codigo = file_get_contents('res03.php');
                echo htmlentities($codigo);
            
            ?>
        </code>
    </pre>

    <h2 class="margemBaixo">Resultado aguardado</h2>

    <pre class="margemBaixo">
        <code>
            <?php 
            
                ob_start();
                include 'res03.php';
                $res = ob_get_clean();
                echo htmlentities($res);
            
            ?>
        </code>
    </pre>
</div>
