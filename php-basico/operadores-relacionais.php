<?php

// == -> igual a
var_dump(12 == 12);
echo "</br>";
var_dump(12 == 11);
echo "</br>";
var_dump(12 == "12");
echo "</br>";
// === -> estritamente idêntico
var_dump(12 === 12);
echo "</br>";
var_dump(12 === "12");
echo "</br>";
// != diferente de
var_dump(12 != 11);
echo "</br>";
var_dump(12 != 12);
echo "</br>";
// > maior que
var_dump(12 > 11);
echo "</br>";
var_dump(12 > 12);
echo "</br>";
// < menor que
var_dump(12 < 13);
echo "</br>";
var_dump(12 < 11);
echo "</br>";
// >= maior ou igual
var_dump(123 >= 123);
echo "</br>";
var_dump(123 >= 132);
echo "</br>";
// <= menor ou igual
var_dump(123 <= 123);
echo "</br>";
var_dump(123 <= 111);
echo "</br>";
$idade = 18;
if ($idade >= 18) {
    echo "É de maior!</<br>";
} else {
    echo "Não é de maior!</br>";
}