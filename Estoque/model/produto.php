<?php
require_once "conexao.php";
class Produto{
    private $conn;
    public function __construct($connection){
        $this->conn = $connection;
    }
    public function create($nome, $tipo_unidade, $referencia, $ncm, $marca, $fornecedor, $codigo_barras, $preco, $estoque){
        $sql = "INSERT INTO produtos (nome, tipo_unidade, referencia, ncm, marca, fornecedor, codigo_barras, preco,estoque) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssiissidi", $nome, $tipo_unidade, $referencia, $ncm, $marca, $fornecedor, $codigo_barras, $preco, $estoque);
        return $stmt->execute();
    }
    public function read(){
        $sql = "SELECT * FROM produtos order by id";
        $resultado_produtos = $this->conn->query($sql);
        return $resultado_produtos;
    }
    public function readid($id){
        $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
        $result = $this->conn->query($sqlSelect);
        return $result;
    }
    public function update($id, $nome, $tipo_unidade, $referencia, $ncm, $marca, $fornecedor, $codigo_barras, $preco, $estoque){
        $sqlUpadte = "UPDATE produtos SET nome = '$nome', tipo_unidade = '$tipo_unidade', referencia = '$referencia', ncm = '$ncm', marca = '$marca', fornecedor = '$fornecedor', codigo_barras = '$codigo_barras', preco = '$preco', estoque = '$estoque'
                        WHERE id=$id";
        return $this->conn->query($sqlUpadte);
    }
    public function delete($id){
        $sqlDelete = "DELETE FROM produtos WHERE id=$id";
        return $this->conn->query($sqlDelete);
    }
}