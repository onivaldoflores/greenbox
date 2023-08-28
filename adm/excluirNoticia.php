<?php
    require_once('conexao.php');

    $id = $_GET["id"];

    $sqlNoticia = "DELETE FROM noticias WHERE id='$id'";
    $result = mysqli_query($conn, $sqlNoticia);

    $sqlFoto = "DELETE FROM fotos WHERE id_noticia='$id'";
    $result1 = mysqli_query($conn, $sqlFoto);

    header('Location: listaNoticias.php');