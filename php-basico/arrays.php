<?php

/**
 * Em php, os arrays não possuem tipagem, ou seja, eu posso
 * adicionar diferentes tipos de dados em um mesmo array
 */
$lista = ["Gabriel", 11, 12.87, false, null];
print_r($lista);
echo "</br>";
echo $lista[0] . "</br>";
echo $lista[1] . "</br>";
echo $lista[2] . "</br>";
echo $lista[3] . "</br>";
echo $lista[4] . "</br>";
$lista[0] = "Eduardo";
$lista[1] = "Teste";
print_r($lista);
echo "</br>";
