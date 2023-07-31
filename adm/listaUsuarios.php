<?php
    require_once("conexao.php");

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários Cadastrados</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <h1>Usuários Cadastrados no Sistema</h1>

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
                    echo "<td>Ações</td>";
                echo "</tr>";
            }
        ?>
        </tbody>

    </table>
    
</body>
</html>