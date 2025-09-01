<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$qtd  = (int)($_POST['qtd'] ?? 0);

// Validações simples (exemplo de if)
if ($nome !== '' && $qtd > 0) {
    if (!isset($_SESSION['itens'])) {
        $_SESSION['itens'] = [];
    }
    $_SESSION['itens'][] = [
        'nome' => $nome, 
        'qtd' => $qtd
    ];
}

// Volta para a área restrita
header('Location: dashboard.php');
exit;
