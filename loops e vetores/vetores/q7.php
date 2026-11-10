<?php
$numeros = [2, 5, 7];

foreach ($numeros as $numero) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . " ";
    }
}
?>