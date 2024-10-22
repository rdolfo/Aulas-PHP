<?php
$v = 100;
$vmin = 50;
$vmax = 100;

if($v >= $vmin && $v <= $vmax){
    echo "<p>Você está dentro do limite de velocidade.</p>";
}
else if($v < $vmin){
    echo "<p>Você está ABAIXO do limite de velocidade.</p>";
}
else {echo "<p>Você está ACIMA do limite de velocidade.</p>";}