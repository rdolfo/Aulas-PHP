<?php
session_start();
include("funcoes.php");
include("database.php");

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>dashboard</title>
    </head>
    <body>
        <?php
        if(checaSeEstaLogado() == true){
            ?>
            <p>
                <b>Bem vinde <?php $_SESSION["usuario"]; ?>, </b>
                <a href = 'logout.php'>Logout</a>
            </p>
                
            <p>
           <ul>
            <li><a href="cadastro_carros.html">Cadastrar Carros</a></li>
            <li><a href="listar_carros.php">Listar carros</a></li>
           </ul>
            </p>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum maxime quis a cumque, assumenda ullam. Quaerat laborum enim repellendus excepturi non sint porro alias accusantium. Eaque deserunt eos sed deleniti.
            </p>

            <?php
        }else{
            ?>

            <p style="color:red">
                Você não tem permissão para visualizar este conteúdo.
            </p>

            <?php
        }
        ?>
    </body>
</html>