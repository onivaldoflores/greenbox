<?php
    //Criando variáveis que recebem os dados do banco de dados
    $servername = "localhost";
    $database = "greenbox_db";
    $username = "root";
    $password = ""; 

    //Variável $conn recebe um objeto de conexão com o banco de dados. Aqui são passados como parâmetros, as váriáveis criadas acima
    $conn = new mysqli($servername, $username, $password, $database);

    //Esse IF verifica se a conexão ocorreu de forma correta, com o uso do comando connect_errno
    if($conn->connect_errno){
        echo "Erro de conexão com o Banco de Dados";
    }else{
        
    }
?>