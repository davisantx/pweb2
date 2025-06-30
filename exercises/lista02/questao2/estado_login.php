<?php

function returnPost($element)
{
    return $_POST[$element];
}

$nomeDeUsuarioLogin = returnPost('nome');
$senhaDeUsuarioLogin = returnPost('senha');
// Read
$arquivo = fopen("txt/arquivo.txt", "r");


if ("$nomeDeUsuarioLogin\n" == fgets($arquivo) && "$senhaDeUsuarioLogin\n" == fgets($arquivo)) {
    echo "Boas vindas $nomeDeUsuarioLogin";
} else {
    echo "ERRO!";
}

fclose($arquivo);
?>