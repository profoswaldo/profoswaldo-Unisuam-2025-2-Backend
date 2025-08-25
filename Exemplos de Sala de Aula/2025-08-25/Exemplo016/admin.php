<?php
$user = isset($_GET["user"]) ? $_GET["user"] : "Desconhecido";

echo "<h2>Bem-vindo, Administrador: $user</h2>";
echo "<p>Lista de tarefas do administrador (usando WHILE):</p>";

$contador = 1;
while ($contador <= 5) {
    echo "Tarefa $contador <br>";
    $contador++;
}
?>
