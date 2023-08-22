<?php
    require_once('conexao.php');

    $titulo = $_POST["titulo"];
    $texto = $_POST["texto"];
    $foto = $_FILES['foto'];
    $legenda = $_POST["legenda"];

    echo $titulo . "<br>" . $texto . "<br>" . $foto['name'] . "<br>" . $legenda ."<br><br>";

    $sql = "insert into noticias (titulo, texto) VALUES ('$titulo','$texto')";
    
    echo $sql;
    
    $result = mysqli_query($conn, $sql);
    $idInserido = mysqli_insert_id($conn);

    $nomeFoto = $foto['name'];
    $sqlFoto = "insert into fotos (id_noticia, foto, legenda) VALUES ('$idInserido','$nomeFoto, '$legenda')";

    $result = mysqli_query($conn, $sqlFoto);

    echo "<br>". $sqlFoto;
    echo "<br><br> Id Inserido: ".$idInserido;

    move_uploaded_file($foto['tmp_name'],"../uploads/fotos/".$foto['name']);

    header('Location: cadNoticias.php');