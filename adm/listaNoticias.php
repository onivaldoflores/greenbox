<?php
require_once("conexao.php");

$sql = "SELECT * FROM noticias ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

?>

<?php
session_start();

if (!isset($_SESSION['login']) == true) {
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
        function redirect_inicio() {
            window.location.href = "sistema.php";
        }

        function redirect_voltar() {
            window.location.href = "cadNoticias.php";
        }

        function excluir(id) {
            let resposta = confirm("Deseja realmente excluir essa notícia?");

            if (resposta == true) {
                window.location.href = "excluirNoticia.php?id=" + id;
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
                    / <a href="cadNoticias.php">Cadastro de Notícias</a>
                    / <a href="listaNoticias.php">Notícias cadastradas</a>
                </p>
                <br>
                <h1>Notícias cadastradas</h1>
            </div>

            <section class="formulario">
                <table class="tabela_usuarios"> <!-- TABELA -->
                    <thead> <!-- CABEÇALHO DA TABELA -->
                        <tr> <!-- LINHA DA TABELA -->
                            <th>#</th> <!-- COLUNA DA TABELA -->
                            <th>Titulo</th>
                            <th>Texto</th>
                            <th>Foto</th>
                            <th>Legenda</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($noticia = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $noticia['id'] . "</td>";
                            echo "<td>" . $noticia['titulo'] . "</td>";
                            echo "<td>" . $noticia['texto'] . "</td>";

                            $id_noticia = $noticia['id'];
                            $sqlfoto = "SELECT * FROM fotos where id_noticia='$id_noticia'";
                            $result1 = mysqli_query($conn, $sqlfoto);
                            while ($foto = mysqli_fetch_assoc($result1)) {
                                if ($foto['foto'] == "") {
                                    echo "<td> -- </td>";
                                    echo "<td> -- </td>";
                                } else {
echo "<td> <img class='img-lista-noticias' src='../uploads/fotos/" . $foto['foto'] . "' alt=''></td>";
                                    echo "<td>" . $foto['legenda'] . "</td>";
                                }
                            }
                            echo "<td><a href='javascript:excluir(" . $id_noticia . ")'>&#10060;</a> <a href='#'>&#128221;</a></td>";
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