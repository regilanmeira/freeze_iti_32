<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- CABEÇALHO -->
 <?php
    include 'header.php'
        ?>


    <?php
        include 'conexao_bd.php';

        $nome = $_POST["txtNome"];
        $telefone = $_POST["txtTelefone"];
        $endereco = $_POST["txtEndereco"];
        $produto = $_POST["listaProduto"];
        $quantidade = $_POST["listaQuantidade"];
        $forma_pagamento = $_POST["listaFormaPagamento"];

        $sql = "INSERT INTO encomenda (nome,telefone,endereco_entrega,produto,quantidade,forma_pagamento) ";
        $sql.= " VALUES ('$nome','$telefone','$endereco','$produto','$quantidade','$forma_pagamento') ";

        if (executarComando($sql))
        {
            echo "<h1>A encomenda foi cadastrada. Aguarde nosso contato. </h1>";
        }
        else
        {
            echo "<h1>Não foi possível cadastrar!</h1>";
        }


    ?>
</body>
</html>