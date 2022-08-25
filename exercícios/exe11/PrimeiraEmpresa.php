<?php

require_once "IRepositorio.php";

class PrimeiraEmpresa implements IRepositorio
{
    private array $pessoas;

    public function __construct()
    {
        $this->pessoas = array();
    }
    public function guarda(IPessoa $pessoa): void
    {
        if ($this->recupera($pessoa->getCpf()) != null) {
            throw new RuntimeException("Já existe uma pessoa cadastrada nessa empresa com esse cpf!");
        }
        $this->pessoas[] = $pessoa;
        echo $pessoa->getNome() . " cadastrado(a) com sucesso!</br>";
    }
    public function recupera(string $cpf): IPessoa|null
    {
        $pessoaConsulta = null;
        foreach ($this->pessoas as $pessoa) {
            if ($pessoa->getCpf() === $cpf) {
                $pessoaConsulta = $pessoa;
                break;
            }
        }
        return $pessoaConsulta;
    }
    public function primeiro(): void
    {
        
    }
    public function proximo(): void
    {
        
    }
    public function apresentarPessoas(): void
    {
        if (count($this->pessoas) == 0) {
            echo "Não existem pessoas cadastradas nessa empresa!</br>";
            return;
        }
        foreach ($this->pessoas as $pessoa) {
            echo "===============================================</br>";
            echo "Nome: " . $pessoa->getNome() . "</br>";
            echo "Cpf: " . $pessoa->getCpf() . "</br>";
            echo "===============================================</br>";
        }
    }
}