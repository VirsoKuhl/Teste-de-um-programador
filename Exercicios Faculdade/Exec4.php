<?php
    $vetor = array("Vilson", 23, "Guilherme", 24, "Lucas", 22, "Laura", 19);
    $name1 = null;
    $name2 = null;
    $name3 = null;

?>

<!DOCTYPE = hmtl>
<html lang = "pt-br"> 
    <head>
        <title>Exercicio 4</title>
    </head>

    <style>

        table, th, td{
            border: 1px solid;
            width: 50%;
        }

        th, td{
            padding: 10px;
            text-align: center;
        }


        
    </style>

    <body>

        <table>
            <tr>
                <th colspan = "2">Tabela de Usuários</th>
            </tr>
            <tr>
                <th>Nomes</th>
                <th>Idade</th>
            </tr>

            <tr>
                <td><?php echo $vetor [0] ?></td>
                <td><?php echo $vetor [1] ?></td>
            </tr>
            <tr>
                <td><?php echo $vetor [2] ?></td>
                <td><?php echo $vetor [3] ?></td>                
            </tr>
            <tr>
                <td><?php echo $vetor [4] ?></td>
                <td><?php echo $vetor [5] ?></td>                
            </tr>
            <tr>
                <td><?php echo $vetor [6] ?></td>
                <td><?php echo $vetor [7] ?></td>                
            </tr>
        </table>
        <br><br>
        
        <form method = "POST">
            <?php

                $name1 = isset($_POST["name1"]) ? $_POST["name1"] : "";
                $name2 = isset($_POST["name2"]) ? $_POST["name2"] : "";
                $name3 = isset($_POST["name3"]) ? $_POST["name3"] : "";

                echo "Digite seu nome:
                        <input type = 'text' name = 'name1' value = '$name1'> <br><br>";

                echo "Digite seu nome:
                        <input type = 'text' name = 'name2' value = '$name2'> <br><br>";
                
                echo "Digite seu nome:  
                        <input type = 'text' name = 'name3' value = '$name3'> <br><br>";
            ?>
            <br>
            <button type = "submit"> Teste </button>
        </form>

        <?php 
            
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                
                echo "<br><br>Teste do nome:<br><br>";
                echo "$name1<br>";
                echo "$name2<br>";
                echo "$name3<br>";


            }

            $t1 = trim($vetor[0]);
            $t2 = chop($vetor[2]);
            $t3 = ltrim($vetor[6]);

            echo "<br><br> $t1 /  $t2 /   $t3";

        ?>

    </body>
</html>
        
