<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function sacar (array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar (array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem ("Você não pode depositar um saldo negativo!");
    }
    
    return $conta;
}

function titularComLetrasMaiusculas (array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta (array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $titular / Saldo: $saldo</li>";
}