<?php

class Pessoa
{
    private string $nome;
    private int $idade;
    private string $telefone;

    public function __construct(
        string $nome,
        string $telefone,
        int $idade
    )
    {
        echo "Invocando o construtor da classe pessoa!</br>";
        $this->nome = $nome;
        $this->idade = $idade;
        $this->telefone = $telefone;
    }
    public function apresentarDadosPessoa()
    {
        echo "Nome: " . $this->telefone . "</br>";
        echo "Idade: " . $this->idade . "</br>";
        echo "Telefone: " . $this->telefone . "</br>";
    }
    public function __toString(): string
    {
        return "Nome: " . $this->nome . " | Idade: " . $this->idade . " | Telefone: " . $this->telefone . "</br>";
    }
}