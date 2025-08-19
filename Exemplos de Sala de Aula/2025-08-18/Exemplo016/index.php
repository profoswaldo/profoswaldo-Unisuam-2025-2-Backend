<?php
$a = true;
$b = false;

echo "<h2>Operadores Lógicos em PHP</h2>";
echo "a = true<br>";
echo "b = false<br><br>";

// AND lógico
echo "a && b : "; var_dump($a && $b); echo "<br>";
echo "a and b : "; var_dump($a and $b); echo "<br><br>";

// OR lógico
echo "a || b : "; var_dump($a || $b); echo "<br>";
echo "a or b : "; var_dump($a or $b); echo "<br><br>";

// XOR lógico
echo "a xor b : "; var_dump($a xor $b); echo "<br>";
echo "true xor true : "; var_dump(true xor true); echo "<br><br>";

// NOT lógico
echo "!a : "; var_dump(!$a); echo "<br>";
echo "!b : "; var_dump(!$b); echo "<br>";
?>
