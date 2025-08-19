<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Exemplo 007 - Controle de Saldo</title>
</head>
<body>
  <h2>Controle de Saldo Bancário</h2>
  <form method="post" action="saldo.php">
    <label>Saldo inicial (R$):</label>
    <input type="number" step="0.01" name="saldo" value="1000" required><br><br>
    <button type="submit">Simular operações</button>
  </form>
</body>
</html>
