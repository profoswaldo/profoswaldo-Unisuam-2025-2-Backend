<?php
session_start(); // continua a sessão

// Recebe os dados do formulário
$nome  = $_POST["nome"];
$nota1 = floatval($_POST["nota1"]);
$nota2 = floatval($_POST["nota2"]);

// Calcula a média
$media = ($nota1 + $nota2) / 2;

// Verifica situação
if ($media >= 7) {
    $status = "Aprovado";
} elseif ($media >= 5) {
    $status = "Prova Final";
} else {
    $status = "Reprovado";
}

// Armazena na sessão
$_SESSION["aluno"] = [
    "nome"   => $nome,
    "nota1"  => $nota1,
    "nota2"  => $nota2,
    "media"  => $media,
    "status" => $status
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado do Aluno</h2>
    <p><strong>Nome:</strong> <?= $_SESSION["aluno"]["nome"] ?></p>
    <p><strong>Nota 1:</strong> <?= $_SESSION["aluno"]["nota1"] ?></p>
    <p><strong>Nota 2:</strong> <?= $_SESSION["aluno"]["nota2"] ?></p>
    <p><strong>Média:</strong> <?= $_SESSION["aluno"]["media"] ?></p>
    <p><strong>Status:</strong> <?= $_SESSION["aluno"]["status"] ?></p>

    <br>
    <a href="index.html">Calcular outro aluno</a>
    <br><br>
    <a href="ver_sessao.php">Ver dados salvos na sessão</a>
</body>
</html>
