<?php
// ATENÇÃO: sem session_start(); sem cookies; sem banco; apenas demonstração.

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

// "Validação" didática (NÃO usar em produção)
$valido = ($email === 'aluno@teste.com' && $senha === '123');

// Mesmo com login "válido", vamos redirecionar SEM levar estado algum
if ($valido) {
    // Importante: não imprimir nada antes do header
    header('Location: area.php'); // GET em area.php, sem dados do POST
    exit;
} else {
    // Falha: volta para o login
    header('Location: index.html');
    exit;
}
