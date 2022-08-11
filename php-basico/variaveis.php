<?php

/**
 * Em php, as variáveis devem iniciar com o caracter ($)
 */
$nome = "Gabriel Rodrigues dos Santos";
echo "Nome: ${nome}</br>";
$numeroA = 33;
$numeroB = 98.76;
var_dump($numeroA);
echo "</br>";
var_dump($numeroB);
echo "</br>";
$soma = $numeroA + $numeroB;
echo "Soma: " . $soma . "</br>";
$nome = "";
/**
 * A função isset(var) verifica se uma variável possui valor setado,
 * mesmo que a variável possua o valor definido como uma string vazia, a função
 * isset vai retornar true, ela só vai retornar false se o valor da variável for igual a null
 */
echo isset($nome);
echo "</br>";
$variavelComValorNull = null;
var_dump(isset($variavelComValorNull));
echo "</br>";
/**
 * A função unset destroi uma variável
 */
$idade = 12;
var_dump($idade);
echo "</br>";
unset($idade);
// var_dump($idade);
/**
 * Em php, o tipo da variável depende do valor a ela atribuído, isso porque
 * php é uma linguagem de tipagem dinâmica, não existe uma tipagem forte como em Java
 */
$valor = 12;
var_dump($valor);
echo "</br>";
$valor = "Olá Mundo!";
var_dump($valor);
echo "</br>";
// Nomenclaturas de variáveis
// Os nomes das variáveis não podem começar com número ou caracteres especiais
// $1nome = "Gabriel";
// $*nome = "Gabriel";
// O único caracter especial permitido no ínicio é o (_)
$_come_fruta = true;
// Também não é possível adicionar o caracter (%) nos nomes das variáveis
// $%teste = "Teste";
// $te%ste = "Teste";
// $teste% = "Teste";
print_r($_SERVER);