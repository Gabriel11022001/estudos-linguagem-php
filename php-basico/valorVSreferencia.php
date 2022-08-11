<?php

/**
 * No exemplo abaixo, estou realizando uma atribuição por valor,
 * ou seja, quando eu defino que $b = $a, a variável $ receberá uma cópia
 * do valor da variável $a
 */
$a = "Gabriel";
$b = $a;
echo $a . "</br>";
echo $b . "</br>";
/**
 * Agora, eu implementei uma atribuição por referência, então,
 * a variável $b agora vai apontar para o mesmo endereço de memória
 * da variável $a, então, se eu alterar o valor de $b, o valor de $a
 * também será alterado e se eu alterar o valor de $a, o valor de $b
 * também será alterado, no exemplo abaixo, tanto o valor de $a como de $b
 * será 12
 */
$b = &$a;
$b = 12;
echo $a . "</br>";
echo $b . "</br>";
// No exemplo abaixo, eu passo a variável $valor como referência e incremento o valor 1
function incrementarValor(int &$valor)
{
    $valor++;
}
$valor = 12;
incrementarValor($valor);
incrementarValor($valor);
var_dump($valor);
echo "</br>";