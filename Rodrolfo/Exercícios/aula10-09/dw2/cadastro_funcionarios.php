<?php
$bd = new PDO('mysql:host=localhost;
                dbname=aprendizado;
                charset=utf8',
                'root',
                '');
$sql = "INSERT INTO funcionarios
        (nome, salario, data_de_nascimento, data_de_admissao, departamento_id)
        VALUES('Luiz', '2000', '2008-03-17', '2024-02-16', '1');"
        $bd->exec($sql);
?>