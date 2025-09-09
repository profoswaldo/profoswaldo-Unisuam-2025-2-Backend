<?php
// Função que emite a nota fiscal
function emitirNotaFiscal() {
    echo "Nota Fiscal emitida com sucesso!<br>";
}

// Função que prepara o pedido
function prepararPedido() {
    echo "Pedido preparado com sucesso!<br>";
    
    // Chamando outra função dentro dela
    emitirNotaFiscal();
}

// Simulação de uso
echo "<h2>Sistema da Lanchonete</h2>";
prepararPedido();
?>

