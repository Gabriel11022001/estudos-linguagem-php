<?php

if (12 > 10) {
    echo "Verdadeiro!</br>";
} else {
    echo "Falso!</br>";
}
$nome = "Gabriel Rodrigues dos Santos";
if ($nome == "Gabriel Rodrigues") {
    echo "Meu nome é igual a Gabriel Rodrigues dos Santos!</br>";
} else {
    echo "Meu nome é diferente de Gabriel Rodrigues dos Santos!</br>";
}
$nota1 = 8.5;
$nota2 = 1;
$media = ($nota1 + $nota2) / 2;
echo "Sua média é: ${media} e você está ";
if ($media >= 5) {
    echo "aprovado!</br>";
} else {
    echo "reprovado!</br>";
}
$numero = 12;
if ($numero > 12) {
    echo "Número é maior que 12!</br>";
} else if ($numero < 12) {
    echo "Número é menor que 12!</<br>>";
} else {
    echo "Número é igual a 12!</br>";
}