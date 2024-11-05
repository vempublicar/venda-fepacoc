<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['lead_id'])) {
    header("Location: login");
    exit;
}
$user = $_SESSION['user_dados'];

$dash = $_GET['ds'] ?? '';
switch ($dash) {
    case 'inicio':
        require 'app/views/private/board/inicio.php';
        break;
    case 'planos':
        require 'app/views/private/board/planos.php';
        break;

    default:
        // Carrega uma página de campanha aleatória
        require 'app/views/private/board/inicio.php';
        break;
}
