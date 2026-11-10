<?php
$valor = readline("Digite o valor do saque: ");

if ($valor > 0 && $valor % 2 == 0) {
    $notas10 = 0;
    $notas2 = 0;

    for ($i = 10; $i <= $valor; $i += 10) {
        if ($valor >= 10) {
            $valor -= 10;
            $notas10++;
        }
    }

    for ($i = 2; $i <= $valor; $i += 2) {
        $valor -= 2;
        $notas2++;
    }

    echo "Notas de R$ 10: $notas10\n";
    echo "Notas de R$ 2: $notas2";
} else {
    echo "Saque não pode ser realizado com valor exato.";
}
?>