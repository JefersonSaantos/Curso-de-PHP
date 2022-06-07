<?php

include ('contas-correntes.php');
include ('funcoes.php');

$contasCorrentes['133.547.841-25'] = sacar($contasCorrentes['133.547.841-25'], 500);
$contasCorrentes['325.655.896-12'] = sacar($contasCorrentes['325.655.896-12'], 100);

$contasCorrentes['123.456.789-10'] = depositar ($contasCorrentes['123.456.789-10'], 200);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' .$conta['saldo']);
}