<!-- 4) Crie uma função PHP que retorne false se o número for par e true se o número for ímpar. -->
<?php

function eImpar($numero) {
    if($numero % 2 == 0) {
        return false;
    }else {
        return true;
    }
}

// exemplo de uso da função
$numeroTeste = 2;

$resultado = eImpar($numeroTeste);

if($resultado) {
    echo "O número $numeroTeste é impar";
}else {
    echo "O número $numeroTeste é par"; 
}

?>