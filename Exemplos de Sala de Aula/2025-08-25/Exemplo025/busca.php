<?php
// -------- Base de dados em memória (vetor de vetores associativos) --------
$alunos = [
    [ "matricula" => "2025A001", "nome" => "Giovanna Peres",      "media" => 8.5 ],
    [ "matricula" => "2025A002", "nome" => "Giulianna Peres",     "media" => 6.7 ],
    [ "matricula" => "2025A003", "nome" => "Gisele Felippe", "media" => 7.9 ],
    [ "matricula" => "2025A004", "nome" => "Oswaldo Peres",    "media" => 9.2 ],
    [ "matricula" => "2025A005", "nome" => "Jujuba Tenebrosa",     "media" => 5.8 ],
    [ "matricula" => "2025A006", "nome" => "Pipoca Terrível
    
    
    
    ",     "media" => 5.6 ],
];

// -------- Entrada do usuário --------
$nomeBuscado = isset($_GET["nome"]) ? trim($_GET["nome"]) : "";

// Sanitiza para evitar XSS na saída
function esc($s) { 
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); 
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Resultado da Busca</title>
</head>
<body>
  <h2>Resultado da Busca</h2>

  <?php if ($nomeBuscado === ""): ?>
      <p>Você não informou um nome. <a href="index.html">Voltar</a></p>
  <?php else: ?>
      <?php
      // Busca exata (ignorando maiúsculas/minúsculas)
      $resultado = null;
      foreach ($alunos as $aluno) {
          if (mb_strtolower($aluno["nome"], 'UTF-8') === mb_strtolower($nomeBuscado, 'UTF-8')) {
              $resultado = $aluno;
              break;
          }
      }

      if ($resultado !== null):
      ?>
          <p><strong>Aluno encontrado:</strong></p>
          <ul>
            <li><strong>Matrícula:</strong> <?= esc($resultado["matricula"]) ?></li>
            <li><strong>Nome:</strong> <?= esc($resultado["nome"]) ?></li>
            <li><strong>Média:</strong> <?= esc(number_format($resultado["media"], 1, ',', '.')) ?></li>
          </ul>
      <?php else: ?>
          <p><strong>Não encontrado.</strong> Nenhum aluno com o nome <em><?= esc($nomeBuscado) ?></em>.</p>

          <?php
          // Sugestões por "contém" (substring) ignorando caixa
          $sugestoes = [];
          foreach ($alunos as $aluno) {
              if (mb_strpos(mb_strtolower($aluno["nome"], 'UTF-8'), mb_strtolower($nomeBuscado, 'UTF-8')) !== false) {
                  $sugestoes[] = $aluno;
              }
          }

          if (!empty($sugestoes)):
          ?>
              <p>Você quis dizer:</p>
              <ul>
                <?php foreach ($sugestoes as $s): ?>
                    <li>
                      <?= esc($s["nome"]) ?> — matrícula <?= esc($s["matricula"]) ?>, média <?= esc(number_format($s["media"], 1, ',', '.')) ?>
                    </li>
                <?php endforeach; ?>
              </ul>
          <?php endif; ?>

      <?php endif; ?>
      <p><a href="index.html">Voltar</a></p>
  <?php endif; ?>
</body>
</html>
