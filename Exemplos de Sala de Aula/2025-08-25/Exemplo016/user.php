<?php
$user = isset($_GET["user"]) ? $_GET["user"] : "Desconhecido";

echo "<h2>Bem-vindo, Usuário Comum: $user</h2>";
echo "<p>Seus acessos recentes (usando DO...WHILE):</p>";

$contador = 3;
do {
    echo "Acesso número: $contador <br>";
    $contador--;
} while ($contador > 0);
?>
