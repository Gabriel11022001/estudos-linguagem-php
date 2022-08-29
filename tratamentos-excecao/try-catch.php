<?php

require_once "FaixaEtariaException.php";

use ExcecoesPersonalizadas\FaixaEtariaException;

try {
    $divisaoPorZero = 9 / 0;
    echo $divisaoPorZero . "</br>";
} catch (Throwable $e) {
    echo $e->getMessage() . "</br>";
}
try {
    throw new RuntimeException("Ocorreu uma exceção aqui!");
} catch (Exception $e) {
    echo $e->getMessage() . "</br>";
}
$idade = 17;
try {
    if ($idade < 18) {
        /**
         * Se o valor da variável $idade for menor que 18, será lançado uma
         * exceção e irá cair no bloco do catch, se não for lançado uma exceção,
         * será executado o código na linha 24
         */
        throw new Exception("Opa!! Você não pode entrar!");
    }
    echo "Você pode entrar!</br>";
} catch (Exception $e) {    
    echo $e->getMessage() . "</br>";
}
try {
    $div = 12 / 0;
} catch (DivisionByZeroError $e) {
    echo "Não é possível realizar uma divisão por 0!</br>";
    echo $e->getMessage() . "</br>";
} finally {
    echo "Vai continuar executando no finally!</br>"; 
}
echo "Aqui também vai continuar executando...</br>";
try {
    if ($idade < 18){
        throw new FaixaEtariaException("Idade inválida!");
    }
    echo "Idade válida!</br>";
} catch (FaixaEtariaException $e) {
    echo $e->getMessage() . "</br>";
}
function dividir(float $primeiroValor, float $segundoValor): float
{   
    if ($primeiroValor == 0 || $segundoValor == 0) {
        throw new DivisionByZeroError("Não é possível realizar divisão por 0!");
    }
    return $primeiroValor / $segundoValor;
}
try {
    // echo dividir(12, 0) . "</br>";
    echo dividir(12, 5) . "</br>";
} catch (DivisionByZeroError $e) {
    echo $e->getMessage() . "</br>";
}