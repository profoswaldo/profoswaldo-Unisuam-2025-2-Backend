<?php
session_start(); // Ativa a sessão

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// "Validação" simples (apenas para demonstração)
$valido = ($email === 'aluno@teste.com' && $senha === '123');

if ($valido) {
    // Guarda o e-mail na sessão
    $_SESSION['usuario'] = $email;

    // Redireciona para área restrita
    header('Location: area.php');
    exit;
} else {
    // Falha → destrói qualquer sessão existente e volta
    session_destroy();
    header('Location: index.html');
    exit;
}
