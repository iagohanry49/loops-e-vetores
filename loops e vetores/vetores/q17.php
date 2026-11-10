<?php
$numeros = [8, 3, 10, 1, 6, 4, 9, 2, 7, 5];

for ($i = 0; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros) - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}

foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>