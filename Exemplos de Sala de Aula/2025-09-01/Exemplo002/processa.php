<?php
// Agora ativamos a sessão
session_start();

// Pega o nome enviado
$nome = $_POST["nome"] ?? "";

// Guarda o nome atual na sessão
if (!empty($nome)) {
    $_SESSION["ultimo_nome"] = $nome;
}

// Exibe o nome digitado
echo "<h2>Olá, $nome!</h2>";

// Exibe o último nome salvo na sessão (se existir)
if (isset($_SESSION["ultimo_nome"])) {
    echo "<p>Nome anterior (lembrado pela sessão): " . $_SESSION["ultimo_nome"] . "</p>";
} else {
    echo "<p>Nenhum nome anterior registrado.</p>";
}
?>

<a href="index.html">Voltar</a>
