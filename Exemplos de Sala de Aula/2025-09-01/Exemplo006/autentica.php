<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$valido = ($email === 'aluno@teste.com' && $senha === '123');

if ($valido) {
    $_SESSION['usuario'] = $email;

    // inicializa a "lista de itens" na sessão se ainda não existir
    if (!isset($_SESSION['itens'])) {
        $_SESSION['itens'] = [];
    }

    header('Location: dashboard.php');
    exit;
} else {
    // falhou: garante que não há sessão válida
    session_destroy();
    header('Location: login.php?erro=1');
    exit;
}
