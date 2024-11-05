<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="app/models/check_login.php" method="POST">
        <label>E-mail:</label>
        <input type="email" name="email" required>
        
        <label>Senha:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Entrar</button>
    </form>
    
    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] === 'error') {
            echo "<p style='color: red;'>Credenciais inválidas. Tente novamente.</p>";
        }
    }
    ?>
</body>
</html>
