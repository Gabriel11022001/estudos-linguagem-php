<?php

require_once "Pessoa.php";

$pessoa1 = new Pessoa("Gabriel Rodrigues dos Santos", "(14) 99877-6565", 21);
$pessoa1->apresentarDadosPessoa();
echo $pessoa1;
$pessoa2 = new Pessoa("Maria Fernanda da Silva", "(13) 99887-9988", 22);
echo $pessoa2;