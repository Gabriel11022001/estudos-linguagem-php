<?php

require_once "Animal.php";

class Cachorro extends Animal
{

    /**
     * Estou implementando o método abstrato andar() da super classe
     * Animal
     */
    public function andar(): void
    {
        echo "O " . parent::getNomeAnimal() . " , que é um cachorro, está andando!</br>";
    }
}