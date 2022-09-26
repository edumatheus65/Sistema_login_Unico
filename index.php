<?php

    session_start();

    require 'conexao.php';

    if(empty($_SESSION['lg'])) {
        header("Location: login.php");
        exit;
    } else {
        $id = $_SESSION['lg'];
        $ip = $_SERVER['REMOTE_ADDR'];

        $stmt = "SELECT * FROM usuarios WHERE id = :id AND ip = :ip";
        $stmt = $conn->prepare($stmt);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":ip", $ip);
        $stmt->execute();

        if($stmt->rowCount() == 0) {
            header("Location: login.php");
        }
    }

?>

<h1>Arquivo Restrito, só pode vizualizar quem tem acesso</h1>