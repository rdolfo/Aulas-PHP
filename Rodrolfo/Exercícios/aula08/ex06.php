<?php
//funções de verificação de tipo
$x = 1;
echo is_numeric($x)."<br />"; //verifica se é um numero
echo is_int($x)."<br />"; //verifica se é inteiro
echo is_integer($x)."<br />"; //idem    

$x = 1.4;
echo is_numeric($x)."<br />";   
echo is_float($x)."<br />";