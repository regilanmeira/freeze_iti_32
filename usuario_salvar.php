<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    include "conexao_bd.php";

    $login_usuario = $_POST["txtLoginUsuario"];
    $senha_usuario = $_POST["txtSenhaUsuario"];

    $senha_usuario = password_hash($senha_usuario,1);

    $sql = "INSERT INTO usuario(login_usuario,senha_usuario) ";
    $sql .= " VALUES ('$login_usuario','$senha_usuario')";

    if (executarComando($sql))
    {
        echo "<h1>Usuario criado!</h1>";
    }
    else
    {
        echo "<h1>Erro!</h1>";
    }
    ?>
</body>
</html>