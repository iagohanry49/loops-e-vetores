<?php
$numeros = [3, 5, 3, 8, 5, 3, 9, 8, 5, 2];
$frequencia = [];

foreach ($numeros as $numero) {
    if (isset($frequencia[$numero])) {
        $frequencia[$numero]++;
    } else {
        $frequencia[$numero] = 1;
    }
}

foreach ($frequencia as $numero => $quantidade) {
    echo "$numero aparece $quantidade vezes ";
}
?>