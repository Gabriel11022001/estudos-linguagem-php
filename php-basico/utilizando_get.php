<?php

/**
 * $_GET é uma superglobal que armazena os dados que são enviados
 * no cabeçalho da requisição por meio do método http get, além de ser um array.
 */
if (!empty($_GET["nome"]) && !empty($_GET["idade"])) {
    echo "Nome: " . $_GET["nome"] . "</br>";
    echo "Idade: " . $_GET["idade"] . "</br>";
}