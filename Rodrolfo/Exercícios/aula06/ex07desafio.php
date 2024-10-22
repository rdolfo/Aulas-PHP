<?php
$cores = ["verde"=>"0f0", "amarelo"=>"ff0", "azul"=>"00f", "branco"=>"fff"];
foreach($cores as $cor => $i){
    echo "<p style='background: gray; color: #$i'>cor: $cor (RGB: $i)</p>"; 
}


