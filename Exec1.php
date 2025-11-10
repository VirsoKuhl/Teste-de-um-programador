<?php
    $san = [9, 3, 0, 0];
    $cor = [6, 2, 0, 1];
    $fla = [0, 0, 1, 2];
    $pal = [0, 0, 1, 2];

    $soma= null;
    $sub = null;
    $mult = null;
    $div = null;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Exercicios 1</title>
    </head>

    <style>
        
        table, th, td{
            border:1px solid black;
        }

        td{
            text-align: center;
        }
        

    </style>

    <body>  

    <h1>SANTOS CAMPEÃO BRASILEIROOOOOOOOO!!<br> DEITOU NESSES RUINS!!</h1>

        <table style = "width:100%">
            <tr>
                <th>Brasileirão</th>
                <th>PTS</th>
                <th>V</th>
                <th>E</th>
                <th>D</th>
            </tr>
            <tr>
                <th>Santos</th>
                <td><?php print($san[0]);?></td>
                <td><?php echo $san[1];?></td>
                <td><?php echo $san[2];?></td>
                <td><?php echo $san[3];?></td>
            </tr>
            <tr>
                <th>Corinthias</th>
                <td><?php echo $cor[0];?></td>
                <td><?php echo $cor[1];?></td>
                <td><?php echo $cor[2];?></td>
                <td><?php echo $cor[3];?></td>
            </tr>
            <tr>
                <th>Flamengo</th>
                <td><?php echo $fla[0];?></td>
                <td><?php echo $fla[1];?></td>
                <td><?php echo $fla[2];?></td>
                <td><?php echo $fla[3];?></td>
            </tr>
            <tr>
                <th>Palmeiras</th>
                <td><?php echo $pal[0];?></td>
                <td><?php echo $pal[1];?></td>
                <td><?php echo $pal[2];?></td>
                <td><?php echo $pal[3];?></td>
            </tr>

        </table>

        <h3>CHUPA CURINTIA! <br> CHUPA LIXENGO! <br> CHUPA SEM MUNDIAL! </h3>

        <hr>

        <form method="POST">
            Digite o Valor 1 : <input type="number" name="num1" required
                value="<?= isset($_POST['num1']) ? $_POST['num1'] : '' ?>">
            <br><br>
            Digite o Valor 2: <input type="number" name="num2" required
                value="<?= isset($_POST['num2']) ? $_POST['num2'] : '' ?>">
            <br><br>
            <button type="summit">Calcular</button>
        </form>

        <?php 

            if (isset($_POST["num1"]) && isset($_POST["num2"])){
                $num1 = $_POST["num1"] ;
                $num2 = $_POST["num2"] ;
            

                $soma = $num1 + $num2; 
                $sub = $num1 - $num2; 
                $mult = $num1 * $num2; 
                $div = $num1 / $num2;
            
       

                echo "<p>Somando - Subtraindo - Multiplicando - Dividindo. Os valores, vamos ver qual é o maior:</p>";
                echo "<p>Soma: $soma </p>";
                echo "<p>Subtração: $sub </p>";
                echo "<p>Multiplicação: $mult </p>";
                echo "<p>Divisão: $div </p>";

                if ($soma > $sub && $soma > $mult && $soma > $div){
                    echo "A soma é o maior, total é   $soma";
                } elseif ($sub > $mult && $sub > $div){
                    echo "A subtração é o maior, total é $sub";
                } elseif ($mult > $div){
                    echo "A multiplicação é o maior, total é $mult";
                } else{
                    echo "A divisão é o maior, total é $div";
                }
            }

        ?>

        <hr>
        
        <form method = "POST">
            <?php
                for($i = 1; $i <= 15; $i ++){
                    
                    $valor = isset($_POST["num$i"]) ? $_POST["num$i"] : "";
                    echo "Digite o valor $i :
                        <input type = 'number' name = 'num$i' value = '$valor'><br><br>";
                                       
                }

            ?>
            <button type = "submit">Mostrar</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                echo "<br><br>Valores digitador foram: <br><br>";
            
                    
                for ($j = 1; $j <= 15; $j++){

                    $vlr = $_POST["num$j"];
                    echo "$vlr <br>";

                }
               
            }
        ?>

    </body>
</html> 