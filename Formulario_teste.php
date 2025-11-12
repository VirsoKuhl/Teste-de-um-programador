<!DOCTYPE = html>
<html lang = "pt-br">
<head>
    <title>Formulario Exemplo</title>
</head>

<body>
    <h3>Cadastro do Usuário</h3>

    <p>* Dados Obrigatórios </p>
    <br>

    <form method = "POST">
        <label for = "nome">Nome Completo: * </label>
        <input type = "text" name = "nome" placeholder = "Digite seu nome aqui..." required>
        <br><br>
        <label for = "email">E-mail: * </label>
        <input type = "email" name = "email" placeholder = "Digite seu e-mail..." required>
        <br><br>
        <label for = "nasc">Data de Nascimento: * </label>
        <input type = "date" name = "nasc" placeholder = "dd/mm/aaaa" required>
        <br><br>
        <label for = "tel">Telefone: * </label>
        <input type = "tel" name = "tel" placeholder = "(47) 9999-9999"  required>
        <br><br>
        <label for = "url">URL página pessoal: </label>
        <input type = "url" name = "url">   
        <br><br>
        <label for = "estado">Estado onde reside: </label>
        <input type = "text" name = "estado">
        <br><br>
        
        <button type = submit>Cadastre-se</button>

    </form>

</body>
</html>