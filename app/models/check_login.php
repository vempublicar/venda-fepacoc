<?php
session_start();
require_once '../../database/db.php'; // Inclua a conexão com o banco de dados
include_once "../../config/url/path.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura e sanitiza os dados do formulário
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $password = trim($_POST['password']);
    
    // Verifica se o e-mail e senha foram fornecidos e são válidos
    if ($email && $password) {
        if (verificarLogin($email, $password)) {
            header("Location:" . BASE_URL . "dashboard");  // Redireciona para o dashboard
            exit;
        } else {
            header("Location:" . BASE_URL . "login&status=error");
            exit;
        }
    } else {
        header("Location:" . BASE_URL . "login&status=error");
        exit;
    }
}
function verificarLogin($email, $password) {
    global $pdoLeads;
    
    try {
        // Consulta o e-mail fornecido
        $stmt = $pdoLeads->prepare("SELECT * FROM leads WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        $lead = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verifica se o e-mail existe e a senha corresponde ao hash armazenado
        if ($lead && $password == $lead['senha']) {
            // Salva o ID do usuário na sessão
                $_SESSION['lead_id'] = $lead['id'];
                $_SESSION['user_dados'] = $lead;
            return true;
        }
        
        return false;
    } catch (PDOException $e) {
        die("Erro ao verificar o login: " . $e->getMessage());
    }
}