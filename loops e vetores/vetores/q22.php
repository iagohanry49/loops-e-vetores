<?php
$vetor1 = [1, 2, 3, 4, 5, 6];
$vetor2 = [3, 4, 5, 7, 8, 9];

$iguais = [];

foreach ($vetor1 as $numero) {
    foreach ($vetor2 as $valor) {
        if ($numero == $valor) {
            $existe = false;

            foreach ($iguais as $item) {
                if ($item == $numero) {
                    $existe = true;
                }
            }

            if (!$existe) {
                $iguais[] = $numero;
            }
        }
    }
}

echo "Numeros em comum: ";

foreach ($iguais as $numero) {
    echo $numero . " ";
}
?>