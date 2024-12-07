<?php
require_once 'conexao.php';
class Usuario{
    private $conn;
    public function __construct($connection){
        $this->conn = $connection;
    }
    public function create($nome, $email, $senha){
        $sql = "INSERT INTO usuarios (username, email, senha) values (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);
        return $stmt->execute();
    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
}