<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Escolha seu Plano</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .plan-container {
            display: flex;
            gap: 20px;
        }
        .plan {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            width: 250px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .plan h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .plan p {
            font-size: 14px;
            color: #555;
            margin: 10px 0;
        }
        .price {
            font-size: 28px;
            color: #333;
            margin: 15px 0;
        }
        .plan button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .plan button:hover {
            background-color: #45a049;
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
    <div class="plan-container">
        <!-- Plano Básico -->
        <div class="plan">
            <h2>Plano Básico</h2>
            <p>Ideal para pequenas empresas que estão começando.</p>
            <p class="price">R$ 49,90/mês</p>
            <button onclick="selecionarPlano('Básico')">Escolher Plano</button>
        </div>

        <!-- Plano Profissional -->
        <div class="plan">
            <h2>Plano Profissional</h2>
            <p>Para empresas que desejam expandir seu alcance.</p>
            <p class="price">R$ 99,90/mês</p>
            <button onclick="selecionarPlano('Profissional')">Escolher Plano</button>
        </div>

        <!-- Plano Empresarial -->
        <div class="plan">
            <h2>Plano Empresarial</h2>
            <p>Soluções completas para grandes empresas.</p>
            <p class="price">R$ 199,90/mês</p>
            <button onclick="selecionarPlano('Empresarial')">Escolher Plano</button>
        </div>
    </div>

    <script>
        function selecionarPlano(plano) {
            alert("Você selecionou o plano " + plano);
            // Redireciona ou executa outra ação com base no plano selecionado
            window.location.href = "cadastro.php?plano=" + encodeURIComponent(plano);
        }
    </script>
</body>
</html>
