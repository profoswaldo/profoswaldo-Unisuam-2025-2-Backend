<?php
// Criando um vetor associativo
$aluno = [
    "nome" => "Oswaldo",
    "idade" => 40,
    "curso" => "Análise e Desenvolvimento de Sistemas",
    "matricula" => "2025A123"
];

// Percorrendo com foreach
foreach ($aluno as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}
?>
