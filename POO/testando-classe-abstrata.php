<?php

require_once "Cachorro.php";

/**
 * Uma classe abstrata não pode ser instanciada
 */
// $animal = new Animal("Cachorrinho");
$cachorro = new Cachorro("Cachorrinho feio");
$cachorro->comer("ração");
$cachorro->andar();