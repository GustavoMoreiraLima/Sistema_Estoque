<?php
include __DIR__ . "/../view_cadastro_produtos.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="css/style5.css">
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
<div class="container">
    <h2>Cadastro de Produto</h2>
    <form method="POST">
        <!-- Nome do Produto -->
        <label for="product-name">Nome do Produto:</label>
        <input type="text" id="product-name" name="product_name" placeholder="Ex: Parafuso" required>

        <!-- Tipo de Unidade -->
        <label for="unit-type">Tipo de Unidade:</label>
        <input type="text" id="unit-type" name="unit_type" placeholder="Ex: Unidade" required>

        <!-- Referência -->
        <label for="reference">Referência:</label>
        <input type="text" id="reference" name="reference" placeholder="Ex: 12345" required>

        <!-- NCM -->
        <label for="ncm">NCM:</label>
        <input type="text" id="ncm" name="ncm" pattern="\d{8}" placeholder="Ex: 12345678" required>
        <small>Digite um código NCM válido (8 dígitos).</small>

        <!-- Marca -->
        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" placeholder="Ex: ABC" required>

        <!-- Fornecedor -->
        <label for="supplier">Fornecedor:</label>
        <input type="text" id="supplier" name="supplier" placeholder="Ex: XYZ Ltda" required>

        <!-- Código de Barras -->
        <label for="barcode">Código de Barras:</label>
        <input type="text" id="barcode" name="barcode" pattern="\d{13}" placeholder="Ex: 1234567890123" required>
        <small>Digite um código de barras válido (13 dígitos).</small>

        <!-- Quantidade em Estoque -->
        <label for="stock">Quantidade em Estoque:</label>
        <input type="number" id="stock" name="stock" min="0" placeholder="Ex: 100" required>

        <!-- Preço de Venda -->
        <label for="price">Preço de Venda (R$):</label>
        <input type="number" id="price" name="price" min="0" step="0.01" placeholder="Ex: 49.99" required>

        <!-- Botão de Cadastro -->
        <button type="submit" name="cadastrar_produto">Cadastrar Produto</button>
    </form>
</div>
<!-- Rodapé com copyright -->
<div class="footer">
    <p>&copy; 2024 ESTOQUE FACIL. Todos os direitos reservados.</p>
</div>
</body>
</html>