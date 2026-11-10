<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = 0;
$impares = 0;

foreach ($numeros as $numero) {
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Pares: $pares ";
echo "Impares: $impares";
?>