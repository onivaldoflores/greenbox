<?php
    require_once('conexao.php');

    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $foto = $_POST["foto"];
    $legenda = $_POST["legenda"];

    echo $titulo . "<br>" . $texto . "<br>" . $foto . "<br>" . $legenda;

/*
    $sql = "insert into usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";

    $result = mysqli_query($conn, $sql);

    header('Location: cadUsuarios.php');
*/