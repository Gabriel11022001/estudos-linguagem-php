<?php

require_once "Civic.php";
require_once "Saveiro.php";
require_once "ApresentadorDeCarros.php";

$carro1 = new Civic();
$carro1->setModelo("Honda Civic 2.0");
$carro1->setCombustivel("Flex");
$carro1->apresentarCarro();
ApresentadorDeCarros::apresentarCarro($carro1);
$carro2 = new Saveiro();
$carro2->setModelo("Saveiro 1.0");
$carro2->setCombustivel("Flex");
ApresentadorDeCarros::apresentarCarro($carro2);