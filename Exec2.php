<?php
    $name = "Laurinha";

?>

<html>
    <head>
        <tilte>Exercicios PHP</title>
    </head>

    <body>  
        <h1>Bem vindo, <?php print($name); ?> maravilhosa, linda, MIAU!</h1>


        <form method="POST">
            <?php 
            // Loop para criar 5 inputs numericos
            for ($i = 1; $i <= 5; $i++) {
                echo "Digite o número $i: <input type='number' name='num$i' required><br><br>";
            }
            ?>
            <button type="submit">Enviar</button>
        </form>

        <?php
            // Só executa quando o usuário clicar em "Enviar"
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                echo "<h3>Os números digitados foram:</h3>";

                // Loop para ler e mostrar os 5 números digitados
                for ($i = 1; $i <= 5; $i++) {
                    $valor = $_POST["num$i"];  // Pega o valor de cada input
                    echo "Número $i: $valor <br>";
                }
            }
        ?>

    </body>
</html>