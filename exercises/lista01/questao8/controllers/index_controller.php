<?php

function returnPost($element) {
    return $_POST[$element];
}

$tipo = returnPost('tipo');
$valorInicial = returnPost('valorInicial');
$quantidadeDeMesesDoInvestimento = returnPost('quantidadeDeMesesDoInvestimento');
$rendimentoTotal = $valorInicial;


if($tipo == 'Poupança') {
    for($i = 0; $i < $quantidadeDeMesesDoInvestimento; $i++) {
        $rendimentoTotal += $rendimentoTotal * 0.03;
    }
    echo "<h1> Rendimento total durante o período investido: $rendimentoTotal</h1>";
}else if ($tipo == 'fundosDeRendaFixa') {
    for($i = 0; $i < $quantidadeDeMesesDoInvestimento; $i++) {
        $rendimentoTotal += $rendimentoTotal * 0.04;
    }
    echo "<h1> Rendimento total durante o período investido: $rendimentoTotal</h1>";
}



?>