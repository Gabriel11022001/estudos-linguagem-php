<?php

$clientes = [
    [
        "nome" => "Gabriel",
        "sexo" => "Masculino",
        "idade" => 21
    ],
    [
        "nome" => "Pedro",
        "sexo" => "Masculino",
        "idade" => 22
    ]
];
print_r($clientes);
echo "</br>";
echo "Nome do primeiro cliente: " . $clientes[0]["nome"] . "</br>";
echo "Nome do segundo cliente: " . $clientes[1]["nome"] . "</br>";
$clientes[2] = [
    "nome" => "Maria",
    "sexo" => "Feminino",
    "idade" => 21
];
print_r($clientes);
echo "</br>";
$clientes[] = [
    "nome" => "Gustavo",
    "sexo" => "Masculino",
    "idade" => 33
];
print_r($clientes);
echo "</br>";
$clientes[0]["nome"] = "Gabriel Rodrigues";
echo $clientes[0]["nome"] . "</br>";