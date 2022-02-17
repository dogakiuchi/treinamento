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

printMessage("     CPF       | Holder  | Balance");
foreach ($contaCorrente as $cpf => $conta){
    ['holder'=> $titular, 'balance'=> $saldo] = $conta;
    printMessage("$cpf $titular $saldo");
}