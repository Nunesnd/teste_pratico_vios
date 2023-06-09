<?php 

    require_once("config/globals.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vios Tecnologia - Teste prático</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css">
</head>
<body>

    <header>
        <div>
            <a href="<?php echo $BASE_URL ?>/index.php">
                <img src="<?php echo $BASE_URL; ?>/img/logo_vios.png" alt="logo_vios" class="rotacionar">
            </a>
        </div>
        <div>
            <h1>Vios Tecnologia</h1>
            <h2>Teste prático - Diego Nunes</h2>
        </div>    
    </header>

    <ul>
        <li>
            <a class="questao" href="quest01.php"> Questão 01 </a>
            <a class="questao" href="quest02.php"> Questão 02 </a>
            <a class="questao" href="quest03.php"> Questão 03 </a>
            <a class="questao" href="quest04.php"> Questão 04 </a>
            <a class="questao" href="quest05.php"> Questão 05 </a>
            <a class="questao" href="quest06.php"> Questão 06 </a>
            <a class="questao" href="quest07.php"> Questão 07 </a>
            <a class="questao" href="quest08.php"> Questão 08 </a>
            <a class="questao" href="quest09.php"> Questão 09 </a>
            <a class="questao" href="quest10.php"> Questão 10 </a>

        </li>
    </ul>