<?php
$nota = 7.5;

echo "Nota do aluno: $nota<br>";

// Usando if encadeado para classificar a nota
if ($nota >= 9) {
    echo "Conceito: Excelente";
} elseif ($nota >= 7) {
    echo "Conceito: Bom";
} elseif ($nota >= 5) {
    echo "Conceito: Regular";
} else {
    echo "Conceito: Reprovado";
}
?>
