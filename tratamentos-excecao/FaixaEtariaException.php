<?php

namespace ExcecoesPersonalizadas;

use Exception;

class FaixaEtariaException extends Exception
{

    public function __construct(string $msg)
    {
        parent::__construct($msg);
    }
}