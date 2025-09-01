<?php
// página com o formulário de login
$erro = isset($_GET['erro']) ? ($_GET['erro'] === '1') : false;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>

  <?php if ($erro): ?>
    <p style="color:red;">Credenciais inválidas. Tente: <strong>aluno@teste.com</strong> / <strong>123</strong></p>
  <?php endif; ?>

  <form action="autentica.php" method="post">
    <label>E-mail:
      <input type="email" name="email" required>
    </label>
    <br><br>
    <label>Senha:
      <input type="password" name="senha" required>
    </label>
    <br><br>
    <button type="submit">Entrar</button>
  </form>

  <p><a href="index.html">Voltar ao início</a></p>
</body>
</html>
