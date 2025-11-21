<?php
    
    if (!file_exists("dados.txt")) {
        die("<h3>Nenhum login foi criado ainda!</h3><a href='index.html'>Voltar</a>");
    }

    $login = trim($_POST["login"]);
    $senha = trim($_POST["senha"]);

    
    $dados = file("dados.txt");

    $loginArq = trim($dados[0]);
    $senhaArq = trim($dados[1]);

    if ($login === $loginArq && $senha === $senhaArq) {
        echo "<h3>Login realizado com sucesso!</h3>";
    } else {
        echo "<h3>Login ou senha incorretos!</h3>";
    }

    echo "<a href='index.html'>Voltar</a>";
?>
