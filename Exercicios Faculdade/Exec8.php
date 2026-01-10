<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Exercício Aula 28 - Arquivos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 350px;
        }
        label {
            display: block;
            margin-top: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 5px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        textarea {
            height: 80px;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h2>Exercícios da Aula 28 - Manipulação de Arquivos</h2>

    <!-- Criar Usuário -->
    <form method="POST" action="criar_usuario.php">
        <h3>Criar Usuário</h3>
        <label>Usuário:</label>
        <input type="text" name="user" required>

        <label>Senha:</label>
        <input type="password" name="pass" required>

        <button type="submit">Criar</button>
    </form>

    <!-- Verificar Usuário -->
    <form method="POST" action="verificar_usuario.php">
        <h3>Verificar Usuário</h3>
        <label>Usuário:</label>
        <input type="text" name="user" required>

        <label>Senha:</label>
        <input type="password" name="pass" required>

        <button type="submit">Verificar</button>
    </form>

    <!-- Livro de Visitas -->
    <form method="POST" action="gravar_visita.php">
        <h3>Livro de Visitas</h3>
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Mensagem / Sugestão:</label>
        <textarea name="msg" required></textarea>

        <button type="submit">Enviar</button>
    </form>

    <a href="listar_visitas.php" target="_blank">Ver todas as mensagens do Livro de Visitas</a>
</body>
</html>
