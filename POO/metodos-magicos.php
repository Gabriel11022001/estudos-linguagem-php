<?php

require_once "Cachorro.php";

$cachorro = new Cachorro("Bile");
echo $cachorro;
$cachorro->nome = "Cachorrinho top";
echo $cachorro->nome . "</br>";