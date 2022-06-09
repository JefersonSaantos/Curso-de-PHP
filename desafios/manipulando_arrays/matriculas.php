<?php

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

$alunos2022 = [...$alunos2021, ...$novosAlunos];

var_dump($alunos2022);

// OU

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