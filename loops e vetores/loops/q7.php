<?php
$i = 1;
$soma = 0;

while ($i <= 5) {
    $nota = readline("Digite a nota do aluno $i: ");
    $soma += $nota;
    $i++;
}

echo "Soma das notas: $soma";
?>