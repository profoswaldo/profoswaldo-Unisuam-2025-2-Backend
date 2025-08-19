<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo 004 - Soma de Valores</title>
</head>
<body>
    <h2>Digite dois números para somar</h2>
    <form method="post" action="soma.php">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" required>
        <br><br>

        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" required>
        <br><br>

        <button type="submit">Somar</button>
    </form>
</body>
</html>
