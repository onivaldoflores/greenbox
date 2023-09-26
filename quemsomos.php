<?php
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>GreenBox</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div id="geral">
        <div id="topo">
            <?php
                include_once('topo.php');
            ?>
        </div>
        <div id="main">
            <?php

                $sql_noticia = "SELECT * FROM noticias WHERE tipo='quemsomos' ORDER BY id DESC";
                $result = mysqli_query($conn, $sql_noticia);

                $i = 1;
                while($noticia = mysqli_fetch_assoc($result) and $i==1){
                    echo "<h1>".$noticia['titulo']."</h1>";
                    
                    $id_noticia = $noticia["id"];
                    $sql_foto = "SELECT * FROM fotos WHERE id_noticia = $id_noticia";
                    $result_foto = mysqli_query($conn, $sql_foto);
                    while($foto = mysqli_fetch_assoc($result_foto)){
                        echo "<img src='uploads/fotos/".$foto['foto']."' alt=''>";
                    }

                    echo "<p>".$noticia['texto']."</p>";
                }

            ?>


        </div>
        <div id="rodape">
            <?php
                include_once('rodape.php');
            ?>
        </div>
    </div>    
</body>
</html>