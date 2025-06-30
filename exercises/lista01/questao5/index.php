<!-- 5) Crie uma função em linguagem PHP que receba um único valor representando os segundos e o
converta para horas, minutos e segundos. -->

<?php


function retornaTempo($tempoEmSegundos) {
    $rodar = true;
    $segundos = $tempoEmSegundos;
    $tempo = [0, 0, 0];
    while($rodar) {
        if($segundos >= 3600) {
            while($segundos >= 3600) {
                $segundos -= 3600;
                $tempo[0] += 1;
            }
        }else if($segundos < 3600 && $segundos >= 60) {
            while($segundos >= 60) {
                $segundos -= 60;
                $tempo[1] += 1;
            }
        }else if($segundos < 60) {
            $tempo[2] = $segundos;
            $rodar = false;
        }else {
            $rodar = false;
        }
        
    }
    return $tempo;
}

// exemplo de uso da função

$valorSegundos = 3669;

$resultado = retornaTempo($valorSegundos);
$horas = $resultado[0];
$minutos = $resultado[1];
$segundos = $resultado[2];

echo "<h1>$valorSegundos segundos corresponde a: </h1>";
echo "<h1> Horas: $horas , Minutos: $minutos , Segundos: $segundos </h1>";

?>