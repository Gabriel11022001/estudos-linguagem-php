<?php

/**
 * A superglobal $_POST armazena os dados que são enviados
 * no corpo da requisição por meio do método http post
 */
if (isset($_POST["btn_enviar"])) {
    $nome = $_POST["nome"];
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "</br>";
    if (empty($nome)) {
        echo "Digite o seu nome!</br>";
    } else {
        echo "Seu nome é: ${nome}</br>";
        var_dump($_POST["btn_enviar"]);
        echo "</br>";
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilizando $_POST</title>
</head>
<body>
    <form action="#" method="post">
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="nome" id="nome">
        <br>
        <button type="submit" name="btn_enviar">Enviar</button>
    </form>
</body>
</html>
