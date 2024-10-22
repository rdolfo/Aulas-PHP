<?php
/*
Crie uma função “calcular” que receba três
parâmetros: a operação e mais dois valores a calcular.
As operações possíveis devem ser: soma, subtração,
multiplicação e divisão
*/
function calcular($operação, $n1, $n2){
    if($operação == "soma"){
        $soma = $n1 + $n2;
        echo $soma;
    } else if($operação == "subtração"){
        $subtração = $n1 - $n2;
        echo $subtração;
    } else if($operação == "multiplicação"){
        $multiplicação = $n1 * $n2;
        echo $multiplicação;
    } else if($opereação == "divisão"){
        $divisão = $n1 / $n2;
        echo $divisão;
    }
}
calcular($soma, 1, 2);
