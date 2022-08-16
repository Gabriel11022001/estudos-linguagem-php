<?php

class Cliente
{
    public string $nome;
    public string $sexo;
    public string $cpf;
    public DateTime $dataNascimento;
    private int $idade;

    public function apresentarCliente()
    {
        /**
         * No escopo de uma classe, para acessar os membros da classe eu
         * devo utilizar a variável especial $this->nome do membro
         */
        echo "Nome: " . $this->nome . "</br>";
        echo "Sexo: " . $this->sexo . "</br>";
        echo "Cpf: " . $this->cpf . "</br>";
        echo "Data de nascimento: " . $this->dataNascimento->format("d-m-Y") . "</br>";
        $this->calcularIdade();
        echo "Idade: " .$this->idade . " anos</br>";
    }
    private function calcularIdade()
    {
        $dataAtual = new DateTime();
        $this->idade = $dataAtual->diff($this->dataNascimento)->y;
    }
}