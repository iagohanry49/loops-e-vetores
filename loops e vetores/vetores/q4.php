<?php
$notas = [7, 8, 6, 9, 10];
$soma = 0;

for ($i = 0; $i < 5; $i++) {
    $soma += $notas[$i];
}

$media = $soma / 5;

echo "Media: " . $media;
?>