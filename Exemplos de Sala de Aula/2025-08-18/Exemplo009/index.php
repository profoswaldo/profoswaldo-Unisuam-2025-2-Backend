
<?php
echo "<h2>Exemplo de Pré e Pós Incremento/Decremento (isolados)</h2>";

// Variável inicial
$a = 5;
echo "Valor inicial de a = " . $a . "<br><br>";

// Pré-incremento (++$a)
++$a; // incrementa antes, mas como está isolado só aumenta o valor
echo "Após pré-incremento (++a): " . $a . "<br>";

// Pós-incremento ($a++)
$a++; // incrementa depois, mas como está isolado o efeito é igual
echo "Após pós-incremento (a++): " . $a . "<br><br>";

// Resetando variável
$a = 5;
echo "Valor resetado de a = " . $a . "<br><br>";

// Pré-decremento (--$a)
--$a; // decrementa antes, mas isolado só reduz o valor
echo "Após pré-decremento (--a): " . $a . "<br>";

// Pós-decremento ($a--)
$a--; // decrementa depois, mas isolado o efeito é igual
echo "Após pós-decremento (a--): " . $a . "<br>";
?>
