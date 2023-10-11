<?php
session_start();

if(!isset($_SESSION['login']) == true){
    unset($_SESSION['login']);
    session_destroy();
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema administrativo</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <link rel="shortcut icon" href="img/ifpr.ico" type="image/x-icon">
</head>
<body>
    <div id="geral">
        <div id="geral-esq">
            <div id="logo">
                <img src="img/logo.png" alt="">
                <br>
                <label>
                    Bem-vindo: <br>
                    XXXXXXXXXXXXXXXX
                </label>
            </div>
            <div id="menu">
                <?php
                    require_once("menu.php");
                ?>
            </div>
        </div>
        <div id="geral-dir">
            <div class="mapa-site">
            <p>Onde estou: 
                    <a href="sistema.php">&#127969; Início</a>
            </p>
                <br>
                <h1>Sistema Administrativo</h1>
            </div>           
            
            <section class="grid">
                <div class="aba-sistema">
                    <div class="titulo-aba">
                        <label>NOTÍCIAS</label>
                    </div>
                    <div class="conteudo-aba">
                        <?php
                            require_once('conexao.php');

                            $sql_noticia = "SELECT * FROM noticias ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql_noticia);

                            $i = 1;
                            while($noticia = mysqli_fetch_assoc($result) and $i <= 5){
                                echo "<p>".$i." - ".$noticia['titulo']."</p>";
                                $i++;
                            }                        
                        ?>
                    </div>
                </div>
                <div class="aba-sistema">
                    <div class="titulo-aba">
                        <label>USUÁRIOS</label>
                    </div>
                    <div class="conteudo-aba">
                        <?php
                            $sql_usuario = "SELECT * FROM usuarios ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql_usuario);

                            $i = 1;
                            while($usuario = mysqli_fetch_assoc($result) and $i <= 5){
                                echo "<p>".$i." - ".$usuario['nome']."</p>";
                                $i++;
                            }                        
                        ?>

                    </div>
                </div>
                <div class="aba-sistema">
                    <div class="titulo-aba">
                        <label>PRODUTOS</label>
                    </div>
                    <div class="conteudo-aba">
                        Últimos 5 produtos cadastrados
                    </div>
                </div>
                <div class="aba-sistema">
                    <div class="titulo-aba">
                        <label>ESTATÍSTICAS</label>
                    </div>
                    <div class="conteudo-aba">
                        Estatísticas gerais sobre o sistema
                    </div>
                </div>
            </section>
            
            
        </div>
    </div>
    
</body>
</html>