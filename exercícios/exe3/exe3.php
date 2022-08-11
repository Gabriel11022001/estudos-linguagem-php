<?php

require_once "Retangulo.php";

$retangulo1 = new Retangulo(12, 44);
$retangulo2 = new Retangulo(5, 6);
$retangulo3 = new Retangulo(6, 5.76);
$retangulo1->calcularArea();
$retangulo2->calcularArea();
$retangulo3->calcularArea();
echo $retangulo1 . "</br>";
echo $retangulo2 . "</br>";
echo $retangulo3 . "</br>";