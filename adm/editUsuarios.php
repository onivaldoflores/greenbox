<?php
session_start();

if(!isset($_SESSION['login']) == true){
    unset($_SESSION['login']);
    session_destroy();
    header('location:index.php');
}

require_once('conexao.php');
$id = $_GET["id"];
$sql = "SELECT * FROM usuarios WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if(isset($_POST["Salvar"])){
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql_update = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id='$id'";
    $update = mysqli_query($conn, $sql_update);

    header('Location: listaUsuarios.php');
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
            window.location.href = "listaUsuarios.php";
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
                    / <a href="editUsuarios.php">Edição de Usuários</a>
                </p>
                <br>
                <h1>Edição de Usuários</h1>
            </div>  

            <section class="formulario">
                <div>
                    <form action="" method="POST">
                    <?php
                        while($usuario = mysqli_fetch_assoc($result)){
                    ?>
                    <input type="text" name="nome" class="campoForm" placeholder="Nome" value="<?php echo $usuario["nome"]; ?>">
                    <br><br>
                    <input type="text" name="email" class="campoForm" placeholder="E-mail" value="<?php echo $usuario["email"]; ?>">
                    <br><br>
                    <input type="password" name="senha" class="campoForm" placeholder="Senha"  value="<?php echo $usuario["senha"]; ?>">
                    <br><br>
                    <input type="submit" name="Salvar" class="btnEnviar" value="Salvar">
                    <input type="button" name="Buscar" onclick="redirect_lista()" class="btnEnviar" value="Buscar Usuário">
                    <input type="button" name="Buscar" onclick="redirect_voltar()" class="btnEnviar" value="Voltar">
                    <?php 
                        }
                    ?>
                    </form>
                </div>
            </section>          
            
            
            
            
        </div>
    </div>
    
</body>
</html>