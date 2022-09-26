<?php

    session_start();
    
    require 'conexao.php';

    if(empty($_SESSION['lg'])) {
        header("Location: login.php");
        exit;
    }

?>

<h1>Arquivo Restrito, só pode vizualizar quem tem acesso</h1>