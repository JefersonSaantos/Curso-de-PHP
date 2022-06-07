<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinícius' => 6
];

//rsort executa a função inversa do sort.
//ksort, executa a ordem alfabética na chave!

ksort($notas);
var_dump($notas);