<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha   = $_POST["senha"];

    // Credenciais fixas (apenas para exemplo)
    $adminUser = "admin";
    $adminPass = "123";

    $normalUser = "user";
    $normalPass = "123";

    // Verificação com IF
    if ($usuario === $adminUser && $senha === $adminPass) {
        // Vai para página de administrador
        header("Location: admin.php?user=$usuario");
        exit;
    } elseif ($usuario === $normalUser && $senha === $normalPass) {
        // Vai para página de usuário comum
        header("Location: user.php?user=$usuario");
        exit;
    } else {
        echo "<h2>Usuário ou senha inválidos!</h2>";
        echo "<a href='index.html'>Tentar novamente</a>";
    }
}
?>
