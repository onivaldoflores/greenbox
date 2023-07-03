<?php
    require_once('conexao.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $salvar = $_POST["Salvar"];

    echo $nome . "<br>" . $email . "<br>" . $senha . "<br>" . $salvar;

    $sql = "insert into usuarios (nome, email, senha) VALUES ('$nome','$email','$senha')";

    $result = mysqli_query($conn, $sql);

    header('Location: cadUsuarios.php');