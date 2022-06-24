<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$vinicius = new Titular (new CPF ('048.814.072-68'), 'Jeferson Santos');
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo "Saldo Atual: R$ " . $primeiraConta->recuperaSaldo() . PHP_EOL;
echo "CPF nº: " . $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Titular: " . $primeiraConta->recuperaNomeTitular() . PHP_EOL;

$patricia = new Titular (new CPF ('658.652.632-50'), 'Letchubekis');
$segundaConta = new Conta ($patricia);
var_dump($segundaConta);

$outra = new Conta (new Titular(new CPF ('123.456.789-10'), 'abcdefg'));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();