<?php

function returnPost($element) {
    return $_POST[$element];
}

$matricula = returnPost('matricula');
$primeiraNota = returnPost('primeiraNota');
$segundaNota = returnPost('segundaNota');
$terceiraNota = returnPost('terceiraNota');
$mediaDosExercicios = returnPost('mediaDeExercicios');


$mediaDeAproveitamento = ($primeiraNota + $segundaNota * 2 + $terceiraNota * 3 + $mediaDosExercicios) / 7;
$conceito = '';
$estado = '';

if($mediaDeAproveitamento >= 9.0) {
    $conceito = 'A';
    $estado = 'APROVADO';
}elseif($mediaDeAproveitamento >= 7.5) {
    $conceito = 'B';
    $estado = 'APROVADO';
}elseif($mediaDeAproveitamento >= 6.0) {
    $conceito = 'C';
    $estado = 'APROVADO';
}elseif($mediaDeAproveitamento >= 4.0) {
    $conceito = 'D';
    $estado = 'REPROVADO';
}else {
    $conceito = 'E';
    $estado = 'REPROVADO';
}

$mediaDeAproveitamentoValorArredondado = round($mediaDeAproveitamento, 2);

echo "<h1> Número de matricula: $matricula, <br> Primeira nota: $primeiraNota, <br>SegundaNota: $segundaNota, <br>Terceira nota: $terceiraNota, <br>Média dos exercícios: $mediaDosExercicios, <br> Média de aproveitamento: $mediaDeAproveitamentoValorArredondado, <br> Conceito: $conceito, <br> Estado: $estado </h1>"

?>