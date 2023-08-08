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
            <div class="aba-sistema">
                <div class="titulo-aba">
                    <label>NOTÍCIAS</label>
                </div>
                <div class="conteudo-aba">
                    
                </div>
            </div>
            <div class="aba-sistema">
                <div class="titulo-aba">
                    <label>USUÁRIOS</label>
                </div>
                <div class="conteudo-aba">
                    

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
            
        </div>
    </div>
    
</body>
</html>