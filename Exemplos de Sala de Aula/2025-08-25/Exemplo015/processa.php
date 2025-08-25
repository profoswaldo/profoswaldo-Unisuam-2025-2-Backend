<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = (int) $_POST["numero"];

    // Decisão usando IF
    if ($numero % 2 == 0) {
        // Se for PAR, vai para pagina1
        header("Location: pagina1.php?num=$numero");
        exit;
    } else {
        // Se for ÍMPAR, vai para pagina2
        header("Location: pagina2.php?num=$numero");
        exit;
    }
}
?>
