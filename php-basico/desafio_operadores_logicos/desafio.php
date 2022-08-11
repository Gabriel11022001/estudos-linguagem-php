<?php

$trabalhoSegundaDeuCerto = $_POST["trabalho_segunda_deu_certo"];
$trabalhoTercaDeuCerto = $_POST["trabalho_terca_deu_certo"];
if ($trabalhoSegundaDeuCerto && $trabalhoTercaDeuCerto) {
    echo "Opa, vamos tomar sorvete e comprara  televisão de 40 polegadas!</br>";
} else if ($trabalhoTercaDeuCerto || $trabalhoSegundaDeuCerto) {
    echo "Nós só vamos sair para tomar sorvete!</br>";
} else {
    echo "Nós vamos finar em casa mesmo :(</br>";
}