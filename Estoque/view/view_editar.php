<?php
require_once __DIR__ . "/../controler/controler_produtos.php";

global $conn;
$controler = new controler_produtos($conn);

if (isset($_POST["confirmar"])) {

    $id = $_GET["id"];
    $product_name = $_POST["nome"];
    $unit_type = $_POST["tipo"];
    $reference = $_POST["referencia"];
    $ncm = $_POST["ncm"];
    $brand = $_POST["brand"];
    $supplier = $_POST["supplier"];
    $barcode = $_POST["barcode"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $controler->update($id, $product_name, $unit_type, $reference, $ncm, $brand, $supplier, $barcode, $price, $stock);
    header('Location: /SistemaEstoque/view/public/lista.php');
}