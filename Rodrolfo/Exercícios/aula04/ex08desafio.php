<style>
    td, th { border: 1px solid black }
</style>
<table>
    <tr><th>Produto</th><th>Preço</th></tr>
<?php
$i = 0;
$p = 2;
while($i++ < 10){
    echo "<tr><th>Produto $i</th><th>R$ $p</th></tr>";
    $p*=2;
}echo "</table>";