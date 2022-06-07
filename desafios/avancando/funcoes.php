<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
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