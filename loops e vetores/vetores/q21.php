<?php
$nomes = ["Ana", "Pedro", "João", "Maria", "Lucas", "Carlos", "Paulo", "Julia", "Bruno", "Sofia"];

$notas = [8, 6, 9, 5, 7, 4, 10, 6, 8, 7];

$soma = 0;
$aprovados = 0;
$maior = $notas[0];
$melhorAluno = $nomes[0];

for ($i = 0; $i < 10; $i++) {
    $soma += $notas[$i];

    if ($notas[$i] >= 7) {
        $aprovados++;
    }

    if ($notas[$i] > $maior) {
        $maior = $notas[$i];
        $melhorAluno = $nomes[$i];
    }
}

$media = $soma / 10;

echo "Media da turma: $media ";
echo "Maior nota: $maior ";
echo "Melhor aluno: $melhorAluno ";
echo "Aprovados: $aprovados ";
echo "Reprovados: ";

for ($i = 0; $i < 10; $i++) {
    if ($notas[$i] < 7) {
        echo $nomes[$i] . " ";
    }
}
?>