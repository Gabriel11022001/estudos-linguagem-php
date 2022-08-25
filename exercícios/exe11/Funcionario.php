<?php

require_once "IPessoa.php";

class Funcionario implements IPessoa
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
        echo "Retornando o nome do funcionário!</br>";
        return $this->nome;
    }
    public function getCpf(): string
    {
        echo "Retornando o cpf do funcionário!</br>";
        return $this->cpf;
    }
    public function setNome(string $nome): void
    {
        echo "Definindo o nome do funcionário!</br>";
        $this->nome = $nome;
    }
    public function setCpf(string $cpf): void
    {
        echo "Definindo o cpf do funcionário!</br>";
        $this->cpf = $cpf;
    }
}