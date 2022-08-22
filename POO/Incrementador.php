<?php

class Incrementador
{
    private static int $valor = 0;
    private int $valor2 = 0;

    /**
     * É possível um método que não é estático acessar um atributo estático
     * ou um método estátio, mas o contrário não é possível
     */
    public function incrementar(): void
    {
        Incrementador::$valor++;
        echo "Valor: " . Incrementador::$valor . "</br>";
    }
    /**
     * Não é possível um método estático acessar um atributo de classe
     * ou então um método de classe
     */
    public static function acessarValor2(): void
    {
        // echo $this->valor2;
    }
    public static function incrementar2(): void
    {
        self::$valor++;
        echo self::$valor . "</br>";
    }
    public function getValor(): int
    {
        /**
         * Para acessar um membro estático em um método 
         * não estático, eu preciso acessa utilizando o self::$nomeDoMembro
         */
        return self::$valor;
    }
}