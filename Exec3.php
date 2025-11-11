<?php
    $vetor = array(10, 5, 12, 3, 8);
    $soma = 0;
    $media = 0;
    $aux = 0;
?>

<!DOCTYPE = html>
<html lang = "pt-br">
    <head>
        <title>Exercicio 3</title>
    </head>

    <body>
        <?php
            echo "Vamos somar um vetor e achar a média dele, o vetor tem os seguintes valores:<br>";
            echo "[ ";
            for ($i = 0; $i < count($vetor); $i ++){
                echo "$vetor[$i]  ";

            }
            echo "]";
            echo "<br><br>";

            for ($i = 0; $i < count($vetor); $i++){

                $soma = $soma + $vetor[$i];

            }

            $media = $soma / count($vetor);

            echo "O resultado da soma = $soma<br>";
            echo "O resultado da média = $media";

            for($i = count($vetor) - 1; $i >= 1; $i--){
                for ($j = 0; $j < $i; $j++){
                    if ($vetor[$j] > $vetor[$j + 1]){
                        $aux = $vetor[$j];
                        $vetor [$j] = $vetor [$j + 1];
                        $vetor [$j + 1] = $aux;

                    }
                }
            }

            echo "<br><br>Vetor ordenado do menor para o maior:";
            echo "[ ";
            for ($i = 0; $i < count($vetor); $i ++){
                echo "$vetor[$i]  ";

            }
            echo "]";

        ?>
    </body>
</html>

