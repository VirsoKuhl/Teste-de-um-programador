<?php 
header("Content-Type: text/html; charset=UTF-8");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $nasc = trim($_POST["nasc"]);
    $tel = trim($_POST["tel"]);
    $url = trim($_POST["url"]);
    $estado = trim($_POST["estado"]);

    $erro = [];

    if (empty($nome) || empty($email) || empty($nasc) || empty($tel)) {
        $erro[] = "Todos os campos obrigatórios devem ser preenchidos.";
    }

 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro[] = "E-mail inválido.";
    }

   
    $partes = explode("/", $nasc);
    if (count($partes) == 3) {
        $dia = (int)$partes[0];
        $mes = (int)$partes[1];
        $ano = (int)$partes[2];

        if (!checkdate($mes, $dia, $ano)) {
            $erro[] = "Data de nascimento inválida.";
        } else {
            $dataNasc = DateTime::createFromFormat('d/m/Y', $nasc);

         
            if ($dataNasc === false) {
                $erro[] = "Data de nascimento deve estar no formato dd/mm/aaaa.";
            } else {
                $hoje = new DateTime();
                $idade = $hoje->diff($dataNasc)->y;

                if ($idade < 18) {
                    $erro[] = "Você deve ter no mínimo 18 anos.";
                }
            }
        }
    } else {
        $erro[] = "Data de nascimento deve estar no formato dd/mm/aaaa.";
    }

 
    if (!preg_match("/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/", $tel)) {
        $erro[] = "Telefone inválido. Use o formato (47) 99999-9999.";
    }


    if (!empty($url) && !filter_var($url, FILTER_VALIDATE_URL)) {
        $erro[] = "URL inválida.";
    }

    if (!empty($erro)) {
        echo "<h3>Erros encontrados:</h3><ul>";
        foreach ($erro as $msg) {
            echo "<li>$msg</li>";
        }
        echo "</ul>";
        echo "<a href='javascript:history.back()'>Voltar</a>";
    } else {
        echo "<h3>Dados enviados com sucesso!</h3>";
        echo "<p><b>Nome:</b> $nome</p>";
        echo "<p><b>E-mail:</b> $email</p>";
        echo "<p><b>Data de Nascimento:</b> $nasc</p>";
        echo "<p><b>Telefone:</b> $tel</p>";
        echo "<p><b>URL:</b> $url</p>";
        echo "<p><b>Estado:</b> $estado</p>";
    }
}
?>
