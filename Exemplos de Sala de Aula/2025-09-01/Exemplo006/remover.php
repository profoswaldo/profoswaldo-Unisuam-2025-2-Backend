<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}

$idx = isset($_GET['idx']) ? (int)$_GET['idx'] : -1;

if (isset($_SESSION['itens'][$idx])) {
    // remove o item pelo índice
    array_splice($_SESSION['itens'], $idx, 1);
}

header('Location: dashboard.php');
exit;
