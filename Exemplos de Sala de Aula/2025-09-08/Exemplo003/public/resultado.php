<?php
require_once __DIR__ . '/../app/sessao.php';
require_once __DIR__ . '/../app/funcoes.php';

iniciarSessao();

if (!isset($_SESSION['aluno'])) {
    header('Location: index.php');
    exit;
}

$aluno = $_SESSION['aluno'];
$titulo = 'Resultado do Aluno';
require __DIR__ . '/../templates/header.php';
?>
<h2>Resultado do Aluno</h2>
<p><strong>Nome:</strong> <?= sanitiza($aluno['nome']) ?></p>
<p><strong>Nota 1:</strong> <?= number_format($aluno['nota1'], 2, ',', '.') ?></p>
<p><strong>Nota 2:</strong> <?= number_format($aluno['nota2'], 2, ',', '.') ?></p>
<p><strong>Média:</strong> <?= number_format($aluno['media'], 2, ',', '.') ?></p>
<p><strong>Status:</strong> <?= sanitiza($aluno['status']) ?></p>

<br>
<a href="index.php">Calcular outro aluno</a>
<?php require __DIR__ . '/../templates/footer.php'; ?>
