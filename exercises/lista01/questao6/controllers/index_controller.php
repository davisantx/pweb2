<?php


function returnPost($element) {
    return $_POST[$element];
}

$salarioFixo = returnPost('salarioFixo');

$valorTotalApuradoEmVendas = returnPost('valorTotal');

$comissao = $valorTotalApuradoEmVendas * 0.04;

$salarioFinal = $salarioFixo + $comissao;

echo "Comissão: $comissao, Salario final: $salarioFinal";

?>