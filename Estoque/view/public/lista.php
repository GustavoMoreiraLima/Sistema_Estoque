<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos - Estoque Fácil</title>
    <link rel="stylesheet" href="../public/css/style3.css">
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
<div class="main-container">
    <h1 class="system-name">ESTOQUE FÁCIL</h1>
    <h2>Consulta de Produtos</h2>

    <!-- Barra de Pesquisa -->
    <div class="search-bar">
        <input type="text" id="search" placeholder="Pesquisar produto...">
        <button class="search-btn">Pesquisar</button>
    </div>

    <!-- Lista de Produtos -->
    <div class="product-list">
        <ul>
            <!-- Produto 1 -->
                    <?php
                    include_once __DIR__ . "/../view_lista_produtos.php"

                    ?>
        </ul>
    </div>

    <!-- Botão para Cadastrar Novo Produto -->
    <div class="actions">
        <a href="cadastro_produtos.php"><button class="add-btn">Cadastrar Novo Produto</button></a>
    </div>
</div>
<!-- Rodapé com copyright -->
<div class="footer">
    <p>&copy; 2024 ESTOQUE FACIL. Todos os direitos reservados.</p>
</div>
</body>
</html>