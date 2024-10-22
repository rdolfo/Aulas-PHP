<?php
$logado = TRUE;
$m = 7;

if($logado){
    if($m >= 6){
        echo "<h1>Aprovado</h1>";
    } else {
        echo "<h1>Reprovado</h1>";
    }
}
else{echo "<h1>Você não está logado no sistema.</h1>";}