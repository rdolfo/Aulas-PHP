<?php
//extraindo partes de uma string (fatiar)
$x = "Bom dia";
echo substr($x, 1)."<br />"; //mostra a partir do segundo caractere
echo substr($x, 0, 1)."<br />"; //mostra o primeiro caractere
echo substr($x, 0, 3)."<br />"; //mostra os 3 primeiros caracteres
echo substr($x, 4, 3)."<br />"; //mostra 3 caracteres a partir do quarto caractere