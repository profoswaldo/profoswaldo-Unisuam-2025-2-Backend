<?php
$numero = isset($_GET["num"]) ? (int) $_GET["num"] : 0;

echo "<h2>Você digitou o número ÍMPAR: $numero</h2>";
echo "<p>Contando de $numero até 1 usando DO...WHILE:</p>";

$contador = $numero;
do {
    echo $contador . " ";
    $contador--;
} while ($contador > 0);
?>
