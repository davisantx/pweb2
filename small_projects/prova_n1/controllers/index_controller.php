<?php

function returnPost($element) {
    return $_POST[$element];
}

$nome = returnPost('nome');
$nota1 = returnPost('nota1');
$nota2 = returnPost('nota2');
$media = ($nota1 + $nota2) / 2;
$situacaoDoAluno = '';
$fichaDoAluno = '';

if($media >= 6) {
    $situacaoDoAluno = 'APROVADO';
}elseif($media >= 3) {
    $situacaoDoAluno = 'AF';
}else {
    $situacaoDoAluno = 'REPROVADO';
}

$fichaDoAluno = "O aluno $nome obteve média $media e está $situacaoDoAluno";


$arquivo = fopen('file.txt', 'a');
fwrite($arquivo, "$fichaDoAluno\n");

fclose($arquivo);


if($media <= 10) {
    echo "$fichaDoAluno";
}else {
    echo "Os valores inseridos geram uma nota maior que 10, provavelmente alguma das duas notas está com valor incorreto!";
    echo "Ademais, considerando esta situação, veja como fica a situação do aluno: ";
    echo "$fichaDoAluno";
}

?>