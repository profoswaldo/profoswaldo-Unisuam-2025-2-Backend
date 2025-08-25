<?php
// Vetor de produtos
$listaDeCompras = ["Arroz", "Feijão", "Macarrão", "Leite", "Café"];

// Pegando o número digitado pelo usuário
$numero = (int) $_POST["numero"];

// Verifica se o número está dentro do intervalo válido
if ($numero >= 1 && $numero <= count($listaDeCompras)) {
    $produto = $listaDeCompras[$numero - 1]; // -1 pois vetor começa em 0
    echo "<h2>Você escolheu o produto: $produto</h2>";
} else {
    echo "<h2>Número inválido! Digite entre 1 e " . count($listaDeCompras) . ".</h2>";
}
?>
