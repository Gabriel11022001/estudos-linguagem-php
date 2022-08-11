<?php

require_once "funcoes.php";

if (empty($_POST["primeiro_numero"]) || empty($_POST["segundo_numero"])) {
    echo "Preencha todos os campos obrigatório!</br>";
    echo "Clique aqui para acessar a página novamente <a href='exercicio1.html'>Link</a>";
    exit();
}
$primeiroValor = $_POST["primeiro_numero"];
$segundoValor = $_POST["segundo_numero"];
$soma = somar($primeiroValor, $segundoValor);
$subtracao = subtrair($primeiroValor, $segundoValor);
$divisao = dividir($primeiroValor, $segundoValor);
$multiplicacao = multiplicar($primeiroValor, $segundoValor);
echo "A soma entre ${primeiroValor} e ${segundoValor} é igual a ${soma}</br>";
echo "A subtração de ${primeiroValor} por ${segundoValor} é igual a ${subtracao}</br>";
echo "A multiplicação de ${primeiroValor} por ${segundoValor} é igual a ${multiplicacao}</br>";
echo "A divisão de ${primeiroValor} por ${segundoValor} é igual a ${divisao}</br>";
