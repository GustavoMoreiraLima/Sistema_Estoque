<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque Fácil - Login</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="apple-touch-icon" href="../public/html/minilogo.png">
    <link rel="icon" sizes="192x192" href="../public/html/minilogo.png">

</head>

<body>
    <!-- Barra Superior -->
    <header class="top-bar">
        <div class="company-name">ESTOQUE FÁCIL</div>
        <div class="logo">
            <img src="/view/public/html/logo-empresa-official.png" alt="logo-empresa-png">
        </div>
    </header>

    <!-- Ícones no canto superior direito -->
    <div class="social-icons">
        <a href="https://wa.me/5511999999999" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://www.instagram.com/seuperfil" target="_blank">
            <i class="fab fa-instagram"></i>
        </a>
    </div>

    <div class="login-page">
        <div class="login-container">
            <h2>Login</h2>
            <form id="login-form">
                <label for="username">Login:</label>
                <input type="text" id="username" name="username" placeholder="Digite seu login" required>

                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

                <button type="submit" name="entrar" >Entrar</button>
                <div class="register-link">
                    <a href="../public/cadastro.php">Não tem uma conta? Cadastre-se</a>
                </div>
            </form>
            <div id="login-message"></div>
        </div>
        <script>
            // Redirecionar para a tela de consulta de produtos após o login
            document.getElementById('login-form').addEventListener('submit', function(event) {
                event.preventDefault(); // Evita o comportamento padrão do formulário
                window.location.href = "/SistemaEstoque/view/public/lista.php"; // Redireciona para a tela de consulta
            });
        </script>
    </div>

    <!-- Rodapé com copyright -->
    <div class="footer">
        <p>&copy; 2024 ESTOQUE FÁCIL. Todos os direitos reservados.</p>
    </div>
</body>
</html>