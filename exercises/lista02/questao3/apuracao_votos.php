<?php

// Read
$arquivo = fopen("txt/arquivo.txt", "r");


$votosCand1 = fgets($arquivo);
echo "<h1> Número de votos do candidato $votosCand1</h1><br>";
$votosCand2 = fgets($arquivo);
echo "<h1> Número de votos do candidato $votosCand2</h1><br>";

fclose($arquivo);

?>