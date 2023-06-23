<?php
session_start();

 if(isset($_POST['entrar'])){
    echo "botão existe";

    require_once('conexao.php');

    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $entrar = $_POST["entrar"];

    $sql = "SELECT * FROM usuarios WHERE email='$login' AND senha='$senha'";

    $result = $conn->query($sql);

    if(mysqli_num_rows($result) == 0){
        session_destroy();
        header('Location: index.php');
    }else{
        $_SESSION['login'] = $login;
        header('Location: sistema.php');
    }

 }else{
    header('Location: index.php');
 }


