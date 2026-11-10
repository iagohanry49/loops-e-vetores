<?php
for ($i = 1; $i <= 8; $i++) {
    $valor = readline("Valor da compra $i: ");

    if ($valor >= 300) {
        $frete = 0;
    } elseif ($valor >= 150) {
        $frete = 15;
    } else {
        $frete = 25;
    }

    echo "Pedido $i - Frete: R$ $frete\n";
}
?>