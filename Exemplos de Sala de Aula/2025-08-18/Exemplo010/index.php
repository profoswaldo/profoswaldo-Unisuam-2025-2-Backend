<?php
echo "<h2>Exemplo de Pré e Pós Incremento/Decremento em Expressões</h2>";

// =========================
// Exemplo com incremento
// =========================
$a = 5;
echo "Valor inicial de a = " . $a . "<br>";

// Pré-incremento (++$a) → incrementa antes de usar
$resultado1 = 10 + ++$a; 
echo "Expressão com pré-incremento (10 + ++a): resultado = " . $resultado1 . ", a = " . $a . "<br>";

// Resetando variável
$a = 5;

// Pós-incremento ($a++) → usa valor atual, incrementa depois
$resultado2 = 10 + $a++; 
echo "Expressão com pós-incremento (10 + a++): resultado = " . $resultado2 . ", a = " . $a . "<br><br>";

// =========================
// Exemplo com decremento
// =========================
$b = 5;
echo "Valor inicial de b = " . $b . "<br>";

// Pré-decremento (--$b) → decrementa antes de usar
$resultado3 = 10 + --$b; 
echo "Expressão com pré-decremento (10 + --b): resultado = " . $resultado3 . ", b = " . $b . "<br>";

// Resetando variável
$b = 5;

// Pós-decremento ($b--) → usa valor atual, decrementa depois
$resultado4 = 10 + $b--; 
echo "Expressão com pós-decremento (10 + b--): resultado = " . $resultado4 . ", b = " . $b . "<br>";
?>
