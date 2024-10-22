<?php
session_start();
include("funcoes.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <?php
    if(checaSeEstaLogado() == true){
        ?>
        <p><b>Bem vinde <?php echo $_SESSION["usuario"]; ?>,</b>
    <a href='logout.php'>Logout</a></p>
    <p>
    A morte de Pelé, o Rei do Futebol, e o nascimento da filha de Zé Felipe, Maria Flor, representam dois extremos emocionais da vida humana. Pelé, um ícone que deixou um legado 
    imenso no esporte e na cultura global, partiu em um momento de luto e reflexão, simbolizando o fim de uma era. Em contraste, o nascimento de Maria Flor é um momento de 
    celebração e esperança, marcando o início de uma nova vida e a continuidade da alegria familiar. Enquanto a morte de Pelé é uma lembrança da finitude e do impacto duradouro 
    que uma vida pode ter, o nascimento de Maria Flor é um testemunho da renovação e das possibilidades que cada nova vida traz.
    </p>

    <p>A reprodução entre humanos e macacos não é possível devido às diferenças genéticas e biológicas entre as espécies. No entanto, estudar os macacos é crucial para 
        entender a evolução humana e comparar nossas características com as deles. Essas pesquisas ajudam a elucidar aspectos da biologia e comportamento humanos, contribuindo 
        para avanços na medicina e na ciência.</p>

         <?php
    } else{
        ?>
        <p style = 'color:red'> Você não tem permissão para visualizar este conteúdo.</p>

        <?php
    }
    
?>

</body>
</html>