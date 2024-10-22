<?php
/*
Crie um programa que receba um vetor como
parâmetro e retorne a soma de todos os
valores do vetor
*/
function somar($vetor){
    $r = 0;
    foreach($vetor as $i){
        $r+=$i;
    }
    return $r;
}
$a = [2,4,6]; //dados de cada posição
echo somar($a);