<?php

/**
 * Uma classe "final" não pode ser herdada, mesmo que a classe não seja final,
 * se eu definir que um método será final, então esse método em específico não
 * pode ser herdado
 */
final class ClasseFinal
{
    public function teste(): void
    {
        echo "Este método não será herdado!</br>";
    }
}