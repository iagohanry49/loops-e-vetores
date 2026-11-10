<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($i = 1; $i <= 10; $i++) {
    $peso = readline("Peso do lote $i: ");

    if ($peso < 100) {
        $pequenos++;
    } elseif ($peso <= 200) {
        $medios++;
    } else {
        $grandes++;
    }
}

echo "Pequenos: $pequenos\n";
echo "Médios: $medios\n";
echo "Grandes: $grandes";
?>