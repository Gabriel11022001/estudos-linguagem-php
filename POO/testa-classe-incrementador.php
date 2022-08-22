<?php

require_once "Incrementador.php";

$incrementador = new Incrementador();
$incrementador->incrementar();
// Incrementador::acessarValor2();
Incrementador::incrementar2();
$incrementador2 = new Incrementador();
$incrementador3 = new Incrementador();
echo $incrementador->getValor() . "</br>";
echo $incrementador2->getValor() . "</br>";
echo $incrementador3->getValor() . "</br>";