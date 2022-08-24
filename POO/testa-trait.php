<?php

require_once "Usuario.php";

$usuario = new Usuario();
echo $usuario->validarString("Gabriel") . "</br>";
var_dump($usuario->validarString(""));
echo "</br>";
var_dump($usuario->validarMelhor("Gabriel"));
echo "</br>";
var_dump($usuario->validarMelhor(""));
echo "</br>";
var_dump($usuario->validarMelhor(" "));