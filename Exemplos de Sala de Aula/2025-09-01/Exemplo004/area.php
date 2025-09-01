<?php
session_start(); // Necessário em toda página que use sessão
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Área Restrita (com sessão)</title>
</head>
<body>
  <h2>Área Restrita</h2>

  <?php
  if (isset($_SESSION['usuario'])) {
      echo "<p><strong>Usuário logado:</strong> " . $_SESSION['usuario'] . "</p>";
  } else {
      echo "<p><strong>Nenhum usuário logado.</strong></p>";
      echo '<p><a href="index.html">Voltar ao login</a></p>';
      exit; // não deixa acessar sem login
  }
  ?>

  <p>Parabéns, você entrou na área restrita!</p>
  <ul>
    <li><a href="area.php">Recarregar a página</a> (sessão continua válida)</li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</body>
</html>
