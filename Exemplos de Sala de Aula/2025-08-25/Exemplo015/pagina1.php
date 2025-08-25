<?php
$numero = isset($_GET["num"]) ? (int) $_GET["num"] : 0;

echo "<h2>Você digitou o número PAR: $numero</h2>";
echo "<p>Contando de 0 até $numero usando WHILE:</p>";

$contador = 0;
while ($contador <= $numero) {
    echo $contador . " ";
    $contador++;
}
?>
