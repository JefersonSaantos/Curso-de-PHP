<?php

// <?= é o mesmo que <?php echo. Uma melhor sintaxe!

require_once 'contas-correntes.php';
require_once 'funcoes.php';

$contasCorrentes['133.547.841-25'] = sacar($contasCorrentes['133.547.841-25'], 500);
$contasCorrentes['325.655.896-12'] = sacar($contasCorrentes['325.655.896-12'], 100);
$contasCorrentes['123.456.789-10'] = depositar ($contasCorrentes['123.456.789-10'], 200);

titularComLetrasMaiusculas($contasCorrentes['048.658.985-80']);

unset ($contasCorrentes ['048.658.985-80']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>