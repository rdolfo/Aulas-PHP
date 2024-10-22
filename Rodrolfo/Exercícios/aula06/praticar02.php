<?php
//lista ordenada de produtos
$produtos = ["banana"=>"9,99kg", "arroz"=>"20,49", "toddynho"=>"3,99"];
/*meu jeito
$a = 1;
foreach($produtos as $p => $i){
    echo "Produto $a: $p por $i<br>";
    $a++;
}
*/
//jeito certo
?>
<ol>
    <?php
    foreach($produtos as $p => $i){
        echo "<li>Nome: $p Preço: R$$i</li>";
    }
    ?>
</ol>