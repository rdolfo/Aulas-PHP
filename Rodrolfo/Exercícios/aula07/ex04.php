<?php
//valor padrão o parâmetro
function miar($muito = false){
    if($muito)
    echo"<br />miau, miau, miau, miau, miau";
else echo "<br />miau";
}
miar();
miar(false);
miar(true);