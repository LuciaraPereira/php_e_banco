 <?php
    require('conexao.php');

    $id = $_GET["id"];
    $sql = "SELECT * FROM `usuarios` where cd_usuario=$id";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
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

        <form action="atualizar.php?id=<?= $result['cd_usuario'] ?>" method="post">
            <label for="nome">Nome</label>
            <input value="<?= $result['nm_usuario'] ?>" type="text" id="nome" name="nome">

            <label for="email">E-mail</label>
            <input value="<?= $result['nm_email'] ?>" type="email" id="email" name="email">

            <label for="nasc">Data de nascimento</label>
            <input value="<?= $result['dt_nascimento'] ?>" type="date" id="nasc" name="nasc">

            <button type="submit">Atualizar</button>
        </form>

    </main>
    
</body>
</html>