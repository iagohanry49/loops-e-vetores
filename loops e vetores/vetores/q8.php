<?php
$numeros = [12, 5, 30, 8, 2, 45, 17, 9, 20, 3];

$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }

    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "Maior: $maior ";
echo "Menor: $menor";
?>