<?php

$curso = "\nDesign Patterns PHP II: Boas Práticas de programação";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);

//Utilizando Flags: FILE_APPEND, adiciona o conteúdo ao final do arquivo sem sobrescrevê-lo.
//Obs: Caso necessário utilizar mais de uma Flag, utilizar o operador Binário do PHP "|" para concatenar(...)
// Exemplo: FILE_APPEND | FILE_TEXT.