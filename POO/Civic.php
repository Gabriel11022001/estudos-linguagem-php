<?php

require_once "Carro.php";

class Civic extends Carro
{

    public function apresentarCarro()
    {
        echo "Apresentando o Civic!</br>";
        parent::apresentarCarro();
    }
}