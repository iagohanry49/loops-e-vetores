<?php
$par = 0;
$impar = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $par += $i;
    } else {
        $impar += $i;
    }
}

echo "Soma dos pares: $par\n";
echo "Soma dos ímpares: $impar";
?>