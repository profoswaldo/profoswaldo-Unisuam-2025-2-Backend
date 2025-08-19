<?php
// Recebe os ingressos
$ingressos = (int) $_POST["ingressos"];

echo "<h2>Simulação de Vendas de Ingressos</h2>";
echo "Ingressos disponíveis inicialmente: " . $ingressos . "<br><br>";

// Pré-decremento: uma pessoa compra um ingresso
--$ingressos; 
echo "Após a primeira venda (pré-decremento --ingressos): " . $ingressos . "<br>";

// Pós-decremento: outra pessoa compra, mas mostramos o valor antes
echo "Valor mostrado com pós-decremento (ingressos--): " . $ingressos-- . "<br>";
echo "Valor real após a operação: " . $ingressos . "<br><br>";

// Pré-incremento: houve uma devolução de ingresso
++$ingressos;
echo "Após devolução (pré-incremento ++ingressos): " . $ingressos . "<br>";

// Pós-incremento: outro ingresso foi liberado, mas mostramos o valor antes
echo "Valor mostrado com pós-incremento (ingressos++): " . $ingressos++ . "<br>";
echo "Valor real após a operação: " . $ingressos . "<br>";
?>
