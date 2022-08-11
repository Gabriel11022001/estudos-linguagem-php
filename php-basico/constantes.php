<?php

define("NOME", "Gabriel");
define("IDADE", 21);
var_dump(NOME, IDADE);
echo "</br>";
/**
 * Não é possível alterar o valor de uma constante, a partir do momento
 */
// NOME = "Pedro";
// IDADE = 19;
const NOVO_NOME = "Pedro";
echo NOVO_NOME . "</br>";