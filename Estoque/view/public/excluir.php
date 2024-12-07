<?php

include_once __DIR__ . "/../view_detalhes.php";
global $nome;
global $tipo;
global $referencia;
global $ncm;
global $marca;
global $fornecedor;
global $codigo_barras;
global $preco;
global $estoque;

include __DIR__ . "/../view_excluir.php";

header('Location: /SistemaEstoque/view/public/lista.php');
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
    <h2>Detalhes do produto</h2>
    <form id="product-form" method="POST">
        <!-- Nome do Produto -->
        <label for="product-name">Nome do Produto:</label>
        <input type="text" id="product-name" name="product_name" value="<?php echo $nome?>" required>

        <!-- Tipo de Unidade -->
        <label for="unit-type">Tipo de Unidade:</label>
        <input type="text" id="unit-type" name="unit_type" value="<?php echo $tipo?>" required>

        <!-- Referência -->
        <label for="reference">Referência:</label>
        <input type="text" id="reference" name="reference" value="<?php echo $referencia?>" required>

        <!-- NCM -->
        <label for="ncm">NCM:</label>
        <input type="text" id="ncm" name="ncm" pattern="\d{8}" value="<?php echo $ncm?>" required>
        <small>Digite um código NCM válido (8 dígitos).</small>

        <!-- Marca -->
        <label for="brand">Marca:</label>
        <input type="text" id="brand" name="brand" value="<?php echo $marca?>" required>

        <!-- Fornecedor -->
        <label for="supplier">Fornecedor:</label>
        <input type="text" id="supplier" name="supplier" value="<?php echo $fornecedor?>" required>

        <!-- Código de Barras -->
        <label for="barcode">Código de Barras:</label>
        <input type="text" id="barcode" name="barcode" pattern="\d{13}" value="<?php echo $codigo_barras?>" required>
        <small>Digite um código de barras válido (13 dígitos).</small>

        <!-- Quantidade em Estoque -->
        <label for="stock">Quantidade em Estoque:</label>
        <input type="number" id="stock" name="stock" min="0" value="<?php echo $estoque?>" required>

        <!-- Preço de Venda -->
        <label for="price">Preço de Venda (R$):</label>
        <input type="number" id="price" name="price" min="0" step="0.01" value="<?php echo $preco?>" required>

        <!-- Botão de voltar -->
        <a href="lista.php" class="btn">Voltar</a>
    </form>
</div>
<!-- Rodapé com copyright -->
<div class="footer">
    <p>&copy; 2024 ESTOQUE FACIL. Todos os direitos reservados.</p>
</div>
</body>
</html>