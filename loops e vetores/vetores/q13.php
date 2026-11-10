<?php
$numeros = [2, 5, 2, 8, 5, 10, 8, 12];
$distintos = [];

foreach ($numeros as $numero) {
    $existe = false;

    foreach ($distintos as $valor) {
        if ($numero == $valor) {
            $existe = true;
        }
    }

    if (!$existe) {
        $distintos[] = $numero;
    }
}

foreach ($distintos as $numero) {
    echo $numero . " ";
}
?>