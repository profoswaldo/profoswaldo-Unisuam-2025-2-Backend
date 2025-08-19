<?php
// Conversões explícitas (boa prática)
$convidados       = (int)   $_POST['convidados'];
$latas_por_pessoa = (float) $_POST['latas_por_pessoa'];
$capacidade_caixa = (int)   $_POST['capacidade_caixa'];
$preco_unitario   = (float) $_POST['preco_unitario'];
$desconto_fixo    = (float) $_POST['desconto_fixo'];
$taxa_servico     = (float) $_POST['taxa_servico'];
$taxa_percent     = (float) $_POST['taxa_percent'];
$periodos         = (int)   $_POST['periodos'];

// 1) * (multiplicação): latas totais necessárias
$total_latas = $convidados * $latas_por_pessoa;

// 2) / (divisão) e % (módulo/resto): caixas inteiras e latas que sobram
$caixas_inteiras = floor($total_latas / $capacidade_caixa); // divisão inteira
$resto_latas     = $total_latas % $capacidade_caixa;        // módulo

// 3) * (multiplicação): custo bruto das latas
$total_bruto = $total_latas * $preco_unitario;

// 4) + (adição): somar acréscimo de serviço
$subtotal_com_servico = $total_bruto + $taxa_servico;

// 5) - (subtração): aplicar desconto fixo
$total_com_desconto = $subtotal_com_servico - $desconto_fixo;

// 6) / (divisão): rateio por pessoa
$custo_por_pessoa = ($convidados > 0) ? $total_com_desconto / $convidados : 0;

// 7) ** (exponenciação): simulação de reajuste futuro (juros compostos)
$taxa = $taxa_percent / 100.0;
$total_futuro = $total_com_desconto * (1 + $taxa) ** $periodos;

// Função para formatar valores monetários
function moeda($v) { return 'R$ ' . number_format($v, 2, ',', '.'); }

echo "<h2>Resultado do Orçamento de Churrasco</h2>";

echo "<strong>Entrada:</strong><br>";
echo "Convidados: " . $convidados . "<br>";
echo "Latas por pessoa: " . $latas_por_pessoa . "<br>";
echo "Capacidade por caixa: " . $capacidade_caixa . " latas<br>";
echo "Preço unitário: " . moeda($preco_unitario) . "<br>";
echo "Desconto fixo: " . moeda($desconto_fixo) . "<br>";
echo "Acréscimo de serviço: " . moeda($taxa_servico) . "<br>";
echo "Reajuste: " . number_format($taxa_percent, 1, ',', '.') . "% por período, por " . $periodos . " período(s)<br><br>";

echo "<strong>Cálculos:</strong><br>";
echo "Total de latas necessárias = convidados * latas_por_pessoa = "
   . $convidados . " * " . $latas_por_pessoa . " = <strong>" . $total_latas . "</strong><br>";

echo "Caixas inteiras = floor(total_latas / capacidade_caixa) = floor("
   . $total_latas . " / " . $capacidade_caixa . ") = <strong>" . $caixas_inteiras . "</strong><br>";

echo "Latas que sobram (módulo) = total_latas % capacidade_caixa = "
   . $total_latas . " % " . $capacidade_caixa . " = <strong>" . $resto_latas . "</strong><br><br>";

echo "Custo bruto = total_latas * preço_unitário = "
   . $total_latas . " * " . moeda($preco_unitario) . " = <strong>" . moeda($total_bruto) . "</strong><br>";

echo "Subtotal com serviço = custo_bruto + taxa_servico = "
   . moeda($total_bruto) . " + " . moeda($taxa_servico) . " = <strong>" . moeda($subtotal_com_servico) . "</strong><br>";

echo "Total com desconto = subtotal_com_servico - desconto_fixo = "
   . moeda($subtotal_com_servico) . " - " . moeda($desconto_fixo) . " = <strong>" . moeda($total_com_desconto) . "</strong><br><br>";

echo "Custo por pessoa = total_com_desconto / convidados = "
   . moeda($total_com_desconto) . " / " . $convidados . " = <strong>" . moeda($custo_por_pessoa) . "</strong><br><br>";

echo "Simulação de compra futura (juros compostos):<br>";
echo "total_futuro = total_com_desconto * (1 + taxa) ** períodos = "
   . moeda($total_com_desconto) . " * (1 + " . number_format($taxa, 3, ',', '.') . ") ** " . $periodos
   . " = <strong>" . moeda($total_futuro) . "</strong><br><br>";

echo "<em>Observação:</em> usamos todos os operadores aritméticos: "
   . "+ (adição), - (subtração), * (multiplicação), / (divisão), % (módulo/resto) e ** (exponenciação).";
