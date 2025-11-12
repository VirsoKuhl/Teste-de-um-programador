<?php
    $vetor = array(10, 9, 4, 5, 6, 7, 3);

    ?>

<!DOCTYPE html>
<html lang = "pt-bt">
    <head>
        <title>Exercicio 6</title>
    </head>

    <body>
        <h3>Vamor realizar uma pesquisa de valores inteiros em um vetor</h3>

        <?php
             echo "[ ";
            foreach ($vetor as $valor) {
                echo "$valor ";
            }
            echo "]<br><br>";
            
            foreach ($vetor as $indice => $valor) {
                if ($valor == 3) {
                    echo "Encontrei o número que procura!<br>Ele está no índice $indice.";
                }
            }     
        ?>
    </body> 
</html>