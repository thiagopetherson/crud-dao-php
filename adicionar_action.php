<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

//Instanciando a classe do DAO
$usuarioDao = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($name && $email) {

    //Se retornar false, é pq achou nenhum email
    if($usuarioDao->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header("Location: index.php");
        exit();

    } else {
        header("Location: adicionar.php");
        exit();
    }
   
} else {
    header("Location: adicionar.php");
    exit;
}