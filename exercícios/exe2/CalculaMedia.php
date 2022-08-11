<?php

class CalculaMedia
{

    public static function calcularMedia(
        float $primeiraNota,
        float $segundaNota,
        float $terceiraNota
    ): float
    {
        return ($primeiraNota + $segundaNota + $terceiraNota) / 3;
    }
}