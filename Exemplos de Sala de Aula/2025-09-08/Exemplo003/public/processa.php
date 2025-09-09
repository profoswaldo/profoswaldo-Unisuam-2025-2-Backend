<?php
require_once __DIR__ . '/../app/sessao.php';
require_once __DIR__ . '/../app/funcoes.php';

iniciarSessao();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$nome  = trim($_POST['nome'] ?? '');
$nota1 = floatval($_POST['nota1'] ?? 0);
$nota2 = floatval($_POST['nota2'] ?? 0);

$media  = calcularMedia($nota1, $nota2);
$status = classificar($media);

// Guarda na sessão para a view
$_SESSION['aluno'] = [
  'nome'   => $nome,
  'nota1'  => $nota1,
  'nota2'  => $nota2,
  'media'  => $media,
  'status' => $status,
];

// PRG: redireciona para evitar reenvio do formulário
header('Location: resultado.php');
exit;
