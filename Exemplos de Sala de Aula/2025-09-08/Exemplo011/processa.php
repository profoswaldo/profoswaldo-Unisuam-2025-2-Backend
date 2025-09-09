<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    // Funções
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

    // Verificando a operação escolhida
    switch ($operacao) {
        case "soma":
            $resultado = somar($num1, $num2);
            $simbolo = "+";
            break;
        case "subtracao":
            $resultado = subtrair($num1, $num2);
            $simbolo = "-";
            break;
        case "multiplicacao":
            $resultado = multiplicar($num1, $num2);
            $simbolo = "*";
            break;
        case "divisao":
            $resultado = dividir($num1, $num2);
            $simbolo = "/";
            break;
        default:
            $resultado = "Operação inválida!";
            $simbolo = "?";
    }

    echo "<h2>Resultado</h2>";
    echo "$num1 $simbolo $num2 = $resultado <br><br>";
    echo '<a href="index.html">Voltar</a>';
}
?>
