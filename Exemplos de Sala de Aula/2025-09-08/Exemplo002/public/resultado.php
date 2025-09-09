<?php
require_once __DIR__ . '/../app/sessao.php'; 
iniciarSessao();

$aluno = $_SESSION['aluno'] ?? null;

if (!$aluno) {
    echo "Nenhum aluno calculado ainda.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($aluno['nome']) ?></p>
    <p><strong>Média:</strong> <?= number_format($aluno['media'], 2, ',', '.') ?></p>
    <p><strong>Status:</strong> <?= $aluno['status'] ?></p>

    <a href="index.php">Calcular outro aluno</a>
</body>
</html>
