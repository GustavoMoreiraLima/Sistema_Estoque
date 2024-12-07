<?php
require_once __DIR__ . "/../model/conexao.php";
require_once __DIR__ . "/../model/produto.php";

class controler_produtos{
    private $model;
    public function __construct($connection){
        $this->model = new produto($connection);
    }
    public function create($product_name, $unit_type, $reference, $ncm, $brand, $supplier, $barcode, $price, $stock){
        return $this->model->create($product_name, $unit_type, $reference, $ncm, $brand, $supplier, $barcode, $price, $stock);
    }
    public function read(){
        return $this->model->read();
    }
    public function readid($id){
        return $this->model->readid($id);
    }
    public function update($id, $nome, $tipo_unidade, $referencia, $ncm, $marca, $fornecedor, $codigo_barras, $preco, $estoque){
        return $this->model->update($id, $nome, $tipo_unidade, $referencia, $ncm, $marca, $fornecedor, $codigo_barras, $preco, $estoque);
    }
    public function delete($id){
        return $this->model->delete($id);
    }
}