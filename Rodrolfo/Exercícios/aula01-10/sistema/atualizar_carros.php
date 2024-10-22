<?php
include("funcoes.php");

$id = $_GET["id"];
$bd = conectar();

$query = "SELECT * FROM carros WHERE id = ?";
$executar->execute(array($id));
$resultado = $executar->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Carros</title>
</head>
<body>
    <h1>Atualizar Carros</h1>
<form action="editar_carros.php" method="post">
    <input type="hidden"
    name="id" value="<?php $resultado["id"]; ?>" 
    required="required"/>

   <input type="text" nome="modelo"
   placeholder="forneça a marca do carro!"
   value="<?php echo $resultado["modelo"]; ?>"
   required="required"/>

</br>

<textarea name="descricao" 
placeholder="forneça uma descrição detalhada sobre o carro" required="required">
<?php echo $resultado["descricao"]; ?>
</textarea>

</br>

<input type="submit" value="Atualizar"/>
</form>
    
</body>
</html>