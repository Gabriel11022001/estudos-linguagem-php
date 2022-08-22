<?php

require_once "IAreaCalculavel.php";

class Quadrado implements IAreaCalculavel
{
    private float $altura;
    private float $largura;
    private float $area;

    public function __construct(float $largura, float $altura)
    {
        $this->setLargura($largura);
        $this->setAltura($altura);
        $this->area = 0;
    }
    /**
     * Implementando o método calcularArea() definido na interface
     * IAreaCalculavel
     */
    public function calcularArea(): void
    {
        $this->area = $this->getAltura() * $this->getLargura();
        echo "A área desse quadrado é igual a : " . $this->area . "</br>";
    }
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }
    public function getAltura(): float
    {
        return $this->altura;
    }
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }
    public function getLargura(): float
    {

        return $this->largura;
    }
}