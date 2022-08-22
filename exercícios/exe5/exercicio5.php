<?php

require_once "GerenciaCriptografia.php";

$dado = 1234;
GerenciaCriptografia::criptografar($dado);
echo $dado . "</br>";
GerenciaCriptografia::descriptografar($dado);
echo $dado . "</br>";