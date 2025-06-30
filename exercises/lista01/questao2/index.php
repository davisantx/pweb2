<!-- 2) Crie uma função em linguagem PHP chamada jogaDado() que retorna através de sorteio,
procurar na internet como gerar números aleatórios em PHP), um número entre 1 e 6. -->

<?php

function jogaDado() {
    return rand(1, 6);
}

// exemplo do uso da função:

$valorDoDadoJogado = jogaDado();

echo "<h1> Valor randômico do dado: $valorDoDadoJogado </h1>";

?>