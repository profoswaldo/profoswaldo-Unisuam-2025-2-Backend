<?php
// Vetor com os itens da lista de compras
$listaDeCompras = ["Arroz", "Feijão", "Macarrão", "Leite", "Café"];

// Pegando o tamanho da lista
$tamanho = count($listaDeCompras);

// Exibindo a lista com for
echo "<h2>Minha Lista de Compras</h2>";

for ($i = 0; $i < $tamanho; $i++) {
    echo "Item " . ($i + 1) . ": " . $listaDeCompras[$i] . "<br>";
}
?>
