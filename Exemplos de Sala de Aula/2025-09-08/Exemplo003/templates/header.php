<?php require_once __DIR__ . '/../app/funcoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?= isset($titulo) ? sanitiza($titulo) : 'App Aluno' ?></title>
</head>
<body>
