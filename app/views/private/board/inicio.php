<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .logout {
            text-align: right;
        }
        .logout a {
            color: #FF0000;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Bem-vindo ao Dashboard</h1>
</div>

<div class="container">
    <div class="logout">
        <a href="logout">Sair</a>
    </div>
    <div class="logout">
        <a href="dashboard&ds=inicio">Início</a>
    </div>
    <div class="logout">
        <a href="dashboard&ds=planos">Planos</a>
    </div>
    <div class="logout">
        <a href="dashboard&ds=videos">Vídeos</a>
    </div>
    <div class="logout">
        <a href="dashboard&ds=suporte">Suporte</a>
    </div>
    <div class="logout">
        <a href="dashboard&ds=agenda">Agenda</a>
    </div>
    
    <h2>Olá, <?php echo htmlspecialchars($user['name']); ?>!</h2>
    <p>Esse é o seu painel de controle.</p>
    
    <h3>Suas Informações</h3>
    <ul>
        <li><strong>Nome:</strong> <?php echo htmlspecialchars($user['name']); ?></li>
        <li><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
        <li><strong>Telefone:</strong> <?php echo htmlspecialchars($user['phone']); ?></li>
        <li><strong>Empresa:</strong> <?php echo htmlspecialchars($user['empresa']); ?></li>
        <li><strong>Faturamento:</strong> <?php echo htmlspecialchars($user['faturamento']); ?></li>
        <li><strong>Necessidade:</strong> <?php echo htmlspecialchars($user['necessidade']); ?></li>
        <li><strong>Tipo:</strong> <?php echo htmlspecialchars($user['tipo']); ?></li>
        <li><strong>Cidade:</strong> <?php echo htmlspecialchars($user['cidade']); ?></li>
        <li><strong>Estado:</strong> <?php echo htmlspecialchars($user['estado']); ?></li>
    </ul>
</div>

</body>
</html>