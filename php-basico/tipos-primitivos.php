<?php

/*
 * Para adicionar uma quebra de linha eu posso utilizar
 * a concatenação com a tag "</br>"
 * */
echo 1 + 23 . "</br>";
echo 1.98 + 23 . "</br>";
echo 32 - 98 . "</br>";
/**
 * PHP é uma linguagem de tipagem dinâmica, ou seja,
 * o tipo da variável depende extritamente do valor a ela atribuído, por exemplo,
 * se eu definir que uma variável está armazenando o valor 12, ela será do tipo int,
 * se eu definir que uma variável está armazenando o valor 12.0, ela será do tipo float
 */
// Nesse ponto, o tipo da variável $var era int
$var = 12;
var_dump($var);
echo "</br>";
// Nesse ponto, o tipo da variável $var é float
$var = 12.0;
// A função var_dump(valor) me demonstra o valor e o tipo de um dado
var_dump($var);
echo "</br>";
// Tipo inteiro
$idade = 12;
echo "Sua idade é: " . $idade . "</br>";
$valor1 = 12;
$valor2 = 23;
$soma = $valor1 + $valor2;
echo "A soma entre ${valor1} e ${valor2} é igual a ${soma}</br>";
// Tipo float
$salario = 3500.50;
var_dump($salario);
echo "</br>";
echo "Salário: R$" . number_format($salario, 2) . "</br>";
$minimoFloat = PHP_FLOAT_MIN;
$maxFloat = PHP_FLOAT_MAX;
echo "Mínimo float: ${minimoFloat}</br>";
echo "Máximo float: ${maxFloat}</br>";
echo 0.005 . "</br>";
// Tipo string
$nome = "Gabriel Rodrigues dos Santos";
echo "Nome: ${nome}</br>";
$nomecomAspasSimples = 'Pedro';
echo "Nome com aspas simples: ${nomecomAspasSimples}</br>";
$nome = "Gabriel";
$sobrenome = "Rodrigues";
$nomeCompleto = $nome . " " . $sobrenome;
echo "Nome completo: ${nomeCompleto}</br>";
var_dump($nomeCompleto);
echo "</br>";
/**
 * Em php, eu posso definir strings com aspas simples('')
 * e aspas duplas(""), a diferença está no fato da interpolação, quando
 * eu utilizo uma string com aspas simples, eu não consigo interpolar como
 * $nomeCompleto = '${nome} ${sobrenome}', mas quando utilizo strings com aspas
 * duplas eu consigo, exemplo: $nomeCompleto = "${nome} ${sobrenome}"
 */
$nome = "Gabriel";
$sobrenome = 'Rodrigues';
echo $nome . ' ' . $sobrenome . "</br>";
echo "Quantidade de caracteres: " . strlen($nomeCompleto) . '</br>';
/*
 * No exemplo abaixo será apresentado ${nome} ${sobrenome} e não o valor das variáveis
 */
echo '${nome} ${sobrenome}</br>';
/**
 * No exemplo abaixo será apresentado Gabriel Rodrigues, no caso
 * o valor das variáveis $nome e $sobrenome
 */
echo "${nome} ${sobrenome}</br>";
/*
 * No exemplo abaixo, será lançado um erro pois o php irá tentar somar uma string
 * com o valor 1, e isso não é permitido
 */
// $teste = "Gabriel" + 1;
// echo $teste . "</br>";
$nome = "Gabriel";
/**
 * A função strtoupper(valor) recebe como argumento uma string
 * e retorna essa string com todos os caracteres em maíusculo, já, a função
 * strtolower(valor) recebe como argumento uma string e retorna essa string
 * com todos os caracteres em minúsculo
 */
echo strtoupper($nome) . "</br>";
echo strtolower($nome) . "</br>";
// Tipo boolean
/**
 * O tipo boolean é representado por true ou false, true pode ser representado por 1
 * e false por 0
 */
echo true . "</br>";
echo false . "</br>";
var_dump(true);
echo "</br>";
var_dump(false);
echo "</br>";
$numero1 = 12;
echo is_int($numero1) . "</br>";
// int para float
var_dump((float) 12);
echo "</br>";
// Ao converter float para int você perde o valor que vier após a vírgula
// float para int
var_dump((int) 12.98);
echo "</br>";
// operações com string
var_dump("5" + 2);
echo "</br>";
var_dump("5" . 2);
echo "</br>";
