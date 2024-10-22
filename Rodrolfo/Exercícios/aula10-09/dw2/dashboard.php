<?php
  session_start();
  include("funcoes.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>Dashboard</title>
    </head>
    <body>
        <?php
        if(ChecaSeEstaLogado() == true)
        {
            ?>
            <p>
                <b>Bem Vinde <?php echo $_SESSION["usuario"]; ?>, </b>
                <a href = "logout.php">Logout</a>
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed porta diam dapibus sapien rutrum, vel maximus tortor vehicula. 
                Vestibulum euismod malesuada dui, id tempus leo dictum et. Nulla vitae augue nisi. Suspendisse potenti. 
                Sed laoreet tortor ac fermentum ultrices. 
                Curabitur accumsan purus diam, nec posuere eros volutpat ac. Ut maximus nisl erat, a dapibus libero mattis in. 
                Vivamus gravida ex mauris, et feugiat sem lacinia non. 
                Aenean ut ipsum vitae libero malesuada laoreet. 
                Proin eu commodo neque.
            </p>
            <p>
            Nulla facilisi. Donec interdum scelerisque suscipit. 
            Praesent ultrices risus ex, vitae vulputate massa suscipit nec. 
            Nam mattis odio et risus finibus mollis. Vestibulum posuere dapibus placerat. 
            Nullam sodales tempus vehicula. Cras finibus, nisl in posuere tincidunt, magna leo suscipit libero, sed rutrum libero urna fermentum lectus. 
            Etiam viverra sodales hendrerit. Nunc egestas, turpis malesuada porttitor tincidunt, mi urna egestas ex, ut scelerisque neque lacus eget elit. 
            Curabitur metus sapien, commodo vitae lorem sed, bibendum dignissim ligula. Nunc vitae augue arcu. 
            Etiam vel dignissim erat. Etiam et sem eget metus dapibus tincidunt eget sit amet quam. Curabitur accumsan sit amet dolor eu pretium. 
            Nulla tincidunt lectus vitae sem sollicitudin venenatis. 
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>
        <?php
        }
        else
        {
        ?>
            <p style = "color:red">
                Você não tem permissão para visualizar este conteúdo.
            </p>
        <?php
        }
        ?>
    </body>
</html>