<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
<div id="espaco-login">
        <form action="usuarioDB.php" method="POST">
            <fieldset>
                <legend>Cadastro de Usuários</legend>
                <input type="text" name="nome" class="campoForm" placeholder="Nome">
                <br><br>
                <input type="text" name="email" class="campoForm" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" class="campoForm" placeholder="Senha">
                <br><br>
                <input type="submit" name="Salvar" class="btnEnviar" value="Salvar">
            </fieldset>
        </form>
    </div>
</body>
</html>