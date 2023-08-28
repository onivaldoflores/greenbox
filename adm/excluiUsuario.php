<?php
    require_once('conexao.php');

    $id = $_GET["id"];

    $sql = "DELETE FROM usuarios WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    header('Location: listaUsuarios.php');