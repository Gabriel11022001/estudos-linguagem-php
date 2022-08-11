<?php

$clientes = [
    [
        "nome" => "Gabriel",
        "idade" => 21
    ],
    [
        "nome" => "Pedro",
        "idade" => 28
    ]
];
$funcionarios = [
    [
        "nome" => "Eduardo",
        "idade" => 22,
        "cargo" => "Desenvolvedor PHP Júnior"
    ],
    [
        "nome" => "Gustavo",
        "idade" => 34,
        "cargo" => "Desenvolvedor Java Júnior"
    ]
];
$pessoas[] = $clientes;
$pessoas[] = $funcionarios;
print_r($clientes);
echo "</br>";
print_r($funcionarios);
echo "</br>";
echo "<pre>";
print_r($pessoas);
echo "</pre>";
echo "</br>";
/**
 * A função array_merge(primeiro_array, segundo_array) realiza a junção de dois arrays
 */
$pessoas2 = array_merge($funcionarios, $clientes);
echo "<pre>";
print_r($pessoas2);
echo "</pre>";