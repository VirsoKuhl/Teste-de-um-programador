<?php
    $name = "Laurinha";
    $soma = 0;

?>

<html>
    <head>
        <tilte>Exercicios PHP</title>
    </head>

    <body>  
        <h1>Bem vindo, <?php print($name); ?> maravilhosa, linda, MIAU!</h1>

        <h4>Vamor realizar a soma de 10 números</h4>
        <br><br>

        <form method = "POST">
            <?php 
                for($i = 1; $i <= 10; $i ++){
                    
                    $valor = isset($_POST["num$i"]) ? $_POST["num$i"] : "";
                    echo "Digite um valor: 
                            <input type = 'number' name = 'num$i' required value = '$valor'><br><br>";

                }
            ?>
               
            <button type = "submit">Somar</button>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                
                for($j = 1; $j <= 10; $j ++){

                    $soma = $soma + $_POST["num$j"];

                }
                
                echo "<br>Resultado da soma = $soma ";
            }
        ?>


    </body>
</html>