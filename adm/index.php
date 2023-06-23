<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/estilo.css">
    <title>Document</title>
</head>
<body>
    <div id="espaco-login">
        <form action="testlogin.php" method="POST">
            <fieldset>
                <legend>Acesso ao sistema</legend>
                <input type="text" name="login" class="campoForm" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" class="campoForm" placeholder="Senha">
                <br><br>
                <input type="submit" name="entrar" class="btnEnviar" value="Entrar">
            </fieldset>
        </form>
    </div>    
</body>
</html>