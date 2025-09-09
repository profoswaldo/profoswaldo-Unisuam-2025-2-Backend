<?php
require_once __DIR__ . '/../app/sessao.php';
iniciarSessao();
$titulo = 'Cálculo de Média';
require __DIR__ . '/../templates/header.php';
?>
<h2>Cadastro de Aluno</h2>
<form method="post" action="processa.php">
  <label>Nome: <input type="text" name="nome" required></label><br><br>
  <label>Nota 1: <input type="number" step="0.01" name="nota1" required></label><br><br>
  <label>Nota 2: <input type="number" step="0.01" name="nota2" required></label><br><br>
  <button type="submit">Calcular Média</button>
</form>
<?php require __DIR__ . '/../templates/footer.php'; ?>
