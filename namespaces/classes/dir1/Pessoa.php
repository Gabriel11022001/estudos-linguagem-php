<?php

namespace NamespacePessoa1;

class Pessoa
{
    private string $nome;

    public function __construct(string $nome)
    {
        echo "Invocando o construtor da classe pessoa do namespace " . __NAMESPACE__ . "</br>";
        $this->nome = $nome;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
}