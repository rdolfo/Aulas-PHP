<?php
//calculadora de soma

if(!empty($_POST)){
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $r = $v1+$v2;
    echo "Resultado da soma: $r";
}
?>

<form method="post">
    V1: <input type="number" name="v1" /><br />
    V2: <input type="number" name="v2" /><br />
    <input type="submit" value="calcular" />
</form>