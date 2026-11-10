<?php
$total = 0;

for ($i = 1; $i <= 7; $i++) {
    $consumo = readline("Consumo do dia $i: ");
    $total += $consumo;
}

echo "Consumo total: $total litros";
?>