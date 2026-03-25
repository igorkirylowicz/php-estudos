<?php

/*
$nome = "Igor";
$idade = 26;
$log = true;

if ($log == true) {
    echo "Bem vindo Igor";
}
*/
/*
$produto = "Tenis";
$quantidade = 5;

if ($quantidade == 0) {
    echo "Produto não disponível";
} else {
    echo "Produto disponível";
}
*/

$estoque = 10;

for ($i = $estoque; $i >= 0; $i--) {
    $estoque--;
    if ($estoque == 0) {
        echo "Produto esgotado";
    }
}

