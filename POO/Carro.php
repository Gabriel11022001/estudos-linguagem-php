<?php

class Carro
{

    private string $modelo;
    private string $combustivel;

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }
    public function getModelo(): string
    {
        return $this->modelo;
    }
    public function setCombustivel(string $combustivel)
    {
        $this->combustivel = $combustivel;
    }
    public function getCombustivel(): string
    {
        return $this->combustivel;
    }
    public function apresentarCarro()
    {
        echo "Modelo: " . $this->modelo . "</br>";
        echo "Combustível: " . $this->combustivel . "</br>";
    }
}