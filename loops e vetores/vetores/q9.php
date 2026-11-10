<?php
$nomes = ["Ana", "Pedro", "João", "Maria", "Lucas", "Carlos", "Paulo", "Julia"];

$pesquisa = "Maria";
$encontrado = false;

foreach ($nomes as $nome) {
    if ($nome == $pesquisa) {
        $encontrado = true;
    }
}

if ($encontrado) {
    echo "Nome encontrado!";
} else {
    echo "Nome nao encontrado!";
}
?>