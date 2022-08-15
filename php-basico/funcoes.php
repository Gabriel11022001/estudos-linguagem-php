<?php

function imprimirMensagem()
{
    echo "Olá Mundo!</br>";
}
imprimirMensagem();
imprimirMensagem();
imprimirMensagem();
function somar(float $primeiroValor, float $segundoValor): float
{
    return $primeiroValor + $segundoValor;
}
echo "Soma: " . somar(12, 44.76) . "</br>";
function obterMensagem(): string
{
    return "Olá, seja bem vindo(a)</br>";
}
echo obterMensagem();
$mensagem = obterMensagem();
echo "A mensagem retornada foi: " . $mensagem;
function alterarValorNumero(int &$numero)
{
    $numero = $numero + 12;
}
$numero = 12;
echo "Número: ${numero}</br>";
alterarValorNumero($numero);
echo "Número após o mesmo ter sido passado como parâmetro por referência: ${numero}</br>";
function verificarSePalavraEPalindromo(string $palavra): bool
{
    $palavra = strtolower($palavra);
    $ehPalindromo = false;
    $indiceInicial = 0;
    for ($i = strlen($palavra) - 1; $i >= 0; $i--) {
        if ($palavra[$i] == $palavra[$indiceInicial]) {
            $ehPalindromo = true;
        } else {
            $ehPalindromo = false;
        }
        $indiceInicial++;
    }
    return $ehPalindromo;
}
$palavra = "ovo";
if (verificarSePalavraEPalindromo($palavra)) {
    echo $palavra . " é um palindromo!</br>";
} else {
    echo $palavra . " não é um palindromo!</br>";
}
function nomes(...$nomes)
{
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";
}
nomes("Gabriel", "Matheus", "Pedro", "Gustavo", "Eduardo");
function somarVariosNumeros(...$numeros): float
{
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}
$soma = somarVariosNumeros(1, 44, 43.87, 22, 98.76);
echo "Soma: " . $soma . "</br>";
function apresentarCliente(string $nomeCliente, $nome = "senhor(a)")
{
    echo "Bem vindo " . $nome . " cliente " . $nomeCliente . "</br>";
}
apresentarCliente( "Gabriel");