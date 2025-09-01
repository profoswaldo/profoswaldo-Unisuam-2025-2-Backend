<?php
// NÃO TEM session_start()

// Apenas pega o dado enviado via POST
$nome = $_POST["nome"] ?? "";

// Mostra o nome
echo "<h2>Olá, $nome!</h2>";

// Tenta mostrar um valor anterior (não vai funcionar)
echo "<p>Nome anterior: ";
echo isset($anterior) ? $anterior : "Nenhum (PHP não lembra)";
echo "</p>";

// Cria um "valor anterior" (mas só dura nesta execução)
$anterior = $nome;
?>

<a href="index.html">Voltar</a>
