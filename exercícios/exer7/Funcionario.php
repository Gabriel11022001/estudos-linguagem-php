<?php

class Funcionario
{
    private string $nome;
    private float $salario;
    private string $rg;
    private DateTime $dataRegistro;

    public function __construct(
        string $nome,
        float $salario,
        string $rg,
        DateTime $dataRegistro
    )
    {
        $this->setNome($nome);
        $this->setSalario($salario);
        $this->setDataRegistro($dataRegistro);
        $this->setRg($rg);
    }
    public function setNome(string $nome): void
    {   
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function setRg(string $rg): void
    {
        $this->rg = $rg;
    }
    public function getRg(): string
    {
        return $this->rg;
    }
    public function setDataRegistro(DateTime $dataRegistro): void
    {
        $this->dataRegistro = $dataRegistro;
    }
    public function getDataRegistro(): DateTime
    {
        return $this->dataRegistro;
    }
    public function setSalario(float $salario): void
    {
        if ($salario <= 0) {
            throw new InvalidArgumentException("Você não pode informar esse salário!");
        }
        $this->salario = $salario;
    }
    public function getSalario(): float
    {
        return $this->salario;
    }
    public function aumentarSalario(float $valor): void
    {
        if ($valor <= 0) {
            throw new InvalidArgumentException("Você não pode aumentar o salário do funcionário em R$" . $valor . "!");
        }
        $this->salario += $valor;
        echo "Salário aumentado com sucesso em R$" . number_format($valor, 2) . "</br>";
    }
    public function __toString(): string
    {
        return "Nome: " . $this->getNome() . "</br>Salário: R$" . number_format($this->getSalario()) . "</br>Rg: " . $this->getRg() . "</br>Data de registro: " . $this->getDataRegistro()->format("d-m-Y") . "</br>";
    }
}