<?php
$num = readline("Digite um número: ");
$fatorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $fatorial *= $i;
}

echo "Fatorial: $fatorial";
?>