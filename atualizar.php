<?php
require('conexao.php');


    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nasc = $_POST["nasc"];

    try{
    $sql = "UPDATE `usuarios` SET `nm_usuario`='$nome', `nm_email`='$email', `dt_nascimento`='$nasc'
      WHERE cd_usuario=$id";

    $stmt = $pdo->query($sql);
    header('location: index.php');

    }catch(PDOException $e){
        echo "ERROR! " . $e->getMessage();
    exit();

    }
    
?>