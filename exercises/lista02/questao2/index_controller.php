<?php

function returnPost($element) {
    return $_POST[$element];
}

$nomes = ['', '', '', '', ''];

for($i = 1; $i < 6; $i++) {
    $cont = $i - 1;
    $nomes[$cont] = returnPost("name$i");
}
$arquivo = fopen("txt/arquivo.txt", "w");

for($i = 0; $i < 5; $i++) {
    fwrite($arquivo, "$nomes[$i]\n");
}

fclose($arquivo);

// Read
$arquivo = fopen("txt/arquivo.txt", "r");

while(!feof($arquivo)) {
    $textoDaLinha = fgets($arquivo);
    echo "<h1>$textoDaLinha</h1><br>";
}
fclose($arquivo);
?>