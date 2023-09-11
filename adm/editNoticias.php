<?php
session_start();

if (!isset($_SESSION['login']) == true) {
    unset($_SESSION['login']);
    session_destroy();
    header('location:index.php');
}

$id_noticia = $_GET["id"];
require_once('conexao.php');
$sql_noticia="SELECT * FROM noticias WHERE id='$id_noticia'";
$result_noticia = mysqli_query($conn, $sql_noticia);

while($noticia = mysqli_fetch_assoc($result_noticia)){

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema administrativo</title>
    <link rel="stylesheet" href="estilo/estilo.css">
    <script>
        function redirect_lista() {
            window.location.href = "listaNoticias.php";
        }

        function redirect_voltar() {
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
                    / <a href="cadNoticias.php">Cadastro de Notícias</a>
                </p>
                <br>
                <h1>Cadastro de Notícias</h1>
            </div>

            <section class="formulario">
                <div>
                    <form action="noticiaDB.php" method="POST" enctype="multipart/form-data">

<input type="text" name="titulo" class="campoForm" placeholder="Título da Notícia" value="<?php echo $noticia["titulo"]; ?>">
                        <br><br>
<textarea name="texto" class="campoForm" placeholder="Texto da Notícia"><?php echo $noticia["texto"]; ?></textarea>

<?php
$sql_foto = "SELECT * FROM fotos WHERE id_noticia = '$id_noticia'";
$result_foto = mysqli_query($conn, $sql_foto);
while($foto = mysqli_fetch_assoc($result_foto)){

if($foto['foto'] != ''){
    echo "<p style='color:#000;'>Foto já existente na notícia:</p>";
    echo "<img class='img-lista-noticias' src='../uploads/fotos/" . $foto['foto'] . "' alt=''>"; 
}

?>
<label for="foto" class="campoFoto">Anexar foto</label>
<input type="file" name="foto" id="foto">
<input type="text" name="legenda" class="campoForm" placeholder="Legenda da Foto" value="<?php echo $foto['legenda'] ?>">

<?php
}
?>
                        <br><br>

                        <input type="submit" name="Salvar" class="btnEnviar" value="Salvar">
                        <input type="button" name="Buscar" onclick="redirect_lista()" class="btnEnviar" value="Buscar Notícia">
                        <input type="button" name="Buscar" onclick="redirect_voltar()" class="btnEnviar" value="Voltar">

                    </form>
                </div>
            </section>




        </div>
    </div>

</body>

</html>

<?php
}
?>