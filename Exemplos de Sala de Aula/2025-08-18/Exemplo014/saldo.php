<?php
$saldo = (float) $_POST["saldo"];

echo "<h2>Simulação de Operações Bancárias</h2>";
echo "Saldo inicial: R$ " . number_format($saldo, 2, ',', '.') . "<br><br>";

// Depósito (+)
$saldo += 500; // saldo = saldo + 500
echo "Após depósito de R$ 500 → Saldo: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

// Saque (-)
$saldo -= 200; // saldo = saldo - 200
echo "Após saque de R$ 200 → Saldo: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

// Pagamento de conta (multiplicação, ex: débito automático de 50%)
$saldo *= 0.5; // saldo = saldo * 0.5
echo "Após pagamento de conta de 50% do saldo → Saldo: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

// Juros recebidos (divisão, exemplo: dividir saldo em 2 contas)
$saldo /= 2; // saldo = saldo / 2
echo "Após dividir saldo em 2 contas → Saldo: R$ " . number_format($saldo, 2, ',', '.') . "<br>";

// Taxa fixa (módulo para exemplo didático)
$saldo %= 300; // saldo = saldo % 300
echo "Aplicando taxa de modulo 300 (exemplo) → Saldo: R$ " . number_format($saldo, 2, ',', '.') . "<br><br>";

// Mensagem concatenada (.=)
$mensagem = "Resumo: ";
$mensagem .= "saldo final de R$ " . number_format($saldo, 2, ',', '.');
echo $mensagem;
?>
