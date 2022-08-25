<?php

// include "primeiro-arquivo.php";
/**
 * Se eu utilizo o include, eu carrego o arquivo, porém, se
 * eu utilizar o include para carregar o mesmo arquivo novamente,
 * pode ocorrer um erro pois se neste arquivo tiver uma função o include
 * vai tentar incluir a função duas vezes e eu não posso possuir duas funções com
 * o mesmo nome do mesmo escopo, para evitar que um arquivo seja incluido duas
 * vezes, eu utilizo o include_once, o include_once carrega o arquivo uma única
 * vez.
 */
include_once "primeiro-arquivo.php";
include_once "primeiro-arquivo.php";
/**
 * O carregamento acima ocorre com sucesso pois estou utilizando o include_once,
 * mas se eu estivesse utilizando o include não iria funcionar, isso pois o include iria
 * tentar carregar o arquivo duas vezes e o include_once evita isso pois ele carrega o arquivo
 * uma única vez.
 */

echo $nome . "</br>";
echo $sexo . "</br>";
echo $idade . "</br>";
echo somar(12, 44) . "</br>";

/**
 * O include e o require fazem a mesma coisa, a diferença é que
 * se eu tento carregar um arquivo com o include e esse arquivo não existe
 * no caminho especificado, o include lança um aviso e a aplicação não é finalizada,
 * mas se eu tentar carregar um arquivo que não existe no caminho especificado utilizando o require,
 * a minha aplicaçãos seré encerrada.
 */
include "teste.php";
echo "<h1 style='color: red;'>Continuando a aplicação após o include!</h1></br>";
require "teste.php";
echo "Continuando após o require!</br>";