<?php

/* Desafio: Imprimir na tela os números ímpares de 0 a 100 */

for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2) {
        echo $contador . PHP_EOL;
    }
}