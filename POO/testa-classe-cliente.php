<?php

require_once "Cliente.php";

$cliente1 = new Cliente();
$cliente2 = new Cliente();
$cliente1->nome = "Gabriel Rodrigues dos Santos";
$cliente1->sexo = "Masculino";
$cliente1->dataNascimento = new DateTime("11-02-2001");
$cliente1->cpf = "123.456.789-99";
$cliente2->nome = "Gustavo Pereira da Silva";
$cliente2->sexo = "Masculino";
$cliente2->dataNascimento = new DateTime("03-09-2002");
$cliente2->cpf = "123.543.234-98";
$cliente1->apresentarCliente();
echo "====================================================</br>";
$cliente2->apresentarCliente();