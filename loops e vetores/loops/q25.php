<?php
$soma = 0;
$maior = -INF;

for ($i = 1; $i <= 7; $i++) {
    $temp = readline("Temperatura do dia $i: ");
    $soma += $temp;

    if ($temp > $maior) {
        $maior = $temp;
    }
}

$media = $soma / 7;

echo "Média: $media\n";
echo "Maior temperatura: $maior";
?>S