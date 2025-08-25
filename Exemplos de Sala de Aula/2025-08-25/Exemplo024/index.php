<?php
$texto = "<h1>Teste</h1>";

echo $texto;
// Saída: (perigoso, executa JS no navegador)
// Mostra um popup "Oi"

echo htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
// Saída: &lt;script&gt;alert(&#039;Oi&#039;);&lt;/script&gt;
// Mostra literalmente <script>alert('Oi');</script>
?>