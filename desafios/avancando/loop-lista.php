<?php

//Podemos usar echo count ($idadeList); para saber quantos ítens tem na lista.

$idadeList = [21, 23, 29, 35, 40, 41, 50];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}