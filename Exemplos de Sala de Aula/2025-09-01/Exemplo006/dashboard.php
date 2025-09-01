<?php
session_start();

// bloqueio de acesso
if (!isset($_SESSION['usuario'])) {
    // não logado → nega acesso
    echo '<!DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><title>Acesso negado</title></head><body>';
    echo '<h2>Acesso negado</h2>';
    echo '<p>Você precisa fazer login para acessar esta página.</p>';
    echo '<p><a href="login.php">Ir para Login</a></p>';
    echo '</body></html>';
    exit;
}

// garante que o vetor exista
if (!isset($_SESSION['itens'])) {
    $_SESSION['itens'] = [];
}

$itens = $_SESSION['itens'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Área Restrita</title>
</head>
<body>
  <h2>Área Restrita</h2>
  <p><strong>Usuário:</strong> <?php echo htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8'); ?></p>

  <h3>Adicionar item à lista (salvo na sessão)</h3>
  <form action="adicionar.php" method="post">
    <label>Nome do item:
      <input type="text" name="nome" required>
    </label>
    <label>Quantidade:
      <input type="number" name="qtd" min="1" value="1" required>
    </label>
    <button type="submit">Adicionar</button>
  </form>

  <h3>Lista de Itens</h3>
  <?php
  // Exemplo de uso de if + while
  if (count($itens) === 0) {
      echo "<p><em>Nenhum item adicionado ainda.</em></p>";
  } else {
      echo '<table border="1" cellpadding="6" cellspacing="0">';
      echo '<tr><th>#</th><th>Item</th><th>Quantidade</th><th>Ação</th></tr>';

      $i = 0;
      // while percorre o array de itens gravados em sessão
      while ($i < count($itens)) {
          $linha = $itens[$i];
          $nome = htmlspecialchars($linha['nome'], ENT_QUOTES, 'UTF-8');
          $qtd  = (int) $linha['qtd'];

          echo "<tr>";
          echo "<td>" . $i . "</td>";
          echo "<td>" . $nome . "</td>";
          echo "<td>" . $qtd . "</td>";
          echo '<td><a href="remover.php?idx=' . $i . '">Remover</a></td>';
          echo "</tr>";

          $i++;
      }
      echo '</table>';
  }
  ?>

  <p style="margin-top:16px;">
    <a href="dashboard.php">Recarregar</a> |
    <a href="logout.php">Logout</a> |
    <a href="index.html">Início</a>
  </p>
</body>
</html>
