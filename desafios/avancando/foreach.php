<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    13354784125 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    32565589612 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach($contasCorrentes as $conta) {
    echo $conta ['titular'] . PHP_EOL . $conta ['saldo'] . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}