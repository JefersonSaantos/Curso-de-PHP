<?php

$conta1 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$conta4 = [
    'titular' => 'Jeferson',
    'saldo' => 5000
];

$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];

for($i = 0; $i <count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL . $contasCorrentes[$i]['saldo'] . PHP_EOL; 
}