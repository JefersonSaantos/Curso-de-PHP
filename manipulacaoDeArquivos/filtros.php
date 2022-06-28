<?php

require_once 'MeuFiltro.php';

$arquivosCursos = fopen('lista.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivosCursos, 'alura.partes');

echo fread($arquivosCursos, filesize('lista.txt'));