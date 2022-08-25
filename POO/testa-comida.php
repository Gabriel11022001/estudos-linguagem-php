<?php

require_once "Pessoa2.php";
require_once "Arroz.php";
require_once "Feijao.php";

$pessoa1 = new Pessoa2("Gabriel", 87);
$pessoa2 = new Pessoa2("Maria", 98.76);
$arroz = new Arroz(1);
$feijao = new Feijao(0.8);
$pessoa1->comer($arroz);
$pessoa1->comer($feijao);
echo "Peso da pessoa 1: " . $pessoa1->getPeso() . "</br>";
$pessoa2->comer($arroz);
$pessoa2->comer($feijao);
echo "Peso da pessoa 2: " . $pessoa2->getPeso() . "</br>";