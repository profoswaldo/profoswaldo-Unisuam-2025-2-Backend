<?php
echo "<h2>Operadores de Atribuição em PHP</h2>";

// Atribuição simples
$a = 10;
echo "Atribuição (=): a = 10 → " . $a . "<br>";

// Adição
$a += 5; // $a = $a + 5
echo "Adição (+=): a += 5 → " . $a . "<br>";

// Subtração
$a -= 3; // $a = $a - 3
echo "Subtração (-=): a -= 3 → " . $a . "<br>";

// Multiplicação
$a *= 2; // $a = $a * 2
echo "Multiplicação (*=): a *= 2 → " . $a . "<br>";

// Divisão
$a /= 4; // $a = $a / 4
echo "Divisão (/=): a /= 4 → " . $a . "<br>";

// Módulo
$a %= 3; // $a = $a % 3
echo "Módulo (%=): a %= 3 → " . $a . "<br><br>";

// Concatenação
$texto = "Olá";
$texto .= " Mundo"; // $texto = $texto . " Mundo";
echo "Concatenação (.=): texto .= ' Mundo' → " . $texto . "<br>";
?>
