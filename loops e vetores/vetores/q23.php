<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8];

$ultimo = $numeros[count($numeros) - 1];

for ($i = count($numeros) - 1; $i > 0; $i--) {
    $numeros[$i] = $numeros[$i - 1];
}

$numeros[0] = $ultimo;

foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>