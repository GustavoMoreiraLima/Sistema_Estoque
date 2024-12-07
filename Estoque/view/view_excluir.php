<?php
require_once __DIR__ . "/../controler/controler_produtos.php";

global $conn;
$controler = new controler_produtos($conn);

$controler->delete($_GET["id"]);

header('Location: /SistemaEstoque/view/public/lista.php');