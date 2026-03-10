<?php
    require('conexao.php');

    $sql = "SELECT * FROM `usuarios`";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <h1>Cadastro de Usuários</h1>

        <form action="cadastro.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">

            <label for="nasc">Data de nascimento</label>
            <input type="date" id="nasc" name="nasc">

            <button type="submit">Enviar</button>
        </form>

        <ul>
            <?php

            foreach($result as $r):?>
               <li><?= $r['nm_usuario'] ?></li>
                <li>
                    <a href="visualizar.php?id=<?= $r['cd_usuario'] ?>">Ver</a>
                    <a href="editar.php?id=<?= $r['cd_usuario'] ?>">editar</a>
                    <a href="deletar.php?id=<?= $r['cd_usuario'] ?>">excluir</a>
                </li>
            

            <?php endforeach ?>
        </ul>
    </main>
    
</body>
</html>