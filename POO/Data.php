<?php

class Data
{
    private int $dia;
    private int $mes;
    private int $ano;

    public function __construct()
    {
        $this->dia = 1;
        $this->mes = 1;
        $this->ano = 1970;
    }
    public function definirData(int $dia, int $mes, int $ano)
    {
        switch ($mes) {
            case 1:
                if ($dia < 0 || $dia > 31) {
                    echo "Você não pode definir esse dia para o mês de Janeiro!</br>";
                    return;
                }
                if ($this->validarAno($ano) == false) {
                    return;
                }
                $this->dia = $dia;
                $this->ano = $ano;
                $this->mes = $mes;
                break;
            case 2:
                if ($dia < 0 || $dia > 28) {
                    echo "Você não pode definir esse dia para Fevereiro!</br>";
                    return;
                }
                if ($this->validarAno($ano) == false) {
                    return;
                }
                $this->dia = $dia;
                $this->mes = $mes;
                $this->ano = $ano;
                break;
            case 3:
                if ($dia < 0 || $dia > 31) {
                    echo "Você não pode definir esse dia para o mês de Março!</br>";
                    return;
                }
                if ($this->validarAno($ano) == false) {
                    return;
                }
                $this->dia = $dia;
                $this->mes = $mes;
                $this->ano = $ano;
                break;
            case 4:
                if ($dia < 0 || $dia > 30) {
                    echo "Você não pode definir esse dia para Abril!</br>";
                    return;
                }
                if ($this->validarAno($ano) == false) {
                    return;
                }
                $this->dia = $dia;
                $this->mes = $mes;
                $this->ano = $ano;
                break;
            default:
                echo "Não existe um mês representado por esse valor numérico!</br>";
        }
    }
    private function validarAno(int $ano): bool
    {
        if ($ano < 0) {
            echo "Ano inválido!</br>";
            return false;
        }
        return true;
    }
    public function apresentarData()
    {
        if ($this->dia < 10) {
            echo "0" . $this->dia . "/";
        } else {
            echo $this->dia . "/";
        }
        if ($this->mes < 10) {
            echo "0" . $this->dia . "/";
        } else {
            echo $this->dia . "/";
        }
        if ($this->ano < 10) {
            echo "0" . $this->ano . "</br>";
        } else {
            echo $this->ano . "</br>";
        }
    }
}