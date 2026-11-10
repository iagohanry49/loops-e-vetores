<?php
$modelos = readline("Quantidade de modelos: ");
$testes = readline("Quantidade de testes por modelo: ");

$maiorMedia = -1;
$melhorModelo = 0;

for ($i = 1; $i <= $modelos; $i++) {
    $soma = 0;

    for ($j = 1; $j <= $testes; $j++) {
        $nota = readline("Nota do modelo $i no teste $j: ");
        $soma += $nota;

        if ($nota < 50) {
            echo "Desempenho baixo\n";
        } elseif ($nota < 80) {
            echo "Desempenho moderado\n";
        } else {
            echo "Desempenho alto\n";
        }
    }

    $media = $soma / $testes;

    echo "Média do modelo $i: $media\n";

    if ($media > $maiorMedia) {
        $maiorMedia = $media;
        $melhorModelo = $i;
    }
}

echo "Melhor modelo: $melhorModelo\n";
echo "Maior média: $maiorMedia";
?>