<?php
include __DIR__ . "/../view_usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque Fácil - Cadastro</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="apple-touch-icon" href="../public/html/minilogo.png">
    <link rel="icon" sizes="192x192" href="../public/html/minilogo.png">
</head>
<!-- Barra Superior -->
<header class="top-bar">
    <div class="company-name">ESTOQUE FÁCIL</div>
    <div class="logo">
        <img src="../public/html/logo-empresa-official.png" alt="logo-empresa-png">
    </div>
</header>
<body>
<div class="register-container">
    <h1 class="system-name">ESTOQUE FÁCIL</h1>
    <h2>Cadastro</h2>
    <form id="register-form" method="post">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

        <label for="confirm-password">Confirme a Senha:</label>
        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirme sua senha" required>

        <button type="submit" name="cadastrar_usuario">Cadastrar</button>
        <div class="login-link">
            <a href="../public/html/index.html">Já tem uma conta? Faça login</a>
        </div>
    </form>
    <div id="register-message"></div>
</div>
<!-- Rodapé com copyright -->
<div class="footer">
    <p>&copy; 2024 ESTOQUE FACIL. Todos os direitos reservados.</p>
</div>
</body>
</html>