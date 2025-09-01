<?php
session_start();

/*
  Regras:
  - Se veio POST com credenciais válidas, cria sessão.
  - Se já existe sessão, permite acesso.
  - Caso contrário, volta para o login.
*/

// 1) Se recebeu POST, tenta autenticar (versão didática)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $valido = ($email === 'a@a.com' && $senha === '123');

    if ($valido) {
        $_SESSION['usuario'] = $email;
        $_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;
        // segue para a área
    } else {
        // falhou: garante que não permanece nada
        session_destroy();
        header('Location: index.html');
        exit;
    }
}

// 2) Se não há usuário em sessão, bloqueia
if (!isset($_SESSION['usuario'])) {
    header('Location: index.html');
    exit;
}

// (opcional) incrementa visitas a cada carregamento GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['visitas'] = ($_SESSION['visitas'] ?? 0) + 1;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Área (mínima com sessão)</title>
</head>
<body>
  <h2>Área Restrita</h2>

  <p><strong>Usuário logado:</strong>
    <?php echo htmlspecialchars($_SESSION['usuario'], ENT_QUOTES, 'UTF-8'); ?>
  </p>

  <p>Esta sessão já foi vista
    <strong><?php echo (int)$_SESSION['visitas']; ?></strong> vez(es).
  </p>

  <h3>Dicas (renderizadas com <code>while</code>)</h3>
  <?php
    // Pequena lista didática para imprimir com while
    $dicas = [
        'Sessões guardam dados no servidor.',
        'Use session_start() em toda página que lê a sessão.',
        'Faça logout para encerrar a sessão.'
    ];

    $i = 0;
    echo '<ul>';
    // while simples para iniciantes
    while ($i < count($dicas)) {
        echo '<li>' . htmlspecialchars($dicas[$i], ENT_QUOTES, 'UTF-8') . '</li>';
        $i++;
    }
    echo '</ul>';
  ?>

  <p>
    <a href="area.php">Recarregar (incrementa visitas)</a> |
    <a href="logout.php">Logout</a>
  </p>
</body>
</html>
