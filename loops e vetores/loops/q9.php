<?php
$soma = 0;
$num = -1;

while ($num != 0) {
    $num = readline("Digite um número: ");
    $soma += $num;
}

echo "Soma: $soma";
?>