<?php
if(!empty($_POST)){//se recebeu parâmetros
     if(!empty($_POST["nome_usuario"])){
        echo "<h1>Seja bem vindo(a) ".$_POST["nome_usuario"];
        exit;
     }  
}
?>

<form method="post">
    Digite seu nome: <input type="text" name="nome_usuario" id="nome_usuario" /><br>
    <input type="submit" value="Enviar" /><br>
</form>
