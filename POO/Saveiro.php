<?php

require_once "Carro.php";

class Saveiro extends Carro
{

    public function apresentarCarro()
    {
        echo "Apresentando a Saveiro!</br>";
        parent::apresentarCarro();
    }
}