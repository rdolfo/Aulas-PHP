<?php
  session_start();
  include("database.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <?php
    if(isset($_POST["usuario"]) == true){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $bdr = conectar();
        $query = "INSERT INTO membros(usuario, senha) VALUES (?,?)";
        // query é uma instrução para o banco de dados

        $resultado = $bdr->prepare($query);
        $result = $resultado->execute(array($usuario, $senha));

        if($result == true){
            ?>
            <p>
                Você foi registrada(o) com sucesso!
                <a href = "index.php">aqui</a>
                para fazer login.
            </p>
            <?php
            }else{
                ?>
                <p>
                    Usuário em uso, por favor, tente novamente!
                </p>
                <?php
            }
        }else{
        ?>
        <form method = "post">
        <p>Usuário: <input type = "text" name = "usuario" required/></p>
        <p>Senha: <input type = "password" name = "senha" required/></p>
        <p><input type = "submit" value = "registrar"/></p>
        </form>
        <?php
    }
    ?>
</body>
</html>