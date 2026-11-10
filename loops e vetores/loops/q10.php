<?php
$secreto = 7;
$num = 0;

while ($num != $secreto) {
    $num = readline("Tente adivinhar: ");

    if ($num > $secreto) {
        echo "O número é menor.\n";
    } elseif ($num < $secreto) {
        echo "O número é maior.\n";
    }
}

echo "Parabéns! Você acertou!";
?>