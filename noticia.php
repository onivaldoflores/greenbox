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
                $id_noticia = $_GET["id"];

                $sql_noticia = "SELECT * FROM noticias WHERE id='$id_noticia'";
                $result = mysqli_query($conn, $sql_noticia);

                while($noticia = mysqli_fetch_assoc($result)){
                    echo "<h1>".$noticia['titulo']."</h1>";

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