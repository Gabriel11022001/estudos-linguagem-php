<?php

require_once "IPessoa.php";

class Cliente implements IPessoa
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function getNome(): string
    {
        echo "Retornando o nome do cliente!</br>";
        return $this->nome;
    }
    public function getCpf(): string
    {
        echo "Retornando o cpf do cliente!</br>";
        return $this->cpf;
    }
    public function setNome(string $nome): void
    {
        echo "Definindo o nome do cliente!</br>";
        $this->nome = $nome;
    }
    public function setCpf(string $cpf): void
    {
        echo "Definindo o cpf do cliente!</br>";
        $this->cpf = $cpf;
    }
}