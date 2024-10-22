<?php
session_start();
include("funcoes.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Logout</title>
</head>
<body>
    <?php
    if(checaSeEstaLogado() == true){
        session_destroy();
        ?>

        <p>
            Você foi deslogado(a) com sucesso! clique
            = <a href='index.php'>aqui</a>
             para voltar a página inicial
        </p>
        <?php
    } else{
        ?>

        <p>
            Algum erro ocorreu, clique
             <a href='index.php'>aqui</a>
             para voltar a página inicial
        </p>

        <?php
    }
    ?>
</body>
</html>