<?php
declare(strict_types=1);

function iniciarSessao(): void {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}
