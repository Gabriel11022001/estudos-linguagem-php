<?php

/**
 * Em classes abstratas eu posso possuir métodos abstratos e métodos concretos,
 * eu também não posso instanciar objetos de classes abstratas, somente de classes
 * concretas
 */
abstract class Animal
{

    private string $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
    public function comer(string $comida): void
    {
        echo "O animal " . $this->nome . " está comendo " . $comida . "!</br>";
    }
    /**
     * Esse método é um método abstrato, eu vou ser obrigado a implementar esse método
     * nas classes filhas!
     */
    abstract function andar(): void;
    public function getNomeAnimal(): string
    {
        return $this->nome;
    }
}