<?php
// Criando um vetor com 5 valores
$valores = [10, 20, 30, 40, 50];

// Pegando o tamanho do vetor com count()
$tamanho = count($valores);

// Usando for para percorrer todos os elementos
for ($i = 0; $i < $tamanho; $i++) {
    echo "Valor " . ($i + 1) . ": " . $valores[$i] . "<br>";
}
?>
