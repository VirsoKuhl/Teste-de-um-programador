<?php 
$teste = array("Virso", "Guijermo", "Laurinhas", "Lucas");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
</head>

<body>

    <h3>Testando as funções reset(), key() e next() em PHP</h3>

    <?php
        echo "<strong>Nosso vetor:</strong><br>[ ";
        foreach ($teste as $nome) {
            echo "$nome ";
        }
        echo "]<br><br>";

        // reset()
        $valor = reset($teste);
        echo "<strong>reset():</strong> o ponteiro volta para o início<br>";
        echo "Elemento atual: $valor<br>";
        echo "Índice atual: " . key($teste) . "<br><br>";

        // next()
        next($teste);
        echo "<strong>next():</strong> avança o ponteiro<br>";
        echo "Elemento atual: " . current($teste) . "<br>";
        echo "Índice atual: " . key($teste) . "<br><br>";

        // mais um next()
        next($teste);
        echo "<strong>next() novamente:</strong><br>";
        echo "Elemento atual: " . current($teste) . "<br>";
        echo "Índice atual: " . key($teste) . "<br><br>";

        // reset novamente
        reset($teste);
        echo "<strong>reset() novamente:</strong> volta ao início<br>";
        echo "Elemento atual: " . current($teste) . "<br>";
        echo "Índice atual: " . key($teste) . "<br><br>";
    ?>
</body>
</html>
