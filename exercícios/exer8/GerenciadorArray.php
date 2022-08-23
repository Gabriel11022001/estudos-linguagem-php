<?php

class GerenciadorArray
{
    public static function verificarVetorEstaEmOrdemCrescenteDecrescenteOuNaoOrdenado(array $arr): string
    {
        $tipoOrdenacao = "";
        if (self::verificarSeVetorEstaOrdenadoDeFormaCrescente($arr)) {
            $tipoOrdenacao = "Crescente";
        } else if (self::verificarSeVetorEstaOrdenadoDeFormaDecrescente($arr)) {
            $tipoOrdenacao = "Decrescente";
        } else {
            $tipoOrdenacao = "O vetor não está ordenado!";
        }
        return $tipoOrdenacao;
    }
    /**
     * Método que retorna true caso todos os elementos do vetor sejam iguais
     * ou false caso os elementos não sejam iguais
     */
    private static function verificarSeTodosElementosSaoIguais(array $arr): bool
    {
        $todosElementosSaoIguais = true;
        for ($contador = 0; $contador < count($arr); $contador++) {
            if ($contador < count($arr) - 1) {
                if ($arr[$contador] != $arr[$contador + 1]) {
                    $todosElementosSaoIguais = false;
                    break;
                }
            }
        }
        return $todosElementosSaoIguais;
    }
    /**
     * Método que retorna true caso o vetor esteja ordenado de forma crescente
     * ou false caso o vetor não esteja ordenado de forma crescente
     */
    private static function verificarSeVetorEstaOrdenadoDeFormaCrescente(array $arr): bool
    {
        if (self::verificarSeTodosElementosSaoIguais($arr)) {
            return false;
        }
        $estaOrdenadoCrescente = false;
        for ($contador = 0; $contador < count($arr); $contador++) {
            if ($contador < count($arr) - 1) {
                if ($arr[$contador] <= $arr[$contador + 1]) {
                    $estaOrdenadoCrescente = true;
                } else {
                    $estaOrdenadoCrescente = false;
                    break;
                }
            }
        }
        return $estaOrdenadoCrescente;
    }
    /**
     * Método que retorna true caso o vetor esteja ordenado
     * de forma decrescente ou false caso o vator nãop estaja ordenado de forma
     * decrescente
     */
    private static function verificarSeVetorEstaOrdenadoDeFormaDecrescente(array $arr): bool
    {
        if (self::verificarSeTodosElementosSaoIguais($arr)) {
            return false;
        }
        $estaOrdenadoDecrescente = false;
        for ($contador = 0; $contador < count($arr); $contador++) {
            if ($contador < count($arr) - 1) {
                if ($arr[$contador] >= $arr[$contador + 1]) {
                    $estaOrdenadoDecrescente = true;
                } else {
                    $estaOrdenadoDecrescente = false;
                    break;
                }
            }
        }
        return $estaOrdenadoDecrescente;
    }
    public static function verificarQuantosValoresSaoMaioresQueX(array $arr, int $x): int
    {
        $quantidadeValores = 0;
        foreach ($arr as $item) {
            if ($item > $x) {
                $quantidadeValores++;
            }
        }
        return $quantidadeValores;
    }
    public static function verificarQuantosValoresSaoMenoresQueX(array $arr, int $x): int
    {
        $quantidadeValores = 0;
        foreach ($arr as $item) {
            if ($item < $x) {
                $quantidadeValores++;
            }
        }
        return $quantidadeValores;
    }
    public static function verificarQuantosValoresSaoIguaisAX(array $arr, int $x): int
    {
        $quantidadeValores = 0;
        foreach ($arr as $item) {
            if ($item == $x) {
                $quantidadeValores++;
            }
        }
        return $quantidadeValores;
    }
    public static function apresentarVetor(array $vetor): void
    {
        echo "=======================================</br>";
        foreach ($vetor as $elemento) {
            echo "<span style='color: red;'>" . $elemento . "</span></br>";
        }
        echo "=======================================</br>";
    }
}