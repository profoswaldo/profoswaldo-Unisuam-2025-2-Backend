<?php
session_start();
session_destroy(); // apaga todos os dados da sessão
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
  <a href="index.html">Voltar ao login</a>
</body>
</html>
