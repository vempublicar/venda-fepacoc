<?php
// Definindo os caminhos iniciais
$dbFileCadastro = '../../database/database.sqlite';
$dbFileLeads = '../../database/leads.sqlite';

// Função para verificar e ajustar o caminho
function verificarCaminho($filePath) {
    // Primeiro tenta com '../../'
    if (file_exists($filePath)) {
        return $filePath;
    }
    // Tenta sem '../../'
    $filePathSemPasta = str_replace('../../', '', $filePath);
    if (file_exists($filePathSemPasta)) {
        return $filePathSemPasta;
    }

    // Retorna erro se nenhum dos caminhos funcionar
    die("Erro: O arquivo $filePath não foi encontrado em nenhum dos caminhos.");
}

// Ajusta os caminhos caso necessário
$dbFileCadastro = verificarCaminho($dbFileCadastro);
$dbFileLeads = verificarCaminho($dbFileLeads);

try {
    // Conexão para cadastro Asaas e outras tabelas
    $pdoCadastro = new PDO("sqlite:" . $dbFileCadastro);
    $pdoCadastro->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Conexão para os leads
    $pdoLeads = new PDO("sqlite:" . $dbFileLeads);
    $pdoLeads->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage());
}
