<?php
    $servername = "localhost";
    $database = "greenbox_db";
    $username = "root";
    $password = ""; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_errno){
        echo "Erro de conexão com o Banco de Dados";
    }else{
        echo "Conexão com o Banco de Dados foi um sucesso";
    }
?>