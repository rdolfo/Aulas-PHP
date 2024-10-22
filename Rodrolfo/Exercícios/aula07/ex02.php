<?php
//função com parâmetro
function latir($muito){
    if($muito){
        echo "au, au, au, au, au, au";
    } else echo "au";
}
latir(true); //latir muito
echo "<br />";
latir(false); //latir pouco