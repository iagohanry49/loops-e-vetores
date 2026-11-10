<?php
$numeros = [10, 25, 8, 40, 15, 30, 40, 5, 20, 35];

$maior = $numeros[0];
$segundo = null;

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $segundo = $maior;
        $maior = $numero;
    } elseif ($numero < $maior && ($segundo === null || $numero > $segundo)) {
        $segundo = $numero;
    }
}

echo "Segundo maior: " . $segundo;
?>