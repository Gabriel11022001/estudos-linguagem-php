<?php

require_once "CartaoWeb.php";
require_once "CartaoDiaDosNamorados.php";
require_once "CartaoNatal.php";

$cartaoDiaDosNamorados = new CartaoDiaDosNamorados("Maria");
echo "Mensagem do cartão do dia dos namorados!</br>";
echo $cartaoDiaDosNamorados->retornarMensagem("Gabriel") . "</br>";
$cartaoNatal = new CartaoNatal("Pedro");
echo "Mensagem do cartão de natal!</br>";
echo $cartaoNatal->retornarMensagem("Gabriel") . "</br>";