<?php

class GerenciaCriptografia
{
    public static function criptografar(int &$dado): void
    {
        $dadosString = strval($dado);
        for ($contador = 0; $contador < strlen($dadosString); $contador++) {
            $dadosString[$contador] = $dadosString[$contador] + 1;
        }
        $primeiroDigito = $dadosString[0];
        $segundoDigito = $dadosString[1];
        $terceiroDigito = $dadosString[2];
        $quartoDigito = $dadosString[3];
        $dadosString[0] = $terceiroDigito;
        $dadosString[1] = $quartoDigito;
        $dadosString[2] = $primeiroDigito;
        $dadosString[3] = $segundoDigito;
        $dado =  intval($dadosString);
    }
    public static function descriptografar(int &$dado): void
    {
        $dadosString = strval($dado);
        $primeiroDigito = $dadosString[0];
        $segundoDigito = $dadosString[1];
        $terceiroDigito = $dadosString[2];
        $quartoDigito = $dadosString[3];
        $dadosString[0] = $terceiroDigito;
        $dadosString[1] = $quartoDigito;
        $dadosString[2] = $primeiroDigito;
        $dadosString[3] = $segundoDigito;
        for ($contador = 0; $contador < strlen($dadosString); $contador++) {
            $dadosString[$contador] = $dadosString[$contador] - 1;
        }
        $dado = intval($dadosString);
    }
}