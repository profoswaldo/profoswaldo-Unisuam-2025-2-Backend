<?php
require_once __DIR__ . '/../app/sessao.php'; 
iniciarSessao();

$nome  = $_POST['nome'] ?? '';
$nota1 = floatval($_POST['nota1'] ?? 0);
$nota2 = floatval($_POST['nota2'] ?? 0);

$media = ($nota1 + $nota2) / 2;

if ($media >= 7) {
    $status = "Aprovado";
} elseif ($media >= 5) {
    $status = "Prova Final";
} else {
    $status = "Reprovado";
}

// Guarda tudo na sessão
$_SESSION['aluno'] = [
    'nome'   => $nome,
    'nota1'  => $nota1,
    'nota2'  => $nota2,
    'media'  => $media,
    'status' => $status
];

// Redireciona para a página de resultado
header("Location: resultado.php");
exit;
