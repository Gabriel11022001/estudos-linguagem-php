<?php

require_once "Cliente.php";
require_once "Funcionario.php";
require_once "PrimeiraEmpresa.php";

try {
    $cliente1 = new Cliente("Gabriel", "123.456.789-09");
    $cliente2 = new Cliente("Pedro", "124.543.554-87");
    $funcionario1 = new Funcionario("Gabriel Santos", "123.987.654-09");
    $funcionario2 = new Funcionario("Matheus", "456.654.123-98");
    $empresa1 = new PrimeiraEmpresa();
    $empresa1->guarda($cliente1);
    $empresa1->guarda($funcionario1);
    $empresa1->apresentarPessoas();
    // $empresa1->guarda($funcionario1);
} catch (Exception $e) {
    echo $e->getMessage() . "</br>";
}