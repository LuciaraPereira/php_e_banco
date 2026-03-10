 <?php

 require('conexao.php');

    $id = $_GET["id"];

    $sql = "select * from `usuarios` where cd_usuario=$id;";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização</title>
</head>
<body>
    <main>
        <p>Nome: <?= $result['nm_usuario'] ?></p>
        <p>E-amil: <?= $result['nm_email'] ?></p>
        <p>Data de Nascimento: <?= $result['dt_nascimento'] ?></p>
    </main>
    
</body>
</html>