<?php

// O operador de atribuição é o operador (=)
$nome = "Gabriel";
echo "nome: " . $nome . "</br>";
$numero = 12;
// Atribui a variavel $numero o próprio valor dela mais 1
$numero = $numero + 1;
// Incrementa em 1 o valor da variável $numero
$numero++;
echo "Número: ${numero}</br>";
$numero = $numero + 3.76;
echo "Número: ${numero}</br>";
// Atribui a variável $numero o valor dela menos 1
$numero = $numero - 1;
// Decrementa em 1 o valor da variável $numero
$numero--;
echo $numero . "</br>";
// Atribui a variável $numero o valor dela vezes 2
$numero = $numero * 2;
$numero *= 2;
echo $numero . "</br>";
// Atribui a variável $numero o valor dela dividido por 33
$numero = $numero / 33;
$numero /= 33;
echo $numero . "</br>";
// A variável $numero vai receber o valor dela concatenado com 12
$numero .= 12;
echo $numero . "</br>";
$nome = $nome . "Teste";
$nome .= "Texto novo!";
echo $nome . "</br>";