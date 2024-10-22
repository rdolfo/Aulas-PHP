<?php
//ajusta as cores da página

$fundo = "white";
$letra = "black";
//ajusta as novas cores
if(!empty($_POST)){
    $fundo = $_POST["fundo"];
    $letra = $_POST["letra"];
}

echo ">body style='background-color: $fundo; color: $letra'>";
?>
<h1>Exercício 6</h1>
<form method="post">
    Cor de fundo:
    <select name="fundo">
        <option>Escolha...</option>
        <option value="white">Branco</option>
        <option value="yellow">Amarelo</option>
        <option value="pink">Rosa</option>
</select>

Cor da letra:
<select name="letra">
        <option>Escolha...</option>
        <option value="white">Branco</option>
        <option value="yellow">Amarelo</option>
        <option value="pink">Rosa</option>
</select>
<input type="submit" value="Atualizar" />
</form>
</body>