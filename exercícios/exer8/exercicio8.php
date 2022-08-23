<?php

require_once "GerenciadorArray.php";

$arr = [12, 13, 14, 14, 14, 188, 1291, 3000, 4000];
$numero = 14;
echo "Ordenação do array: " . GerenciadorArray::verificarVetorEstaEmOrdemCrescenteDecrescenteOuNaoOrdenado($arr) . "</br>";
echo "Quantidade de vezes que o elemento " . $numero . " aparace no vetor: " . GerenciadorArray::verificarQuantosValoresSaoIguaisAX($arr, $numero) . "</br>";
echo "Quantidade de elementos do vetor que são maiores que " . $numero . ": " . GerenciadorArray::verificarQuantosValoresSaoMaioresQueX($arr, $numero) . "</br>";
echo "Quantidade de elementos do vetor que são menores que " . $numero . ": " . GerenciadorArray::verificarQuantosValoresSaoMenoresQueX($arr, $numero) . "</br>";
GerenciadorArray::apresentarVetor($arr);