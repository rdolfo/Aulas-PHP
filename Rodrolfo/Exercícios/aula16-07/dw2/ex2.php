<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];



if($n1 > $n2){
    $soma = $n1 + $n2;
    echo "$n1 + $n2 = $soma"; 
} else echo "O segundo numero é maior, por isso é impossivel calcular"

?>