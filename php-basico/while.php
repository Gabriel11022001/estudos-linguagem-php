<?php

$produtos = [
    [
        "nome" => "Coca Cola de 2 litros",
        "preco" => 12,
        "categoria" => [
            "nome" => "Bebida"
        ]
    ],
    [
        "nome" => "Fanta Uva de 2 litros",
        "preco" => 9,
        "categoria" => [
            "nome" => "Bebida"
        ]
    ]
];
$contador = 0;
while ($contador < count($produtos)) {
    echo "=================================================</br>";
    echo "Nome do produto: " . $produtos[$contador]["nome"] . "</br>";
    echo "Preço: R$ " . $produtos[$contador]["preco"] . "</br>";
    echo "Categoria: " . $produtos[$contador]["categoria"]["nome"] . "</br>";
    $contador++;
}