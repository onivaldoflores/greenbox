<?php
    require_once("conexao.php");

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);
?>

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
        function redirect_inicio(){
            window.location.href = "sistema.php";
        }

        function redirect_voltar(){
            window.location.href = "cadUsuarios.php";
        }

        function excluir(id){
            let resposta = confirm("Tem certeza que deseja excluir este usuário?");

            if(resposta == true){
                window.location.href = "excluiUsuario.php?id="+id;
            }
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
                    / <a href="cadUsuarios.php">Cadastro de Usuários</a>
                    / <a href="listaUsuarios.php">Usuários cadastrados</a>
                </p>
                <br>
                <h1>Usuários cadastrados</h1>
            </div>  

            <section class="formulario">
                <table class="tabela_usuarios"> <!-- TABELA -->
                    <thead> <!-- CABEÇALHO DA TABELA -->
                        <tr> <!-- LINHA DA TABELA -->
                            <th>#</th> <!-- COLUNA DA TABELA -->
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($usuario = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td>". $usuario['id'] ."</td>";
                                echo "<td>". $usuario['nome'] ."</td>";
                                echo "<td>". $usuario['email'] ."</td>";
                                echo "<td><a href='javascript:excluir(". $usuario['id'].")'>&#10060;</a> <a href='#'>&#128221;</a></td>";
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
                <br><br>                
                
                <input type="button" name="Buscar" onclick="redirect_voltar()" class="btnEnviar" value="Voltar">
                <input type="button" name="Buscar" onclick="redirect_inicio()" class="btnEnviar" value="Voltar ao Início">
            </section>              
        </div>
    </div>
    
</body>
</html>