<?php

function returnPost($element) {
    return $_POST[$element];
}

$nomes = ['', '', '', '', ''];
// recebe os nomes inseridos
for($i = 0; $i < 5; $i++) {
    $cont = $i + 1;
    $nomes[$i] = returnPost("name$cont");
}
// Abre o arquivo no modo de escrita

$arquivo = fopen("txt/arquivo.txt", "w");

// Escreve no arquivo.txt

for($i = 0; $i < 5; $i++) {
    fwrite($arquivo, "$nomes[$i]\n");
}

// Tira o acesso ao arquivo no modo de escrita
fclose($arquivo);

// Read
$arquivo = fopen("txt/arquivo.txt", "r");

while(!feof($arquivo)) {
    $textoDaLinha = fgets($arquivo);
    echo "<h1> $textoDaLinha</h1><br>";
}

fclose($arquivo);
?>