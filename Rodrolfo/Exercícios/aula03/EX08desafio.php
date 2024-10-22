<?php
$hora = 20;

if($hora >= 00 && $hora < 12){
    echo "<h1>Bom Dia!</h1>";
    echo "<body style='background: yellow'>";
} else if($hora >= 12 && $hora < 18){
    echo "<h1>Boa Tarde!>/h1>";
    echo "<body style='background: green'>";
} else if($hora >= 18 && $hora < 24){
    echo "<h1 style='color: white'>Boa Noite!</h1>";
    echo "<body style='background: black'>";
} else {echo "<h1>Hora inválida>/h1>";}

/*Bom Dia: AMARELO
  Boa Tarde: VERDE
  Boa Noite: PRETO*/