<!-- 3) Use a função da questão passada e lança o dado 100000 vezes, conte quantas vezes cada
número saiu. A probabilidade deu certo? Ou seja, a porcentagem de números foi próxima? -->

<?php

function jogaDado() {
    return rand(1, 6);
}

$numeros = [0, 0, 0, 0, 0, 0];


for($i = 0; $i < 100000; $i++) {
    $resultado = jogaDado();
    $numeros[$resultado - 1] = $numeros[$resultado - 1] + 1;
}

echo '<h1> QUANTIDADE DE VEZES EM QUE OS NÚMEROS DE 1 A 6 FORAM CORRESPONDENTES AOS VALORES RANDÔMICOS OBTIDOS PELA FUNÇÃO "jogaDado()": </h1>';

for($i = 0; $i < 6; $i++) {
    $indice = $i + 1;
    $valor = $numeros[$i];
    echo "$indice : $valor <br>";
}

echo '<br> A quantidade de vezes em que cada um dos números de 1 a 6 foram obtidos por meio da função "jogaDado()" é praticamente a mesma entre os números, tendo assim, de maneira geral, uma porcentagem de 16,6% para a incidência de cada número no retorno da função "jogaDado()"';

?>