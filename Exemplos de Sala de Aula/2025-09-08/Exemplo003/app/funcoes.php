<?php
declare(strict_types=1);

function calcularMedia(float $n1, float $n2): float {
    return ($n1 + $n2) / 2;
}

function classificar(float $media): string {
    if ($media >= 7.0) return "Aprovado";
    if ($media >= 5.0) return "Prova Final";
    return "Reprovado";
}

function sanitiza(string $s): string {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
