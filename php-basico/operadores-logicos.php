<?php

// vai apresentar false
var_dump(!true);
echo "</br>";
// vai apresentar true
var_dump(!false);
echo "</br>";
// vai negar true que vai ficar false, depois vai negar false que vai ficar true
var_dump(!!true);
echo "</br>";
$numero = 12;
if ($numero == 12 && $numero > 10) {
    echo "Passou!</br>";
} else {
    echo "Não passou!</br>";
}
if ($numero > 12 || $numero < 13) {
    echo "Passou!</br>";
} else {
    echo "Não passou!</br>";
}
$temDinheiro = true;
$estaEnsolarado = true;
if ($temDinheiro == true && $estaEnsolarado == true) {
    echo "Você pode ir tomar sorvete!</br>";
} else {
    echo "Você não pode ir tomas sorvete!</br>";
}
/**
 * v && v -> v
 * v && f -> f
 * f && v -> f
 * f && f -> f
 * --------------------------
 * v || v -> v
 * v || f -> v
 * f || v -> v
 * f || f -> f
 */
