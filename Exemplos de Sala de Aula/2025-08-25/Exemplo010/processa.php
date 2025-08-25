<?php
$idade = (int) $_POST["idade"];

// Verifica se é maior de idade
if ($idade >= 18) {
    // redireciona para resultado.php com parâmetro
    header("Location: resultado.php?status=maior&idade=$idade");
    exit;
} else {
    header("Location: resultado.php?status=menor&idade=$idade");
    exit;
}
?>
