<?php
// Não há session_start(); não há $_SESSION; nada é persistido.
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Área (sem sessão)</title>
</head>
<body>
  <h2>Área (sem sessão)</h2>

  <?php
  // Tentativa inútil: não veio POST (foi um redirect), e não há sessão
  $email = $_POST['email'] ?? null;

  if ($email) {
      echo "<p>Usuário: $email</p>";
  } else {
      echo "<p><strong>Usuário: Visitante</strong></p>";
      echo "<p><em>Perceba:</em> Mesmo após “logar”, chegamos aqui sem nenhuma identificação, pois não usamos sessão.</p>";
  }
  ?>

  <ul>
    <li><a href="index.html">Voltar ao login</a></li>
    <li><a href="area.php">Recarregar esta página</a> (continua sem lembrar quem é você)</li>
  </ul>

  <hr>
  <p style="max-width: 650px;">
    <strong>Conclusão didática:</strong> Sem <code>session_start()</code> (ou sem passar dados por URL/form),
    o PHP trata cada requisição de forma independente. A “autenticação” feita em
    <code>autentica.php</code> não persiste e esta página não sabe quem você é.
  </p>

  <p><strong>Exercício bônus (opcional):</strong> mude o redirect em <code>autentica.php</code> para
    <code>header('Location: area.php?user=' . urlencode($email));</code>
    e leia <code>$_GET['user']</code> aqui. Note que funciona só enquanto você <u>passa</u> o parâmetro; ainda não é sessão.
  </p>
</body>
</html>
