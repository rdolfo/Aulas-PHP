<?php
echo "<br />Parâmetros GET: ";
print_r($_POST);
echo "<br />Parâmetros POST: ";
print_r($_POST);
?>

<form method="post">
    nome: <br />
    <input type="text" name="nome" id="nome" /><br />
    <input type="submit" value="enviar" /><br />
</form>