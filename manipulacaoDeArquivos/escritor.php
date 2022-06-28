<?php

$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\nDesign Patterns PHP II: Boas Práticas de programação";

fwrite($arquivo, $curso);

fclose($arquivo);

//Modo de abertura 'w' - write = Sobrescreve o texto, colocando o cursos no início do arquivo;
//Modo de abertura 'a' - append = Escreve no final do texto no final do arquivo.