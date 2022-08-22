<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, string $telefone, int $idade, float $salario)
    {
        // Invocando o construtor da classe mãe
        parent::__construct($nome, $telefone, $idade);
        $this->salario = $salario;
    }
    public function setSalario(float $salario): void
    {   
        $this->salario = $salario;
    }
    public function getSalario(): float
    {
        return $this->salario;
    }
    public function __toString(): string
    {
        // Invocando o método __toString() da classe mãe
        return parent::__toString() . " | Salário: R$" . $this->getSalario() . "</br>";
    }
    // Sobreescrevendo o método apresentarDadosPessoa() da classe Pessoa
    public function apresentarDadosPessoa(): void
    {
        parent::apresentarDadosPessoa();
        echo "Salário: R$" . number_format($this->getSalario(), 2) . "</br>";
    }
}