<?php
require_once __DIR__ . "/../controler/controler_usuario.php";

global $conn;
$controler = new controler_usuario($conn);

if (isset($_POST["cadastrar_usuario"])) {

    $nome = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $controler->create($nome, $email, $password);
    header("location: /SistemaEstoque/view/public/login.php");

//    if ($password == $confirm_password) {
//        if ($controler->create($nome, $email, $password)) {
//            echo "Registro criado com sucesso!";
//            //header("location: ");
//        } else {
//            echo "Registro não foi criado";
//        }
//    } else {
//        echo "Senhas diferentes";
//    }
}