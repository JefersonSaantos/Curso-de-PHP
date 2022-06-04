<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '133.547.841-25' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '325.655.896-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

//Podemos também adicionar outros itens no final de uma lista de array associativo.

$contasCorrentes['033.652.632-98'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

//Exemplo 1

foreach($contasCorrentes as $conta) {
    echo $conta ['titular'] . PHP_EOL . $conta ['saldo'] . PHP_EOL;
}

//Exemplo 2

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}