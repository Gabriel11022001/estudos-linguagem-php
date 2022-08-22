<?php

require_once "Funcionario.php";

$funcionario1 = new Funcionario("Gabriel", "(13) 9877-6545", 22, 5000);
$funcionario1->setNome("Gabriel Rodrigues");
echo $funcionario1->getNome() . "</br>";
echo $funcionario1;
$funcionario2 = new Funcionario(
    "Pedro",
    "(11) 99877-1234",
    23,
    4500
);
echo $funcionario2;
echo "Salário do primeiro funcionário: R$" . number_format($funcionario1->getSalario(), 2) . "</br>";
echo "Salário do segundo funcionário: R$" . number_format($funcionario2->getSalario(), 2) . "</br>";
$funcionario1->apresentarDadosPessoa();
$funcionario2->apresentarDadosPessoa();