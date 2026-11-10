<?php
$acima = 0;

for ($i = 1; $i <= 12; $i++) {
    $faltas = readline("Faltas do aluno $i: ");

    if ($faltas <= 15) {
        echo "Dentro do limite\n";
    } else {
        echo "Acima do limite\n";
        $acima++;
    }
}

echo "Alunos acima do limite: $acima";
?>