<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/estiloformularios.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <script src="js/mobile.js" type="text/javascript"></script>
    <script src="mascaras.js" type="text/javascript"></script>


    <!-- Bootstrap -->
    <link href="css_bootstrap/bootstrap.min.css" rel="stylesheet" />

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"/></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js_bootstrap/bootstrap.min.js"></script>
</head>

<body>


    <?php
    include 'header_admin.php';
    //1º PASSO: Incluir o arquivo de conexão de dados
    include('conexao_bd.php');

    //2º PASSO: Capturar os valores de entrada de dados
    $txtDescricao = $_POST["txtDescricao"];

    //3º PASSO: Escrever o comando SQL
    $sql = "INSERT INTO forma_pagamento(descricao) VALUES ('$txtDescricao')";

    if (executarComando($sql)) {
        echo "<h2>Cadastro realizado com sucesso!</h2>";
    } else {
        echo "<h2>Houve um erro no cadastro!</h2>";
    }
    ?>

    <a href="forma_pagamento_cadastro.php">
        <input type="button" value="Voltar" class="botao" />
    </a>

    <?php
    include 'footer_admin.php';
    ?>


</body>

</html>