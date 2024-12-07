<?php
require_once __DIR__ . "/../controler/controler_produtos.php";

global $conn;
$controler = new controler_produtos($conn);

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $result = $controler->readid($id);

    if($result->num_rows > 0){
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $tipo = $user_data['tipo_unidade'];
            $referencia = $user_data['referencia'];
            $ncm = $user_data['ncm'];
            $marca = $user_data['marca'];
            $fornecedor = $user_data['fornecedor'];
            $codigo_barras = $user_data['codigo_barras'];
            $preco = $user_data['preco'];
            $estoque = $user_data['estoque'];
        }
    }
    else{
        header('Location: /public/lista.php');
    }
}