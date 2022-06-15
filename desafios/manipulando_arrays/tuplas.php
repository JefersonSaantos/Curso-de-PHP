<?php

$dados = [
    'nome' => 'Vinícius',
    'nota' => 10,
    'idade' => 24];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; //Função List.

//extract($dados); TRANSFORMA OS AS CHAVES EM VARIÁVEIS.
//var_dump(compact('nome', 'nota', 'idade'); TRANSFORMA VARIÁVEIS EM UM ARRAY.

var_dump($nome, $nota, $idade);