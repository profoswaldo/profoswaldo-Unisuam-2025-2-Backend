<?php
// Recebe os valores enviados pelo formulário
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];

// Calcula a soma
$soma = $valor1 + $valor2;

// Exibe o resultado
echo "O primeiro valor é: " . $valor1 . "<br>";
echo "O segundo valor é: " . $valor2 . "<br>";
echo "A soma dos valores é: " . $soma;
?>
