<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo 003 - Formulário</title>
</head>
<body>
    <h2>Digite suas informações</h2>
    <form method="post" action="processa.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        
        <label for="funcao">Função:</label>
        <input type="text" id="funcao" name="funcao" required>
        <br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
