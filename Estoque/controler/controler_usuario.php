<?php
require_once __DIR__ . "/../model/conexao.php";
require_once __DIR__ . "/../model/usuario.php";

class controler_usuario{
    private $model;
    public function __construct($connection){
        $this->model = new usuario($connection);
    }
    public function create($nome, $email, $senha){
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        return $this->model->create($nome, $email, $senha);
    }
}
?>