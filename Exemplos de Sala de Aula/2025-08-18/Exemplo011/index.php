<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Exemplo 005 - Orçamento de Churrasco</title>
</head>
<body>
  <h2>Orçamento de Churrasco</h2>
  <form method="post" action="calculadora.php">
    <label>Convidados:</label>
    <input type="number" name="convidados" value="12" min="1" required><br><br>

    <label>Latas por pessoa:</label>
    <input type="number" step="0.5" name="latas_por_pessoa" value="2" min="0" required><br><br>

    <label>Capacidade da caixa (latas por caixa):</label>
    <input type="number" name="capacidade_caixa" value="6" min="1" required><br><br>

    <label>Preço unitário da lata (R$):</label>
    <input type="number" step="0.01" name="preco_unitario" value="4.50" min="0" required><br><br>

    <label>Desconto fixo (R$):</label>
    <input type="number" step="0.01" name="desconto_fixo" value="10.00" min="0" required><br><br>

    <label>Acréscimo de serviço (R$):</label>
    <input type="number" step="0.01" name="taxa_servico" value="5.00" min="0" required><br><br>

    <fieldset style="max-width: 420px;">
      <legend>Reajuste (juros compostos) para compra futura</legend>
      <label>Taxa de reajuste (% por período):</label>
      <input type="number" step="0.1" name="taxa_percent" value="3.0" min="0" required><br><br>

      <label>Número de períodos:</label>
      <input type="number" name="periodos" value="2" min="0" required>
    </fieldset>
    <br>

    <button type="submit">Calcular</button>
  </form>
</body>
</html>
