<?php
    $fd = fopen("visitas.txt", "a");

    fwrite($fd, $_POST["nome"] . ": " . $_POST["msg"] . "\n");

    fclose($fd);

    echo "<h3>Sugestão gravada com sucesso!</h3>";
    echo "<a href='Formulario3-1.php'>Ver Livro de Visitas</a>";
?>
