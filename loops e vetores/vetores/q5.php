<?php
$numeros = [2, 4, 6, 8, 10];

for ($i = 0; $i < count($numeros); $i++) {
    $numeros[$i] *= 2;
}

foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>