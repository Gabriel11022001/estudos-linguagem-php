<?php

require_once "classes/dir1/Pessoa.php";
require_once "classes/dir2/Pessoa.php";

// $pessoa1 = new NamespacePessoa1\Pessoa("Gabriel");
// $pessoa2 = new NamespacePessoa2\Pessoa("Pedro");
/**
 * Quando eu quero utilizar em um arquivo duas classes com o mesmo nome,
 * eu posso utilizar apelidos para as classes.
 */
use NamespacePessoa1\Pessoa as Pessoa1;
use NamespacePessoa2\Pessoa as Pessoa2;

$pessoa1 = new Pessoa1("Gabriel");
$pessoa2 = new Pessoa2("Maria");