
<?php
    require('conexao.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nasc = $_POST["nasc"];

    if(empty($nome) || empty($email) || empty($nasc)){

        echo "<script>alert('Campo vazio!'); window.location='index.php'</script>";     
    }

    try{
        $sql = "INSERT INTO `usuarios` (nm_usuario, nm_email, dt_nascimento) VALUES (:nome, :email, :nasc) ";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':nasc' => $nasc,
        ]);

        header('location: index.php');

    }catch(PDOException $e){
        if($e->getCode() == 23000){
            echo "email já cadastrado!";
        }else{
        echo "ERROR! " . $e->getMessage();
        }
    exit();
    }
    
?>