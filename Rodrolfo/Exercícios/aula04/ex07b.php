<h1>Lista de produtos</h1>

<ol>
<?php
$i = 0;
$p = 2;
while($i++ < 20){
echo "<li>Nome: Produto $i | Preço: R$ $p</li>";
    $p+=0.99;
}   
?>
</ul>