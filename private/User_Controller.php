<?php
    require_once 'conn.php';
    require 'User_Service/User_Service.php';
    require 'User/User.php';

    $action = isset($_GET['action']) ? $_GET['action'] : $action;

    if($action == 'login'){
        $user = new User();
        $user->setLogin($_POST['login']);
        $user->setPassword($_POST['senha']);

        $conn = new Conexao();

        $userService = new UserService($conn, $user);

        if($userService->Valida_Login()){
            header('Location: http://google.com.br');
        }else{
            header('Location: ../index.php');
        }
    }

?>