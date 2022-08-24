<?php

class ContaCorrente
{
    private string $titular;
    private float $saldo;

    public function __construct(string $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
    }
    public function setTitular(string $titular): void
    {
        $this->titular = $titular;
    }
    public function getTitular(): string
    {
        return $this->titular;
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    /**
     * Método para depositar um valor na conta
     */
    public function depositar(float $valor): void
    {   
        if ($valor <= 0) {
            throw new InvalidArgumentException("Você não pode depositar esse valor!");
        }
        $this->saldo += $valor;
        echo "Depósito de R$" . number_format($valor, 2) . " realizado com sucesso!</br>";
    }
    /**
     * Método para sacar um valor da conta
     */
    public function sacar(float $valor): void
    {
        if ($this->saldo == 0) {
            throw new RuntimeException("Você não possui saldo na conta!");
        }
        if ($valor <= 0) {
            throw new InvalidArgumentException("Não é possível sacar R$0,00!");
        }
        $valorComTaxa = $valor + (0.05 * $valor);
        if ($valorComTaxa > $this->saldo) {
            throw new InvalidArgumentException("Saldo inssuficiente!");
        }
        $this->saldo -= $valorComTaxa;
        echo "Saque de R$" . number_format($valorComTaxa, 2) . " efetuado com sucesso!</br>";
    }
    /**
     * Método para transferir um valor da conta que está invocando o método
     * para a conta que está sendo passada como argumento
     */
    public function transferir(ContaCorrente $contaDestino, float $valor): void
    {       
        if ($valor <= 0) {
            throw new InvalidArgumentException("Não é possível transferir R$0,00!");
        }
        if ($this->saldo <= 0) {
            throw new RuntimeException("Você não possui saldo na conta!");
        }
        if ($valor > $this->saldo) {
            throw new InvalidArgumentException("Saldo inssuficiente!");
        }
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
        echo "Transferencia de R$" . number_format($valor, 2) . " efetuado com sucesso para a conta de destino!</br>";
    }
    public function apresentarDadosConta(): void
    {
        echo "================================</br>";
        echo "Titular: " . $this->getTitular() . "</br>";
        echo "Saldo: R$" . number_format($this->getSaldo(), 2) . "</br>";
        echo "================================</br>";
    }
}