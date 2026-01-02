<?php
    header("Content-Type: text/html; charset=UTF-8");

    $nome  = chop($_POST["nome"]);
    $sobre = chop($_POST["sobrenome"]);
    $data  = $_POST["data"];
    $email = strtolower(trim($_POST["email"])); 
    $dica  = chop($_POST["dica"]);

    $erros = [];

    
    if (empty($nome) || empty($sobre) || empty($data) || empty($email) || empty($dica)) {
        $erros[] = "Todos os campos precisam ser preenchidos.";
    }

    $nome_completo = ucwords(strtolower($nome . " " . $sobre));
 
    $data_partes = explode("-", $data);

    if (count($data_partes) == 3) {
        $ano  = $data_partes[0];
        $mes  = $data_partes[1];
        $dia  = $data_partes[2];

        if (!checkdate($mes, $dia, $ano)) {
            $erros[] = "Data de nascimento inválida.";
        }

        $data_formatada = "$dia/$mes/$ano";
    } else {
        $erros[] = "Formato de data inválido.";
    }

   
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "Endereço de e-mail inválido.";
    }

    
    if (strlen($dica) > 200) {
        $erros[] = "O campo Sugestões deve ter no máximo 200 caracteres.";
    }

    
    $email_partes = explode("@", $email);
    $dominio = $email_partes[1];  

    $info_dominio = "";

    if (strcmp($dominio, "hotmail.com") == 0) {
        $info_dominio = "Seu e-mail pertence ao domínio <strong>hotmail.com</strong>";
    } elseif (preg_match("/\\.br$/", $dominio)) {
        $info_dominio = "Seu e-mail pertence a um domínio <strong>.br</strong>";
    } else {
        $info_dominio = "Seu e-mail não é hotmail.com nem possui domínio .br";
    }

    $dica_original = $dica;
    $dica_banco    = AddSlashes($dica);
    $dica_html     = nl2br($dica);  

    if (count($erros) > 0) {
        echo "<h3>Erros encontrados:</h3>";
        foreach ($erros as $e) {
            echo "<p style='color:red;'>- $e</p>";
        }
        echo "<a href='javascript:history.back();'>Voltar</a>";
        exit;
    }

    echo "<h2>Resultado do Processamento</h2>";

    echo "Nome completo: <strong>$nome_completo</strong><br>";
    echo "Data de nascimento: <strong>$data_formatada</strong><br>";
    echo "$info_dominio <br><br>";

    echo "<h3>Sugestões</h3>";
    echo "Original:<br> $dica_original <br><br>";
    echo "Para Banco de Dados (AddSlashes):<br> $dica_banco <br><br>";
    echo "Para página Web (nl2br):<br> $dica_html <br><br>";
?>
