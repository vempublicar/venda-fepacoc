<?php
// app/save_lead.php
include_once "../../database/db.php";
include_once "../../config/url/path.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitização manual dos dados
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $cep = htmlspecialchars(trim($_POST['cep']));
    $cidade = htmlspecialchars(trim($_POST['cidade']));
    $estado = htmlspecialchars(trim($_POST['estado']));
    $empresa = htmlspecialchars(trim($_POST['empresa']));
    $faturamento = isset($_POST['faturamento']) ? floatval($_POST['faturamento']) : null;
    $necessidade = htmlspecialchars(trim($_POST['necessidade']));
    $tipo = htmlspecialchars(trim($_POST['tipo']));
    $senha = htmlspecialchars(trim($_POST['senha']));

    if ($name && $email && $cep && $cidade && $estado) {
        try {
            // Ajuste na query para incluir os novos campos
            $stmt = $pdoLeads->prepare("INSERT INTO leads (name, email, phone, cep, cidade, estado, empresa, faturamento, necessidade, senha, tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $cep, $cidade, $estado, $empresa, $faturamento, $necessidade, $senha, $tipo]);

            header("Location: " . BASE_URL . "cadastro&status=success");
            exit;
        } catch (PDOException $e) {
            header("Location: " . BASE_URL . "cadastro&status=error");
            exit;
        }
    } else {
        header("Location: " . BASE_URL . "cadastro&status=validation_error");
        exit;
    }
}
