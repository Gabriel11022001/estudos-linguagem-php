<?php

require_once "ContaCorrente.php";

try {
    $conta1 = new ContaCorrente("Gabriel");
    $conta2 = new ContaCorrente("Maria");
    $conta1->depositar(3000);
    $conta1->depositar(2500);
    // $conta1->depositar(0);
    $conta2->depositar(13000);
    $conta1->sacar(1300);
    $conta1->apresentarDadosConta();
    $conta2->apresentarDadosConta();
    // $conta2->sacar(30000000000);
    // $conta2->sacar(0);
    $conta2->transferir($conta1, 2000);
    $conta1->apresentarDadosConta();
    $conta2->apresentarDadosConta();
    // $conta2->transferir($conta1, 400000);
} catch (Exception $e) {
    echo $e->getMessage() . "</br>";
}