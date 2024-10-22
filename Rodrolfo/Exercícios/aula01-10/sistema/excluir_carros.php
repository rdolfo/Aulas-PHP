<?php
include("funcoes.php");

$id = $_GET["id"];

$bd = conectar();

$query = "DELETE FROM carros WHERE id = ?";
$prepare = $bd->prepare($query);
$resultado = $prepare->execute(array($id));

header("location:listar_carros.php");
?>