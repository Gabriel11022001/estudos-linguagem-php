<?php

use function PHPSTORM_META\type;

require_once "Comida.php";

class Pessoa2
{
    private string $nome;
    private float $peso;

    public function __construct(string $nome, float $peso)
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }
    public function getPeso(): float
    {
        return $this->peso;
    }
    public function comer(Comida $comida): void
    {
        $this->peso += $comida->getPeso();
        var_dump($comida);
        echo "</br>";
    }
}