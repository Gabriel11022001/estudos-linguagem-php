<?php

/**
 * As interfaces são estruturas que são como contratos,
 * elas obrigam todos as classes que as implementam
 * a implementar seus métodos abstratos
 */
interface IAreaCalculavel
{
    /**
     * - As interfaces só possuem métodos abstratos
     * - Todos os métodos definidos nas interfaces são abstratos,
     * logo, é desnecessário eu colocar a palavra abstract antes da palavra function
     * - Todos os métodos definidos nas interfaces são públicos, logo, é desnecessário
     * eu informar por meio da palavra resercvada "public" que o método é público
     */
    function calcularArea(): void;
}