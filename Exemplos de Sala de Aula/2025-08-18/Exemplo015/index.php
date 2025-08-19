<?php
$a = 10;
$b = 20;

echo "<h2>Exemplo de Operadores Relacionais em PHP</h2>";
echo "a = $a<br>";
echo "b = $b<br><br>";

// Igual (==)
echo "a == b : "; var_dump($a == $b); echo "<br>";

// Idêntico (===)
echo "a === b : "; var_dump($a === $b); echo "<br>";

// Diferente (!=)
echo "a != b : "; var_dump($a != $b); echo "<br>";

// Diferente (<>)
echo "a <> b : "; var_dump($a <> $b); echo "<br>";

// Não idêntico (!==)
echo "a !== b : "; var_dump($a !== $b); echo "<br>";

// Maior que (>)
echo "a > b : "; var_dump($a > $b); echo "<br>";

// Menor que (<)
echo "a < b : "; var_dump($a < $b); echo "<br>";

// Maior ou igual (>=)
echo "a >= b : "; var_dump($a >= $b); echo "<br>";

// Menor ou igual (<=)
echo "a <= b : "; var_dump($a <= $b); echo "<br>";

// Spaceship (<=>)
echo "a <=> b : "; var_dump($a <=> $b); echo "<br>";
?>
