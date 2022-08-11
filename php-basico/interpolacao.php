<?php

$nome = "Gabriel";
$sobrenome = "Rodrigues";
$nomeCompleto = $nome . " " . $sobrenome;
echo "Nome completo: ${nomeCompleto}</br>";
$nomeCompleto = "${nome} ${sobrenome}";
echo "Nome completo interpolando de outra forma: ${nomeCompleto}</br>";

