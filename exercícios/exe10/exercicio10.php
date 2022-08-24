<?php

$valores = [1, 3, 5, 7, 9];
$diferencasValores = [];
$primeiraRazao = $valores[1] - $valores[0];
$possuiRazaoDiferenteDaInicial = false;
for ($contador = 2; $contador < count($valores); $contador++) {
    $diferencasValores[] = $valores[$contador] - $valores[$contador - 1];
}
foreach ($diferencasValores as $r) {
    if ($r != $primeiraRazao) {
        $possuiRazaoDiferenteDaInicial = true;
        break;
    }
}
if ($possuiRazaoDiferenteDaInicial) {
    echo "Esse array não representa uma progressão aritmética!</br>";
} else {
    echo "Essa array representa uma progressão aritmética!</br>";
}