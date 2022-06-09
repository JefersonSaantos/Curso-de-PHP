<?php

/*$alunos2021 = [
    0 => 'Vinícius',
    1 => 'João',
    2 => 'Ana',
    3 => 'Roberto',
    4 => 'Maria'
];

$novosAlunos = [
    5 => 'Patricia',
    6 => 'Nico',
    7 => 'Kilderson',
    8 => 'Daiane'
];

$alunos2022 = $alunos2021 + $novosAlunos;

var_dump($alunos2022);*/

$alunos2021 = [
    'Vinícius',
    'João',
    'Ana',
    'Roberto',
    'Maria'
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);
//$alunos2022 = [...$alunos2021, ...$novosAlunos]; Operador de Unpacking.

array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';
array_unshift($alunos2022, 'Stephane', 'Rafaela');

echo array_shift($alunos2022) . PHP_EOL; //Remove no início.
echo array_pop($alunos2022) . PHP_EOL; //Remove no final.

var_dump($alunos2022);