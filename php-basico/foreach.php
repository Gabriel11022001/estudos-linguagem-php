<?php

$nomes = array("Gabriel", "Maria", "Pedro", "Gustavo");
foreach ($nomes as $nome) {
    echo "Nome: ${nome}</br>";
}
$diasSemana = [
    "Segunda",
    "Terça",
    "Quarta",
    "Quinta",
    "Sexta",
    "Sábado"
];
echo "-----------------------------------------</br>";
foreach ($diasSemana as $dia) {
    echo "${dia}</br>";
}
$numeros = [
    1,
    2,
    55,
    33,
    87.87
];
foreach ($numeros as $chave => $numero) {
    echo "Número no índice ${chave} = ${numero}</br>";
}
$pessoas = [
    [
        "nome" => "Gabriel",
        "idade" => 21
    ],
    [
        "nome" => "Pedro",
        "idade" => 33
    ]
];
foreach ($pessoas as $pessoa) {
    echo "==============================================</br>";
    echo "Nome: ${pessoa["nome"]}</br>";
    echo "Idade: ${pessoa["idade"]}</br>";
    echo "==============================================</br>";
}
for ($contador = 0; $contador < 10; $contador++) {
    if ($contador == 7) {
        break;
    }
    echo "${contador}</br>";
}
for ($contador = 0; $contador < 10; $contador++) {
    if ($contador == 7) {
        continue;
    }
    echo $contador . "</br>";
}
$array = [
    "aa",
    "bb",
    "cc",
    "dd",
    "ee"
];
for ($i = 0; $i < count($array); $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "${array[$i]}</br>";
}
foreach ($array as $indice => $item) {
    if ($indice % 2 != 0) {
        continue;
    }
    echo "${item}</br>";
}