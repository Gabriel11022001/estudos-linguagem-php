<?php

require_once "ClasseFinal.php";

/**
 * Uma classe não pode herdar de uma classe final
 */
class ClasseTentaHerdarClasseFinal extends ClasseFinal
{
    /**
     * O método teste2() não poderia ser herdado
     * pois eu defini que ele será final
     */
    public final function teste2(): void
    {
        parent::teste();
    }
}