<?php

require_once "CalculaMedia.php";

$primeiraNota = rand(1, 10);
$segundaNota = rand(1, 10);
$terceiraNota = rand(1, 10);
$media = CalculaMedia::calcularMedia($primeiraNota, $segundaNota, $terceiraNota);
echo "A média entre ${primeiraNota}, ${segundaNota}, ${terceiraNota} é igual a ${media}</br>";