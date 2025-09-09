<?php
// Função centralizada para iniciar a sessão
function iniciarSessao(): void {
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}
