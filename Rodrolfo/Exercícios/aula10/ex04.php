<?php
//simula uma tela de login

if(!empty($_POST)){ //se recebeu parâmetros
    if(!empty($_POST["login"]) && !empty($_POST["senha"])){
        $login = $_POST["login"];
        $senha = $_POST["senha"];
         if($login=="admin" && $senha=="123456"){
            echo "<h1>Acesso concedido!</h1>";
            exit;
         }
         else{echo "<h1 style='color: red'>ACESSO NEGADO!</h1>";}
    }
}
?>

<form method="post">
    Login: <input type="text" name="login" /><br />
    Senha: <input type="password" name="senha"  /><br />
    <input type="submit" value="Entrar" /><br />
</form>