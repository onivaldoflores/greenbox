<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            position: absolute;
            top: 50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
    </style>

</head>
<body>
    <div>
        <form action="testlogin.php" method="POST">
            <fieldset>
                <legend>Acesso ao sistema</legend>
                <input type="text" name="login" class="campoLogin" placeholder="E-mail">
                <br><br>
                <input type="password" name="senha" class="campoLogin" placeholder="Senha">
                <br><br>
                <input type="submit" name="entrar" class="btnLogin" value="Entrar">
            </fieldset>
        </form>
    </div>    
</body>
</html>