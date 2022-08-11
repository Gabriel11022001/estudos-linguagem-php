<?php

class Retangulo
{

    private float $altura;
    private float $largura;
    private float $area;

    public function __construct(
        float $altura,
        float $largura
    )
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
    }
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }
    public function getLargura(): float
    {
        return $this->largura;
    }
    public function getAltura(): float
    {
        return $this->largura;
    }
    public function calcularArea(): void
    {
        $area = ($this->getLargura() * $this->getAltura()) / 2;
        $this->area = $area;
        echo "Área calculada com sucesso!</br>";
    }
    public function getArea(): float
    {
        return $this->area;
    }
    public function __toString(): string
    {
       return "[ </br> altura:" . $this->getAltura() . " </br> largura: " . $this->getLargura() . " </br> area: " . $this->getArea() . "</br> ]";
    }
}