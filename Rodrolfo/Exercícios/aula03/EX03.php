<h1>Seja bem vindo ao sistema!</h1>
<?php 
$tipo = 1;
if($tipo == 1 || $tipo == 0){
    echo"<h2>Você é um administrador do sistema.</h2>";
}
else if($tipo == 2){
    echo"<h2>Você é um usuário comum.</h2>";
}
else {echo"<h2>Acesso anônimo</h2>";}
 ?>