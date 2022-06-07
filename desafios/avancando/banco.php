<?php

require_once 'contas-correntes.php';
require_once 'funcoes.php';

$contasCorrentes['133.547.841-25'] = sacar($contasCorrentes['133.547.841-25'], 500);
$contasCorrentes['325.655.896-12'] = sacar($contasCorrentes['325.655.896-12'], 100);

$contasCorrentes['123.456.789-10'] = depositar ($contasCorrentes['123.456.789-10'], 200);

titularComLetrasMaiusculas($contasCorrentes['048.658.985-80']);

foreach ($contasCorrentes as $cpf => $conta) {

//Uso da função List para um array com variáveis separadas.    
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeMensagem ( "$cpf $titular $saldo" ) ;
}