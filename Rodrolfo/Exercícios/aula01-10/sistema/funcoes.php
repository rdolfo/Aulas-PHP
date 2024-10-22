<?php
include("database.php");
function checaSeEstaLogado(){
    if(isset($_SESSION["usuario"])){
        return true;
    }else{
        return false;
    }
}

function validaCredenciais($usuario, $senha){
    $bd = conectar();
    $resultado = $bdr->prepare("SELECT * FROM membros WHERE usuario=? AND senha=?");
    $resultado->execute(array($usuario, $senha));
    $linhas = $resultado->fetchAll(PDO::FETCH_ASSOC);

    if(count($linhas) > 0){
        return true;
    }else{
        return false;
    }
    /*if(($usuario == "admin") && ($senha == "123456")){
        return true;
    }else{
        return false;
    }*/
}

function fazerLogin($usuario, $senha){

    $valida = validaCredenciais($usuario, $senha);
    if($valida == true){
        $_SESSION["usuario"] = $usuario;
        return true;
    }else{
        return false;
    }
}