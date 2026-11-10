<?php
$numeros = [2, 3, 4, 5, 6, 7, 8, 9, 11, 13];

foreach ($numeros as $numero) {
    $primo = true;

    if ($numero < 2) {
        $primo = false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        echo $numero . " ";
    }
}
?>