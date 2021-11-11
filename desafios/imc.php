<?php

$peso = 55.3;
$altura = 1.71;

//                $altura ** 2
$imc = $peso / ($altura * $altura);

if($imc >= 18.5 && $imc <= 24.9){
    echo "Seu IMC é de $imc, seu IMC está ideal";
} else if ($imc < 18.5){
    echo "Seu IMC é de $imc, seu IMC está abaixo da média";
} else {
    echo "Seu IMC é de $imc, seu IMC está acima da média";
}
