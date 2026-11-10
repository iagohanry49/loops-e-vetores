<?php
$total = 0;

for ($i = 1; $i <= 5; $i++) {
    $vendas = readline("Vendas do dia $i: ");
    $total += $vendas;
}

echo "Total vendido: $total";
?>