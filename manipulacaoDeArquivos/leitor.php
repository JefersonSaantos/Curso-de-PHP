<?php

$arquivo = fopen('lista.txt', 'r');

//Ler o arquivo linha a linha. Indicado para ler arquivos grandes, mais de 128Mb.

/*while (!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}*/

$tamanhoDoArquivo = filesize('lista.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);