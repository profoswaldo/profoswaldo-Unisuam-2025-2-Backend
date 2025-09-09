<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Funções para cada operação
    function somar($a, $b) {
        return $a + $b;
    }

    function subtrair($a, $b) {
        return $a - $b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        if ($b == 0) {
            return "Erro: divisão por zero!";
        }
        return $a / $b;
    }

    // Chamando as funções
    echo "<h2>Resultados da Calculadora</h2>";
    echo "Soma: " . somar($num1, $num2) . "<br>";
    echo "Subtração: " . subtrair($num1, $num2) . "<br>";
    echo "Multiplicação: " . multiplicar($num1, $num2) . "<br>";
    echo "Divisão: " . dividir($num1, $num2) . "<br>";
}
?>

<!-- Formulário HTML -->
<h2>Calculadora Simples</h2>
<form method="post" action="">
    Número 1: <input type="number" name="num1" required><br><br>
    Número 2: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Calcular">
</form>
