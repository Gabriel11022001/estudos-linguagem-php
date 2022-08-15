<?php

$numero = 1;
for ($contador = 0; $contador < 10; $contador++) {
    echo "${numero}</br>";
    $numero++;
}
$nomes = array("Gabriel", "Maria", "Pedro", "Maria Fernanda");
echo "=================================</br>";
for ($contador = 0; $contador < count($nomes); $contador++) {
    echo "${nomes[$contador]}</br>";
}
echo "=================================</br>";
$clientes = [
    [
        "nome" => "Gabriel"
    ],
    [
        "nome" => "Pedro"
    ],
    [
        "nome" => "Maria"
    ]
];
for ($contador = 0; $contador < count($clientes); $contador++) {
    echo $clientes[$contador]["nome"] . "</br>";
}
echo "=================================</br>";
for ($contador = 10; $contador > 0; $contador--) {
    echo $contador . "</br>";
}
for ($contador = 0; $contador < 5; $contador++) {
    for ($contadorInterno = 0; $contadorInterno < ($contador + 1); $contadorInterno++) {
        echo "#";
    }
    echo "</br>";
}