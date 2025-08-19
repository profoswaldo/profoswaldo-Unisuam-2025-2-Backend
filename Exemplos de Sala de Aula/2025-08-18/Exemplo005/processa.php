<?php
// Lê os dados enviados pelo formulário
$nome = $_POST["nome"];
$funcao = $_POST["funcao"];

// Exibe os resultados com concatenação
echo "Boa noite, $nome!<br>";
echo "Sua função é: " . $funcao;
?>
