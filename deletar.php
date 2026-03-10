<?php
require('conexao.php');


    $id = $_GET["id"];

    $sql = "DELETE FROM `usuarios` WHERE cd_usuario=$id";

    $stmt = $pdo->query($sql);

    header('location: index.php')

?>