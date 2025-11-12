<?php 
    header("Content-Type: text/html; charset=UTF-8");

    $str = "Atividades de PHP,
            AULA 25 - StringExprReg";
    
    $str1 = "vai verão, vem verão";

    ?>

<!DOCTYPE = html>
<html lang = "pt-br">

<head>
    <meta charset = "UTF - 8">
    <title>Exercicio 7</title>
</head>

<body>
    <?php
        echo "<h3>" . nl2br($str) . "</h3>";

        echo "<h4>Vamos realizar testes das seguintes funções:</h4>";
        echo "strtoupper(). <br> strtolower(). <br> ucfirst(). <br> ucwords().";

        echo "<br><br>Vamos ver a frase de exemplo:<br> - $str1";

        echo "<br><br>Vamos começar com strtoupper():<br>";
        $teste = strtoupper($str1);
        echo "$teste";
        echo "<br><strong>Obs: Deixa todas as letras da string em maiúsculas</strong>";

        echo "<br><br>Vamos começar com strtolower():<br>";
        $teste = strtolower($str1);
        echo "$teste"; 
        echo "<br><strong>Obs: Deixa todas as letras da string em minúsculas</strong>";

        echo "<br><br>Vamos começar com ucfirst():<br>";
        $teste = ucfirst($str1);
        echo "$teste"; 
        echo "<br><strong>Obs: Deixa a primeira letra da string em maiúscula</strong>";

        echo "<br><br>Vamos começar com ucwords():<br>";
        $teste = ucwords($str1);
        echo "$teste"; 
        echo "<br><strong>Obs: Deixa a primeira letra de cada palavra da string em maiúscula</strong>";

    ?>

</body>
</html>
