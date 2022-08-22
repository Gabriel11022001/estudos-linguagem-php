<?php

require_once "Carro.php";

class ApresentadorDeCarros
{

    public static function apresentarCarro(Carro $carro)
    {
        $carro->apresentarCarro();
    }
}