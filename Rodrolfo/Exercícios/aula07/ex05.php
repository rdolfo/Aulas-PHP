<?php
//função que retorna um vetor
function contar($a = 0, $b = 10){
    $r = []; //vetor vazio
    for ($i = $a; $i <= $b; $i++){
        $r[] = $i; //posição é criada automaticamente, começando em zero
    }
    return $r;
}

function mostrar($vetor){
    foreach ($vetor as $i){
        echo "$i,";
    }
}

echo "<br />";
echo contar();
echo "<br />";
foreach (contar(5, 10) as $v){
    echo "$v,";
}
echo "<br />";
mostrar([1, 2, 3]);
echo "<br />";
mostrar(contar(3, 7));