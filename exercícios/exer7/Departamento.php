<?php

require_once "Funcionario.php";

class Departamento
{
    private string $nome;
    private array $funcionarios;

    public function __construct(string $nome)
    {   
        $this->nome = $nome;
        $this->funcionarios = [];
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function registrarFuncionario(Funcionario $funcionario): void
    {
        if (count($this->funcionarios) === 100) {
            throw new Exception("Não é mais possível registrar funcionários nesse departamento!");
        }
        $this->funcionarios[] = $funcionario;
    }
    public function getFuncionarios(): array
    {
        return $this->funcionarios;
    }
    public function apresentarFuncionariosDepartamento(): void
    {
        echo "Funcionários do departamento: " . $this->getNome() . "</br>";
        foreach ($this->getFuncionarios() as $funcionario) {
            echo "=========================================</br>";
            echo $funcionario;
            echo "=========================================</br>";
        }
    }
}