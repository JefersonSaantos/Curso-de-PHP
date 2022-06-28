<?php

$diretorioAtual = dir ('.');

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}