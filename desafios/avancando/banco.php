<?php

function sacar ($conta, $valorASacar)
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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

$contasCorrentes['133.547.841-25'] = sacar($contasCorrentes['133.547.841-25'], 500);
$contasCorrentes['325.655.896-12'] = sacar($contasCorrentes['325.655.896-12'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' .$conta['saldo']);
}