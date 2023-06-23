<?php

require_once('conexao.php');

$login = $_POST["login"];
$senha = $_POST["senha"];
$entrar = $_POST["entrar"];

$sql = "SELECT * FROM usuarios WHERE email='$login' AND senha='$senha'";

$result = $conn->query($sql);

    if(mysqli_num_rows($result) == 0){
        header('Location: index.php');
    }else{
        header('Location: sistema.php');
    }
