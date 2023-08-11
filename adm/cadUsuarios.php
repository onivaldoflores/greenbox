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
        function redirect(){
            window.location.href = "listaUsuarios.php";
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
        <div id="geral-dir1">
            <div class="mapa-site">
                <p>
                    ><a href="sistema.php">Início </a>
                    ><a href="cadUsuario.php">Cadastro de Usuários </a>
                </p>
                <br>
                <h1>Cadastro de Usuários</h1>
            </div>  

            <div>
                <form action="usuarioDB.php" method="POST">
                
                <input type="text" name="nome" class="campoForm" placeholder="Nome">
                <br><br>
                <input type="text" name="email" class="campoForm" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" class="campoForm" placeholder="Senha">
                <br><br>
                <input type="submit" name="Salvar" class="btnEnviar" value="Salvar">
                <br><br>
                <input type="button" name="Buscar" onclick="redirect()" class="btnEnviar" value="Buscar Usuário">
                
                </form>
            </div>          
            
            
            
            
        </div>
    </div>
    
</body>
</html>