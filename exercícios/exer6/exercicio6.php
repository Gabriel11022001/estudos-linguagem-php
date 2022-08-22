<?php

$vetor = [12.65, 66, 77.87, 91.65, 77.87, 22.54, 87.76];
$soma = 0;
foreach ($vetor as $numero) {
    $soma += $numero;
    echo " --> " . $numero . "</br>";
}
echo "Soma: " . $soma . "</br>";