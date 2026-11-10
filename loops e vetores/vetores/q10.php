<?php
$notas = [7, 8, 5, 9, 6, 10, 4, 8];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$media = $soma / count($notas);

echo "Media: $media ";
echo "Notas acima da media: ";

foreach ($notas as $nota) {
    if ($nota > $media) {
        echo $nota . " ";
    }
}
?>