<?php
/*
Crie um programa que tenha uma
variável armazenando uma frase. Se a frase
tiver menos de 10 caracteres, deve mostrar a
frase em letras maiúsculas, caso contrário deve
mostrar a frase em ordem reversa
*/

$x = "oi";
if(strlen($x) < 10){
    echo strtoupper($x);
}else echo strrev($x);