<?php

/*$array = [
    1 => 'a', 
    '1' => 'b', //Strings com tipos numéricos serão convertidas para Inteiro.
    1.5 => 'c', //Números tipo Float, terão o numero após a vírgula ignorado.
    true => 'd' //Booleanos tipo True, retornam 1. False, retornam 0.
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}*/

$carros = [
    'LMS-2232' => [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}
