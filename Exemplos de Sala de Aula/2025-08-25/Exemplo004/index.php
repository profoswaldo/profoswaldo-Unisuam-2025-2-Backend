<?php
$idade = 17;

echo "Idade = $idade<br>";

// Usando if/else normal
if ($idade >= 18) {
    echo "Maior de idade<br>";
} else {
    echo "Menor de idade<br>";
}

// Usando operador ternário
echo ($idade >= 18) ? "Maior de idade (usando ternário)" : "Menor de idade (usando ternário)";
?>
