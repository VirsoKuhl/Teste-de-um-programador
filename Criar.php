<?php
    
    $login = trim($_POST["login"]);
    $senha = trim($_POST["senha"]);

    
    $fd = fopen("dados.txt", "w");

    
    fwrite($fd, $login . "\n" . $senha);

    fclose($fd);

    echo "<h3>Login e senha criados com sucesso!</h3>";
    echo "<a href='index.html'>Voltar</a>";
?>
