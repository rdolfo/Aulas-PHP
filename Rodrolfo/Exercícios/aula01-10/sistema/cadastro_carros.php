<?php
  include("funcoes.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Carros</title>
</head>
<body>
    <h1>Cadastrar carro</h1>

    <?php
    $modelo = $_POST["modelo"];
    $descricao = $_POST["descricao"];

    $bd = conectar();

    $query = "INSERT INTO
                carros(modelo, descricao)
                VALUES(?,?)";
    
    $preparando = $bd->$prepare($query);
    $resultado = $preparando->execute(array($modelo,$descricao));
    
    if($resultado == true)
    {
        ?>
        <p>O carro foi adicionado com sucesso</p>
        <?php
    }
    else
    {
        ?>
        <p>Algum erro ocorreu</b>
        <?php
    }
    ?>
</body>
</html>