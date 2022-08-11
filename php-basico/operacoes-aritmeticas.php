<?php

$valor1 = 12;
$valor2 = 33.87;
// Soma
$soma = $valor1 + $valor2;
echo "Soma entre ${valor1} e ${valor2} é igual a ${soma}</br>";
// Subtração
$subtracao = $valor2 - $valor1;
echo "A subtração de ${valor2} por ${valor1} é igual a ${subtracao}</br>";
// Multiplicação
$multiplicacao = $valor1 * $valor2;
echo "${valor1} X ${valor2} é igual a ${multiplicacao}</br>";
// Divisão
$divisao = $valor1 / $valor2;
echo "${valor1} / ${valor2} é igual a ${divisao}</br>";
$resto = 12 % 2;
if ($resto == 0) {
    echo "O resto da divisão de 12 por 2 é igual a 0!</br>";
} else {
    echo "O resto da divisão de 12 por 2 é diferente de 0!</br>";
}