<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
</head>
<body>
  <h2>Sessão encerrada</h2>
  <p>Você saiu do sistema.</p>
  <p><a href="login.php">Voltar ao login</a> | <a href="index.html">Início</a></p>
</body>
</html>
