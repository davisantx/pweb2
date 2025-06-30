<!-- 1) Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor entre eles. -->

<?php

function maiorNum($num1, $num2) {
    if($num1 > $num2) {
        return $num1;
    }else if($num1 == $num2) {
        return "nenhum, ambos tem o mesmo valor";
    }else {
        return $num2;
    }
}

// exemplo do uso da função:
$numero1 = 2;
$numero2 = 2;

$maiorNumero = maiorNum($numero1, $numero2);

echo "<h1> Tendo $numero1 e $numero2 o maior número é $maiorNumero </h1>";

?>