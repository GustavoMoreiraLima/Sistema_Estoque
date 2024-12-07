<?php
require_once __DIR__ . "/../controler/controler_produtos.php";

global $conn;
$controler = new controler_produtos($conn);

if (isset($_POST["cadastrar_produto"])) {

    $product_name = $_POST["product_name"];
    $unit_type = $_POST["unit_type"];
    $reference = $_POST["reference"];
    $ncm = $_POST["ncm"];
    $brand = $_POST["brand"];
    $supplier = $_POST["supplier"];
    $barcode = $_POST["barcode"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    if ($controler->create($product_name, $unit_type, $reference, $ncm, $brand, $supplier, $barcode, $price, $stock)) {
        echo "Produto cadastrado com sucesso!";
        header("location: /SistemaEstoque/view/public/lista.php");
    } else {
        echo "O produto não foi cadastrado!";
    }
}
