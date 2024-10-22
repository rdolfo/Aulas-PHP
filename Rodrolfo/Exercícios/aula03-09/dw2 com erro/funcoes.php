<?php
function checaSeEtaLogado(){
    if(isset($_SESSION["usuario"])){
        return true;
    } else return false;
}

function validaCredenciais($usuario, $senha){
    if(($usuario == "admin") && ($senha == "123456")){
        return true;
    } else return false;
}

function fazerLogin($usuario, $senha){
    
    $valida = validaCredenciais($usuario, $senha);

   if(valida == true){
    $_SESSION["usuario"] = $usuario;
    return true;
   } else return false;
}