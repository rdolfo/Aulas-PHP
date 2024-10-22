<?php

  function ChecaSeEstaLogado()
{
    if(isset($_SESSION["usuario"]))
    {
        return true;
    }
    else
    {
        return false;
    }
}

  function ValidaCredenciais($usuario, $senha)
{
    if(($usuario == "admin") && ($senha == "123456"))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function FazerLogin($usuario, $senha)
{
    $valida = ValidaCredenciais($usuario, $senha);
    if(($valida == true))
    {
        $_SESSION["usuario"] = $usuario;
        return true;
    }
    else
    {
        return false;
    }
}

?>