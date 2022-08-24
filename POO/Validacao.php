<?php

trait Validacao
{
    public function validarString(string $texto): bool
    {   
        if (isset($texto) && $texto != "") {
            return true;
        }
        return false;
    }
    public function validarMelhor(string $texto): bool
    {
        if (empty($texto)) {
            return false;
        }
        return true;
    }
}