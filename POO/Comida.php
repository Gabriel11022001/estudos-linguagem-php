<?php

class Comida
{
    private float $peso;

    public function __construct(float $peso)
    {
        $this->peso = $peso;
    }
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }
    public function getPeso(): float
    {
        return $this->peso;
    }
}