<?php
require_once __DIR__ . '/../app/sessao.php'; 
iniciarSessao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Média</title>
</head>
<body>
    <h2>Cadastro de Aluno</h2>
    <form method="post" action="processa.php">
        Nome: <input type="text" name="nome" required><br><br>
        Nota 1: <input type="number" step="0.01" name="nota1" required><br><br>
        Nota 2: <input type="number" step="0.01" name="nota2" required><br><br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>
