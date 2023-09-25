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
    <script>
        function redirect_lista(){
            window.location.href = "listaquemsomos.php";
        }

        function redirect_voltar(){
            window.location.href = "sistema.php";
        }
    </script>
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
                    / <a href="cadquemsomos.php">Cadastro - Quem Somos</a>
                </p>
                <br>
                <h1>Cadastro de texto para a área Quem Somos</h1>
            </div>  

            <section class="formulario">
                <div>
                    <form action="quemsomosdb.php" method="POST" enctype="multipart/form-data">
                    
                    <input type="text" name="titulo" class="campoForm" placeholder="Título do texto">
                    <br><br>
                    <textarea name="texto" class="campoForm" placeholder="Texto"></textarea>
                    <label for="foto" class="campoFoto">Anexar foto</label>
                    <input type="file" name="foto" id="foto">                   
                    <input type="text" name="legenda" class="campoForm" placeholder="Legenda da Foto">
                    <br><br>

                    <input type="submit" name="Salvar" class="btnEnviar" value="Salvar">
                    <input type="button" name="Buscar" onclick="redirect_lista()" class="btnEnviar" value="Buscar Quem Somos">
                    <input type="button" name="Buscar" onclick="redirect_voltar()" class="btnEnviar" value="Voltar">
                    
                    </form>
                </div>
            </section>          
            
            
            
            
        </div>
    </div>
    
</body>
</html>