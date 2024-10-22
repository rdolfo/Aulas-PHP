<?php
  function conectar()
  {
    $bdr = new PDO('mysql:
    host=localhost;
    dbname=exemplo;
    charset=utf8', 'root', '');

    return $bdr;
  }
?>