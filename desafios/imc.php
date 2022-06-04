<?php

$peso = 65;
$altura = 1.70;
$imc = $peso / ($altura * 2);

echo "Seu IMC é $imc" . PHP_EOL;

if($imc < 18.5){
    echo "Você stá abaixo do peso";
} elseif($imc >= 18.5 && $imc <= 24.9){
    echo "Seu IMC está normal";
} elseif($imc > 25 && $imc <= 29.9) {
    echo "Você está com sobrepeso";
} else {
    echo "Você está obeso";
}