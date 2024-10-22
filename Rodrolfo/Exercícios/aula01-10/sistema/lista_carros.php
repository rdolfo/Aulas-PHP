<?php
include("funcoes.php");
$bd = conectar();
$query = "SELECT * FROM carros";
$resultado = $bd->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista De Carros</title>
    <style>
        table{width:100%;}
        th{background-color: #eee;}
    </style>
</head>
<body>
    <h1>Lista De Carros</h1>

    <?php
    if(count($resultado) == 0){ ?>
    <p>Nenhum carros encontrado</p>
    <?php
    }else {?> 
    
    <table>
    <tr>
        <th>ID</th>
        <th>Carro</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php
    foreach($resultado as $carro){?>
        <tr>
            <td><?php echo $carro["id"]; ?></td>
            <td><?php echo $carro["modelo"]; ?></td>
            <td><?php echo $carro["descricao"]; ?></td>
            <td>
                <a href="atualizar_dados.php?id=<?php echo $carro["id"]; ?>">Atualizar</a>
                |
                <a href="excluir_carros.php?id=<?php echo $carro["id"]; ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
</body>
</html>
