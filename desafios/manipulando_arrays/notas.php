<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinícius' => 6
];

//rsort executa a função inversa do sort.
//ksort, executa a ordem alfabética na chave!

ksort($notas);
var_dump($notas);

//Verificação de um array de forma simplificada.
if(is_array($notas)) {
    echo 'Sim, é um array' . PHP_EOL;
}

//Verificação para saber qual tipo de chave do array.
//Se ela for do tipo inteiro ele retorna True, se não, False!
var_dump(array_is_list($notas));

//Verifica se existe determinada chave no array
echo 'Vinícius fez a prova: ' . PHP_EOL;
var_dump(array_key_exists('Vinícius', $notas));

//Para verificar se um valor existe dentro de um array e é diferente de "null", usamos a função "isset". Exemplo:

echo 'Vinícius fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Vinícius']));

//Podemos também fazer verificações de valores dentro do Array, com a função in_array.
echo 'Alguém tirou 10? ' . PHP_EOL;
var_dump(in_array(10, $notas));

echo 'Quem tirou 10? ' . PHP_EOL;
echo array_search(10, $notas);