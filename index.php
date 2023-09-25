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
        <div id="banner">
            <div>
                <p style="font-weight: bold;">PROPRIEDADES CERTIFICADAS</p>
                <br>
                <p>Trabalhamos com mais de 50 produtos certificados para produção de alimentos orgâncios</p>
                <br>
                <input type="button" name="conheca" class="btn_conheca" value="Conheça">
            </div>
        </div>

        <div id="quadro">
            <?php
                $sql_noticia = "SELECT * FROM noticias ORDER BY id DESC";
                $result = mysqli_query($conn, $sql_noticia);

                $i=1;
                while($noticia = mysqli_fetch_assoc($result) and $i <= 3){
            ?>
                <div class="noticia">
                    <div class="noticia_interno">
                        <?php
                            $id_noticia = $noticia["id"]; 
                            $sql_foto = "SELECT * FROM fotos WHERE id_noticia = $id_noticia";
                            $result_foto = mysqli_query($conn, $sql_foto);
                            while($foto = mysqli_fetch_assoc($result_foto)){
    echo "<div class='img_noticia'>";
        echo "<a href='noticia.php?id=".$id_noticia."'><img src='uploads/fotos/".$foto["foto"]."' alt=''></a>";
    echo "</div>";                                
                            }
                        ?>
                        <div class="titulo_noticia">
                            <?php echo "<a href='noticia.php?id=".$id_noticia."'>". $noticia['titulo'] ."</a>"; ?>
                        </div>
                        <div class="texto_noticia">
                            <?php echo "<a href='noticia.php?id=".$id_noticia."'><p>". mb_strimwidth($noticia['texto'], 0, 80, "...") ."</p></a>"; ?>
                        </div>
                    </div>
                </div>
            <?php
                    $i++;
                }
            ?>         
        </div>
        <div id="produtos">
            <div class="transparencia-produtos">
                <p>PRINCIPAIS PRODUTOS</p>
            </div>

            <div class="principais-produtos">
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
                <div class="lista-produtos">
                    <div class="produto_interno">
                        <div class="img_produto">
                            <img src="img/produto_morango.png" alt="">
                        </div>
                        <div class="titulo_produto">
                            <a href="#">Alface Americana</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div id="rodape">
            <?php
                include_once('rodape.php');
            ?>
        </div>
    </div>    
</body>
</html>