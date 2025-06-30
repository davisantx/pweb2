<?php

$arquivo = fopen('file.txt', 'r');

while(!feof($arquivo)) {
    $linha = fgets($arquivo);
    
    echo "$linha";
    echo "<br>";
}

fclose($arquivo);

?>