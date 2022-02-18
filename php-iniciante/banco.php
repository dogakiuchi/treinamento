<?php

require_once 'funcoes.php';

$contaCorrente = [
    '999.756.110-23' => [
        'holder' => "Leandro",
        'balance' => 500
    ], 
    '123.456.789-10' => [
        'holder' => "Leonardo",
        'balance' => 300
    ],
    '987.654.321-10' => [
        'holder' => "Lucas",
        'balance' => 400
    ]
];

$contaCorrente['999.756.110-23'] = withdraw($contaCorrente['999.756.110-23'], 500);

$contaCorrente['987.654.321-10'] = deposit($contaCorrente['987.654.321-10'], 500);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
<h1>Accounts</h1>
<dl>
    <?php foreach ($contaCorrente as $cpf => $conta){ 
          ['holder'=> $titular, 'balance'=> $saldo] = $conta;
    ?>
    <dt>
        <h3> CPF: <?= $cpf; ?> - Holder: <?= $titular; ?></h3>
    </dt>
    <dd>
        <h3> Balance: <?= $saldo; ?> </h3>
    </dd>
    <?php } ?>
</dl>
</body>
</html>